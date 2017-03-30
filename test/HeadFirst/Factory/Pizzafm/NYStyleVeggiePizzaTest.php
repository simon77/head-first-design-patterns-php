<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\NYStyleVeggiePizza as VeggiePizza;

class NYStyleVeggiePizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggiePizza()
    {
		$pizza = new VeggiePizza();
        $this->assertEquals('NY Style Veggie Pizza', $pizza->getName());
        $preparingString = 'Preparing NY Style Veggie Pizza'.PHP_EOL;
        $preparingString .= "Tossing dough...".PHP_EOL;
        $preparingString .= "Adding sauce...".PHP_EOL;
        $preparingString .= "Adding toppings: ".PHP_EOL;
        $preparingString .= '   Grated Reggiano Cheese'.PHP_EOL;
        $preparingString .= '   Garlic'.PHP_EOL;
        $preparingString .= '   Onion'.PHP_EOL;
        $preparingString .= '   Mushrooms'.PHP_EOL;
        $preparingString .= '   Red Pepper'.PHP_EOL;

        $this->assertEquals($preparingString, $pizza->prepare());
        $this->assertEquals('Bake for 25 minutes at 350', $pizza->bake());
        $this->assertEquals('Cutting the pizza into diagonal slices', $pizza->cut());
        $this->assertEquals('Place pizza in official PizzaStore box', $pizza->box());
        $expectedString = '---- NY Style Veggie Pizza ----'.PHP_EOL;
        $expectedString .= 'Thin Crust Dough'.PHP_EOL;
        $expectedString .= 'Marinara Sauce'.PHP_EOL;
        $expectedString .= 'Grated Reggiano Cheese'.PHP_EOL;
        $expectedString .= 'Garlic'.PHP_EOL;
        $expectedString .= 'Onion'.PHP_EOL;
        $expectedString .= 'Mushrooms'.PHP_EOL;
        $expectedString .= 'Red Pepper'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());
	}
}
