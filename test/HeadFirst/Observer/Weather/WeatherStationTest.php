<?php

namespace HeadFirst\Observer\Weather;

use HeadFirst\Observer\Weather\WeatherData as WeatherData;
use HeadFirst\Observer\Weather\CurrentConditionsDisplay as CurrentConditionsDisplay;
use HeadFirst\Observer\Weather\StatisticsDisplay as StatisticsDisplay;
use HeadFirst\Observer\Weather\ForecastDisplay as ForecastDisplay;
use HeadFirst\Observer\Weather\HeatIndexDisplay as HeatIndexDisplay;

class WeatherStationTest extends \PHPUnit_Framework_TestCase
{

    public function testWeatherStation()
    {
        $weatherData = new WeatherData();

		$currentDisplay = new CurrentConditionsDisplay($weatherData);
		$statisticsDisplay = new StatisticsDisplay($weatherData);
		$forecastDisplay = new ForecastDisplay($weatherData);

		$weatherData->setMeasurements(80, 65, 30.4);
		$weatherData->setMeasurements(82, 70, 29.2);
		$weatherData->setMeasurements(78, 90, 29.2);
	}

    public function testWeatherStationHeatIndex()
    {
        $weatherData = new WeatherData();

		$currentDisplay = new CurrentConditionsDisplay($weatherData);
		$statisticsDisplay = new StatisticsDisplay($weatherData);
		$forecastDisplay = new ForecastDisplay($weatherData);
        $HeatIndexDisplay = new HeatIndexDisplay($weatherData);

		$weatherData->setMeasurements(80, 65, 30.4);
		$weatherData->setMeasurements(82, 70, 29.2);
		$weatherData->setMeasurements(78, 90, 29.2);
	}
}
