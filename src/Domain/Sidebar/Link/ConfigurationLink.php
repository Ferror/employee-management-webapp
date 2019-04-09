<?php declare(strict_types=1);

namespace Domain\Sidebar\Link;

final class ConfigurationLink implements SidebarLink
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
