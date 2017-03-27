<?php

namespace HeadFirst\Observer\WeatherObservable;

interface Observer
{
    public function update($temp, $humidity, $pressure);
}