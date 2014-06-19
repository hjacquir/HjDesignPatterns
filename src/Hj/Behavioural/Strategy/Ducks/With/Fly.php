<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ducks\With;

class Fly extends Strategy
{
    /**
     * @return string
     */
    public function flying()
    {
        return 'I fly';
    }
} 