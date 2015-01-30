<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 12:22
 */

class use_getaway {
    public function showHistory()
    {
        $cart = new FileCart();

        $history = new ShoppingHistory($cart, [3,6,7]);
        $history->listAllCarts();
    }
}