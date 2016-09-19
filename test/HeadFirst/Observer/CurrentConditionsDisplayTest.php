<?php

namespace test\HeadFirst\Observer;

use HeadFirst\Observer\CurrentConditionsDisplay as CurrentConditionsDisplay;

class CurrentConditionsDisplayTest extends \PHPUnit_Framework_TestCase
{
    public $object;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    protected function setUp()
    {
        $weatherData = \Mockery::mock('Subject');
        $weatherData->shouldReceive('registerObserver')
            ->with($this->object)
            ->once();
        // Mock weather data expects register observer once with $this
        $this->object = new CurrentConditionsDisplay($weatherData);
    }

    public function testDisplay()
    {
		$this->assertEquals(
            'Current conditions: 80.0F degrees and 65.0% humidity',
            $this->object->update(80, 65, 30.4),
            'update should display data'
        );
        $this->assertEquals(
            'Current conditions: 80.0F degrees and 65.0% humidity',
            $this->object->display(),
            'display should display same data'
        );
    }

}