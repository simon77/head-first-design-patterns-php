<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\FlyBehaviour;

class FlyRocketPowered implements FlyBehaviour
{
	public function fly() {
		return "I'm flying with a rocket";
	}
}

