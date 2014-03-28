<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Unit\Creational\Factory;

use \Hj\Creational\Factory\Application;
use \Hj\Creational\Factory\Vehicle;
use \PHPUnit_Framework_TestCase;

/**
 * @covers \Hj\Creational\Factory\Application
 */
class ApplicationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    private $application;
    
    public function setUp()
    {
        $this->application = new Application();
    }
    
    public function testFerrariShouldReturnAnVehicle()
    {
        $this->assertInstanceOf(Vehicle::CLASS_NAME, $this->application->ferrari());
    }
    
    public function testToyotaShouldReturnAnVehicle()
    {
        $this->assertInstanceOf(Vehicle::CLASS_NAME, $this->application->toyota());
    }
}
