<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 20:06
 */

class CartProxy implements Cart
{
    private $shoppingCart;

    public function getProducts()
    {
        if (is_null($this->shoppingCart))
        {
            $this->shoppingCart = new ShoppingCart();
        }

        return $this->shoppingCart->getProducts();
    }
}