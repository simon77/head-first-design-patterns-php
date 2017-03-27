<?php

namespace HeadFirst\Observer\Weather;

interface Observer
{
    public function update($temp, $humidity, $pressure);
}