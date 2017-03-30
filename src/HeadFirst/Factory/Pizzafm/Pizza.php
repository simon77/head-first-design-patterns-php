<?php

namespace HeadFirst\Factory\Pizzafm;

abstract class Pizza
{
	protected $name;
	protected $dough;
	protected $sauce;
	protected $toppings;

    public function __construct()
    {
        $this->toppings = array();
    }

	public function getName() {
		return $this->name;
	}

	public function prepare() {
        $pizzaString = "Preparing ".$this->name.PHP_EOL;
        $pizzaString .= "Tossing dough...".PHP_EOL;
        $pizzaString .= "Adding sauce...".PHP_EOL;
        $pizzaString .= "Adding toppings: ".PHP_EOL;

        foreach ($this->toppings as $topping) {
            $pizzaString .= "   ".$topping.PHP_EOL;
        }

        return $pizzaString;

	}

	public function bake() {
        return "Bake for 25 minutes at 350";
	}

	public function cut() {
        return "Cutting the pizza into diagonal slices";
	}

	public function box() {
        return "Place pizza in official PizzaStore box";
	}

    public function toString()
    {
        $pizzaString = '---- '.$this->name.' ----'.PHP_EOL;
        $pizzaString .= $this->dough.PHP_EOL;
        $pizzaString .= $this->sauce.PHP_EOL;

        foreach ($this->toppings as $topping) {
            $pizzaString .= $topping.PHP_EOL;
        }

        return $pizzaString;
    }

}

