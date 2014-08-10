<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\StationMeteo;

/**
 * Description of Observateurs
 */
interface Observateurs
{
    public function actualiser($temp, $humidite, $pression);
}
