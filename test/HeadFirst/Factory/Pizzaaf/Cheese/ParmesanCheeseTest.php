<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Cheese\ParmesanCheese as Cheese;

class ParmesanCheeseTest extends \PHPUnit_Framework_TestCase
{

    public function testCheese()
    {
		$cheese = new Cheese();
        $this->assertEquals('Shredded Parmesan', $cheese->toString());
	}
}
