<?php

namespace App\Domain\Sidebar\Link;

class PresenceLink implements SidebarLink
{
    public function getName(): string
    {
        return 'presence';
    }

    public function getRoute(): string
    {
        return 'presence';
    }
}
