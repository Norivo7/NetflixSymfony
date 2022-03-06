<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieType;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/movies')]
class MovieCrudController extends AbstractController
{
    #[Route('/', name: 'app_movie_crud_index', methods: ['GET'])]
    public function index(MovieRepository $movieRepository): Response
    {
        return $this->render('admin/movie_crud/index.html.twig', [
            'movies' => $movieRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_movie_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $movie = new Movie();
        $form = $this->createForm(MovieType::class, $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($movie);
            $entityManager->flush();

            return $this->redirectToRoute('app_movie_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/movie_crud/new.html.twig', [
            'movie' => $movie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_movie_crud_show', methods: ['GET'])]
    public function show(Movie $movie): Response
    {
        return $this->render('admin/movie_crud/show.html.twig', [
            'movie' => $movie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_movie_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Movie $movie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MovieType::class, $movie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_movie_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/movie_crud/edit.html.twig', [
            'movie' => $movie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_movie_crud_delete', methods: ['POST'])]
    public function delete(Request $request, Movie $movie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$movie->getId(), $request->request->get('_token'))) {
            $entityManager->remove($movie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_movie_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
