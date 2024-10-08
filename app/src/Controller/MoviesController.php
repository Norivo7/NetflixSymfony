<?php

namespace App\Controller;

use App\Helpers\LogicHelper;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\ProfileRepository;
use App\Repository\VideoRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{

    public function __construct
    (
        private MovieRepository       $movieRepository,
        private CategoryRepository    $categoryRepository,
        private ProfileRepository     $profileRepository,
        private RequestStack          $requestStack,
        private VideoRepository       $videoRepository,
        private ManagerRegistry       $doctrine,
        private LogicHelper           $logicHelper
    ) { }

    #[Route('/', name: 'home')]
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
            'root.html.twig', [
                'dropdownTitles' => $dropdownTitles,
            ]
        );
    }

    #[Route('/browse', name: 'browse', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $profile = $this->requestStack->getSession()->get('filter');
        if ($profile !== null) {
            $profileId = reset($profile);
        } else {
            return $this->redirectToRoute('chooseUser');
        }

        $profileFrontId = $request->get('id');
        $allProfiles = $this->profileRepository->findBy(array('subaccountOf' => $this->getUser()));
        if ($profileId !== null && $profileFrontId < count($allProfiles)) {
            return $this->render('movies/index.html.twig', [
                'controller_name' => 'MovieController',
                'profiles' => $this->logicHelper->getOtherProfiles($this->getUser()),
                'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Filmy'),$profileId),
                'originals' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Eksluzywne'),$profileId),
                'shows' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Seriale'),$profileId),
                'userAvatar' => $this->profileRepository->find($profileId)->getAvatar()
            ]);
        }

        $errorMessage = "404: Nie znaleziono użytkownika.";
        return $this->render('/error/error.html.twig', [
            'error' => $errorMessage,
        ]);
    }

    #[Route('/shows', name: 'shows')]
    public function shows(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }

        $profileId = $this->logicHelper->getCurrentProfileIdFromSession();
        $currentProfile = $this->profileRepository->find($profileId);
        if ($profileId !== null) {
            $userAvatar = $currentProfile->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherProfiles($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Seriale'),$profileId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    #[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        $currentUser = $this->getUser();
        $profileId = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());
        if ($profileId !== null) {
            $userAvatar = $profileId->getAvatar();
            return $this->render(
                'user/profile.html.twig', [
                    'user' => $currentUser,
                    'profiles' => $this->profileRepository->findBy(array('subaccountOf' => $currentUser)),
                    'userAvatar' => $userAvatar,
                ]);
        }
        return $this->redirectToRoute('chooseUser');
    }

    #[Route('/subscription', name: 'subscription')]
    public function subscription(): Response
    {
       $this->getUser();
        $profileId = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());
        if ($profileId !== null) {
            $userAvatar = $profileId->getAvatar();
            return $this->render('user/subscription.html.twig', [
                'user' =>  $this->getUser(),
                'userAvatar' => $userAvatar,
            ]);
        }
        return $this->redirectToRoute('chooseUser');
    }

    #[Route('/browse/hide/{id}', name: 'hide')]
    public function hide($id, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $movie = $this->movieRepository->find($id);
        $movie->setActive(false);
        $entityManager->persist($movie);
        $entityManager->flush();

        return $this->redirectToRoute('browse');
    }

    #[Route('/show/{id}', name: 'show-one')]
    public function show($id): Response
    {
        $profileId = $this->logicHelper->getCurrentProfileIdFromSession();

        $liked = $this->movieRepository->getLikedMoviesByProfile($profileId);
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

    #[Route('/watch/{id}', name: 'watch-one')]
    public function watch($id): Response
    {
        $episode = $this->videoRepository->find($id);
            return $this->render('movies/watch.html.twig', [
                'movie' => $episode,
            ]);
    }

    #[Route('/myList', name: 'myList')]
    public function myList(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $profile = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());
        if ($profile !== null) {
            $profileId = $profile->getId();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherProfiles($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getLikedMoviesByProfile(($profileId)),$profileId),
                    'userAvatar' => $profile->getAvatar(),
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    #[Route('/movies', name: 'movies')]
    public function movies(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }

        $profile = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());

        if ($profile !== null) {
            $profileId = $profile->getId();
            $userAvatar = $profile->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherProfiles($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->getMoviesByCategory('Filmy'),$profileId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }

        $profile = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());
        if ($profile !== null) {

            $profileId = $profile->getId();
            $userAvatar = $profile->getAvatar();
            return $this->render(

                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherProfiles($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal($this->movieRepository->recentlyAdd(),$profileId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    #[Route('/like/{id}', name: 'like')]
    public function like($id, Request $request): Response
    {
        $movie = $this->movieRepository->find($id);
        $currentProfile = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());

        $movie->addLikedBy($currentProfile);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($currentProfile);
        $entityManager->flush();

        $route = $request->headers->get('referer');
        return $this->redirect($route);
    }

    #[Route('/dislike/{id}', name: 'dislike')]
    public function dislike($id, Request $request): Response
    {
        $movie = $this->movieRepository->find($id);
        $currentProfile = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());

        $movie->removeLikedBy($currentProfile);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($currentProfile);
        $entityManager->flush();

        $route = $request->headers->get('referer');
        return $this->redirect($route);
    }

    #[Route('/notif', name: 'notif')]
    public function notif(Request $request): Response
    {
        $errorMsg = "501: Nie zaimplementowano.";
        return $this->render('error/error.html.twig', [
            'error' => $errorMsg
        ]);
    }

    #[Route('/search', name: 'search', methods: ['GET'])]
    public function search(MovieRepository $movieRepository, Request $request): Response
    {
        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $profile = $this->profileRepository->find($this->logicHelper->getCurrentProfileIdFromSession());
        if ($profile !== null) {
            $userAvatar = $profile->getAvatar();
            $profileId = $profile->getId();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->logicHelper->getOtherProfiles($this->getUser()),
                    'movies' => $this->logicHelper->transformArrayForModal( $movieRepository->search($request->query->get('v')),$profileId),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    #[Route('/movie/modal/{id}', name: 'get-movie', methods: ['GET'])]
    public function showModal(int $id, Request $request): ?Response
    {
        $movie = $this->movieRepository->findOneBy(array('id' => $id));
        if ($request->isXmlHttpRequest()) {

            return $this->render('components/MovieModal.html.twig', ['movie' => $movie]);
        }
        return $this->render('components/MovieModal.html.twig', ['movie' => $movie]);
    }
}
