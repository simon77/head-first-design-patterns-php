<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\ChicagoPizzaStore as PizzaStore;

class ChicagoPizzaStoreTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test Chicago Pizza Store
     *
     * @param string $type          The type of pizza e.g. cheese
     * @param string $expectedPizza The expected pizza object
     * @param string $expectedName  The expected name of the pizza
     *
     * @dataProvider pizzaProvider
     * @covers HeadFirst\Factory\Pizzaaf\ChicagoPizzaStore
     *
     * @return void
     */
    public function testCreatePizza($type, $expectedPizza, $expectedName)
    {
		$pizzaStore = new PizzaStore();

        $pizza = $pizzaStore->createPizza($type);
		$this->assertInstanceOf($expectedPizza, $pizza);
        $this->assertSame($expectedName, $pizza->getName());

//        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\ChicagoStyleClamPizza', $pizzaStore->orderPizza("clam"));
//
//        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\ChicagoStylePepperoniPizza', $pizzaStore->orderPizza("pepperoni"));
//
//        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\ChicagoStyleVeggiePizza', $pizzaStore->orderPizza("veggie"));
	}

    /**
     * Data provider for testing dependent pizza factory
     *
     * @return array
     */
    public function pizzaProvider()
    {
        return array(
            array('cheese', 'HeadFirst\Factory\Pizzaaf\CheesePizza', 'Chicago Style Cheese Pizza'),
            array('clam', 'HeadFirst\Factory\Pizzaaf\ClamPizza', 'Chicago Style Clam Pizza'),
            array('pepperoni', 'HeadFirst\Factory\Pizzaaf\PepperoniPizza', 'Chicago Style Pepperoni Pizza'),
            array('veggie', 'HeadFirst\Factory\Pizzaaf\VeggiePizza', 'Chicago Style Veggie Pizza')
        );
    }
}