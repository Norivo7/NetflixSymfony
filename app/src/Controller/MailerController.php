<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController
{
    /**
    * @Route("/email")
    */
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('symfony@netflix.com')
            ->to('you@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

//        /** @var Symfony\Component\Mailer\SentMessage $sentEmail */
//        $sentEmail = $mailer->send($email);
        // $messageId = $sentEmail->getMessageId();

        // ...
    }
}