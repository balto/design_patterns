<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 18:08
 */

class Keyboard implements Product {

    public function getPrice()
    {
       return 50;
    }

    public function getPicture()
    {
        return null;
    }

    public function getDescription()
    {
        return 'test keyboard description';
    }
}