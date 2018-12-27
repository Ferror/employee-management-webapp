<?php

namespace App\Domain\Sidebar\Link;

class CompanyLink implements SidebarLink
{
    public function getName(): string
    {
        return 'company';
    }

    public function getRoute(): string
    {
        return 'company';
    }
}
