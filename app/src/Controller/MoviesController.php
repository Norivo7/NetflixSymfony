<?php

namespace App\Controller;

use App\Entity\User;
use App\Helpers\LogicHelper;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\ProfileRepository;
use App\Repository\UserRepository;
use App\Repository\VideoRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MoviesController extends AbstractController
{
    private $userProfiles;

    public function __construct
    (
        private MovieRepository       $movieRepository,
        private CategoryRepository    $categoryRepository,
        private ProfileRepository     $profileRepository,
        private RequestStack          $requestStack,
        private VideoRepository       $videoRepository,
        private ManagerRegistry       $doctrine,
        private LogicHelper           $logicHelper,
        private UserRepository        $userRepository,
        private RedirectionController $redirectionController
    )
    {
        $this->movieRepository = $movieRepository;
        $this->categoryRepository = $categoryRepository;
        $this->profileRepository = $profileRepository;
        $this->requestStack = $requestStack;
        $this->videoRepository = $videoRepository;
        $this->doctrine = $doctrine;
        $this->logicHelper = $logicHelper;
        $this->userRepository = $userRepository;
        $this->redirectionController = $redirectionController;
    }

    /**
     * @Route("/", name="home")
     */
    public function home(Request $request): Response
    {
        if ($request->getMethod() === 'POST' && $request->request->get('email') !== null) {
            $email = $request->request->get('email');
            return $this->redirectToRoute('app_register', [
                'email' => $email,
            ]);

        }
        $dropdownTitles = array(
            "Czym jest Netflix?",
            "Ile kosztuje korzystanie z serwisu Netflix?",
            "Gdzie mogę oglądać?",
            "Jak zrezygnować z członkostwa?",
            "Jakie materiały mogę oglądać w serwisie Netflix?",
            "Czy Netflix jest odpowiedni dla dzieci?"
        );

        return $this->render(
            'base.html.twig', [
                'dropdownTitles' => $dropdownTitles,
            ]
        );
    }

    /**
     * @Route("/test", name="test")
     */
    public function test(): Response
    {
        return $this->render(
            'test.html.twig'
        );
    }

    /**
     * @Route("/browse", name="browse")
     */
    public function index(Request $request): Response
    {


        $subuser = $this->requestStack->getSession()->get('filter');
        if ($subuser !== null) {
            $subuserId = reset($subuser);
        } else return $this->redirectToRoute('chooseUser');

        $subuserFrontId = $request->get('id');
        $allSubusers = $this->profileRepository->findBy(array('subaccountOf' => $this->getUser()));
        if ($subuserId !== null && $subuserFrontId < count($allSubusers)) {
            return $this->render('movies/index.html.twig', [
                'controller_name' => 'MovieController',
                'profiles' => $this->logicHelper->getOtherSubusers($this->getUser()),
                'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Filmy'),$subuserId),
                'originals' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Eksluzywne'),$subuserId),
                'shows' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Seriale'),$subuserId),
                'userAvatar' => $this->profileRepository->find($subuserId)->getAvatar()
            ]);
        }
        $errorMessage = "404: Nie znaleziono użytkownika.";
        return $this->render('/error/error.html.twig', [
            'error' => $errorMessage,
        ]);
    }

    /**
     * @Route("/shows", name="shows")
     * @param Request $request
     * @return Response
     */
    public function shows(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }

        $subuserId = $this->logicHelper->getCurrentSubuserIdFromSession();
        $currentSubuser = $this->profileRepository->find($subuserId);
        if ($subuserId !== null) {
            $userAvatar = $currentSubuser->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherSubusers($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Seriale'),$subuserId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    /**
     * @Route("/profile", name="profile")
     * @return Response
     */
    public function profile(): Response
    {
        $currentUser = $this->getUser();
        $subuserId = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
            return $this->render(
                'user/profile.html.twig', [
                    'user' => $currentUser,
                    'profiles' => $this->profileRepository->findBy(array('subaccountOf' => $currentUser)),
                    'userAvatar' => $userAvatar,
                ]);
        }
        return $this->redirectToRoute('chooseUser');
    }

    /**
     * @Route("/subscription", name="subscription")
     * @return Response
     */
    public function subscription(): Response
    {
       $this->getUser();
        $subuserId = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
            return $this->render('user/subscription.html.twig', [
                'user' =>  $this->getUser(),
                'userAvatar' => $userAvatar,
            ]);
        }
        return $this->redirectToRoute('chooseUser');
    }

    /**
     * @Route("/browse/hide/{id}", name="hide")
     */
    public function hide($id, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $movie = $this->movieRepository->find($id);
        $movie->setActive(false);
        $entityManager->persist($movie);
        $entityManager->flush();

        return $this->redirectToRoute('browse');
    }

    /**
     * @Route("/show/{id}", name="show-one")
     */
    public function show($id): Response
    {
        $subuserId = $this->logicHelper->getCurrentSubuserIdFromSession();

        $liked = $this->movieRepository->getLikedMoviesBySubuser($subuserId);
        $movie = $this->movieRepository->find($id);
        $categories = $this->categoryRepository->getCategoryByMovie($movie->getTitle());
        $movieId = $movie->getId();



        if ($this->logicHelper->isMovieLikedByCurrentUser($movieId, $liked)) {
            return $this->render('movies/show.html.twig', [
                'liked' => 'yes',
                'movie' => $movie,
                'categories' => $categories
            ]);
        }
        return $this->render('movies/show.html.twig', [
            'movie' => $movie,
            'categories' => $categories
        ]);

    }

    /**
     * @Route("/watch/{id}", name="watch-one")
     */
    public function watch($id): Response
    {
        $episode = $this->videoRepository->find($id);
            return $this->render('movies/watch.html.twig', [
                'movie' => $episode,
            ]);
    }

    /**
     * @Route("/myList", name="myList")
     * @param Request $request
     * @return Response
     */
    public function myList(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $subuser = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());
        if ($subuser !== null) {
            $subuserId = $subuser->getId();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherSubusers($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getLikedMoviesBySubuser(($subuserId)),$subuserId),
                    'userAvatar' => $subuser->getAvatar(),
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    /**
     * @Route("/movies", name="movies")
     * @param Request $request
     * @return Response
     */
    public function movies(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }

        $subuser = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());

        if ($subuser !== null) {
            $subuserId = $subuser->getId();
            $userAvatar = $subuser->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherSubusers($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Filmy'),$subuserId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    /**
     * @Route("/new", name="new")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }

        $subuser = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());
        if ($subuser !== null) {

            $subuserId = $subuser->getId();
            $userAvatar = $subuser->getAvatar();
            return $this->render(

                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherSubusers($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->recentlyAdd(),$subuserId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    /**
     * @Route ("/like/{id}", name="like")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function like($id, Request $request): Response
    {
        $movie = $this->movieRepository->find($id);
        $currentSubuser = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());

        $movie->addLikedBy($currentSubuser);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($currentSubuser);
        $entityManager->flush();

        $route = $request->headers->get('referer');
        return $this->redirect($route);
    }


    /**
     * @Route ("/dislike/{id}", name="dislike")
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function dislike($id, Request $request): Response
    {
        $movie = $this->movieRepository->find($id);
        $currentSubuser = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());

        $movie->removeLikedBy($currentSubuser);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($currentSubuser);
        $entityManager->flush();

        $route = $request->headers->get('referer');
        return $this->redirect($route);
    }

    /**
     * @Route("/notif", name="notif")
     * @param Request $request
     * @return Response
     */
    public function notif(Request $request): Response
    {
        $errorMsg = "501: Nie zaimplementowano.";
        return $this->render('error/error.html.twig', [
            'error' => $errorMsg
        ]);
    }

    /**
     * @Route("/search", name="search", methods={"GET"})
     * @param MovieRepository $movieRepository
     * @param Request $request
     * @return Response
     */
    public function search(MovieRepository $movieRepository, Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $subuser = $this->profileRepository->find($this->logicHelper->getCurrentSubuserIdFromSession());
        if ($subuser !== null) {
            $userAvatar = $subuser->getAvatar();
            $subuserId = $subuser->getId();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherSubusers($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal( $movieRepository->search($request->query->get('v')),$subuserId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }
}
