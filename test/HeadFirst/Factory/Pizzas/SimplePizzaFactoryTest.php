<?php

namespace HeadFirst\Factory\Pizzas;

use HeadFirst\Factory\Pizzas\SimplePizzaFactory as SimplePizzaFactory;

class SimplePizzaFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testPizzas()
    {
		$factory = new SimplePizzaFactory();
		$this->assertInstanceOf('HeadFirst\Factory\Pizzas\CheesePizza', $factory->createPizza('cheese'));
        $this->assertInstanceOf('HeadFirst\Factory\Pizzas\ClamPizza', $factory->createPizza('clam'));
        $this->assertInstanceOf('HeadFirst\Factory\Pizzas\PepperoniPizza', $factory->createPizza('pepperoni'));
        $this->assertInstanceOf('HeadFirst\Factory\Pizzas\VeggiePizza', $factory->createPizza('veggie'));

        $this->assertNull($factory->createPizza('pineapple'));
	}
}
