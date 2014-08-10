<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\Abonnement;

use SplObserver;

class LesEditionsHelloWorld implements \SplSubject
{
    /**
     * @var array
     */
    private $abonnes = array();

    /**
     * @var string
     */
    private $messageDeParution;

    public function parutionMagazine($messageDeParution)
    {
        $this->messageDeParution = $messageDeParution;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getMessageDeParution()
    {
        return $this->messageDeParution;
    }

    /**
     * @param SplObserver $abonne
     */
    public function attach(SplObserver $abonne)
    {
        $this->abonnes[] = $abonne;
    }

    /**
     * @param SplObserver $abonne
     */
    public function detach(SplObserver $abonne)
    {
        $key = array_search($abonne, $this->abonnes);

        if (is_int($key)) {
            unset($this->abonnes[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->abonnes as $abonne) {
            $abonne->update($this);
        }
    }
}