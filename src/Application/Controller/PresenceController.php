<?php declare(strict_types=1);

namespace App\Application\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class PresenceController extends AbstractController
{
    /**
     * @Route(path="/presence", name="PRESENCE", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('employee/employee.html.twig');
    }
}
