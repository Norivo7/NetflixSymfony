<?php

namespace App\Controller;

use App\Entity\Profile;
use App\Repository\ProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    private ProfileRepository $profileRepository;
    private ManagerRegistry $doctrine;
    private RequestStack $requestStack;

    public function __construct(ProfileRepository $profileRepository, ManagerRegistry $doctrine, RequestStack $requestStack)
    {
        $this->doctrine = $doctrine;
        $this->profileRepository = $profileRepository;
        $this->requestStack = $requestStack;
    }

    // future image upload from disk as avatar

//    private function showImgDir(): array
//    {
//        $dir = "../public/images/netflix_avatars";
//
//        $ext_list = array("jpg","png");
//        $listImg = [];
//
//        $picDir = opendir($dir);
//            while ($file = readdir($picDir)) {
//                if ($file === '.' || $file === '..') {
//                    continue;
//                }
//            }
//            $listImg[] = $dir . '/' . $file;
//            return $listImg;
//    }

//      private function random_pic()
//      {
//          $dir = '../public/images/netflix_avatars';
//        $files = glob($dir . '/*.*');
//        $file = array_rand($files);
//        return $files[$file];
//      }




    private function getOtherProfiles(): array
    {
        if (!empty($this->requestStack)) {
            $profile = $this->requestStack->getSession()->get('filter');
        }
        $allProfiles = $this->profileRepository->findBy(array('subaccountOf' => $this->getUser()));
        $profileID = reset($profile);
        $currentProfile = $this->profileRepository->find($profileID);
        $profilePosition = array_keys($allProfiles, $currentProfile);
        unset($allProfiles[reset($profilePosition)]);
        return array_values($allProfiles);
    }

    private function getRandomAvatarUrl(): string
    {
        $images = array('https://i.imgur.com/zBr1CQ3.png','https://i.imgur.com/ih6xvXa.png','https://i.imgur.com/6ZIfuJG.png','https://i.imgur.com/QhKoEyB.png',
            'https://i.imgur.com/C39AF1P.png','https://i.imgur.com/ZvH6qpn.png','https://i.imgur.com/hYkzmZj.png','https://i.imgur.com/6FgZxbi.png');

        $key = array_rand($images);
        return $images[$key];
    }


    private function addDefaultProfileForUser($currentUser): void
    {

        $profile = new Profile();
        $profile->setName('Nowy');
        $profile->setAvatar($this->getRandomAvatarUrl());
        $profile->setSubaccountOf($currentUser);
        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($profile);
        $entityManager->flush();
    }


    /**
     * @Route("/chooseUser", name="chooseUser")
     * @param Request $request
     * @return Response
     */
    public function chooseUser(Request $request): Response
    {
        $currentUser = $this->getUser();
        $id = $request->request->get('id');
        if ($request->getMethod() === 'POST' &&  $id !== null ) {
            return $this->redirectToRoute('success', [
                    'id' => $id,
                ]
            );
        }
        return $this->render(
            'user/user.html.twig', [
                'subUsers' => $this->profileRepository->findBy(array('subaccountOf' => $currentUser))
            ]
        );
    }


    /**
     * @Route ("manageUser/add", name="add_profile")
     * @return Response
     */
    public function addProfile(): Response
    {
        $currentUser = $this->getUser();

        $profiles = $this->profileRepository->findBy(array('subaccountOf' => $currentUser));
        $profileCount = count($profiles);
        if ($profileCount < 5) {
            $this->addDefaultProfileForUser($currentUser);
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
     * @return Response
     */
    public function edit(Request $request): Response
    {
        $profileFrontId = $request->get('id');
        $errorRegex = "Profil musi mieć od 3 do 15 liter, żadnych znaków specjalnych i cyfr.";
        $user = $this->getUser();

        if ($request->getMethod() === 'POST') {
            $name = $request->request->get('name');
            return $this->redirectToRoute('update', [
                    'id' => $profileFrontId,
                    'name' => $name,

                ]
            );
        }

        $allProfiles = $this->profileRepository->findBy(array('subaccountOf' => $user));
        if (isset($profileFrontId) && $allProfiles[$profileFrontId] !== null) {
            $currentProfile = $allProfiles[$profileFrontId];
            return $this->render('user/edit.html.twig', [
                'profile' => $currentProfile,
                'id' => $profileFrontId,
//                'errorRegex' => $errorRegex
            ]);
        } else {

            return $this->render('user/edit.html.twig', [
                'error' => "Nie znaleziono użytkownika."
            ]);
        }

    }

    /**
     * @Route ("/manageUser/delete/{id}", name="deleteProfile")
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @return Response
     */
    public function delete(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $profileFrontId = $request->get('id');
        $allProfiles = $this->profileRepository->findBy(array('subaccountOf' => $user));
        $currentProfile = $allProfiles[$profileFrontId];
        $entityManager->remove($currentProfile);
        $entityManager->flush();
        return $this->redirectToRoute('manageUser');
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
        $profileFrontId = $request->get('id');
        $profileName = $request->get('name');

        $allProfiles = $this->profileRepository->findBy(array('subaccountOf' => $currentUser));

        $currentProfile = $allProfiles[$profileFrontId];
        if (!$currentProfile) {
            return $this->redirectToRoute('error', [
                'error' => '404: Nie znaleziono profilu.'
            ]);
        } else {
            $regex = "([a-zA-Z]{3,15}\s*)";
            if (preg_match($regex, $profileName)) {
                $currentProfile->setName($profileName);
                $entityManager->persist($currentProfile);
                $entityManager->flush();
                return $this->redirectToRoute('manageUser', [
                    'id' => $profileFrontId,
                    'profile' => $currentProfile
                ]);
            }
            $errorRegex = "Profil musi mieć od 3 do 15 liter, żadnych znaków specjalnych i cyfr.";
            return $this->redirectToRoute('edit', [
                    'id' => $profileFrontId,

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

        if ($request->getMethod() === 'POST') {
            $id = $request->request->get('id');
            return $this->redirectToRoute('edit', [
                    'id' => $id,
                ]
            );
        }
        $currentUser = $this->getUser();
        $profiles = $this->profileRepository->findBy(array('subaccountOf' => $currentUser));
        return $this->render(
            'user/manage.html.twig', [
                'subUsers' => $profiles
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

        $currentUserId = $this->getUser();
        $profileId = $request->get('id');
        $allProfiles = $this->profileRepository->findBy(array('subaccountOf' => $currentUserId));
        $currentProfileId = $allProfiles[$profileId]->getId();


        $this->requestStack->getSession()->set('filter', array(
            'profileId' => $currentProfileId
        ));

        return $this->redirectToRoute('browse', [
        ]);
    }

    /**
     * @Route("/changeProfile", name="changeProfile")
     * @param Request $request
     * @return Response
     */
    public function changeProfileAction(Request $request): Response
    {
        $profileIndex = $request->get('index');
        $otherProfiles = $this->getOtherProfiles();
        $currentProfileIndex = $otherProfiles[$profileIndex]->getId();
        $this->requestStack->getSession()->set('filter', array(
            'profileIndex' => $currentProfileIndex
        ));
        $route = $request->headers->get('referer');
        return $this->redirect($route);
    }
}