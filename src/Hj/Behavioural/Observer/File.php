<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer;

use \SplObserver;

/**
 * Observer
 */
class File implements SplObserver
{
    public function update(\SplSubject $subject)
    {
        $message = $subject->getLastMessage();
        file_put_contents('file.log', $message);
    }
}
