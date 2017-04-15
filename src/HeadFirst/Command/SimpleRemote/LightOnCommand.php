<?php

namespace HeadFirst\Command\SimpleRemote;

class LightOnCommand implements Command
{
	private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

	public function execute() {
		$this->light->on();
	}
}
