<?php

namespace HeadFirst\Factory\Pizzaaf;

use HeadFirst\Factory\Pizzaaf\ChicagoPizzaIngredientFactory as IngredientFactory;

use HeadFirst\Factory\Pizzaaf\CheesePizza as CheesePizza;
use HeadFirst\Factory\Pizzaaf\ClamPizza as ClamPizza;
use HeadFirst\Factory\Pizzaaf\PepperoniPizza as PepperoniPizza;
use HeadFirst\Factory\Pizzaaf\VeggiePizza as VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($item)
    {

        $pizza = null;
		$ingredientFactory = new IngredientFactory();

        switch ($item)
        {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName("Chicago Style Cheese Pizza");
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName("Chicago Style Veggie Pizza");
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName("Chicago Style Clam Pizza");
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName("Chicago Style Pepperoni Pizza");
                break;
        }

		return $pizza;
	}
}
