<?php

namespace HeadFirst\Command\SimpleRemote;

use HeadFirst\Command\SimpleRemote\SimpleRemoteControl;

/**
 * Garage Door Open Command test class
 */
class SimpleRemoteControlTest extends \PHPUnit_Framework_TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    /**
     * Test Garage Door
     *
     * @return void
     */
    public function testSimpleRemoteControl()
    {
        $command = \Mockery::mock('\HeadFirst\Command\SimpleRemote\Command');
        $command->shouldReceive('execute')->atLeast()->once();

        $remote = new SimpleRemoteControl();
        $remote->setCommand($command);
        $remote->buttonWasPressed();
    }

}