<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\QuackBehaviour as QuackBehaviour;

class Quack implements QuackBehaviour
{
	public function quack() {
		return "Quack";
	}
}