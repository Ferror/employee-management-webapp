<?php

namespace App\Domain\Sidebar\Link;

class ConfigurationLink implements SidebarLink
{
    public function getName(): string
    {
        return 'configuration';
    }

    public function getRoute(): string
    {
        return 'configuration';
    }
}
