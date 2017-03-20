<?php

namespace HeadFirst\Strategy;

use HeadFirst\Strategy\ModelDuck as ModelDuck;

/**
 * Malard test class
 */
class ModelDuckTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Model
     *
     * @return void
     */
    public function testModelDuck()
    {
        $duck = new ModelDuck();

        $this->assertInstanceOf('HeadFirst\Strategy\Duck', $duck);
		$this->assertEquals("I'm a model duck", $duck->display());
        $this->assertEquals("All ducks float, even decoys!", $duck->swim());
    }

}