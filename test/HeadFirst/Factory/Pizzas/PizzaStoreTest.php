<?php

namespace HeadFirst\Factory\Pizzas;

use HeadFirst\Factory\Pizzas\PizzaStore as PizzaStore;

class PizzaStoreTest extends \PHPUnit_Framework_TestCase
{

    public function testPizzas()
    {
        $pizza = \Mockery::mock('\HeadFirst\Factory\Pizzas\CheesePizza');
        $pizza->shouldReceive('prepare')->once()->ordered();
        $pizza->shouldReceive('bake')->once()->ordered();
        $pizza->shouldReceive('cut')->once()->ordered();
        $pizza->shouldReceive('box')->once()->ordered();

        $factory = \Mockery::mock('\HeadFirst\Factory\Pizzas\SimplePizzaFactory');
        $factory->shouldReceive('createPizza')->with('cheese')->andReturn($pizza);
		$store = new PizzaStore($factory);

        $this->assertInstanceOf('HeadFirst\Factory\Pizzas\CheesePizza', $store->orderPizza("cheese"));
	}
}
