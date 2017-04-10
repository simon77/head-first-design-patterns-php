<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\PizzaIngredientFactory as PizzaIngredientFactory;

class ClamPizza extends Pizza
{
	private $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

	public function prepare() {
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->clam = $this->ingredientFactory->createClam();
        $this->cheese = $this->ingredientFactory->createCheese();
        return 'Preparing '.$this->name;
	}
}
