<?php

namespace HeadFirst\Command\SimpleRemote;

use HeadFirst\Command\SimpleRemote\GarageDoor as GarageDoor;

/**
 * Garage Door test class
 */
class GarageDoorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Garage Door
     *
     * @return void
     */
    public function testGarageDoor()
    {
        $garageDoor = new GarageDoor();

		$this->assertEquals("Garage Door is Open", $garageDoor->up());
        $this->assertEquals("Garage Door is Closed", $garageDoor->down());
        $this->assertEquals("Garage Door is Stopped", $garageDoor->stop());
        $this->assertEquals("Garage light is on", $garageDoor->lightOn());
        $this->assertEquals("Garage light is off", $garageDoor->lightOff());
    }

}