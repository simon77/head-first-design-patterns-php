<?php

namespace HeadFirst\Observer\WeatherObservable;

class ForecastDisplay implements Observer, DisplayElement
{
    private $currentPressure = 29.92;
    private $lastPressure;

    private $weatherData;

	public function __construct(Subject $weatherData) {
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}

    public function update($temp, $humidity, $pressure)
    {
        $this->lastPressure = $this->currentPressure;
		$this->currentPressure = $pressure;
    }

    public function display()
    {
        $display = 'Forecast: ';

        if ($this->currentPressure > $this->lastPressure) {
			$display .= "Improving weather on the way!";
		} elseif ($this->currentPressure == $this->lastPressure) {
			$display .= "More of the same";
		} elseif ($this->currentPressure < $this->lastPressure) {
			$display .= "Watch out for cooler, rainy weather";
		}
        return $display;
	}
}