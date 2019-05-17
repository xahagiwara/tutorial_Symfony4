<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name}/{id}", name="hello")
     */
    public function index($name, $id)
    {
        $resource = [
                "name" => $name,
                "id" => $id,
                ];

        return $this->render('hello/index.html.twig', [
            'resouce' => $resource,
        ]);
    }
}
