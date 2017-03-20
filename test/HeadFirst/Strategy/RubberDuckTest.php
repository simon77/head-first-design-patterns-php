<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\RubberDuck as RubberDuck;

/**
 * Rubber test class
 */
class RubberDuckTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Rubber
     *
     * @return void
     */
    public function testRubberDuck()
    {
        $duck = new RubberDuck();

        $this->assertInstanceOf('HeadFirst\Strategy\Duck', $duck);
		$this->assertEquals("I'm a rubber duckie", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

}