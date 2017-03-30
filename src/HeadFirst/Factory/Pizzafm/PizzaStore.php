<?php

namespace HeadFirst\Factory\Pizzafm;

abstract class PizzaStore
{

    abstract function createPizza($item);

    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);
//		System.out.println("--- Making a " + pizza.getName() + " ---");
//
//        $pizza->prepare();
//        $pizza->bake();
//        $pizza->cut();
//        $pizza->box();
//
        return $pizza;

    }
}

