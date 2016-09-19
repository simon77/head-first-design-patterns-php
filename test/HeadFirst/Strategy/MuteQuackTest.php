<?php

namespace test\HeadFirst\Strategy;

use HeadFirst\Strategy\MuteQuack as MuteQuack;

/**
 * MuteQuack test class
 */
class MuteQuackTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test MuteQuack behaviour
     *
     * @return void
     */
    public function testMuteQuack()
    {
        $quack = new MuteQuack();

        $this->assertInstanceOf('HeadFirst\Strategy\QuackBehaviour', $quack);
		$this->assertEquals('<< Silence >>', $quack->quack());
    }

}