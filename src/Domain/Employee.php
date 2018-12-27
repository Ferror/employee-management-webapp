<?php

namespace App\Domain;

class Employee
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
