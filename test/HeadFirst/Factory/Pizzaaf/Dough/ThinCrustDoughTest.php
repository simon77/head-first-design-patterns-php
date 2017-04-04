<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Dough\ThinCrustDough as Dough;

class ThinCrustDoughTest extends \PHPUnit_Framework_TestCase
{

    public function testDough()
    {
		$dough = new Dough();
        $this->assertEquals('Thin Crust Dough', $dough->toString());
	}
}
