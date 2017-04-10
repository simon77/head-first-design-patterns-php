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

        $name = 'Cheese Pizza';
        $pizza = new Pizza($factory);
        $pizza->setName($name);

        $this->assertSame('Preparing '.$name, $pizza->prepare());
	}
}
