<?php

namespace App\Domain\Sidebar;

use App\Domain\Sidebar\Link\AdvanceLink;
use App\Domain\Sidebar\Link\CompanyLink;
use App\Domain\Sidebar\Link\ConfigurationLink;
use App\Domain\Sidebar\Link\EmployeeLink;
use App\Domain\Sidebar\Link\PresenceLink;

class Sidebar
{
    public function navigation()
    {
        return [
            new EmployeeLink(),
            new PresenceLink(),
            new CompanyLink(),
            new ConfigurationLink(),
            new AdvanceLink()
        ];
    }
}
