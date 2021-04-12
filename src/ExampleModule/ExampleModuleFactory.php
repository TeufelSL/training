<?php

declare(strict_types=1);

namespace App\ExampleModule;

use App\ExampleModule\Domain\Adder;
use App\ExampleModule\Domain\AdderInterface;
use Gacela\AbstractFactory;

final class ExampleModuleFactory extends AbstractFactory
{
    public function createAdder(): AdderInterface
    {
        return new Adder();
    }
}
