<?php

namespace HeadFirst\Factory\Pizzafm;

use HeadFirst\Factory\Pizzafm\ChicagoStyleCheesePizza as CheesePizza;
use HeadFirst\Factory\Pizzafm\ChicagoStyleClamPizza as ClamPizza;
use HeadFirst\Factory\Pizzafm\ChicagoStylePepperoniPizza as PepperoniPizza;
use HeadFirst\Factory\Pizzafm\ChicagoStyleVeggiePizza as VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
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

