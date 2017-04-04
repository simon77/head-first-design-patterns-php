<?php

namespace HeadFirst\Factory\Pizzaaf\Dough;

use \HeadFirst\Factory\Pizzaaf\Dough as Dough;

class ThickCrustDough implements Dough
{
	public function toString() {
		return "ThickCrust style extra thick crust dough";
	}
}
