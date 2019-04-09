<?php declare(strict_types=1);

namespace Domain\Sidebar\Link;

final class PresenceLink implements SidebarLink
{
    public function getName(): string
    {
        return 'presence';
    }

    public function getRoute(): string
    {
        return 'PRESENCE';
    }
}
