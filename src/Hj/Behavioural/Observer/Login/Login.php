<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\Login;

use \SplObserver;
use \SplSubject;

/**
 * Description of Login
 */
class Login implements SplSubject
{
    /**
     * @var array
     */
    private $observers = array();
    
    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }
    
    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $observers = array();
        
        foreach ($this->observers as $value) {
            if ($observer !== $value) {
                $observers[] = $value;
            }
        }
        
        $this->observers = $observer;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    
    /**
     * @param string $user
     * @param string $pass
     * @param string $ip
     */
    public function handleLogin($user, $pass, $ip)
    {
        
        
    }
}
