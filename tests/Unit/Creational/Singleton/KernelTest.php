<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Unit\Creational\Singleton;

use \Hj\Creational\Singleton\Kernel;
use \PHPUnit_Framework_TestCase;

/**
 * @covers \Hj\Creational\Singleton\Kernel
 */
class KernelTest extends PHPUnit_Framework_TestCase
{
    public function testMethodCreateShouldReturnAKernel()
    {
        $this->assertInstanceOf('Hj\Creational\Singleton\Kernel', Kernel::create());
    }
}
