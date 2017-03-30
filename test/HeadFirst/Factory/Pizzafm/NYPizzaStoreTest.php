<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\NYPizzaStore as NYPizzaStore;

class NYPizzaStoreTest extends \PHPUnit_Framework_TestCase
{

    public function testNYPizzaStore()
    {
		$pizzaStore = new NYPizzaStore();

        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\NYStyleCheesePizza', $pizzaStore->orderPizza("cheese"));

        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\NYStyleClamPizza', $pizzaStore->orderPizza("clam"));

        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\NYStylePepperoniPizza', $pizzaStore->orderPizza("pepperoni"));

        $this->assertInstanceOf('HeadFirst\Factory\Pizzafm\NYStyleVeggiePizza', $pizzaStore->orderPizza("veggie"));
	}
}
