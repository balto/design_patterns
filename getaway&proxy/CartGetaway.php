<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 19:06
 */

interface CartGetaway
{
    public function persist(ShoppingCart $cart);
    public function retrieve($id);
    public function getIdOfRecordedCart();
}