<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 19:08
 */

class FileCart implements CartGetaway
{

    private $fileId;

    public function __construct()
    {
        $this->fileId = uniqid();
    }

    public function persist(ShoppingCart $cart)
    {
        file_put_contents($this->fileId, serialize($cart));
    }

    public function retrieve($id)
    {
        return unserialize(file_get_contents($id));
    }

    public function getIdOfRecordedCart()
    {
        return $this->fileId;
    }
}