<?php

namespace HeadFirst\Decorator;

use \HeadFirst\Decorator\DarkRoast;
use \HeadFirst\Decorator\Mocha;
use \HeadFirst\Decorator\Whip;

class DarkDoubleMochaWhipTest extends \PHPUnit_Framework_TestCase
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

    public function testDarkDoubleMochaWhip()
    {
        $beverage = new Whip(new Mocha(new Mocha(new DarkRoast())));
        $this->assertEquals('Dark Roast Coffee, Mocha, Mocha, Whip', $beverage->getDescription());
		$this->assertEquals(1.49, $beverage->cost());

    }

}