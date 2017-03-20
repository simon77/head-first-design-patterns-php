<?php

namespace HeadFirst\Factory\Pizzas;

use HeadFirst\Factory\Pizzas\ClamPizza as ClamPizza;

class ClamPizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testClamPizza()
    {
		$pizza = new ClamPizza();
        $this->assertEquals('Clam Pizza', $pizza->getName());
        $this->assertEquals('Preparing Clam Pizza', $pizza->prepare());
        $this->assertEquals('Baking Clam Pizza', $pizza->bake());
        $this->assertEquals('Cutting Clam Pizza', $pizza->cut());
        $this->assertEquals('Boxing Clam Pizza', $pizza->box());
        $expectedString = '---- Clam Pizza ----'.PHP_EOL;
        $expectedString .= 'Thin crust'.PHP_EOL;
        $expectedString .= 'White garlic sauce'.PHP_EOL;
        $expectedString .= 'Clams'.PHP_EOL;
        $expectedString .= 'Grated parmesan cheese'.PHP_EOL;
        $this->assertEquals($expectedString, $pizza->toString());

	}
}
