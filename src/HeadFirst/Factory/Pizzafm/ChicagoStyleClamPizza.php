<?php

namespace HeadFirst\Factory\Pizzafm;

class ChicagoStyleClamPizza extends Pizza
{
	public function __construct()
    {
        parent::__construct();

		$this->name = "Chicago Style Clam Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
        $this->toppings[] = "Shredded Mozzarella Cheese";
        $this->toppings[] = "Frozen Clams from Chesapeake Bay";
	}

    public function cut() {
        return "Cutting the pizza into square slices";
	}
}