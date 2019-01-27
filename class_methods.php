<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars
{
    function gretting()
    {

    }

    function gretting2()
    {

    }

    function gretting3()
    {

    }
}

$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
    echo $method . "<br>";
}