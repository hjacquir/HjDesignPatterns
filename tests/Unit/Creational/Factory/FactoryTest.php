<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Unit\Creational\Factory;

use \Hj\Creational\Factory\Factory;
use \Hj\Creational\Factory\Vehicle;
use \PHPUnit_Framework_TestCase;

/**
 * @covers \Hj\Creational\Factory\Builder
 */
class FactoryTest extends PHPUnit_Framework_TestCase
{
    public function testMethodBuildShouldReturnAnVehicle()
    {
        $vehicle = Factory::build('Foo', 'Bar');
        
        $this->assertInstanceOf(Vehicle::CLASS_NAME, $vehicle);
    }
}
