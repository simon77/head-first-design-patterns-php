<?php

namespace HeadFirst\Factory\Pizzas;

class CheesePizza extends Pizza
{
	public function __construct()
    {
        parent::__construct();

		$this->name = "Cheese Pizza";
		$this->dough = "Regular Crust";
		$this->sauce = "Marinara Pizza Sauce";
        $this->toppings[] = "Fresh Mozzarella";
        $this->toppings[] = "Parmesan";
	}
}
