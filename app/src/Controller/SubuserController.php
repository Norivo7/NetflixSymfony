<?php

namespace App\Controller;

use App\Entity\Subuser;
use App\Entity\User;
use App\Form\SubuserType;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\SubuserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubuserController extends AbstractController
{
    private SubuserRepository $subuserRepository;

    public function __construct(SubuserRepository $subuserRepository)
    {
        $this->subuserRepository = $subuserRepository;
    }

    /**
     * @Route("/chooseUser", name="chooseUser")
     * @param Request $request
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

}