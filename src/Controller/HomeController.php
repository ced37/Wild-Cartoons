<?php

namespace App\Controller;

use App\Repository\ProgramRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(ProgramRepository $programRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'project_name' => 'Wild-Cartoons',
            'programs' => $programRepository->findBy(array(), array('id' => 'DESC'))
        ]);
    }
}
