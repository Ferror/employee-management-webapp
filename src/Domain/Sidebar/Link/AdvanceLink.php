<?php

namespace App\Domain\Sidebar\Link;

class AdvanceLink implements SidebarLink
{
    public function getName(): string
    {
        return 'advance';
    }

    public function getRoute(): string
    {
        return 'advance';
    }
}
