<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Entity\Subuser;
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
//test
    private MovieRepository $repo;
    private CategoryRepository $categoryRepo;
    private SubuserRepository $subuserRepository;

    public function __construct(MovieRepository $repo,
                                CategoryRepository $categoryRepo,
                                SubuserRepository $subuserRepository)
    {
        $this->subuserRepository = $subuserRepository;
        $this->repo = $repo;
        $this->categoryRepo = $categoryRepo;
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

//        session_start();
//    $_SESSION['subuser_name'] =$_GET['subuser_name'];
//
//        dump($this->$request->getSession()->set('subuser_name', '$value'));
//        $session = $this->get('session');
//        $session->set('filter', array(
//            'subuser_name' => sub
////        ))
//        $subusername = $request->get('subuser_name');
//        dump($subusername);




//        dump($currentUserId);


//        dump($allSubusers);




//        $currentSubuser= $this->subuserRepository->findSubuserById($subuserId, $currentUserId);
//        dump($currentSubuser);


//
//        $session = new Session();
//        dump($session);
//        $subuser = $session->get('filter');
//        $subuserSessionId = reset($subuser);
//        dump($subuserSessionId);

        $currentUserId = $this->getUser()->getId();
        $subuserId = $request->get('id');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUserId));
        $subuserCount = count($allSubusers);

        // TODO: TESTOWAŃSKO
//        dump('ID subusera z frontu: '.$subuserId);
//        dump('Ilość subuserów: '.$subuserCount);
//        $secondElement = $allSubusers[$subuserId][0];


        //  $subuserId to wiadomość z fronta od użytkownika (od 0 do 4)
        //  $subuserCount to liczba subuserów w systemie ( max 5 )

        // TODO: Strona z redirectem zapisująca dane o aktualnym subaccouncie np ./success (persist) => /browse





//                // jeżeli dane z frontu zgadzają się, zapisz do sesji
//        if ($subuserId < $subuserCount && isset($subuserId)){
//                //render
            $session = new Session();
////            $session->start();
//            dump($session);
            $subuser = $session->get('filter');
            $subuserId = reset($subuser);
//            dump($subuserId);
//
//        } else {
//            $errorMessage= "404: Nie znaleziono użytkownika.";
////            dump($errorMessage);
//            return $this->render('/error/error.html.twig', [
//                'error' => $errorMessage,
//            ]);
//        }
        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MovieController',
            'popular' => $this->repo->popularFilter(),
            'movies' => $this->repo->getMoviesByCategory('Filmy'),
            'originals' => $this->repo->getMoviesByCategory('Eksluzywne'),
            'shows' => $this->repo->getMoviesByCategory('Seriale')
        ]);
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
//        dump($session);
        $subuser = $session->get('filter');
        $subuserId = reset($subuser);
//        dump($subuserId);
        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->repo->getMoviesByCategory('Seriale'),]
        );
    }



    /**
     * @Route("/manageUser", name="manageUser")
     * @return Response
     */
    public function manageUser(): Response
    {
        $currentUser = $this->getUser();

        return $this->render(
            'user/manage.html.twig', [
                'subUsers' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser))
            ]
        );
    }




    /**
     * @Route("/profile", name="profile")
     * @return Response
     */
    public function profile(): Response
    {
        return $this->render('user/profile.html.twig', [
//            'liked' =>$this->repo->getLikedMoviesByUser()
            ]);
    }


    /**
     * @Route("/show/{id}", name="show-one")
     */
    public function show(Movie $movie): Response
    {
        return $this->render('movies/show.html.twig', ['movie' => $this->repo->find($movie),
            'categories' => $this->categoryRepo->getCategoryByMovie($movie->getTitle())]);
    }

    public function exclusive(): Response
    {

        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->repo->getMoviesByCategory('Eksluzywne')]
        );
    }


    /**
     * @Route("/myList", name="myList")
     * @return Response
     */
    public function myList(): Response
    {
        return $this->render(
            'movies/list.html.twig',
//            ['movies' => $this->repo->getLikedMoviesByCurrentUser(),]
        );
    }
    /**
     * @Route("/movies", name="movies")
     * @return Response
     */
    public function movies(): Response
    {
        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->repo->getMoviesByCategory('Filmy')]
        );
    }
    /**
     * @Route("/new", name="new")
     * @return Response
     */
    public function new(): Response
    {
        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->repo->recentlyAdd()]
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
     * @Route("/notif", name="notif")
     * @param Request $request
     * @return Response
     */
    public function notif(Request $request): Response {

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
      $movies = $movieRepository->search(
          $request->query->get('v')
      );

      return $this->render('movies/list.html.twig', [
          'movies' => $movies
      ]);
    }
}
