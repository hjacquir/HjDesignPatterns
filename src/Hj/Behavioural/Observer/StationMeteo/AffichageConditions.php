<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\StationMeteo;

/**
 * Description of AffichageConditions
 */
class AffichageConditions implements \SplObserver, Affichage
{
    public function afficher()
    {
        
    }

    public function update(\SplSubject $subject)
    {
        $subject->notify();
    }

}
