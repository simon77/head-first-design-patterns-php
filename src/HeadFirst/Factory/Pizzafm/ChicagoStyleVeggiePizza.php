<?php

namespace HeadFirst\Factory\Pizzafm;

class ChicagoStyleVeggiePizza extends Pizza
{
	public function __construct()
    {
        parent::__construct();

		$this->name = "Chicago Deep Dish Veggie Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";
        $this->toppings[] = "Shredded Mozzarella Cheese";
        $this->toppings[] = "Black Olives";
        $this->toppings[] = "Spinach";
        $this->toppings[] = "Eggplant";
	}

    public function cut() {
        return "Cutting the pizza into square slices";
	}
}

