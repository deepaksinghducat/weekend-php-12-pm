<?php 

spl_autoload_register(function($class) {
    require  $class.".php";
});


$test = new Test();

var_dump($test);

$test2 = new Test2();

var_dump($test2);