<?php

namespace HeadFirst\Observer\Weather;

use HeadFirst\Observer\Weather\StatisticsDisplay as StatisticsDisplay;

class StatisticsDisplayTest extends \PHPUnit_Framework_TestCase
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
        //TODO fix expectations
        $weatherData = \Mockery::mock('\HeadFirst\Observer\Weather\Subject');
        $weatherData->shouldReceive('registerObserver')
//            ->with(\Mockery::type('ForecastDisplay'))
            ->once();
        $this->object = new StatisticsDisplay($weatherData);
    }

    public function testDisplay()
    {
//        $this->assertEquals(
//            'Avg/Max/Min temperature = 0.0/0.0/200',
//            $this->object->display(),
//            'Initial Display'
//        );

        $this->object->update(80, 65, 30.4);
        $this->assertEquals(
            'Avg/Max/Min temperature = 80/80/80',
            $this->object->display(),
            '1st Reading'
        );

        $this->object->update(82, 70, 29.2);
        $this->assertEquals(
            'Avg/Max/Min temperature = 81/82/80',
            $this->object->display(),
            '2nd Reading'
        );

        $this->object->update(78, 90, 29.2);
        $this->assertEquals(
            'Avg/Max/Min temperature = 80/82/78',
            $this->object->display(),
            '3rd Reading'
        );
    }

}