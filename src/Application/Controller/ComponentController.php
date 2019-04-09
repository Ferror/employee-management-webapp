<?php declare(strict_types=1);

namespace Application\Controller;

use Domain\Sidebar\Logo;
use Domain\Sidebar\Sidebar;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ComponentController extends AbstractController
{
    public function sidebar($path): Response
    {
        return $this->render('sidebar.html.twig', [
            'sidebar' => new Sidebar(new Logo()),
            'path' => $path
        ]);
    }

    /**
     * @Route(path="/")
     */
    public function index() : Response
    {
        return $this->render('base.html.twig');
    }
}
