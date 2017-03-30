<?php

namespace HeadFirst\Factory\Pizzafm;

class DependentPizzaStore
{

    public function createPizza($style, $type)
    {
        if ($style == 'NY') {
            switch ($type) {
                case 'cheese':
                    $pizza = new \HeadFirst\Factory\Pizzafm\NYStyleCheesePizza();
                    break;
                case 'clam':
                    $pizza = new \HeadFirst\Factory\Pizzafm\NYStyleClamPizza();
                    break;
                case 'pepperoni':
                    $pizza = new \HeadFirst\Factory\Pizzafm\NYStylePepperoniPizza();
                    break;
                case 'veggie':
                    $pizza = new \HeadFirst\Factory\Pizzafm\NYStyleVeggiePizza();
                    break;
                default:
                    $pizza = null;
            }
        } elseif ($style == 'Chicago') {
            switch ($type) {
                case 'cheese':
                    $pizza = new \HeadFirst\Factory\Pizzafm\ChicagoStyleCheesePizza();
                    break;
                case 'clam':
                    $pizza = new \HeadFirst\Factory\Pizzafm\ChicagoStyleClamPizza();
                    break;
                case 'pepperoni':
                    $pizza = new \HeadFirst\Factory\Pizzafm\ChicagoStylePepperoniPizza();
                    break;
                case 'veggie':
                    $pizza = new \HeadFirst\Factory\Pizzafm\ChicagoStyleVeggiePizza();
                    break;
                default:
                    $pizza = null;
            }
        }
        return $pizza;

    }
}
//package headfirst.factory.pizzafm;
//
//public class DependentPizzaStore {
//
//	public Pizza createPizza(String style, String type) {
//		Pizza pizza = null;
//		if (style.equals("NY")) {
//			if (type.equals("cheese")) {
//				pizza = new NYStyleCheesePizza();
//			} else if (type.equals("veggie")) {
//				pizza = new NYStyleVeggiePizza();
//			} else if (type.equals("clam")) {
//				pizza = new NYStyleClamPizza();
//			} else if (type.equals("pepperoni")) {
//				pizza = new NYStylePepperoniPizza();
//			}
//		} else if (style.equals("Chicago")) {
//			if (type.equals("cheese")) {
//				pizza = new ChicagoStyleCheesePizza();
//			} else if (type.equals("veggie")) {
//				pizza = new ChicagoStyleVeggiePizza();
//			} else if (type.equals("clam")) {
//				pizza = new ChicagoStyleClamPizza();
//			} else if (type.equals("pepperoni")) {
//				pizza = new ChicagoStylePepperoniPizza();
//			}
//		} else {
//			System.out.println("Error: invalid type of pizza");
//			return null;
//		}
//		pizza.prepare();
//		pizza.bake();
//		pizza.cut();
//		pizza.box();
//		return pizza;
//	}
//}
