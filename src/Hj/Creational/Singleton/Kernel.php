<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Creational\Singleton;

/**
 * This is a singleton because we need to initialize the kernel only once
 */
class Kernel
{
    /**
     * @var mixed
     */
    private static $instance = null;
    
    /**
     *  Private constructor to prevent creating a new instance
     */
    private function __construct()
    {
    }
    
    /**
     * Private clone method to prevent cloning of the instance
     */
    private function __clone() 
    {
    }
    
    /**
     * Private unserialize method to prevent unserializing
     */
    private function __wakeup()
    {
    }
    
    /**
     * @return Kernel
     */
    public static function create()
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }
        
        return self::$instance;
    }
}
