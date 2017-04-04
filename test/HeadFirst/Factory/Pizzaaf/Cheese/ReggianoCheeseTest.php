<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Cheese\ReggianoCheese as Cheese;

class ReggianoCheeseTest extends \PHPUnit_Framework_TestCase
{

    public function testCheese()
    {
		$cheese = new Cheese();
        $this->assertEquals('Reggiano Cheese', $cheese->toString());
	}
}
