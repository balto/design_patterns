<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 12:48
 */

class ProductType
{
    private $category;
    private $name;
    private $code;

    public function __construct($category, $name, $code)
    {
        $this->category = $category;
        $this->name = $name;
        $this->code = $code;
    }

    public function __get($typeProperty)
    {
        if(!isset($this->$typeProperty))
        {
            throw new Exception('No such property');
        }

        return $this->$typeProperty;
    }
}