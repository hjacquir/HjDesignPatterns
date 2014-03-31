<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Structural\Adapter\With;

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
     * @var Service
     */
    private $service;
    
    /**
     * @param string $description
     * @param string $url
     */
    public function __construct($description, $url)
    {
        $this->description = $description;
        $this->url         = $url;
    }
    
    /**
     * @param Service $service
     */
    public function setServiceAdapter(Service $service)
    {
        $this->service = $service;
    }
    
    public function send()
    {
        $content = $this->description . $this->url;

        $this->service->post($content);
    }
}
