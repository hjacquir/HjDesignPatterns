<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ex2;

/**
 * Description of Voler
 */
class Voler implements StrategieVoler
{
    /**
     * @return string
     */
    public function voler()
    {
        echo 'Je peux voler' . "\n";
    }
}
