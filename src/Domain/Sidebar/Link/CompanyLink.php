<?php declare(strict_types=1);

namespace Domain\Sidebar\Link;

final class CompanyLink implements SidebarLink
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
