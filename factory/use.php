<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 18:20
 */

class Controller
{
    public function addProduct($productId)
    {
        $shoppingCart = new ShoppingCart();
        $shoppingCart->add($productId);
    }
}