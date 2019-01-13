<?php

namespace App\Application\Controller;

use App\Domain\Sidebar\Sidebar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ComponentController extends AbstractController
{
    public function sidebar($path): Response
    {
        return $this->render('sidebar.html.twig', [
            'sidebar' => new Sidebar(),
            'path' => $path
        ]);
    }
}
