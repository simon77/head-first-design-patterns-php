<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\QuackBehaviour as QuackBehaviour;

class MuteQuack implements QuackBehaviour
{
	public function quack() {
		return '<< Silence >>';
	}
}