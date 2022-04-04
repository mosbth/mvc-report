<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiceController extends AbstractController
{
    /**
     * @Route("/dice", name="dice-home")
     */
    public function home(): Response
    {
        $die = new \App\Dice\Dice();
        $data = [
            'die_value' => $die->roll(),
            'die_as_string' => $die->getAsString(),
        ];
        return $this->render('dice/home.html.twig', $data);
    }
}
