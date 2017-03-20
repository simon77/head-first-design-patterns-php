<?php

namespace HeadFirst\Factory\Pizzas;

use HeadFirst\Factory\Pizzas\CheesePizza as CheesePizza;

class CheesePizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testCheesePizza()
    {
		$pizza = new CheesePizza();
        $this->assertEquals('Cheese Pizza', $pizza->getName());
        $this->assertEquals('Preparing Cheese Pizza', $pizza->prepare());
        $this->assertEquals('Baking Cheese Pizza', $pizza->bake());
        $this->assertEquals('Cutting Cheese Pizza', $pizza->cut());
        $this->assertEquals('Boxing Cheese Pizza', $pizza->box());
        $expectedString = '---- Cheese Pizza ----'.PHP_EOL;
        $expectedString .= 'Regular Crust'.PHP_EOL;
        $expectedString .= 'Marinara Pizza Sauce'.PHP_EOL;
        $expectedString .= 'Fresh Mozzarella'.PHP_EOL;
        $expectedString .= 'Parmesan'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());

	}
}
