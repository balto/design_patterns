<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 13:28
 */

class ProductProvider {
    public function findProduct($id)
    {
        if($id == 0)
        {
            return new Keyboard();
        }

        return new NullProduct();
    }
}