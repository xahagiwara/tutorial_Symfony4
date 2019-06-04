<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TopController extends AbstractController
{
    /**
     * @Route("/", name="top")
     */
    public function index()
    {
        return $this->render('top/index.html.twig', [
            'controller_name' => 'TopController',
            'next_url' => 'hello'
        ]);
    }
}
