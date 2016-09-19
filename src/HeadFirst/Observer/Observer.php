<?php

namespace HeadFirst\Observer;

interface Observer
{
    public function update($temp, $humidity, $pressure);
}