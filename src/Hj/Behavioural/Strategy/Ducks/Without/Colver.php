<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ducks\Without;

class Colver extends Duck implements Fly, Quack
{
    /**
     * @return string
     */
    public function describe()
    {
        return 'I am a colver';
    }

    /**
     * @return string
     */
    public function flying()
    {
        return 'I fly';
    }

    /**
     * @return string
     */
    public function quacking()
    {
        return 'I quack';
    }
}