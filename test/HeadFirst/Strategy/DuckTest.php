<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\MallardDuck as MallardDuck;
use HeadFirst\Strategy\RubberDuck as RubberDuck;
use HeadFirst\Strategy\DecoyDuck as DecoyDuck;
use HeadFirst\Strategy\ModelDuck as ModelDuck;

use HeadFirst\Strategy\FlyRocketPowered as FlyRocketPowered;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class DuckTest extends \PHPUnit_Framework_TestCase
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

    public function testMiniDuckSimulator()
    {
        $mallard = new MallardDuck();
		$rubberDuckie = new RubberDuck();
		$decoy = new DecoyDuck();
		$model = new ModelDuck();

		$this->assertEquals('Quack', $mallard->performQuack(), 'Mallards should Quack!');
        $this->assertEquals('Squeak', $rubberDuckie->performQuack(), 'Rubber ducks should Squeek!');
        $this->assertEquals('<< Silence >>', $decoy->performQuack(), 'Decoy ducks should be seen not heard');

		$this->assertEquals("I can't fly", $model->performFly());
		$model->setFlyBehavior(new FlyRocketPowered());
		$this->assertEquals("I'm flying with a rocket", $model->performFly());
    }

}