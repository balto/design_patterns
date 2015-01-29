<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 17:55
 */

class ShoppingCart
{
    private $productsInTheCart = array();
    private $productFactory;

    public function __construct()
    {
        $this->productFactory = new ProductFactory();
    }

    public function add($productId)
    {
        $this->productsInTheCart[] = $this->productFactory->make($productId);
    }




}