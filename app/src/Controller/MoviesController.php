<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\SubuserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private MovieRepository $movieRepository;
    private CategoryRepository $categoryRepository;
    private SubuserRepository $subuserRepository;

    public function __construct(MovieRepository    $movieRepository,
                                CategoryRepository $categoryRepository,
                                SubuserRepository  $subuserRepository)
    {
        $this->subuserRepository = $subuserRepository;
        $this->movieRepository = $movieRepository;
        $this->categoryRepository = $categoryRepository;
    }

    // helper functions
    private function isMovieLikedByCurrentUser(int $movieId, ?array $liked): bool
    {
        return in_array($movieId, array_column($liked, 'id'));
    }

    private function getCurrentSubuserIdFromSession(): int
    {
        $session = new Session();
        $subuser = $session->get('filter');
        return reset($subuser);
    }

    private function getOtherSubusers(): array
    {
        $session = new Session();
        $subuser = $session->get('filter');
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
    public function home(): Response
    {
        return $this->render(
            'base.html.twig'
        );
    }


    /**
     * @Route("/browse", name="browse")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
        );
        }
        $session = new Session();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);

        $currentUser = $this->getUser();
        $subuserFrontId = $request->get('id');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUser));
        $subuserCount = count($allSubusers);

        $session = new Session();
        $subuser = $session->get('filter');

        if ($subuser != null) {
            $subuserId = reset($subuser);
        }
        if ($subuserId != null && $subuserFrontId < $subuserCount) {

            return $this->render('movies/index.html.twig', [
                'controller_name' => 'MovieController',
                'profiles' => $this->getOtherSubusers(),
                'movies' => $this->movieRepository->getMoviesByCategory('Filmy'),
                'originals' => $this->movieRepository->getMoviesByCategory('Eksluzywne'),
                'shows' => $this->movieRepository->getMoviesByCategory('Seriale'),
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()
            ]);
        } else {
            $errorMessage = "404: Nie znaleziono użytkownika.";
            return $this->render('/error/error.html.twig', [
                'error' => $errorMessage,
            ]);
        }
    }


    /**
     * @Route("/shows", name="shows")
     * @param $request
     * @return Response
     */
    public function shows(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        return $this->render(
            'movies/list.html.twig', [
                'profiles' => $this->getOtherSubusers(),
                'movies' => $this->movieRepository->getMoviesByCategory('Seriale'),
                'userAvatar' => $this->subuserRepository->find($this->getCurrentSubuserIdFromSession())->getAvatar()
            ]
        );
    }

    /**
     * @Route("/profile", name="profile")
     * @return Response
     */
    public function profile(): Response
    {
        $subuserId = $this->getCurrentSubuserIdFromSession();
        $currentUser = $this->getUser();

        return $this->render('user/profile.html.twig', [
            'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar(),
            'email' => $currentUser->getUserIdentifier(),
            'profiles' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser))
        ]);
    }

    /**
     * @Route("/show/{id}", name="show-one")
     */
    public function show(Movie $movie): Response
    {
        $subuserId = $this->getCurrentSubuserIdFromSession();

        $liked = $this->movieRepository->getLikedMoviesBySubuser($subuserId);
        $movie = $this->movieRepository->find($movie);
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

    public function exclusive(): Response
    {

        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->movieRepository->getMoviesByCategory('Eksluzywne')]
        );
    }


    /**
     * @Route("/myList", name="myList")
     * @param $request
     * @return Response
     */
    public function myList(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $currentSubuser = $this->subuserRepository->find($this->getCurrentSubuserIdFromSession());

        return $this->render(
            'movies/list.html.twig', [
                'profiles' => $this->getOtherSubusers(),
                'userAvatar' => $currentSubuser->getAvatar(),
                'movies' => $this->movieRepository->getLikedMoviesBySubuser(($currentSubuser->getId()))
            ]
        );
    }

    /**
     * @Route("/movies", name="movies")
     * @return Response
     */
    public function movies(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $subuserId = $this->getCurrentSubuserIdFromSession();

        return $this->render(
            'movies/list.html.twig', [
                'profiles' => $this->getOtherSubusers(),
                'movies' => $this->movieRepository->getMoviesByCategory('Filmy'),
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()]
        );
    }

    /**
     * @Route("/new", name="new")
     * @return Response
     */
    public function new(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $subuserId = $this->getCurrentSubuserIdFromSession();

        return $this->render(
            'movies/list.html.twig', [
                'profiles' => $this->getOtherSubusers(),
                'movies' => $this->movieRepository->recentlyAdd(),
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()]
        );
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
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('changeProfile', [
                    'id' => $id,
                ]
            );
        }
        $subuserId = $this->getCurrentSubuserIdFromSession();
        $currentSubuser = $this->subuserRepository->find($subuserId);

        $movies = $movieRepository->search(
            $request->query->get('v')
        );

        return $this->render('movies/list.html.twig', [
            'profiles' => $this->getOtherSubusers(),
            'movies' => $movies,
            'userAvatar' => $currentSubuser->getAvatar()
        ]);
    }
}
