<?php

namespace HeadFirst\Adapter\Ducks;

class DuckAdapter implements Turkey
{
    private $duck;

    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

	public function gobble() {
		return $this->duck->quack();
	}

	public function fly() {
        return $this->duck->fly();
//		if (rand.nextInt(5)  == 0) {
//		     duck.fly();
//		}
	}
}
