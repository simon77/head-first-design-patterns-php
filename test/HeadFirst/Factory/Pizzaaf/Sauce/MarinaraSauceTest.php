<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Sauce\MarinaraSauce as Sauce;

class MarinaraSauceTest extends \PHPUnit_Framework_TestCase
{

    public function testSauce()
    {
		$sauce = new Sauce();
        $this->assertEquals('Marinara Sauce', $sauce->toString());
	}
}
