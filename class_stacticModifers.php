<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars
{
    static $wheel_count = 4;
    static $door_count = 4;
    static $seat_count = 2;
    static $car_count = 0;

    static function car_detail()
    {
        echo Cars::wheel_count;
        echo Cars::door_count;
        echo Cars::seat_count;
    }

}

echo Cars::$door_count;

Cars::car_detail();

