<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\NYStyleClamPizza as ClamPizza;

class NYStyleClamPizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testClamPizza()
    {
		$pizza = new ClamPizza();
        $this->assertEquals('NY Style Clam Pizza', $pizza->getName());
        $preparingString = 'Preparing NY Style Clam Pizza'.PHP_EOL;
        $preparingString .= "Tossing dough...".PHP_EOL;
        $preparingString .= "Adding sauce...".PHP_EOL;
        $preparingString .= "Adding toppings: ".PHP_EOL;
        $preparingString .= '   Grated Reggiano Cheese'.PHP_EOL;
        $preparingString .= '   Fresh Clams from Long Island Sound'.PHP_EOL;

        $this->assertEquals($preparingString, $pizza->prepare());
        $this->assertEquals('Bake for 25 minutes at 350', $pizza->bake());
        $this->assertEquals('Cutting the pizza into diagonal slices', $pizza->cut());
        $this->assertEquals('Place pizza in official PizzaStore box', $pizza->box());
        $expectedString = '---- NY Style Clam Pizza ----'.PHP_EOL;
        $expectedString .= 'Thin Crust Dough'.PHP_EOL;
        $expectedString .= 'Marinara Sauce'.PHP_EOL;
        $expectedString .= 'Grated Reggiano Cheese'.PHP_EOL;
        $expectedString .= 'Fresh Clams from Long Island Sound'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());

	}
}
