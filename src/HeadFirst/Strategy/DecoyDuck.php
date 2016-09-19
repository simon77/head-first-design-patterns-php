<?php

namespace HeadFirst\Strategy;

class DecoyDuck extends Duck
{
    public function __construct()
    {
		$this->setQuackBehavior(new MuteQuack());
        $this->setFlyBehavior(new FlyNoWay());
	}

	public function display() {
		return "I'm a duck Decoy";
	}
}