<?php

namespace test\HeadFirst\Strategy;

use HeadFirst\Strategy\MallardDuck as MallardDuck;

/**
 * Malard test class
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

        $this->assertInstanceOf('HeadFirst\Strategy\Duck', $duck);
		$this->assertEquals("I'm a real Mallard duck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

}