<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 18:57
 */

class ShoppingHistory
{
    private $gateway;
    private $shoppingCartIds = [];

    public function __construct(CartGateway $gateway, array $ids = [])
    {
        $this->gateway         = $gateway;
        $this->shoppingCartIds = $ids;
    }

    public function listAllCarts()
    {
        $shoppingCarts = [];

        foreach ($this->shoppingCartIds as $id)
        {
            $shoppingCarts = $this->gateway->retrieve($id);
        }

        return $shoppingCarts;
    }
}