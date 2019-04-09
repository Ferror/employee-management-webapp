<?php declare(strict_types=1);

namespace App\Domain\Sidebar\Link;

final class EmployeeLink implements SidebarLink
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
