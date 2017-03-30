<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\ChicagoStyleVeggiePizza as VeggiePizza;

class ChicagoStyleVeggiePizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testVeggiePizza()
    {
		$pizza = new VeggiePizza();
        $this->assertEquals('Chicago Deep Dish Veggie Pizza', $pizza->getName());
        $preparingString = 'Preparing Chicago Deep Dish Veggie Pizza'.PHP_EOL;
        $preparingString .= "Tossing dough...".PHP_EOL;
        $preparingString .= "Adding sauce...".PHP_EOL;
        $preparingString .= "Adding toppings: ".PHP_EOL;
        $preparingString .= '   Shredded Mozzarella Cheese'.PHP_EOL;
        $preparingString .= '   Black Olives'.PHP_EOL;
        $preparingString .= '   Spinach'.PHP_EOL;
        $preparingString .= '   Eggplant'.PHP_EOL;

        $this->assertEquals($preparingString, $pizza->prepare());
        $this->assertEquals('Bake for 25 minutes at 350', $pizza->bake());
        $this->assertEquals('Cutting the pizza into square slices', $pizza->cut());
        $this->assertEquals('Place pizza in official PizzaStore box', $pizza->box());
        $expectedString = '---- Chicago Deep Dish Veggie Pizza ----'.PHP_EOL;
        $expectedString .= 'Extra Thick Crust Dough'.PHP_EOL;
        $expectedString .= 'Plum Tomato Sauce'.PHP_EOL;
        $expectedString .= 'Shredded Mozzarella Cheese'.PHP_EOL;
        $expectedString .= 'Black Olives'.PHP_EOL;
        $expectedString .= 'Spinach'.PHP_EOL;
        $expectedString .= 'Eggplant'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());
	}
}
