<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\CheesePizza as Pizza;

class CheesePizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testPrepare()
    {
        $factory = \Mockery::mock('\HeadFirst\Factory\Pizzaaf\PizzaIngredientFactory');
        $factory->shouldReceive('createDough')->once()->ordered();
        $factory->shouldReceive('createSauce')->once()->ordered();
        $factory->shouldReceive('createCheese')->once()->ordered();

        $pizza = new Pizza($factory);

        $this->assertSame('Preparing Cheese Pizza', $pizza->prepare());
	}
}
