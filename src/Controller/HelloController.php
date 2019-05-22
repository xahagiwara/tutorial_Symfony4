<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name}/{id}", name="hello")
     */
    public function index(Request $request, $name, $id)
    {
        $pass = $request->get('pass');

        $resource = [
            "name" => $name,
            "id" => $id,
            "pass" => $pass
        ];

        return $this->render('hello/index.html.twig', [
            'resouce' => $resource,
        ]);
    }
}
