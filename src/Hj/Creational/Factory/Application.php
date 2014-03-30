<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Creational\Factory;

/**
 * Description of Application
 */
class Application
{
    /**
     * @return Vehicle
     */
    public function ferrari()
    {
        return Factory::build('italian', 'ferrari');
    }
    
    /**
     * @return Vehicle
     */
    public function toyota()
    {
        return Factory::build('japan', 'toyota');
    }
}
