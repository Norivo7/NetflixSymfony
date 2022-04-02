<?php

namespace App\Controller;


use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\SubuserRepository;
use App\Repository\VideoRepository;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private MovieRepository $movieRepository;
    private CategoryRepository $categoryRepository;
    private SubuserRepository $subuserRepository;
    private RequestStack $requestStack;
    private VideoRepository $videoRepository;
    private ManagerRegistry $doctrine;

    public function __construct(MovieRepository    $movieRepository,
                                CategoryRepository $categoryRepository,
                                SubuserRepository  $subuserRepository,
                                RequestStack       $requestStack,
                                VideoRepository    $videoRepository,
                                ManagerRegistry    $doctrine)
    {
        $this->subuserRepository = $subuserRepository;
        $this->movieRepository = $movieRepository;
        $this->categoryRepository = $categoryRepository;
        $this->requestStack = $requestStack;
        $this->videoRepository = $videoRepository;
        $this->doctrine = $doctrine;
    }

    // helper functions

    private function isMovieLikedByCurrentUser(int $movieId, ?array $liked): bool
    {
        return in_array($movieId, array_column($liked, 'id'));
    }

    private function getCurrentSubuserIdFromSession()
    {
        $subuser = $this->requestStack->getSession()->get('filter');
        if ($subuser !== null) return reset($subuser);
            return 'subUser not found';
    }

    private function getOtherSubusers(): array
    {
        $subuser = $this->requestStack->getSession()->get('filter');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $this->getUser()));
        $subuserId = reset($subuser);
        $currentSubuser = $this->subuserRepository->find($subuserId);
        $subuserPosition = array_keys($allSubusers, $currentSubuser);
        unset($allSubusers[reset($subuserPosition)]);
        return array_values($allSubusers);
    }

    //                  TRANSFORMING ARRAYS ( MY HEAD HURTS )
    //                               FOR LOOP
    // for every movie element in movies, check if current subuser liked the movie, then
    // transform movies -> add isLiked value to the array, push "true" or "false" accordingly
    // mandatory for my modal rendering

    private function transformArrayForModal($videos, $currentProfileId){
        $videoCount = count($videos);
        for ($video=0 ;$video < $videoCount; $video++){
            if ($videos[$video] !== null && $videos[$video]['likedBy'] !== null ) {
                $isVideoLikedByCurrentProfile = in_array($currentProfileId, array_column($videos[$video]['likedBy'], 'id'));
                $videos[$video]['isLiked'] = $isVideoLikedByCurrentProfile;
            }
        }
        return $videos;
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

//        $values = [192,20,43,53,12,53,32];
//        $valueCount = count($values);
////        dump($valueCount);
//        $valueArray = array();
////        dump($valueArray);
//        for($value=0;$value < $valueCount;$value++) {
//            $valueArray[] = $values[$value];
//        }
//        dump(array_sum($valueArray));




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
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        if ($request->getMethod() === 'POST' && $request->request->get('id') !== null) {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                'id' => $id,
            ]);
        }

        $subuser = $this->requestStack->getSession()->get('filter');

        if ($subuser !== null) {
            $subuserId = reset($subuser);
        } else return $this->redirectToRoute('chooseUser');

        $subuserFrontId = $request->get('id');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $this->getUser()));
        if ($subuserId !== null && $subuserFrontId < count($allSubusers)) {
//            dump($this->transformArrayForModal($this->movieRepository->getMoviesByCategory('Seriale'),$subuserId));
            return $this->render('movies/index.html.twig', [
                'controller_name' => 'MovieController',
                'profiles' => $this->getOtherSubusers(),
                'movies' => $this->transformArrayForModal($this->movieRepository->getMoviesByCategory('Filmy'),$subuserId),
                'originals' => $this->transformArrayForModal($this->movieRepository->getMoviesByCategory('Eksluzywne'),$subuserId),
                'shows' => $this->transformArrayForModal($this->movieRepository->getMoviesByCategory('Seriale'),$subuserId),
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()
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

        $subuserId = $this->getCurrentSubuserIdFromSession();
        $currentSubuser = $this->subuserRepository->find($subuserId);
        if ($subuserId !== null) {
            $userAvatar = $currentSubuser->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->transformArrayForModal($this->movieRepository->getMoviesByCategory('Seriale'),$subuserId),
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
        $subuserId = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
            return $this->render(
                'user/profile.html.twig', [
                    'user' => $currentUser,
                    'profiles' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser)),
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
        $currentUser = $this->getUser();
        $subuserId = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
            return $this->render('user/subscription.html.twig', [
                'user' => $currentUser,
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
        $subuserId = $this->getCurrentSubuserIdFromSession();

        $liked = $this->movieRepository->getLikedMoviesBySubuser($subuserId);
        $movie = $this->movieRepository->find($id);
        $categories = $this->categoryRepository->getCategoryByMovie($movie->getTitle());
        $movieId = $movie->getId();



        if ($this->isMovieLikedByCurrentUser($movieId, $liked)) {
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
        $subuser = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuser !== null) {
            $subuserId = $subuser->getId();
//            dump($this->movieRepository->getLikedMoviesBySubuser(($subuserId)));
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->transformArrayForModal($this->movieRepository->getLikedMoviesBySubuser(($subuserId)),$subuserId),
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

        $subuser = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());

        if ($subuser !== null) {
            $subuserId = $subuser->getId();
            $userAvatar = $subuser->getAvatar();
//            dump($this->movieRepository->getMoviesByCategory('Filmy'));
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->transformArrayForModal($this->movieRepository->getMoviesByCategory('Filmy'),$subuserId),
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

        $subuser = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuser !== null) {

            $subuserId = $subuser->getId();
            $userAvatar = $subuser->getAvatar();
//            dump($this->transformArrayForModal($this->movieRepository->recentlyAdd(),$subuserId));
            return $this->render(

                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->transformArrayForModal($this->movieRepository->recentlyAdd(),$subuserId),
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
        // get movie
//        $id = $request->request->all();
//        $movie = $this->movieRepository->find($id['id']);

        // get subuser
//        $subuserId = $this->getCurrentSubuserIdFromSession();
//        $currentSubuser = $this->subuserRepository->find($subuserId);

//        $movie->addLikedBy($currentSubuser);

        // make changes in database
//        $entityManager = $doctrine->getManager();
//        $entityManager->persist($movie);
//        $entityManager->persist($currentSubuser);
//        $entityManager->flush();
        // get movie


        // better code
        $movie = $this->movieRepository->find($id);
        $currentSubuser = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());

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
        $currentSubuser = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());

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
        $subuser = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuser !== null) {
            $userAvatar = $subuser->getAvatar();
            $subuserId = $subuser->getId();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->transformArrayForModal( $movieRepository->search($request->query->get('v')),$subuserId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }
}
