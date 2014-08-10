<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\StationMeteo;

/**
 * Description of Sujet
 */
interface Sujet
{
    /**
     * @var Observateurs
     */
    public function enregistrer(Observateurs $observateurs);
    
    /**
     * @var Observateurs
     */
    public function supprimer(Observateurs $o);
    
    public function notifier();
}
