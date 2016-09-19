<?php

namespace test\HeadFirst\Strategy;

use HeadFirst\Strategy\RedHeadDuck as RedHeadDuck;

/**
 * Malard test class
 */
class RedHeadDuckTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test RedHead
     *
     * @return void
     */
    public function testRedHeadDuck()
    {
        $duck = new RedHeadDuck();

        $this->assertInstanceOf('HeadFirst\Strategy\Duck', $duck);
		$this->assertEquals("I'm a real Red Headed duck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

}