<?php

namespace HeadFirst\Observer\Weather;

use HeadFirst\Observer\Weather\Observer as Observer;

class WeatherData implements Subject
{
	private $observers;
	private $temperature;
	private $humidity;
	private $pressure;

	public function __construct()
    {
		$this->observers = array();
	}

	public function registerObserver(Observer $o) {
		$this->observers[] = $o;
	}

	public function removeObserver(Observer $o) {
//		int i = observers.indexOf(o);
//		if (i >= 0) {
//			observers.remove(i);
//		}
	}

	public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
	}

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
