<?php

namespace HeadFirst\Adapter\Ducks;

class TurkeyAdapter implements Duck
{
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

	public function quack()
    {
		return $this->turkey->gobble();
	}

	public function fly()
    {
        $fly = null;
		for($i=0; $i < 5; $i++) {
			$fly = $fly.$this->turkey->fly();
		}
        return $fly;
	}
}
