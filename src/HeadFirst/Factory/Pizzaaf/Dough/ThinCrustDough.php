<?php

namespace HeadFirst\Factory\Pizzaaf\Dough;

use \HeadFirst\Factory\Pizzaaf\Dough as Dough;

class ThinCrustDough implements Dough
{
	public function toString() {
		return "Thin Crust Dough";
	}
}
