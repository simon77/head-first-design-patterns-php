<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\Beverage;

class Decaf extends Beverage
{

    public function Decaf()
    {
        $this->description = "Decaf Coffee";
    }

    public function cost()
    {
        return 1.05;
    }
}
