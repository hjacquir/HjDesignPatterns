<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Structural\Adapter\Without;

/**
 * We have posts with desciption and url and we want to send on our site
 */
class Posts
{
    /**
     * @var string
     */
    private $description;
    
    /**
     * @var string
     */
    private $url;
    
    /**
     * @param string $service
     */
    public function send($service)
    {
        $content = $this->description . $this->url;
        
        if ('twitter' === $service) {
            $twitter = new Twitter();
            $twitter->tweet($content);
        } elseif ('facebook' === $service) {
            $facebook = new FaceBook();
            $facebook->postToWall($content);
        }
        /**
         * we want to add a new api like Instagramm , Pinterest ...etc
         * use if else is not the best practice we use Adapter pattern to do that
         */
        
    }
}
