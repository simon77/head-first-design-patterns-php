<?php

namespace HeadFirst\Observer\WeatherObservable;

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
        $this->object = new WeatherData();

        $this->object->setMeasurements(80, 65, 30.4);
        $this->assertSame(80, $this->object->getTemperature());
        $this->assertSame(65, $this->object->getHumidity());
        $this->assertSame(30.4, $this->object->getPressure());

    }

}