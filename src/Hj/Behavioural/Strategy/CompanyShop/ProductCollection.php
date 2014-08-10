<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\CompanyShop;

/**
 * Description of ProductCollection
 */
class ProductCollection
{
    /**
     * @var array
     */
    private $products = array();
       
    /**
     * @param array $products
     */
    public function __construct(Array $products)
    {
        $this->products = $products;
    }
    
    /**
     * @var ProductFilteringStrategy
     */
    private $productFilteringStrategy;
    
    /**
     * @param ProductFilteringStrategy $productFilteringStrategy
     */
    public function setProductFilteringStrategy(ProductFilteringStrategy $productFilteringStrategy)
    {
        $this->productFilteringStrategy = $productFilteringStrategy;
    }
}
