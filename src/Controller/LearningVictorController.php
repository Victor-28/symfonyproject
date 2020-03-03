<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningVictorController extends AbstractController
{
    /**
     * @Route("/learning/victor", name="learning_victor")
     */
    public function index()
    {
        return $this->render('learning_victor/index.html.twig', [
            'controller_name' => 'LearningVictorController',
        ]);
    }
}
