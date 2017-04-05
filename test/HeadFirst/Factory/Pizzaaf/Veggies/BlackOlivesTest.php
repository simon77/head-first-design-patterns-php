<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Veggies\BlackOlives as Veggie;

class BlackOlivesTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggies()
    {
		$veggie = new Veggie();
        $this->assertEquals('Black Olives', $veggie->toString());
	}
}
