<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\NYPizzaIngredientFactory as IngredientFactory;

class NYPizzaIngredientFactoryTest extends \PHPUnit_Framework_TestCase
{

    private $object;

    public function setUp()
    {
        $this->object = new IngredientFactory();
    }

    public function testCreateDough()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Dough\ThinCrustDough', $this->object->createDough());
	}

    public function testCreateSauce()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Sauce\MarinaraSauce', $this->object->createSauce());
	}

    public function testCreateCheese()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Cheese\ReggianoCheese', $this->object->createCheese());
	}

    public function testCreateVeggies()
    {
        $veggies = $this->object->createVeggies();
        $this->assertSame(4, count($veggies));
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Veggies\Garlic', $veggies[0]);
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Veggies\Onion', $veggies[1]);
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Veggies\Mushroom', $veggies[2]);
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Veggies\RedPepper', $veggies[3]);
	}

    public function testCreatePepperoni()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Pepperoni\SlicedPepperoni', $this->object->createPepperoni());
	}

    public function testCreateClam()
    {
        $this->assertInstanceOf('HeadFirst\Factory\Pizzaaf\Clams\FreshClams', $this->object->createClam());
	}
}
