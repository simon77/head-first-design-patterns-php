<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\Beverage;

class HouseBlend extends Beverage
{

    public function HouseBlend()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost()
    {
        return 0.89;
    }
}
