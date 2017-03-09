<?php

namespace test\HeadFirst\Decorator;

use \HeadFirst\Decorator\HouseBlend;
use \HeadFirst\Decorator\Mocha;
use \HeadFirst\Decorator\Soy;
use \HeadFirst\Decorator\Whip;

class HouseSoyMochaWhipTest extends \PHPUnit_Framework_TestCase
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

    public function testHouseSoyMochaWhip()
    {
        $beverage = new Whip(new Mocha(new Soy(new HouseBlend())));
        $this->assertEquals('House Blend Coffee, Soy, Mocha, Whip', $beverage->getDescription());
		$this->assertEquals(1.34, $beverage->cost());

    }

}