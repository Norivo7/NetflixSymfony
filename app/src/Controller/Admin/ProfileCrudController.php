<?php

namespace App\Controller\Admin;

use App\Entity\Profile;
use App\Form\ProfileType;
use App\Repository\ProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/profiles')]
class ProfileCrudController extends AbstractController
{
    #[Route('/', name: 'profile_crud_index', methods: ['GET'])]
    public function index(ProfileRepository $profileRepository): Response
    {
        return $this->render('admin/profile_crud/index.html.twig', [
            'profiles' => $profileRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'profile_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $profile = new Profile();
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($profile);
            $entityManager->flush();

            return $this->redirectToRoute('profile_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/profile_crud/new.html.twig', [
            'profile' => $profile,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'profile_crud_show', methods: ['GET'])]
    public function show(Profile $profile): Response
    {
        return $this->render('admin/profile_crud/show.html.twig', [
            'profile' => $profile,
        ]);
    }

    #[Route('/{id}/edit', name: 'profile_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Profile $profile, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProfileType::class, $profile);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('profile_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/profile_crud/edit.html.twig', [
            'profile' => $profile,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'profile_crud_delete', methods: ['POST'])]
    public function delete(Request $request, Profile $profile, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $profile->getId(), $request->request->get('_token'))) {
            $entityManager->remove($profile);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profile_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
