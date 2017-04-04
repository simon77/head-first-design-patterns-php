<?php
namespace HeadFirst\Factory\Pizzaaf;

require __DIR__ . '/../../../../vendor/autoload.php';

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza("cheese");
echo "Ethan ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $chicagoStore->orderPizza("cheese");
echo "Joel ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $nyStore->orderPizza("clam");
echo "Ethan ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $chicagoStore->orderPizza("clam");
echo "Joel ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $nyStore->orderPizza("pepperoni");
echo "Ethan ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $chicagoStore->orderPizza("pepperoni");
echo "Joel ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $nyStore->orderPizza("veggie");
echo "Ethan ordered a " . $pizza->getName() . PHP_EOL;

$pizza = $chicagoStore->orderPizza("veggie");
echo "Joel ordered a " . $pizza->getName() . PHP_EOL;
