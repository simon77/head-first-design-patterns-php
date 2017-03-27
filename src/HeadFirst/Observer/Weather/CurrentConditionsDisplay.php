<?php

namespace HeadFirst\Observer\Weather;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;

    private $weatherData;

	public function __construct(Subject $weatherData) {
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}

    public function update($temp, $humidity, $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        return $this->display();
    }

    public function display() {
        return 'Current conditions: '.number_format($this->temperature,1).'F degrees and '.number_format($this->humidity,1).'% humidity';
	}
}