<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars
{
    var $wheel_count = 4;
    var $door_count = 4;

    function car_detail()
    {
        return "this car has " . $this->wheel_count . " wheels";
    }
}

$bmw = new Cars();
$mercedes = new Cars();
$toyota = new Cars();

echo $bmw->wheel_count = 10;
echo '<br>';
echo $mercedes->wheel_count . "<br>";

echo $mercedes->car_detail();
