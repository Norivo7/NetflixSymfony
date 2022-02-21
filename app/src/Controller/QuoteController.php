<?php

namespace App\Controller;

use App\Repository\QuoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuoteController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render(
            'home/index.html.twig'
        );
    }

    /**
     * @Route("/user", name="user")
     * @return Response
     */
    public function user(): Response
    {
        return $this->render(
            'user/user.html.twig'
        );
    }


    /**
     * @Route("/quotes", name="quotes")
     */
    public function quote(
        QuoteRepository $quoteRepository
    )
    : Response {

        return $this->render(
            'quote/index.html.twig',
            [
                'quotes' => $quoteRepository->findAll(),
            ]
        );
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $request
     * @return Response
     */
    public function custom(Request $request){
        $name = $request->get('name');

        return $this->render('home/custom.html.twig', [
            'name' => $name
        ]);
    }
}
