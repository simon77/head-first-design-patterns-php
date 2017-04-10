<?php

namespace HeadFirst\Factory\Pizzaaf;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

	public function createDough() {
		return new Dough\ThinCrustDough();
	}

	public function createSauce() {
		return new Sauce\MarinaraSauce();
	}

	public function createCheese() {
		return new Cheese\ReggianoCheese();
	}

	public function createVeggies() {
        $veggies = array();
        $veggies[] = new Veggies\Garlic();
        $veggies[] = new Veggies\Onion();
        $veggies[] = new Veggies\Mushroom();
        $veggies[] = new Veggies\RedPepper();
		return $veggies;
	}

	public function createPepperoni() {
		return new Pepperoni\SlicedPepperoni();
	}

	public function createClam() {
		return new Clams\FreshClams();
	}
}
