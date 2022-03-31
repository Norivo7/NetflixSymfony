<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieType;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\SubuserRepository;
use App\Repository\VideoRepository;
use Doctrine\ORM\EntityManagerInterface;
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

    public function __construct(MovieRepository    $movieRepository,
                                CategoryRepository $categoryRepository,
                                SubuserRepository  $subuserRepository,
                                RequestStack       $requestStack,
                                VideoRepository    $videoRepository)
    {
        $this->subuserRepository = $subuserRepository;
        $this->movieRepository = $movieRepository;
        $this->categoryRepository = $categoryRepository;
        $this->requestStack = $requestStack;
        $this->videoRepository = $videoRepository;
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

                                  // TRANSFORMING ARRAYS ( MY HEAD HURTS )
                                               // FOR LOOP
                    // for every movie element in movies, check if current subuser liked the movie, then
                    // transform movies -> add isLiked value to the array, push "true" or "false" accordingly

        $shows = $this->movieRepository->getMoviesByCategory('Seriale');
//        dump($movies);
        $showsCount = count($shows);
//        if($likedBy !== null) {
            for ($show=0 ;$show < $showsCount; $show++){
//                dump($movies);
                if ($shows[$show] !== null && $shows[$show]['likedBy'] !== null ) {
//                $movies = array_merge_recursive($movies, $movies[$movie]['likedBy']);
//                dump($movies);
//                dump($movies[$movie]['likedBy']);
//                dump(in_array($subuserId, array_column($movies[$movie]['likedBy'], 'id')));
                $isShowLikedByCurrentProfile = in_array($subuserId, array_column($shows[$show]['likedBy'], 'id'));
                    $shows[$show]['isLiked'] = $isShowLikedByCurrentProfile;
//                    dump($movies[$movie]);
                }
            }
//            dump($isMovieLikedByCurrentProfile);
//        dump($movies);
//        }
//        $movies = $movies[0]['likedBy'];
//        dump(array_column($movies, 'id'));
//        dump(in_array($subuserId, array_column($movies, 'id')));

//        dump($isMovieLikedByCurrentProfile)

        if ($subuserId !== null && $subuserFrontId < count($allSubusers)) {
//            dump($shows);
            return $this->render('movies/index.html.twig', [
                'controller_name' => 'MovieController',
                'profiles' => $this->getOtherSubusers(),
                'movies' => $this->movieRepository->getMoviesByCategory('Filmy'),
                'originals' => $this->movieRepository->getMoviesByCategory('Eksluzywne'),
                'shows' => $shows,
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

        $subuserId = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->movieRepository->getMoviesByCategory('Seriale'),
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
                    'email' => $currentUser->getUserIdentifier(),
                    'profiles' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser)),
                    'userAvatar' => $userAvatar,
                ]
            );
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



    public function exclusive(): Response
    {
        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->movieRepository->getMoviesByCategory('Eksluzywne')]
        );
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
        $subuserId = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
//            dump($this->movieRepository->getLikedMoviesBySubuser(($subuserId->getId())));
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->movieRepository->getLikedMoviesBySubuser(($subuserId->getId())),
                    'userAvatar' => $userAvatar,
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

        $subuserId = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
//            dump($this->movieRepository->getMoviesByCategory('Filmy'));
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->movieRepository->getMoviesByCategory('Filmy'),
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

        $subuserId = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $this->movieRepository->recentlyAdd(),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }

    /**
     * @Route ("/like", name="like", methods={"POST"})
     * @param Request $request
     * @param ManagerRegistry $doctrine
     * @return Response
     */
    public function like(Request $request, ManagerRegistry $doctrine): Response
    {
        // get movie
        $id = $request->request->all();
        $movie = $this->movieRepository->find($id['id']);

        // get subuser
        $subuserId = $this->getCurrentSubuserIdFromSession();
        $currentSubuser = $this->subuserRepository->find($subuserId);

        $movie->addLikedBy($currentSubuser);

        // make changes in database
        $entityManager = $doctrine->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($currentSubuser);
        $entityManager->flush();
        return $this->redirectToRoute('show-one', ['id' => $id['id']]);
    }


    /**
     * @Route ("/dislike", name="dislike", methods={"POST"})
     * @param Request $request
     * @param ManagerRegistry $doctrine
     * @return Response
     */
    public function dislike(Request $request, ManagerRegistry $doctrine): Response
    {
        $id = $request->request->all();
        $movie = $this->movieRepository->find($id['id']);

        $subuserId = $this->getCurrentSubuserIdFromSession();
        $currentSubuser = $this->subuserRepository->find($subuserId);

        $movie->removeLikedBy($currentSubuser);

        $entityManager = $doctrine->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($currentSubuser);
        $entityManager->flush();

        return $this->redirectToRoute('show-one', ['id' => $id['id']]);
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
        $subuserId = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());
        if ($subuserId !== null) {
            $userAvatar = $subuserId->getAvatar();
            return $this->render(
                'movies/list.html.twig', [
                    'profiles' => $this->getOtherSubusers(),
                    'movies' => $movieRepository->search($request->query->get('v')),
                    'userAvatar' => $userAvatar,
                ]
            );
        }
        return $this->redirectToRoute('chooseUser');
    }
}
