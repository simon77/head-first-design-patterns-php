<?php

namespace HeadFirst\Factory\Pizzafm;

class NYStyleClamPizza extends Pizza
{
	public function __construct()
    {
        parent::__construct();

		$this->name = "NY Style Clam Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";
        $this->toppings[] = "Grated Reggiano Cheese";
        $this->toppings[] = "Fresh Clams from Long Island Sound";
	}
}
