<?php

namespace HeadFirst\Adapter\Ducks;

use HeadFirst\Adapter\Ducks\WildTurkey as WildTurkey;

/**
 * Wild Turkey test class
 */
class WildTurkeyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Mallard
     *
     * @return void
     */
    public function testWildTurkey()
    {
        $turkey = new WildTurkey();

        $this->assertInstanceOf('HeadFirst\Adapter\Ducks\Turkey', $turkey);
		$this->assertEquals("Gobble gobble", $turkey->gobble());
        $this->assertEquals("I'm flying a short distance", $turkey->fly());
    }

}