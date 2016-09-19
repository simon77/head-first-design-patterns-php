<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\QuackBehaviour as QuackBehaviour;

class Squeak implements QuackBehaviour
{
	public function quack() {
		return "Squeak";
	}
}