<?php

namespace HeadFirst\Strategy;

class RubberDuck extends Duck
{
    public function __construct()
    {
		$this->setQuackBehavior(new Squeak());
        $this->setFlyBehavior(new FlyNoWay());
	}

	public function display() {
		return "I'm a rubber duckie";
	}
}