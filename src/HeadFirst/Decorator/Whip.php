<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\Beverage;
use HeadFirst\Decorator\CondimentDecorator;

class Whip extends CondimentDecorator
{

    private $beverage = null;

    public function Whip(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost()
    {
        return 0.10 + $this->beverage->cost();
    }
}
