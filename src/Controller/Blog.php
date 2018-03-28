<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 25/03/18
 * Time: 20:47
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Blog extends AbstractController
{

    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render("blog/index.html.twig", [
            'title' => 'Título de la página'
        ]);
    }
}