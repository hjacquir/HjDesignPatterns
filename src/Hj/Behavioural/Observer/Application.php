<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer;

use \DateTime;

/**
 * Description of Application
 */
class Application
{
    public function logInFile()
    {
        $log = new Log();
        $file = new File();
        $log->attach($file);
        $date = new DateTime();
        $stringDate = $date->format('Y-m-d');
        $log->setLastMessage($stringDate . ' : Runtime Exception.');
    }
}

