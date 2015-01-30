<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 13:33
 */

class NullProduct implements Product {

    public function getPrice()
    {
        return 0;
    }

    public function getPicture()
    {
        return 'default.jpg';
    }

    public function getDescription()
    {
        return '';
    }
}