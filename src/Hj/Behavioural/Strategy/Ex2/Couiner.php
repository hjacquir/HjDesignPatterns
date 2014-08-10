<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ex2;

/**
 * Description of Couiner
 */
class Couiner implements StrategieCancaner
{
    /**
     * @return string
     */
    public function cancaner()
    {
        echo 'Je ne cancane pas mais je couine' . "\n";
    }
}
