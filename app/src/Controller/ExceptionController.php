<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExceptionController extends AbstractController
{
    /**
     * @Route("/error", name="error")
     * @param Request $request
     * @return Response
     */
    public function handleError(Request $request): Response
    {
        return $this->render('error/error.html.twig');
    }
}