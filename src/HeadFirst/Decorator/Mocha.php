<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\CondimentDecorator;

class Mocha extends CondimentDecorator
{

    private $beverage = null;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost()
    {
        return 0.20 + $this->beverage->cost();
    }
}
