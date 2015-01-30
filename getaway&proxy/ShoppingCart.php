<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 20:02
 */

class ShoppingCart implements Cart
{
    private $products;

    public function getProducts()
    {
        return $this->products;
    }
}