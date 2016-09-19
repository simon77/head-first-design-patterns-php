<?php

namespace test\HeadFirst\Strategy;

use HeadFirst\Strategy\Squeak as Squeak;

/**
 * Squeak test class
 */
class SqueakTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Squeak behaviour
     *
     * @return void
     */
    public function testSqueak()
    {
        $quack = new Squeak();

        $this->assertInstanceOf('HeadFirst\Strategy\QuackBehaviour', $quack);
		$this->assertEquals('Squeak', $quack->quack());
    }

}