<?php

namespace HeadFirst\Factory\Pizzafm;

class NYStyleCheesePizza extends Pizza
{
	public function __construct()
    {
        parent::__construct();

		$this->name = "NY Style Sauce and Cheese Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
	}
}
