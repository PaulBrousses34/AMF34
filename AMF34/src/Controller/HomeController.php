<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use App\Repository\EventsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(NewsRepository $newsRepository, EventsRepository $eventsRepository): Response
    {
        return $this->render('home/index.html.twig', [
        'latestNews' => $newsRepository->findLatestNews(),
        'latestEvents' => $eventsRepository->findLatestEvents(),
        ]);
    }
}
