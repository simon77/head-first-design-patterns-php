<?php

namespace HeadFirst\Factory\Pizzaaf;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

	public function createDough() {
		return new Dough\ThickCrustDough();
	}

	public function createSauce() {
		return new Sauce\PlumTomatoSauce();
	}

	public function createCheese() {
		return new Cheese\MozzarellaCheese();
	}

	public function createVeggies() {
        $veggies = array();
        $veggies[] = new Veggies\BlackOlives();
        $veggies[] = new Veggies\Spinach();
        $veggies[] = new Veggies\Eggplant();
		return $veggies;
	}

	public function createPepperoni() {
		return new Pepperoni\SlicedPepperoni();
	}

	public function createClam() {
		return new Clams\FrozenClams();
	}
}
