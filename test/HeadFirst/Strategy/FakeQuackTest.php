<?php

namespace test\HeadFirst\Strategy;

use HeadFirst\Strategy\FakeQuack as FakeQuack;

/**
 * FakeQuack test class
 */
class FakeQuackTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test FakeQuack behaviour
     *
     * @return void
     */
    public function testFakeQuack()
    {
        $quack = new FakeQuack();

        $this->assertInstanceOf('HeadFirst\Strategy\QuackBehaviour', $quack);
		$this->assertEquals('Qwak', $quack->quack());
    }

}