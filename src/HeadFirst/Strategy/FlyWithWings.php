<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\FlyBehaviour;

class FlyWithWings implements FlyBehaviour
{
	public function fly() {
		return "I'm flying!!";
	}
}

