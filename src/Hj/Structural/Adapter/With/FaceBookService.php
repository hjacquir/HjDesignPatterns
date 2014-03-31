<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Structural\Adapter\With;

/**
 * Description of FaceBook
 */
class FaceBookService implements Service
{
    /**
     * @var FaceBook
     */
    private $facebook;
    
    public function __construct()
    {
        $this->facebook = new FaceBook();
    }
    
    /**
     * @param string $content
     */
    public function post($content)
    {
        $this->facebook->postToWall($content);
    }
}
