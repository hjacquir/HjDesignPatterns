<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer;

use \SplSubject;

/**
 * Subject class
 */
class Log implements SplSubject
{
    /**
     * @var array
     */
    private $observer = array();
    
    /**
     * @var string
     */
    private $lastMessage;
    
    public function attach(\SplObserver $observer)
    {
        $this->observer[] = $observer;
        
        return $this;
    }

    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observer, true);
        
        if (is_int($key)) {
            unset($this->observer[$key]);
        }
        
        return $this;
    }

    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update($this);
        }
    }
    
    /**
     * @param string $message
     */
    public function setLastMessage($message)
    {
        $this->lastMessage = $message;
        
        $this->notify();
    }
    
    /**
     * @return string
     */
    public function getLastMessage()
    {
        return $this->lastMessage;
    }
}
