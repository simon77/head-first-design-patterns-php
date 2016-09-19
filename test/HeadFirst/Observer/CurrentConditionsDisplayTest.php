<?php

namespace test\HeadFirst\Observer;

class CurrentConditionsDisplayTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    protected function setUp()
    {
        $weatherData = new WeatherData();
        // Mock weather data expects register observer once with $this
        $this->object = new CurrentConditionsDisplay($weatherData);
    }

    public function testDisplay()
    {
		$this->assertEquals(
            'Current conditions: 80.0F degrees and 65.0% humidity',
            $this->object->update(80, 65, 30.4)
        );
        $this->assertEquals(
            'Current conditions: 80.0F degrees and 65.0% humidity',
            $this->object->display()
        );
    }

}