<?php
/**
 * Created by PhpStorm.
 * User: balimaci
 * Date: 2015.01.30.
 * Time: 12:44
 */

class TypesFactory
{
    public function makeFrom(array $typeData = array())
    {
        if (empty($typeData))
        {
            return null;
        }

        return new ProductType(
            $typeData['category'],
            $typeData['name'],
            $typeData['code']
        );
    }
}