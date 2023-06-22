<?php

namespace App\Controller;

use Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Router;
use Twig\Environment;

class RedirectionController
{
    public function __construct
    (
        private RequestStack $request,
    )
    {
        $this->request= $request;
    }

//    TODO: separate redirection func to this
    public function handleRegisterRedirect()
    {
        if ($this->request->getMethod() === 'POST' && $this->request->getCurrentRequest()->get('email') !== null) {
            $email = $this->request->get('email');
            return $this->redirectToRoute('app_register', [
                'email' => $email,
            ]);
        }
    }

    public function handleProfileRedirect()
    {
        if ($this->request->getCurrentRequest()->getMethod() === 'POST' && $this->request->getCurrentRequest()->get('email') !== null) {
            $id = $this->request->getCurrentRequest()->get('id');
            dump($id);
            return $this->redirectToRoute('app_register', [
                'id' => $id,
            ]);
        }
    }
}