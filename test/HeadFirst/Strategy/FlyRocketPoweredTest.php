<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\FlyRocketPowered as FlyRocketPowered;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class FlyRocketPoweredTest extends \PHPUnit_Framework_TestCase
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

    public function testFlyRocketPowered()
    {
        $fly = new FlyRocketPowered();

        $this->assertInstanceOf('HeadFirst\Strategy\FlyBehaviour', $fly);
		$this->assertEquals("I'm flying with a rocket", $fly->fly());
    }

}