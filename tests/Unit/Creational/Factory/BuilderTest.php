<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Unit\Creational\Factory;

use \Hj\Creational\Factory\Builder;
use \Hj\Creational\Factory\Vehicle;
use \PHPUnit_Framework_TestCase;

/**
 * @covers \Hj\Creational\Factory\Builder
 */
class BuilderTest extends PHPUnit_Framework_TestCase
{
    public function testMethodBuildShouldReturnAnVehicle()
    {
        $vehicle = Builder::build('Foo', 'Bar');
        
        $this->assertInstanceOf(Vehicle::CLASS_NAME, $vehicle);
    }
}
