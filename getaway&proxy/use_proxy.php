<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 12:26
 */

class use_proxy {
    public function getProducts()
    {
        $cart = new CartProxy();
        $cart->getProducts();
    }
}