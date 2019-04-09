<?php declare(strict_types=1);

namespace App\Domain\Sidebar\Link;

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
