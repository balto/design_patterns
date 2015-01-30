<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 13:20
 */

class Receipt {
    private $total;

    public function addToTotal(Product $product)
    {
        $this->total += $product->getPrice();
    }

    public function getTotalPrice()
    {
        return $this->total;
    }

    public function addProductById($id)
    {
        $provider = new ProductProcider();
        $product = $provider->findProduct($id);
        $this->addToTotal($product);
    }
}