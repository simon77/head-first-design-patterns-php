package headfirst.decorator.starbuzz;<?php

namespace HeadFirst\Decorator;

use HeadFirst\Decorator\Beverage;

abstract class CondimentDecorator extends Beverage
{

    public abstract function getDescription();
}
