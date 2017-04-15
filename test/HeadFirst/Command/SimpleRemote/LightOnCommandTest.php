<?php

namespace HeadFirst\Command\SimpleRemote;

use HeadFirst\Command\SimpleRemote\LightOnCommand;

/**
 * Garage Door Open Command test class
 */
class LightOnCommandTest extends \PHPUnit_Framework_TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    /**
     * Test Garage Door
     *
     * @return void
     */
    public function testLightOnCommand()
    {
        $light = \Mockery::mock('\HeadFirst\Command\SimpleRemote\Light');
        $light->shouldReceive('on')->atLeast()->once();

        $command = new LightOnCommand($light);
        $command->execute();
    }

}