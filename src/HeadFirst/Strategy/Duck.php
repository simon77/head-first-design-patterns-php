<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\QuackBehaviour as QuackBehaviour;
use HeadFirst\Strategy\FlyBehaviour as FlyBehaviour;

abstract class Duck
{
    protected $flyBehaviour;
    protected $quackBehaviour;

	public function setFlyBehavior (FlyBehaviour $fb) {
		$this->flyBehaviour = $fb;
	}

	public function setQuackBehavior(QuackBehaviour $qb) {
		$this->quackBehaviour = $qb;
	}

	abstract function display();

	public function performFly() {
		return $this->flyBehaviour->fly();
	}

	public function performQuack() {
		return $this->quackBehaviour->quack();
	}

	public function swim() {
		return "All ducks float, even decoys!";
	}
}


