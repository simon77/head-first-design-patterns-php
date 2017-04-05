<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\PizzaIngredientFactory as PizzaIngredientFactory;

class CheesePizza extends Pizza
{
	private $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

	public function prepare() {
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        return 'Preparing Cheese Pizza';
//		System.out.println("Preparing " + name);
	}
}
