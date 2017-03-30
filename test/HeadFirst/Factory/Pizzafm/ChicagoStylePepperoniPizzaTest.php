<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\ChicagoStylePepperoniPizza as PepperoniPizza;

class ChicagoStylePepperoniPizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testPepperoniPizza()
    {
		$pizza = new PepperoniPizza();
        $this->assertEquals('Chicago Style Pepperoni Pizza', $pizza->getName());
        $preparingString = 'Preparing Chicago Style Pepperoni Pizza'.PHP_EOL;
        $preparingString .= "Tossing dough...".PHP_EOL;
        $preparingString .= "Adding sauce...".PHP_EOL;
        $preparingString .= "Adding toppings: ".PHP_EOL;
        $preparingString .= '   Shredded Mozzarella Cheese'.PHP_EOL;
        $preparingString .= '   Black Olives'.PHP_EOL;
        $preparingString .= '   Spinach'.PHP_EOL;
        $preparingString .= '   Eggplant'.PHP_EOL;
        $preparingString .= '   Sliced Pepperoni'.PHP_EOL;

        $this->assertEquals($preparingString, $pizza->prepare());
        $this->assertEquals('Bake for 25 minutes at 350', $pizza->bake());
        $this->assertEquals('Cutting the pizza into square slices', $pizza->cut());
        $this->assertEquals('Place pizza in official PizzaStore box', $pizza->box());
        $expectedString = '---- Chicago Style Pepperoni Pizza ----'.PHP_EOL;
        $expectedString .= 'Extra Thick Crust Dough'.PHP_EOL;
        $expectedString .= 'Plum Tomato Sauce'.PHP_EOL;
        $expectedString .= 'Shredded Mozzarella Cheese'.PHP_EOL;
        $expectedString .= 'Black Olives'.PHP_EOL;
        $expectedString .= 'Spinach'.PHP_EOL;
        $expectedString .= 'Eggplant'.PHP_EOL;
        $expectedString .= 'Sliced Pepperoni'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());

	}
}
