<?php

namespace HeadFirst\Factory\Pizzaaf\Cheese;

use \HeadFirst\Factory\Pizzaaf\Cheese as Cheese;

class MozzarellaCheese implements Cheese
{
	public function toString() {
		return "Shredded Mozzarella";
	}
}
