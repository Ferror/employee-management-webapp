<?php declare(strict_types=1);

namespace App\Domain;

final class Employee
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
