<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Unit\Creational\Factory;

use \Hj\Creational\Factory\Vehicle;
use \PHPUnit_Framework_TestCase;

/**
 * @covers \Hj\Creational\Factory\Vehicle
 */
class VehicleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Vehicle
     */
    private $vehicle;
    
    public function setUp()
    {
        $this->vehicle = new Vehicle('Foo', 'Hello world');
    }
    
    public function testShouldHaveMakeParameter()
    {
        $this->assertAttributeEquals('Foo', 'make', $this->vehicle);
    }
    
    public function testShouldHaveModelParameter()
    {
        $this->assertAttributeEquals('Hello world', 'model', $this->vehicle);
    }
    
    public function testGetMakeAndModel()
    {
        $this->assertSame('Foo - Hello world', $this->vehicle->getMakeAndModel());
    }
}
