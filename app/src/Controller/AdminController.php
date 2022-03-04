<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{


    /**
     * @Route("/admin", name="admin_panel")
     * @return Response
     */
    public function index(): Response
    {

        $user = $this->getUser()->getRoles();
        if (in_array("ROLE_ADMIN", $user)) {
            return $this->render('admin/base.html.twig');
        } else {
            return $this->render('error/error.html.twig', [
                'error' => "403: Brak dostępu."
            ]);
        }
    }


}