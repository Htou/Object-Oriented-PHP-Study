<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars
{
    private $door_count = 4;

    function get_values()
    {
        echo $this->door_count;
    }

    function set_values()
    {
       echo $this->door_count = 10;
    }
}

$bmw = new Cars();
$bmw->set_values();
$bmw->get_values();

