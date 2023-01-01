<?php 

try {

    $number = 0;
    if($number == 0) {
        throw new Exception('Please enter a number the number greater than zero');
    }else{
        $result = 1/$number;
    }

} catch(\Exception $e) {
    var_dump($e->getMessage());
}