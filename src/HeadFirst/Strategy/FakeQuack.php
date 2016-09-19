<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\QuackBehaviour as QuackBehaviour;

class FakeQuack implements QuackBehaviour
{
	public function quack() {
		return "Qwak";
	}
}