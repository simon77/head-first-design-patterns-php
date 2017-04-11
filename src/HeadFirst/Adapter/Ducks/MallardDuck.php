<?php

namespace HeadFirst\Adapter\Ducks;

class MallardDuck implements Duck
{
	public function quack()
    {
		return "Quack";
	}

	public function fly()
    {
		return "I'm flying";
	}
}
