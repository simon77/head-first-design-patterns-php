<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\CondimentDecorator;

class Soy extends CondimentDecorator
{

    private $beverage = null;

    public function Soy(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    public function cost()
    {
        return 0.15 + $this->beverage->cost();
    }
}
