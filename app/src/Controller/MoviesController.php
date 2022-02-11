<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{

    private MovieRepository $repo;

    public function __construct(MovieRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @Route("/movieList", name="movieList")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MovieController',
            'exclusive' =>$this->repo->homeFilter(1),
            'popular' => $this->repo->popularFilter(),
            'serials' =>$this->repo->homeFilter(2),
            'movies' => $this->repo->homeFilter(3)
        ]);
    }
    /**
     * @Route("/show/{id}", name="show-one")
     */
    public function show(Movie $movie): Response
    {
        return $this->render('movies/show.html.twig', ['movie' => $this->repo->find($movie)]);
    }
    public function exclusive(): Response
    {
        return $this->render(
            'movies/list.html.twig'
            ,['movies' => $this->repo->findByCategoryField(3)]);
    }
    /**
     * @Route("/serials", name="serials")
     * @return Response
     */
    public function serials(): Response
    {
        return $this->render(
            'movies/list.html.twig'
                ,['movies' => $this->repo->findByCategoryField(1)]);
    }
    /**
     * @Route("/movies", name="movies")
     * @return Response
     */
    public function movies(): Response
    {
        return $this->render(
            'movies/list.html.twig', ['movies' => $this->repo->findByCategoryField(2)]
        );
    }
    /**
     * @Route("/new", name="new")
     * @return Response
     */
    public function new(): Response
    {
        return $this->render(
            'movies/list.html.twig', ['movies' => $this->repo->recentlyAdd()]
        );
    }

    /**
     * @Route("/like", name="like", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function like(Request $request): Response
    {
        $id = $request->request->all();
        $movie = $this->repo->find($id['id']);
        $movie->setLikes($movie->getLikes() + 1);

        $user = $this->getUser();
        $user->addLike($movie);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('show-one', ['id' => $id['id']]);
//        return $this->render(
//            'movies/like.html.twig'
//        );
    }

    /**
     * @Route("/dislike", name="dislike", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function dislike(Request $request): Response
    {
        $id = $request->request->all();
        $movie = $this->repo->find($id['id']);
        $movie->setLikes($movie->getLikes() - 1);

        $user = $this->getUser();
        $user->removeLike($movie);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($movie);
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('profile');
    }
//    /**
//     * @Route("/notif", name="notif", methods={"POST"})
//     * @param Request $request
//     * @return Response
//     */
//    public function notif(Request $request): Response
//    {
//        $id = $request->request->all();
//        $notif = $this->repo->find($id['id']);
//        $notif->setShown(1);
//
//        $user = $this->getUser();
//        $user-> isShown($notif);
//
//        $entityManager = $this->getDoctrine()->getManager();
//        $entityManager->persist($notif);
//        $entityManager->persist($user);
//        $entityManager->flush();
//
//        return $this->render('movies/notif.html.twig', ['notifications' => $this->repo->isShown($notif)]);
//    }

    /**
     * @Route("/search", name="search", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function search(Request $request): Response
    {
        $string = $request->request->all();
        return $this->render(
            'movies/list.html.twig', ['movies' => $this->repo->search($string['search'])
            ]
        );
    }
}
