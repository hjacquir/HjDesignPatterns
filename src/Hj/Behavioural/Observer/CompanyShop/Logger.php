<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Observer\CompanyShop;

/**
 * Description of Logger
 */
class Logger implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        $datas = $subject->getDatas();
        
        echo 'Datas are added in the product and datas are : ' . "\n";

        foreach ($datas as $key => $value) {
            echo $value . "\n";
        }
    }
}
