<?php

namespace App\Controller;

use App\Entity\Subuser;
use App\Entity\User;
use App\Form\SubuserType;
use App\Repository\CategoryRepository;
use App\Repository\MovieRepository;
use App\Repository\SubuserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
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
     * @Route ("manageUser/add")
     * @return Response
     */
    public function addSubuser(): Response
    {
        $currentUser = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $subusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUser));
        $subuserCount = count($subusers);
        if ($subuserCount < 5) {
            $subuser = new Subuser();
            $subuser->setName('Nowy');
            $subuser->setAvatar('https://i.imgur.com/9nWtdiZ.png');
            $subuser->setSubaccountOf($currentUser);
            $entityManager->persist($subuser);
            $entityManager->flush();
            return $this->redirectToRoute('manageUser');
        } else {
            return $this->redirectToRoute('error', [
                'error' => "Nie można dodać użytkownika"
            ]);
        }
    }

    /**
     * @Route ("manageUser/edit", name="edit")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $errorRegex = $request->get('errorRegex');
        $subuserFrontId = $request->get('id');

        if ($request->getMethod() == 'POST') {
            $name = $request->request->get('name');
            return $this->redirectToRoute('update', [
                    'id' => $subuserFrontId,
                    'name' => $name,
                ]
            );
        }
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $user));
        if (isset($subuserFrontId) && $allSubusers[$subuserFrontId] != null) {
            $currentSubuser = $allSubusers[$subuserFrontId];
            return $this->render('user/edit.html.twig', [
                'subuser' => $currentSubuser,
                'id' => $subuserFrontId,
                'errorRegex' => $errorRegex
            ]);
        } else {

            return $this->render('user/edit.html.twig', [
                'error' => "nie znaleziono"
            ]);
        }

    }

    /**
     * @Route ("/manageUser/delete/{id}", name="deleteSubuser")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function delete(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $subuserFrontId = $request->get('id');
        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $user));
        $currentSubuser = $allSubusers[$subuserFrontId];
        $entityManager->remove($currentSubuser);
        $entityManager->flush();

        return $this->redirectToRoute('manageUser', [
            'subUsers' => $allSubusers,
        ]);
    }

    /**
     * @Route ("/manageUser/update/{id}", name="update")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function update(Request $request, EntityManagerInterface $entityManager): Response
    {
        $currentUser = $this->getUser();
        $subuserFrontId = $request->get('id');
        $subuserName = $request->get('name');

        $allSubusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUser));

        $currentSubuser = $allSubusers[$subuserFrontId];
        if (!$currentSubuser) {
            return $this->redirectToRoute('error', [
                'error' => '404: Nie znaleziono profilu.'
            ]);
        } else {
            $regex = "([a-zA-Z]{3,15}\s*)";
            if (preg_match($regex, $subuserName)) {
                $currentSubuser->setName($subuserName);
                $entityManager->persist($currentSubuser);
                $entityManager->flush();
                return $this->redirectToRoute('manageUser', [
                    'id' => $subuserFrontId,
                    'subuser' => $currentSubuser
                ]);
            }
            $errorRegex = "Profil musi mieć od 3 do 15 liter, żadnych znaków specjalnych i cyfr.";
            return $this->redirectToRoute('edit', [
                    'subuser' => $currentSubuser,
                    'id' => $subuserFrontId,
                    'errorRegex' => $errorRegex
                ]);
        }
    }

    /**
     * @Route("/manageUser", name="manageUser")
     * @param Request $request
     * @return Response
     */
    public function manageUser(Request $request): Response
    {
        if ($request->getMethod() == 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('edit', [
                    'id' => $id,
                ]
            );
        }
        $currentUser = $this->getUser();
        $subusers = $this->subuserRepository->findBy(array('subaccountOf' => $currentUser));
        return $this->render(
            'user/manage.html.twig', [
                'subUsers' => $subusers
            ]
        );
    }

    /**
     * @Route("/chooseUser", name="chooseUser")
     * @param Request $request
     * @return Response
     */
    public function chooseUser(Request $request): Response
    {
        $currentUser = $this->getUser();
        if ($request->getMethod() == 'POST') {
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
        $currentSubuserId = $allSubusers[$subuserId]->getId();
        $session = $this->get('session');
        $session->set('filter', array(
            'subuserId' => $currentSubuserId
        ));

        return $this->redirectToRoute('browse', [
        ]);
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

        $value = "wojtek";
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