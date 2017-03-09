<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\Beverage;

class DarkRoast extends Beverage
{

    public function DarkRoast()
    {
        $this->description = "Dark Roast Coffee";
    }

    public function cost()
    {
        return 0.99;
    }
}
