<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\CardGame\CardGame;

class CardGameController extends AbstractController
{
    /**
     * @Route("/cardgame", name="card-home")
     */
    public function home(): Response
    {
        $game = new CardGame();
        $data = [
            'card' => $game->getCard(),
        ];
        return $this->render('card-game/home.html.twig', $data);
    }
}
