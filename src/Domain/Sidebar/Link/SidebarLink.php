<?php

namespace App\Domain\Sidebar\Link;

interface SidebarLink
{
    public function getName();
    public function getRoute();
}
