<?php

namespace HeadFirst\Strategy;

class RedHeadDuck extends Duck
{
    public function __construct()
    {
		$this->setQuackBehavior(new Quack());
        $this->setFlyBehavior(new FlyWithWings());
	}

	public function display() {
		return "I'm a real Red Headed duck";
	}
}