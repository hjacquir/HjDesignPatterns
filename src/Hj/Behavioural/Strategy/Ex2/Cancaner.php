<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ex2;

/**
 * Description of Canacaner
 */
class Cancaner implements StrategieCancaner
{
    /**
     * @return string
     */
    public function cancaner()
    {
        echo 'Je cancane' . "\n";
    }
}
