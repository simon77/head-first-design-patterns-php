<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\Clams\FreshClams as Clams;

class FreshClamsTest extends \PHPUnit_Framework_TestCase
{

    public function testClams()
    {
		$clams = new Clams();
        $this->assertEquals('Fresh Clams from Long Island Sound', $clams->toString());
	}
}
