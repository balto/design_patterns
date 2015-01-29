<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 18:05
 */

class ProductFactory
{
    private function isKeyboard($productId)
    {
        return substr($productId, 0, 1) == 'k';
    }

    public function make($productId)
    {
        if ($this->isKeyboard($productId))
        {
            return new Keyboard();
        }
        else
        {
            return new Mouse();
        }
    }
}