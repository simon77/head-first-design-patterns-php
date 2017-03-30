<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\NYStyleCheesePizza as CheesePizza;
use HeadFirst\Factory\Pizzafm\NYStyleClamPizza as ClamPizza;
use HeadFirst\Factory\Pizzafm\NYStylePepperoniPizza as PepperoniPizza;
use HeadFirst\Factory\Pizzafm\NYStyleVeggiePizza as VeggiePizza;

class NYPizzaStore extends PizzaStore
{

    public function createPizza($item)
    {
        switch ($item) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'clam':
                $pizza = new ClamPizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
            case 'veggie':
                $pizza = new VeggiePizza();
                break;
            default:
                $pizza = null;
        }
        return $pizza;

    }
}
