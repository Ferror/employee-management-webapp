<?php declare(strict_types=1);

namespace Domain\Sidebar\Link;

final class DashboardLink implements SidebarLink
{
    public function getName() : string
    {
        return 'Dashboard';
    }

    public function getRoute() : string
    {
        return 'DASHBOARD';
    }
}
