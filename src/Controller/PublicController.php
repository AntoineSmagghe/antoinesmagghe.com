<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="redirectToIndex")
     */
    public function redirectToindex()
    {
        return $this->redirectToRoute("public");
    }

    /**
     * @Route("/{_locale}/", name="public", requirements={"_locale" : "en|fr"}, methods={"GET"})
     */
    public function index()
    {
        return $this->render('public/index.html.twig');
    }
}
