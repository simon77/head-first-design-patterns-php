<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\FlyBehaviour;

class FlyNoWay implements FlyBehaviour
{
	public function fly() {
		return "I can't fly";
	}
}

