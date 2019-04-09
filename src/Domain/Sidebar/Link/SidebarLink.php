<?php declare(strict_types=1);

namespace App\Domain\Sidebar\Link;

interface SidebarLink
{
    public function getName() : string;
    public function getRoute() : string;
}
