<?php

namespace HeadFirst\Factory\Pizzas;

use HeadFirst\Factory\Pizzas\VeggiePizza as VeggiePizza;

class VeggiePizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggiePizza()
    {
		$pizza = new VeggiePizza();
        $this->assertEquals('Veggie Pizza', $pizza->getName());
        $this->assertEquals('Preparing Veggie Pizza', $pizza->prepare());
        $this->assertEquals('Baking Veggie Pizza', $pizza->bake());
        $this->assertEquals('Cutting Veggie Pizza', $pizza->cut());
        $this->assertEquals('Boxing Veggie Pizza', $pizza->box());
        $expectedString = '---- Veggie Pizza ----'.PHP_EOL;
        $expectedString .= 'Crust'.PHP_EOL;
        $expectedString .= 'Marinara sauce'.PHP_EOL;
        $expectedString .= 'Shredded mozzarella'.PHP_EOL;
        $expectedString .= 'Grated parmesan'.PHP_EOL;
        $expectedString .= 'Diced onion'.PHP_EOL;
        $expectedString .= 'Sliced mushrooms'.PHP_EOL;
        $expectedString .= 'Sliced red pepper'.PHP_EOL;
        $expectedString .= 'Sliced black olives'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());

	}
}
