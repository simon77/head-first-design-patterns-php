<?php

namespace HeadFirst\Observer\Weather;

class StatisticsDisplay implements Observer, DisplayElement
{
    private $maxTemp = 0.0;
    private $minTemp = 200;
    private $tempSum = 0.0;
    private $numReadings = 0;

    private $weatherData;

	public function __construct(Subject $weatherData) {
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}


	public function update($temp, $humidity, $pressure)
    {
		$this->tempSum += $temp;
		$this->numReadings++;

		if ($temp > $this->maxTemp) {
			$this->maxTemp = $temp;
		}

		if ($temp < $this->minTemp) {
			$this->minTemp = $temp;
		}

		$this->display();
	}

    public function display() {
        $display = 'Avg/Max/Min temperature = ';
        $display.= $this->tempSum/$this->numReadings;
        $display.= '/'.$this->maxTemp;
        $display.= '/'.$this->minTemp;
        return $display;
	}
}
