<?php

namespace App\Domain\Sidebar\Link;

class EmployeeLink implements SidebarLink
{
    public function getName(): string
    {
        return 'employee';
    }

    public function getRoute(): string
    {
        return 'employee';
    }
}
