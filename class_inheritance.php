<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars
{
    var $wheels = 4;

    function gritting()
    {
        return "hello";
    }
}

$bmw = new Cars();

class Trucks extends Cars {
    var $wheels = 10;
}

$tacoma = new Trucks();

echo $tacoma->wheels;