<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
   #[Route('/contact', name: 'contact')]
   public function index(): Response
   {
      return $this->render('pages/contact/index.html.twig', [
         'controller_name' => 'ContactController',
      ]);
   }
}
