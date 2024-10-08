<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
//TODO: find better name, interface cruds in this folder

    #[Route('/admin', name: 'admin_panel')]
    public function index(): Response
    {
        $userRoles = $this->getUser()->getRoles();
        if (in_array("ROLE_ADMIN", $userRoles)) {
            return $this->render('admin/base.html.twig');
        }
        return $this->render('error/error.html.twig', [
            'error' => "403: Brak dostępu."
        ]);
    }


}