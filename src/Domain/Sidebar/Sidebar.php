<?php declare(strict_types=1);

namespace Domain\Sidebar;

use Domain\Sidebar\Link\AdvanceLink;
use Domain\Sidebar\Link\CompanyLink;
use Domain\Sidebar\Link\ConfigurationLink;
use Domain\Sidebar\Link\DashboardLink;
use Domain\Sidebar\Link\EmployeeLink;
use Domain\Sidebar\Link\PresenceLink;

class Sidebar
{
    private $logo;

    public function __construct(Logo $logo)
    {
        $this->logo = $logo;
    }

    public function logo(): Logo
    {
        return $this->logo;
    }

    public function navigation(): array
    {
        return [
            new EmployeeLink(),
            new PresenceLink(),
            new DashboardLink(),
            new CompanyLink(),
            new ConfigurationLink(),
            new AdvanceLink()
        ];
    }
}
