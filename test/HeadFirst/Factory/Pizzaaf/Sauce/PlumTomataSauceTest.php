<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Sauce\PlumTomatoSauce as Sauce;

class PlumTomatoSauceTest extends \PHPUnit_Framework_TestCase
{

    public function testSauce()
    {
		$sauce = new Sauce();
        $this->assertEquals('Tomato sauce with plum tomatoes', $sauce->toString());
	}
}
