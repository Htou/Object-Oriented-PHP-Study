<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars
{
    public $wheel_count = 4;
    Private $door_count = 4;
    protected $seat_count = 2;
    function car_detail()
    {
        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->wheel_count;
    }
}

$bmw = new Cars();

//echo $bmw->wheel_count;
//echo $bmw->door_count;
echo $bmw->seat_count;