<?php

namespace HeadFirst\Observer\WeatherObservable;

interface Subject
{
    public function registerObserver(Observer $o);
	public function removeObserver(Observer $o);
	public function notifyObservers();
}