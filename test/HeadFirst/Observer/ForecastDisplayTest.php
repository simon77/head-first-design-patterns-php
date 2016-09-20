<?php

namespace test\HeadFirst\Observer;

use HeadFirst\Observer\ForecastDisplay as ForecastDisplay;

class ForecastDisplayTest extends \PHPUnit_Framework_TestCase
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
        $weatherData = \Mockery::mock('\HeadFirst\Observer\Subject');
        $weatherData->shouldReceive('registerObserver')
//            ->with(\Mockery::type('ForecastDisplay'))
            ->once();
        $this->object = new ForecastDisplay($weatherData);
    }

    public function testDisplay()
    {
        // Initial value = 29.92
        $this->object->update(80, 65, 30.4);
		$this->assertEquals(
            'Forecast: Improving weather on the way!',
            $this->object->display(),
            'Increase pressure'
        );
        $this->assertEquals(
            'Forecast: Improving weather on the way!',
            $this->object->display(),
            'No change'
        );
        $this->object->update(80, 65, 30.5);
        $this->assertEquals(
            'Forecast: Improving weather on the way!',
            $this->object->display(),
            'Increasing pressure'
        );
        $this->object->update(80, 65, 29.5);
        $this->assertEquals(
            'Forecast: Watch out for cooler, rainy weather',
            $this->object->display(),
            'Decreasing pressure'
        );
        $this->object->update(80, 65, 29.5);
        $this->assertEquals(
            'Forecast: More of the same',
            $this->object->display(),
            'Stable pressure'
        );
    }

}