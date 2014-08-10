<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Quizz;

/**
 * Description of Question
 */
abstract class Question
{
    /**
     * @var MarkLogik
     */
    private $markLogik;
    
    /**
     * @param MarkLogik $markLogik
     */
    public function __construct(MarkLogik $markLogik)
    {
        $this->markLogik = $markLogik;
    }
    
    abstract protected function mark();
}
