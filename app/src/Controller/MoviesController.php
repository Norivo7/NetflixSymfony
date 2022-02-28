<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Movie;
use App\Entity\Subuser;
use App\Entity\User;
use App\Form\SubuserType;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\SubuserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
     * @Route("/browse", name="browse")
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
//        dump($request->get('subuser_name'));





//        dump($currentUserId);


//        dump($allSubusers);

//        $secondElement = getArray()[0];

//        dump($secondElement);
//        dump(array_search(22 ,array_column($allSubusers, 'id')));

//        $currentSubuser= $this->subuserRepository->findSubuserById($subuserId, $currentUserId);
//        dump($currentSubuser);



        $currentUserId = $this->getUser()->getId();
        $subuserId = $request->get('id');


        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUserId));


        $subuserCount = count($allSubusers);

        // TESTOWAŃSKO
        dump('ID subusera z frontu: '.$subuserId);
        dump('Ilość subuserów: '.$subuserCount);

//        dump($allSubusers[$subuserId]);


        //  $subuserId to wiadomość z fronta od użytkownika (od 0 do 4)
        //  $subuserCount to liczba subuserów w systemie ( max 5 )



        // TODO: Strona z redirectem zapisująca dane o aktualnym subaccouncie np ./success (persist) => /browse

        if ($subuserId < $subuserCount && isset($subuserId)){

        dump($allSubusers[$subuserId]);

        } else {
            $errorMessage= "404: Nie znaleziono użytkownika.";
            dump($errorMessage);

            return $this->render('/error/error.html.twig', [
                'error' => $errorMessage,
            ]);
        }
        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MovieController',
//            'exclusive' =>$this->repo->homeFilter(1),//            'popular' => $this->repo->popularFilter(),
//            'serials' =>$this->repo->getMoviesByCategory('Seriale'),
            'popular' => $this->repo->popularFilter(),
            'movies' => $this->repo->getMoviesByCategory('Filmy'),
            'originals' => $this->repo->getMoviesByCategory('Eksluzywne'),
            'serials' => $this->repo->getMoviesByCategory('Seriale')
        ]);
    }

    /**
     * @Route("/chooseUser", name="chooseUser")
     * @param $request
     * @return Response
     */
    public function chooseUser(Request $request): Response
    {
//        $session = $this->get('session');
//        $session->set('subuser_name', 'Default');
//        dump($session);
//        $currentUser = $this->getUser();
//        dump($currentUser);
//        $currentUser->getUserIdentifier();
//        dump($currentUser);
//
//        $subuser = $this->subuserRepository->findBy(array('subaccountOf' => $currentUser));
//        dump($subuser);
//        $request->get('subuser_name');
        $currentUser = $this->getUser();
        if($request->getMethod() == 'POST') {
//            $subuser_name = $request->request->get('subuser_name');
//            $avatar = $request->request->get('avatar');
            $id = $request->request->get('id');
            return $this->redirectToRoute('browse', [
//                    'subuser_name' => $subuser_name,
//                    'avatar' => $avatar,
                    'id' => $id,
                ]
        );
//            dump($subuser_name);
//            dump($avatar);
        }

        return $this->render(
            'user/user.html.twig', [
                'subUsers' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser))
            ]
        );
    }


    /**
     * @Route("/newSubuser", name="newSubuser")
     * @return Response
     */
    public function newSubuser(): Response
    {
        $currentUser = $this->getUser();

        $subuser = new Subuser();
        $subuser->setName("Nowy profil");
        $subuser->setAvatar("https://i.imgur.com/9nWtdiZ.png");
        $subuser->setSubaccountOf($currentUser);

        $form = $this->createForm(SubuserType::class, $subuser);
        dump($form);
        return $this->renderForm('user/manage.html.twig', [
            'form' => $form,
            'subUsers' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser)),
        ]);
    }

    /**
     * @Route("/switchSubuser", name="switchSubuser", methods={"POST"})
     * @param $name
     * @return Response
     */
    public function switchSubuser(Request $request): Response
    {
//        $request->get('subuser_name');
//        dump($request);
//    session_start();
//    $_SESSION['subuser_name'] =$_GET['subuser_name'];

//        dump($this->$request->getSession()->set('subuser_name', '$value'));
    return $this->redirectToRoute('browse');
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
     * @Route ("/newuser", name="createSubuser")
     * @param $value
     * @return Response
     */
    public function createSubuser(): Response
    {
        $newSubuser = new Subuser();

        $value ="wojtek";
        $newSubuser->setName($value);

        $currentUser = $this->getUser();
        $currentUser->getUserIdentifier();

        dump($currentUser);
        $newSubuser->setSubaccountOf($currentUser);
        $newSubuser->setAvatar('https://i.imgur.com/9nWtdiZ.png');
        dump($newSubuser);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($newSubuser);
        $entityManager->flush();

        return $this->redirectToRoute(
            'chooseUser',
            ['subUsers' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser))]
        );
    }

    /**
     * @Route("/error", name="error")
     * @param Request $request
     * @return Response
     */
    public function handleError(Request $request): Response
    {
//        dump($request->get('error'));
        return $this->render('error/error.html.twig');
    }

    /**
     * @Route("/profile", name="profile")
     * @return Response
     */
    public function profile(): Response
    {
        return $this->render('user/profile.html.twig', [
            'liked' =>$this->repo->getLikedMoviesByUser()
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
     * @Route("/serials", name="serials")
     * @return Response
     */
    public function serials(): Response
    {
        return $this->render(
            'movies/list.html.twig',
            ['movies' => $this->repo->getMoviesByCategory('Seriale'),]
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


//    /**
//     * @Route("/search", name="search", methods={"GET"})
//     */
//    public function search(Request $request)
//    {
//
//        $value = $request->get("find");
//        //implement your search here,
//        $result = $this->repo->findBy(array("title" => $value));
//        //Here you can return your data in JSON format or in a twig template
//        dump($result);
//        return $this->render('movies/search.html.twig', ['search' => $result]);
//    }

//    /**
//     * @Route("/search", name="search", methods={"GET"})
//     */
//    public function searchTitle($value) {
//        return $this->getDoctrine()->getRepository(Movie::class)->search($value);
//
//    }
}
