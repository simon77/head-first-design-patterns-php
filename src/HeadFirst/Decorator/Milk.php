<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\Beverage;
use HeadFirst\Decorator\CondimentDecorator;

class Milk extends CondimentDecorator
{

    private $beverage = null;

    public function Milk(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Milk";
    }

    public function cost()
    {
        return 0.10 + $this->beverage->cost();
    }
}
