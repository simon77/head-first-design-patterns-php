<?php

namespace test\HeadFirst\Strategy;

use \HeadFirst\Strategy\DecoyDuck as DecoyDuck;

/**
 * Decoy test class
 */
class DecoyDuckTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Decoy
     *
     * @return void
     */
    public function testDecoyDuck()
    {
        $duck = new DecoyDuck();

        $this->assertInstanceOf('HeadFirst\Strategy\Duck', $duck);
		$this->assertEquals("I'm a duck Decoy", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

}