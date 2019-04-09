<?php declare(strict_types=1);

namespace Domain\Sidebar\Link;

interface SidebarLink
{
    public function getName() : string;
    public function getRoute() : string;
}
