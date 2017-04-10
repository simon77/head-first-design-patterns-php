<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\NYPizzaStore as PizzaStore;

class NYPizzaStoreTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test NY Pizza Store
     *
     * @param string $type          The type of pizza e.g. cheese
     * @param string $expectedPizza The expected pizza object
     * @param string $expectedName  The expected name of the pizza
     *
     * @dataProvider pizzaProvider
     * @covers HeadFirst\Factory\Pizzaaf\NYPizzaStore
     *
     * @return void
     */
    public function testCreatePizza($type, $expectedPizza, $expectedName)
    {
		$pizzaStore = new PizzaStore();

        $pizza = $pizzaStore->createPizza($type);
		$this->assertInstanceOf($expectedPizza, $pizza);
        $this->assertSame($expectedName, $pizza->getName());

	}

    /**
     * Data provider for testing dependent pizza factory
     *
     * @return array
     */
    public function pizzaProvider()
    {
        return array(
            array('cheese', 'HeadFirst\Factory\Pizzaaf\CheesePizza', 'New York Style Cheese Pizza'),
            array('clam', 'HeadFirst\Factory\Pizzaaf\ClamPizza', 'New York Style Clam Pizza'),
            array('pepperoni', 'HeadFirst\Factory\Pizzaaf\PepperoniPizza', 'New York Style Pepperoni Pizza'),
            array('veggie', 'HeadFirst\Factory\Pizzaaf\VeggiePizza', 'New York Style Veggie Pizza')
        );
    }
}