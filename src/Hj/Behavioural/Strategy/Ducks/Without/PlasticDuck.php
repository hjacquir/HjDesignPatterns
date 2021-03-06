<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ducks\Without;

class PlasticDuck extends Duck implements Fly, Quack
{
    /**
     * @return string
     */
    public function describe()
    {
        return 'I am a plastic duck';
    }

    /**
     * @return string
     */
    public function flying()
    {
        return 'I do not fly';
    }

    /**
     * @return string
     */
    public function quacking()
    {
        return 'I do not quack';
    }
}