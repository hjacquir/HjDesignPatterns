<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\StationMeteo;

/**
 * Description of DonneesMeteo
 */
class DonneesMeteo implements \SplSubject
{
    /**
     * @var float
     */
    private $temp;
    
    /**
     * @var float
     */
    private $humidite;
    
    /**
     * @var float
     */
    private $pression;
    
    /**
     * @var array
     */
    private $observateurs = array();
    
    public function attach(\SplObserver $observer)
    {
        $this->observateurs[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observateurs);
        
        if (false !== $key) {
            unset($this->observateurs[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observateurs as $value) {
            $value->update($this->temp, $this->pression, $this->humidite);
        }
    }
    
    public function actualiser()
    {
        $this->notify();
    }
    
    public function setMeasures($temp, $pression, $humidite)
    {
        $this->temp     = $temp;
        $this->pression = $pression;
        $this->humidite = $humidite;
        
        $this->notify();
    }
}