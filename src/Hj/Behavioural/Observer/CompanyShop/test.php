<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */
$logger = new Hj\Behavioural\Observer\CompanyShop\Logger();

$product = new \Hj\Behavioural\Observer\CompanyShop\Product();
$product->attach($logger);
$product->addDatas('test', $value);
