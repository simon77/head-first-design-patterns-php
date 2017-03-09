<?php

namespace test\HeadFirst\Observer;

//use HeadFirst\Observer\

class WeatherDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
//    protected function setUp()
//    {
//        $this->markTestIncomplete('This test has not been implemented yet. Credentials file issues');
//        $this->object = new Logger($this->config);
//    }

    public function testWeatherData()
    {
        $weatherData = new WeatherData();

        $current = new CurrentConditionsDisplay($weatherData);

		$this->assertEquals(
            'Current conditions: 80.0F degrees and 65.0% humidity',
            $weatherData->setMeasurements(80, 65, 30.4)
        );

    }

}