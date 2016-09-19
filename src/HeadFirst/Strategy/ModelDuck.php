<?php

namespace HeadFirst\Strategy;

class ModelDuck extends Duck
{
    public function __construct()
    {
		$this->setQuackBehavior(new Quack());
        $this->setFlyBehavior(new FlyNoWay());
	}

	public function display() {
		return "I'm a model duck";
	}
}