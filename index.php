<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars
{
    static $door_count = 4;
    public $wheel_count = 4;

    function __construct()
    {
        echo $this->wheel_count;
        echo self::$door_count++;

    }

    function __destruct()
    {
        echo self::$door_count--;
    }
}


$bmw = new Cars();

$mercedes = new Cars();

$audi = new Cars();