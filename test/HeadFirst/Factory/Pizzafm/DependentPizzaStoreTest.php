<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\DependentPizzaStore as DependentPizzaStore;

class DependentPizzaStoreTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test Dependent Pizza Store
     *
     * @param integer $style         The style of pizza e.g. New York
     * @param string  $type          The type of pizza e.g. cheese
     * @param string  $expectedPizza The expected pizza object
     *
     * @dataProvider pizzaProvider
     * @covers HeadFirst\Factory\Pizzafm\DependentPizzaStore
     *
     * @return void
     */
    public function testDependentPizzaStore($style, $type, $expectedPizza)
    {
		$pizzaStore = new DependentPizzaStore();

        $this->assertInstanceOf($expectedPizza, $pizzaStore->createPizza($style, $type));
	}

    /**
     * Data provider for testing dependent pizza factory
     *
     * @return array
     */
    public function pizzaProvider()
    {
        return array(
            array('NY', 'cheese', 'HeadFirst\Factory\Pizzafm\NYStyleCheesePizza'),
            array('NY', 'clam', 'HeadFirst\Factory\Pizzafm\NYStyleClamPizza'),
            array('NY', 'pepperoni', 'HeadFirst\Factory\Pizzafm\NYStylePepperoniPizza'),
            array('NY', 'veggie', 'HeadFirst\Factory\Pizzafm\NYStyleVeggiePizza'),
            array('Chicago', 'cheese', 'HeadFirst\Factory\Pizzafm\ChicagoStyleCheesePizza'),
            array('Chicago', 'clam', 'HeadFirst\Factory\Pizzafm\ChicagoStyleClamPizza'),
            array('Chicago', 'pepperoni', 'HeadFirst\Factory\Pizzafm\ChicagoStylePepperoniPizza'),
            array('Chicago', 'veggie', 'HeadFirst\Factory\Pizzafm\ChicagoStyleVeggiePizza')
        );
    }
}
