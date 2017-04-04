<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Clams\FrozenClams as Clams;

class FrozenClamsTest extends \PHPUnit_Framework_TestCase
{

    public function testClams()
    {
		$clams = new Clams();
        $this->assertEquals('Frozen Clams from Chesapeake Bay', $clams->toString());
	}
}
