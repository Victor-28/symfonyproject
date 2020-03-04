<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LearningVictorController extends AbstractController
{
    /**
     * @Route("/victor", name="learning_victor")
     */
    public function index()
    {
        return $this->render('learning_victor/index.html.twig', [
            'controller_name' => 'LearningVictorController',
        ]);
    }
}
/*
 <?php

namespace App\Controller;

use App\Entity\AskName;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
/*public function index()
{

    //start session
    $session = new Session();

    //on button submit, set session name and redirect to homepage
    if(isset($_POST['submitName'])) {

        $session->set('username', $_POST['name']);

        return $this->redirectToRoute('AboutMeController');
    }

    //otherwise, go to controller
    return $this->render('form/index.html.twig');
}

}
 */