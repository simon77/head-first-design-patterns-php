<?php

namespace HeadFirst\Command\SimpleRemote;

use HeadFirst\Command\SimpleRemote\GarageDoor;
use HeadFirst\Command\SimpleRemote\GarageDoorOpenCommand;

/**
 * Garage Door Open Command test class
 */
class GarageDoorOpenCommandTest extends \PHPUnit_Framework_TestCase
{

    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
    /**
     * Test Garage Door
     *
     * @return void
     */
    public function testGarageDoorOpenCommand()
    {
        $garageDoor = \Mockery::mock('\HeadFirst\Command\SimpleRemote\GarageDoor');
        $garageDoor->shouldReceive('up')->atLeast()->once();

        $command = new GarageDoorOpenCommand($garageDoor);
        $command->execute();
    }

}