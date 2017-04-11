<?php

namespace HeadFirst\Adapter\Ducks;

use HeadFirst\Adapter\Ducks\MallardDuck as MallardDuck;

/**
 * Mallard test class
 */
class MallardDuckTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Mallard
     *
     * @return void
     */
    public function testMallardDuck()
    {
        $duck = new MallardDuck();

        $this->assertInstanceOf('HeadFirst\Adapter\Ducks\Duck', $duck);
		$this->assertEquals("Quack", $duck->quack());
        $this->assertEquals("I'm flying", $duck->fly());
    }

}