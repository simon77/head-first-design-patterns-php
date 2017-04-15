<?php

namespace HeadFirst\Command\SimpleRemote;

use HeadFirst\Command\SimpleRemote\Command;

//
// This is the invoker
//
class SimpleRemoteControl
{
	private $slot;

	public function setCommand(Command $command)
    {
		$this->slot = $command;
	}

	public function buttonWasPressed()
    {
		$this->slot->execute();
	}
}
