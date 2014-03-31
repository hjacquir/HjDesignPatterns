<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Structural\Adapter\With;

use \Hj\Structural\Adapter\Service;

/**
 * Description of Twitter
 */
class TwitterService implements Service
{
    /**
     *
     * @var Twi
     */
    private $twitter;
    
    public function __construct()
    {
        $this->twitter = new Twitter();
    }

    /**
     * @param string $text
     */
    public function send($text)
    {
        $this->twitter->tweet($text);
    }
}
