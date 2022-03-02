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
use Symfony\Component\HttpFoundation\Session\Session;
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
        $currentUser = $this->getUser();
        if($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('success', [
                    'id' => $id,
                ]
            );
        }

        return $this->render(
            'user/user.html.twig', [
                'subUsers' => $this->subuserRepository->findBy(array('subaccountOf' => $currentUser))
            ]
        );
    }

    /**
     * @Route("/success", name="success")
     * @param Request $request
     * @return Response
     */
    public function success(Request $request): Response
    {

        $currentUserId = $this->getUser()->getId();
        $subuserId = $request->get('id');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUserId));
        $subuserCount = count($allSubusers);

        $currentSubuserId = $allSubusers[$subuserId]->getId();
        dump($currentSubuserId);
        $session = $this->get('session');
        $session->set('filter', array(
            'subuserId' => $currentSubuserId
        ));

        return $this->redirectToRoute('browse');
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