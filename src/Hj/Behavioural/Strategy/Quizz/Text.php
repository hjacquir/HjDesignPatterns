<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Quizz;

/**
 * Description of Text
 */
class Text implements MarkLogik
{
    public function mark()
    {
        echo 'I am a mark logik Text question';
    }
}
