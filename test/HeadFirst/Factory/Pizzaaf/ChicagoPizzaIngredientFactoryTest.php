<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\ChicagoPizzaIngredientFactory as IngredientFactory;

class ChicagoPizzaIngredientFactoryTest extends \PHPUnit_Framework_TestCase
{

    private $object;

    public function setUp()
    {
        $this->object = new IngredientFactory();
    }

    public function testCreateDough()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Dough\ThickCrustDough', $this->object->createDough());
	}

    public function testCreateSauce()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Sauce\PlumTomatoSauce', $this->object->createSauce());
	}

    public function testCreateCheese()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Cheese\MozzarellaCheese', $this->object->createCheese());
	}

    public function testCreateVeggies()
    {
        $veggies = $this->object->createVeggies();
        $this->assertSame(3, count($veggies));
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Veggies\BlackOlives', $veggies[0]);
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Veggies\Spinach', $veggies[1]);
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Veggies\Eggplant', $veggies[2]);
	}

    public function testCreatePepperoni()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Pepperoni\SlicedPepperoni', $this->object->createPepperoni());
	}

    public function testCreateClam()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Clams\FrozenClams', $this->object->createClam());
	}
}
