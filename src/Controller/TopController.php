<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Menu\Matcher\Matcher;
use Knp\Menu\MenuFactory;
use Knp\Menu\Renderer\ListRenderer;


class TopController extends AbstractController
{
    /**
     * @Route("/", name="top")
     */
    public function index()
    {
        $factory = new MenuFactory();
        $menu = $factory->createItem('My menu');
        $menu->addChild('Home', array('uri' => '/'));
        $menu->addChild('Comments', array('uri' => '#comments'));
        $menu->addChild('Symfony', array('uri' => 'http://symfony.com/'));

        $renderer = new ListRenderer(new Matcher());

        return $this->render('top/index.html.twig', [
            'controller_name' => 'TopController',
            'next_url' => 'hello',
            'sideMenu' => $renderer->render($menu),
        ]);
    }
}
