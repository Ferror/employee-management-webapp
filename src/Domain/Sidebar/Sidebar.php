<?php

namespace App\Domain\Sidebar;

use App\Domain\Sidebar\Link\AdvanceLink;
use App\Domain\Sidebar\Link\CompanyLink;
use App\Domain\Sidebar\Link\ConfigurationLink;
use App\Domain\Sidebar\Link\DashboardLink;
use App\Domain\Sidebar\Link\EmployeeLink;
use App\Domain\Sidebar\Link\PresenceLink;

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
//            new EmployeeLink(),
            new PresenceLink(),
            new DashboardLink(),
//            new CompanyLink(),
//            new ConfigurationLink(),
//            new AdvanceLink()
        ];
    }
}
