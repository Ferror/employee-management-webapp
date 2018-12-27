<?php

namespace App\Controller;

use App\Domain\Sidebar\Sidebar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ComponentController extends AbstractController
{
    public function sidebar()
    {
        return $this->render('sidebar.html.twig', [
            'sidebar' => new Sidebar()
        ]);
    }
}
