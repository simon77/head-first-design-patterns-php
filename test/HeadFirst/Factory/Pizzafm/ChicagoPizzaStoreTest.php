<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\ChicagoPizzaStore as ChicagoPizzaStore;

class ChicagoPizzaStoreTest extends \PHPUnit_Framework_TestCase
{

    public function testChicagoPizzaStore()
    {
		$pizzaStore = new ChicagoPizzaStore();

		$this->assertInstanceOf('HeadFirst\Factory\Pizzafm\ChicagoStyleCheesePizza', $pizzaStore->orderPizza("cheese"));

        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\ChicagoStyleClamPizza', $pizzaStore->orderPizza("clam"));

        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\ChicagoStylePepperoniPizza', $pizzaStore->orderPizza("pepperoni"));

        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\ChicagoStyleVeggiePizza', $pizzaStore->orderPizza("veggie"));
	}
}
