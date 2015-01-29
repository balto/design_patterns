<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.29.
 * Time: 18:09
 */

class Mouse implements Product
{

    public function getPrice()
    {
        return 20;
    }

    public function getPicture()
    {
        return 'mouse.jpg';
    }

    public function getDescription()
    {
        return 'test mouse desc';
    }
}