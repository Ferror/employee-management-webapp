<?php declare(strict_types=1);

namespace App\Domain\Sidebar\Link;

final class AdvanceLink implements SidebarLink
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
