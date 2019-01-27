<?php
/**
 * Created by PhpStorm.
 * User: hichem
 * Date: 23-1-19
 * Time: 15:35
 */

class Cars {

}

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class . "<br>";
}