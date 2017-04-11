<?php

namespace HeadFirst\Adapter\Ducks;

use HeadFirst\Adapter\Ducks\TurkeyAdapter as TurkeyAdapter;

/**
 * Turkey Adapter test class
 */
class TurkeyAdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Mallard
     *
     * @return void
     */
    public function testTurkeyAdapter()
    {
        $turkey = new WildTurkey();
        $duck = new TurkeyAdapter($turkey);

        $this->assertInstanceOf('HeadFirst\Adapter\Ducks\Duck', $duck);
		$this->assertEquals("Gobble gobble", $duck->quack());
        $this->assertEquals("I'm flying a short distanceI'm flying a short distanceI'm flying a short distanceI'm flying a short distanceI'm flying a short distance", $duck->fly());
    }

}