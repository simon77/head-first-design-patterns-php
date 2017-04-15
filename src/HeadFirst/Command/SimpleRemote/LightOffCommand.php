<?php

namespace HeadFirst\Command\SimpleRemote;

class LightOffCommand implements Command
{
	private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

	public function execute() {
		$this->light->off();
	}
}
