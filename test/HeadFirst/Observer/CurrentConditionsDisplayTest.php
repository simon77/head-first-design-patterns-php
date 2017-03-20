<?php

namespace HeadFirst\Observer;

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
        //TODO fix expectations
        $weatherData = \Mockery::mock('\HeadFirst\Observer\Subject');
        $weatherData->shouldReceive('registerObserver')
//            ->with(\Mockery::type('CurrentConditionsDisplay'))
            ->once();
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