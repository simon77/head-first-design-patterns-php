<?php

namespace test\HeadFirst\Strategy;

use HeadFirst\Strategy\FlyWithWings as FlyWithWings;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class FlyWithWingsTest extends \PHPUnit_Framework_TestCase
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

    public function testFlyWithWings()
    {
        $fly = new FlyWithWings();

        $this->assertInstanceOf('HeadFirst\Strategy\FlyBehaviour', $fly);
		$this->assertEquals("I'm flying!!", $fly->fly());
    }

}