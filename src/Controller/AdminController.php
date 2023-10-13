<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('api/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function IndexAction() : Response {
        return new Response("Kraai is a horrible AWS Engineer ". print_r($this->getUser(), true));
    }

    #[Route('/public', name: 'app_messages_public')]
    public function PublicAction() : Response {
        return $this->json(['message' => "The API doesn't require an access token to share this message."]);
    }

    #[Route('/protected', name: 'app_messages_protected')]
    public function ProtectedAction() : Response {
        return $this->json(['message' => "Oh my god they killed Maurits."]);
    }
}