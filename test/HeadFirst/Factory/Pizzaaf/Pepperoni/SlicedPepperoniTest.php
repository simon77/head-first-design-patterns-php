<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Pepperoni\SlicedPepperoni as Pepperoni;

class SlicedPepperoniTest extends \PHPUnit_Framework_TestCase
{

    public function testPepperoni()
    {
		$pepperoni = new Pepperoni();
        $this->assertEquals('Sliced Pepperoni', $pepperoni->toString());
	}
}
