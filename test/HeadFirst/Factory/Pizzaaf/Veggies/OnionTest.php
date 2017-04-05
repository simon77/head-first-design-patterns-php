<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Veggies\Onion as Veggie;

class OnionTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggies()
    {
		$veggie = new Veggie();
        $this->assertEquals('Onion', $veggie->toString());
	}
}
