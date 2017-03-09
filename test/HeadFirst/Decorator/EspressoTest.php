<?php

namespace test\HeadFirst\Decorator;

use \HeadFirst\Decorator\Espresso;

class EspressoTest extends \PHPUnit_Framework_TestCase
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

    public function testEspresso()
    {
        $beverage = new Espresso();
        $this->assertEquals('Espresso', $beverage->getDescription());
		$this->assertEquals(1.99, $beverage->cost());

    }

}