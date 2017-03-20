<?php

namespace HeadFirst\Factory\Pizzas;

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
		return "Preparing ".$this->name;
	}

	public function bake() {
        return "Baking ".$this->name;
	}

	public function cut() {
        return "Cutting ".$this->name;
	}

	public function box() {
        return "Boxing ".$this->name;
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

