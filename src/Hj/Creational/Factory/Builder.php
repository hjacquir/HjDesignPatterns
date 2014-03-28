<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Creational\Factory;

/**
 * This class is the factory in charge to create a vehicle
 */
class Builder
{
    /**
     * @param string $make
     * @param string $model
     * 
     * @return Vehicle
     */
    public static function build($make, $model)
    {
        return new Vehicle($make, $model);
    }
}
