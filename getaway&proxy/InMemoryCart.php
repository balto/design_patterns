<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 19:13
 */

class InMemoryCart implements CartGetaway
{
    private $listOfCarts;

    public function persist(ShoppingCart $cart)
    {
        $this->listOfCarts[] = $cart;
    }

    public function retrieve($id)
    {
        return $this->listOfCarts[$id];
    }

    public function getIdOfRecordedCart()
    {
        return end(array_keys($this->listOfCarts));
    }
}