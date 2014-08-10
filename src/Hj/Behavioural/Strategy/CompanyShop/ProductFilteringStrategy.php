<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\CompanyShop;

/**
 * Description of ProductFilteringStrategy
 */
interface ProductFilteringStrategy
{
    public function filter(Product $product);
}
