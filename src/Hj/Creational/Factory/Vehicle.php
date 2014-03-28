<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Creational\Factory;

/**
 * Description of Vehicle
 */
class Vehicle
{
    const CLASS_NAME = __CLASS__;
    
    /**
     * @var string
     */
    private $make;
    
    /**
     * @var string
     */
    private $model;
    
    /**
     * @param string $make
     * @param string $model
     */
    public function __construct($make, $model)
    {
        $this->make  = $make;
        $this->model = $model;
    }
    
    /**
     * @return string
     */
    public function getMakeAndModel()
    {
        return $this->make . ' - ' . $this->model;
    }
}
