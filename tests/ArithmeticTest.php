<?php
require_once('vendor/autoload.php');
require('Arithmetic.php');

use PHPUnit\Framework\TestCase;

class ArithmeticTest extends TestCase
{
    private $arithmetic;

    protected function setUp():void
    {
        $this->arithmetic = new Arithmetic();   
    }

    public function testAdd()
    {
        $this->assertEquals(2, $this->arithmetic->add(1,1));
        $this->assertNotEquals(3, $this->arithmetic->add(1,1));        
    }

    public function testSubstract()
    {
        $this->assertEquals(0, $this->arithmetic->subtract(1,1));
        $this->assertNotEquals(1, $this->arithmetic->subtract(1,1));
    }
}