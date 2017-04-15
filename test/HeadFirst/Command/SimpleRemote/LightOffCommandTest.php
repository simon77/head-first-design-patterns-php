<?php

namespace HeadFirst\Command\SimpleRemote;

use HeadFirst\Command\SimpleRemote\LightOffCommand;

/**
 * Garage Door Open Command test class
 */
class LightOffCommandTest extends \PHPUnit_Framework_TestCase
{
    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    /**
     * Test Garage Door
     *
     * @return void
     */
    public function testLightOffCommand()
    {
        $light = \Mockery::mock('\HeadFirst\Command\SimpleRemote\Light');
        $light->shouldReceive('off')->atLeast()->once();

        $command = new LightOffCommand($light);
        $command->execute();
    }

}