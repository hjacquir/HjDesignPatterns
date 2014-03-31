<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Structural\Adapter\With;

/**
 * Contract for service like twitter, facebook, instagram ...
 */
interface Service
{
    /**
     * @param string $content
     */
    public function post($content);
}
