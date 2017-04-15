<?php

namespace HeadFirst\Command\SimpleRemote;

use HeadFirst\Command\SimpleRemote\Light as Light;

/**
 * Light test class
 */
class LightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Light
     *
     * @return void
     */
    public function testLight()
    {
        $light = new Light();

        $this->assertEquals("Light is on", $light->on());
        $this->assertEquals("Light is off", $light->off());
    }

}