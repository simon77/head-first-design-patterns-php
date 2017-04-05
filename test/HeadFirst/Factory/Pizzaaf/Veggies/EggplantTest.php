<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Veggies\Eggplant as Veggie;

class EggplantTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggies()
    {
		$veggie = new Veggie();
        $this->assertEquals('Eggplant', $veggie->toString());
	}
}
