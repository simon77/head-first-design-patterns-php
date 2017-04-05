<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Veggies\Mushroom as Veggie;

class MushroomTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggies()
    {
		$veggie = new Veggie();
        $this->assertEquals('Mushrooms', $veggie->toString());
	}
}
