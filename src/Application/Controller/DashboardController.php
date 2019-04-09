<?php declare(strict_types=1);

namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class DashboardController extends AbstractController
{
    /**
     * @Route(path="/dashboard", name="DASHBOARD", methods={"GET"})
     */
    public function dashboard(): Response
    {
        return $this->render('dashboard/dashboard.html.twig');
    }
}
