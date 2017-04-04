<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Dough\ThickCrustDough as Dough;

class ThickCrustDoughTest extends \PHPUnit_Framework_TestCase
{

    public function testDough()
    {
		$dough = new Dough();
        $this->assertEquals('ThickCrust style extra thick crust dough', $dough->toString());
	}
}
