<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\MarquePage;

class MarquePageController extends AbstractController
{
    /**
     * @Route("/marque/page", name="app_marque_page")
     */
    public function index(): Response
    {
        $marques_page = $this->getDoctrine()->getRepository(MarquePage::class)->findAll();


        return $this->render('marque_page/index.html.twig', [
            'controller_name' => 'MarquePageController',
            'marque_page' => $marques_page,
        ]);
    }
}
