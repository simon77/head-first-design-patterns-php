<?php

namespace HeadFirst\Adapter\Ducks;

class WildTurkey implements Turkey
{
	public function gobble()
    {
		return "Gobble gobble";
	}

	public function fly()
    {
		return "I'm flying a short distance";
	}
}