<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\NYStyleCheesePizza as CheesePizza;

class NYStyleCheesePizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testCheesePizza()
    {
		$pizza = new CheesePizza();
        $this->assertEquals('NY Style Sauce and Cheese Pizza', $pizza->getName());
        $preparingString = 'Preparing NY Style Sauce and Cheese Pizza'.PHP_EOL;
        $preparingString .= "Tossing dough...".PHP_EOL;
        $preparingString .= "Adding sauce...".PHP_EOL;
        $preparingString .= "Adding toppings: ".PHP_EOL;
        $preparingString .= '   Grated Reggiano Cheese'.PHP_EOL;

        $this->assertEquals($preparingString, $pizza->prepare());
        $this->assertEquals('Bake for 25 minutes at 350', $pizza->bake());
        $this->assertEquals('Cutting the pizza into diagonal slices', $pizza->cut());
        $this->assertEquals('Place pizza in official PizzaStore box', $pizza->box());
        $expectedString = '---- NY Style Sauce and Cheese Pizza ----'.PHP_EOL;
        $expectedString .= 'Thin Crust Dough'.PHP_EOL;
        $expectedString .= 'Marinara Sauce'.PHP_EOL;
        $expectedString .= 'Grated Reggiano Cheese'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());

	}
}
