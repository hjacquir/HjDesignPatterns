<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ducks\With;

class PlasticDuck extends Duck
{
    /**
     * @return string
     */
    public function describe()
    {
        echo 'I am a plastic duck';
    }
}