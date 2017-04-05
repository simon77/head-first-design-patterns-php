<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Veggies\Garlic as Veggie;

class GarlicTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggies()
    {
		$veggie = new Veggie();
        $this->assertEquals('Garlic', $veggie->toString());
	}
}
