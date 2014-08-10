<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\Abonnement;

use SplSubject;

class AbonneFoo implements \SplObserver
{
    /**
     * @param SplSubject $maisonEdition
     */
    public function update(SplSubject $maisonEdition)
    {
        echo $maisonEdition->getMessageDeParution();
    }
}