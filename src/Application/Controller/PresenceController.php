<?php

namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PresenceController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('base.html.twig');
    }
}
