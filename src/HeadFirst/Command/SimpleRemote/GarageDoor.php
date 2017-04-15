<?php

namespace HeadFirst\Command\SimpleRemote;

class GarageDoor
{

	public function up() {
		return "Garage Door is Open";
	}

	public function down() {
		return "Garage Door is Closed";
	}

	public function stop() {
		return "Garage Door is Stopped";
	}

	public function lightOn() {
		return "Garage light is on";
	}

	public function lightOff() {
		return "Garage light is off";
	}
}
