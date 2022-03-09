<?php

namespace App\Controller\Admin;

use App\Entity\Subuser;
use App\Form\SubuserType;
use App\Repository\SubuserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/subusers')]
class SubuserCrudController extends AbstractController
{
    #[Route('/', name: 'subuser_crud_index', methods: ['GET'])]
    public function index(SubuserRepository $subuserRepository): Response
    {
        return $this->render('admin/subuser_crud/index.html.twig', [
            'subusers' => $subuserRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'subuser_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $subuser = new Subuser();
        $form = $this->createForm(SubuserType::class, $subuser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($subuser);
            $entityManager->flush();

            return $this->redirectToRoute('subuser_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/subuser_crud/new.html.twig', [
            'subuser' => $subuser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'subuser_crud_show', methods: ['GET'])]
    public function show(Subuser $subuser): Response
    {
        return $this->render('admin/subuser_crud/show.html.twig', [
            'subuser' => $subuser,
        ]);
    }

    #[Route('/{id}/edit', name: 'subuser_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Subuser $subuser, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SubuserType::class, $subuser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('subuser_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/subuser_crud/edit.html.twig', [
            'subuser' => $subuser,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'subuser_crud_delete', methods: ['POST'])]
    public function delete(Request $request, Subuser $subuser, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $subuser->getId(), $request->request->get('_token'))) {
            $entityManager->remove($subuser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('subuser_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
