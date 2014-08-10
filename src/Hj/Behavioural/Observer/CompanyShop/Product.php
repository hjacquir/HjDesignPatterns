<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\CompanyShop;

use \SplObserver;
use \SplSubject;

/**
 * Description of Product
 */
class Product implements SplSubject
{
    /**
     * @var array
     */
    private $datas = array();
    
    /**
     * @var array
     */
    private $loggers;
    
    /**
     * 
     * @param  $datas
     */
    public function addDatas($key, $value)
    {
        $this->datas[$key] = $value;
        
        $this->notify();
    }
    
    /**
     * @return array
     */
    public function getDatas()
    {
        return $this->datas;
    }
        
    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->loggers = $observer;
    }
    
    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->loggers);
        
        if (is_int($key)) {
            unset($this->loggers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->loggers as $key => $logger) {
            $logger->update($this);
        }
    }
}
