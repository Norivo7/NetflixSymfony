<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\SubuserRepository;
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

        $currentUserId = $this->getUser()->getId();
        $subuserFrontId = $request->get('id');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUserId));
        $subuserCount = count($allSubusers);

        // TODO: TESTOWAŃSKO
//        dump('ID subusera z frontu: '.$subuserFrontId);//  $subuserId to wiadomość z fronta od użytkownika (od 0 do 4)
//        dump('Ilość subuserów: '.$subuserCount); // $subuserCount to liczba subuserów w systemie ( max 5 )

        $session = new Session();
        $subuser = $session->get('filter');
        if ($subuser != null) {
            $subuserId = reset($subuser);
        }
        if ($subuserId != null && $subuserFrontId < $subuserCount) {

            return $this->render('movies/index.html.twig', [
                'controller_name' => 'MovieController',
//                'popular' => $this->movieRepository->popularFilter(),
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
     * @param Request $request
     * @return Response
     */
    public function shows(Request $request): Response
    {
        $session = new Session();
        $session->start();

        $subuser = $session->get('filter');
        $subuserId = reset($subuser);
        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->movieRepository->getMoviesByCategory('Seriale'),
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()
            ]
        );
    }

    /**
     * @Route("/profile", name="profile")
     * @return Response
     */
    public function profile(): Response
    {
        $session = new Session();
        $session->start();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);
        $currentUser = $this->getUser();
        return $this->render('user/profile.html.twig', [
            'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar(),
            'email' => $currentUser->getUserIdentifier(),
            'profiles' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser))
//            'liked' =>$this->repo->getLikedMoviesByUser()
        ]);
    }


    /**
     * @Route("/show/{id}", name="show-one")
     */
    public function show(Movie $movie): Response
    {
        $session = new Session();
        $session->start();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);

        $liked = $this->movieRepository->getLikedMoviesBySubuser($subuserId);
        $movie = $this->movieRepository->find($movie);
        $categories = $this->categoryRepository->getCategoryByMovie($movie->getTitle());
        $movieId = $movie->getId();

        if (array_search($movieId, array_column($liked, 'id')) !== false) {
            return $this->render('movies/show.html.twig', [
                'liked' => 'yes',
                'movie' => $movie,
                'categories' => $categories
            ]);
        } else {
            return $this->render('movies/show.html.twig', [
                'movie' => $movie,
                'categories' => $categories
            ]);
        }
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
     * @return Response
     */
    public function myList(): Response
    {
        $session = new Session();
        $session->start();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);
        $currentSubuser = $this->subuserRepository->find($subuserId);

        return $this->render(
            'movies/list.html.twig', [
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar(),
                'movies' => $this->movieRepository->getLikedMoviesBySubuser(($currentSubuser->getId()))
            ]
        );
    }

    /**
     * @Route("/movies", name="movies")
     * @return Response
     */
    public function movies(): Response
    {
        $session = new Session();
        $session->start();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);

        return $this->render(
            'movies/list.html.twig', [
                'movies' => $this->movieRepository->getMoviesByCategory('Filmy'),
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()]
        );
    }

    /**
     * @Route("/new", name="new")
     * @return Response
     */
    public function new(): Response
    {
        $session = new Session();
        $session->start();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);

        return $this->render(
            'movies/list.html.twig', [
                'movies' => $this->movieRepository->recentlyAdd(),
                'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()]
        );
    }

    /**
     * @Route ("/like", name="like", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function like(Request $request): Response
    {
        $id = $request->request->all();
        $movie = $this->movieRepository->find($id['id']);
        $session = new Session();
        // get subuser
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);
        $currentSubuser = $this->subuserRepository->find($subuserId);
        $movie->addLikedBy($currentSubuser);
        $entityManager = $this->getDoctrine()->getManager();
        // make changes in database
        $entityManager->persist($movie);
        $entityManager->persist($currentSubuser);
        $entityManager->flush();
        return $this->redirectToRoute('show-one', ['id' => $id['id']]);
    }


    /**
     * @Route ("/dislike", name="dislike", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function dislike(Request $request): Response
    {
        $id = $request->request->all();
        $movie = $this->movieRepository->find($id['id']);
        $session = new Session();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);
        $currentSubuser = $this->subuserRepository->find($subuserId);
        $movie->removeLikedBy($currentSubuser);
        $entityManager = $this->getDoctrine()->getManager();

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
        $session = new Session();
        $session->start();
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);
        $movies = $movieRepository->search(
            $request->query->get('v')
        );

        return $this->render('movies/list.html.twig', [
            'movies' => $movies,
            'userAvatar' => $this->subuserRepository->find($subuserId)->getAvatar()
        ]);
    }
}
