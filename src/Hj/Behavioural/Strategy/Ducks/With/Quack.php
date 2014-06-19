<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ducks\With;

class Quack extends Strategy
{
    /**
     * @return string
     */
    public function quacking()
    {
        return 'I quack';
    }

} 