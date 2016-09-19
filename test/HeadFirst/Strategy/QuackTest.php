<?php

namespace test\HeadFirst\Strategy;

use HeadFirst\Strategy\Quack as Quack;

/**
 * Quack test class
 */
class QuackTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Quack behaviour
     *
     * @return void
     */
    public function testQuack()
    {
        $quack = new Quack();

        $this->assertInstanceOf('HeadFirst\Strategy\QuackBehaviour', $quack);
		$this->assertEquals('Quack', $quack->quack());
    }

}