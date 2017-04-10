<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\VeggiePizza as Pizza;

class VeggiePizzaTest extends \PHPUnit_Framework_TestCase
{

    public function testPrepare()
    {
        $factory = \Mockery::mock('\HeadFirst\Factory\Pizzaaf\PizzaIngredientFactory');
        $factory->shouldReceive('createDough')->once()->ordered();
        $factory->shouldReceive('createSauce')->once()->ordered();
        $factory->shouldReceive('createCheese')->once()->ordered();
        $factory->shouldReceive('createVeggies')->once()->ordered();

        $name = 'Veggie Pizza';
        $pizza = new Pizza($factory);
        $pizza->setName($name);

        $this->assertSame('Preparing '.$name, $pizza->prepare());
	}
}
