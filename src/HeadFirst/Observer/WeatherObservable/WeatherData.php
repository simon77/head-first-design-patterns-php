<?php

namespace HeadFirst\Observer\WeatherObservable;

use HeadFirst\Observer\WeatherObservable\Observer as Observer;

class WeatherData extends Observer
{
	private $temperature;
	private $humidity;
	private $pressure;

	public function measurementsChanged() {
		$this->notifyObservers();
	}

	public function setMeasurements($temperature, $humidity, $pressure) {
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measurementsChanged();
	}

	public function getTemperature() {
		return $this->temperature;
	}

	public function getHumidity() {
		return $this->humidity;
	}

	public function getPressure() {
		return $this->pressure;
	}
}
