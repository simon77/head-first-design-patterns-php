<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Cheese\MozzarellaCheese as Cheese;

class MozzarellaCheeseTest extends \PHPUnit_Framework_TestCase
{

    public function testCheese()
    {
		$cheese = new Cheese();
        $this->assertEquals('Shredded Mozzarella', $cheese->toString());
	}
}
