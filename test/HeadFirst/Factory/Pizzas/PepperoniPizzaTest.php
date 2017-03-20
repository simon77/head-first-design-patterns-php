<?php

namespace HeadFirst\Factory\Pizzas;

use HeadFirst\Factory\Pizzas\PepperoniPizza as PepperoniPizza;

class PepperoniPizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testPepperoniPizza()
    {
		$pizza = new PepperoniPizza();
        $this->assertEquals('Pepperoni Pizza', $pizza->getName());
        $this->assertEquals('Preparing Pepperoni Pizza', $pizza->prepare());
        $this->assertEquals('Baking Pepperoni Pizza', $pizza->bake());
        $this->assertEquals('Cutting Pepperoni Pizza', $pizza->cut());
        $this->assertEquals('Boxing Pepperoni Pizza', $pizza->box());
        $expectedString = '---- Pepperoni Pizza ----'.PHP_EOL;
        $expectedString .= 'Crust'.PHP_EOL;
        $expectedString .= 'Marinara sauce'.PHP_EOL;
        $expectedString .= 'Sliced Pepperoni'.PHP_EOL;
        $expectedString .= 'Sliced Onion'.PHP_EOL;
        $expectedString .= 'Grated parmesan cheese'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());
	}
}
