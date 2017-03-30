<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\ChicagoStyleClamPizza as ClamPizza;

class ChicagoStyleClamPizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testClamPizza()
    {
		$pizza = new ClamPizza();
        $this->assertEquals('Chicago Style Clam Pizza', $pizza->getName());
        $preparingString = 'Preparing Chicago Style Clam Pizza'.PHP_EOL;
        $preparingString .= "Tossing dough...".PHP_EOL;
        $preparingString .= "Adding sauce...".PHP_EOL;
        $preparingString .= "Adding toppings: ".PHP_EOL;
        $preparingString .= '   Shredded Mozzarella Cheese'.PHP_EOL;
        $preparingString .= '   Frozen Clams from Chesapeake Bay'.PHP_EOL;

        $this->assertEquals($preparingString, $pizza->prepare());
        $this->assertEquals('Bake for 25 minutes at 350', $pizza->bake());
        $this->assertEquals('Cutting the pizza into square slices', $pizza->cut());
        $this->assertEquals('Place pizza in official PizzaStore box', $pizza->box());
        $expectedString = '---- Chicago Style Clam Pizza ----'.PHP_EOL;
        $expectedString .= 'Extra Thick Crust Dough'.PHP_EOL;
        $expectedString .= 'Plum Tomato Sauce'.PHP_EOL;
        $expectedString .= 'Shredded Mozzarella Cheese'.PHP_EOL;
        $expectedString .= 'Frozen Clams from Chesapeake Bay'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());

	}
}