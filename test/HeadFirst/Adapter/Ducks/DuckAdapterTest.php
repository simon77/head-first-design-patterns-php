<?php

namespace HeadFirst\Adapter\Ducks;

use HeadFirst\Adapter\Ducks\DuckAdapter as DuckAdapter;

/**
 * Duck Adapter test class
 */
class DuckAdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test Mallard
     *
     * @return void
     */
    public function testDuckAdapter()
    {
        $duck = new MallardDuck();
        $turkey = new DuckAdapter($duck);

        $this->assertInstanceOf('HeadFirst\Adapter\Ducks\Turkey', $turkey);
		$this->assertEquals("Quack", $turkey->gobble());
        $this->assertEquals("I'm flying", $turkey->fly());
    }

}