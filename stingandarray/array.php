<?php

// 1 array()
// $array = [10,20,30,40,50,60];

// $array = array(10,20,30,40,50,60);

// print_r($array);

// 2 is_array()

// $array = array(10,20,30,40,50,60);

// if(is_array($array)) {
//     echo "array";
// }


// 3 in_array()

// $array = array(10,20,30,40,50,60);

// if(in_array(100, $array)) {
//     echo "in array";
// }


// 4 array_merge()

// $array = [10,20];

// $array1 = [40,20,30];

// $array3 = array_merge($array, $array1);

// print_r($array3);


// 5 array_keys()

// $array = [10,20,30,40];

// $array = [
//     "name" => "fsafsadf"
// ];

// print_r(array_keys($array));

// 6 array_key_exists()

// $array = [
//     "name" => "fsafsadf"
// ];

// echo array_key_exists("name1", $array);

// 7 array_shift()

// $array = [10,20,30,40];

// echo array_shift($array);

// print_r($array);

// unset($array[1]);

// print_r($array);

// 8 array_push()

// $array = [10,20,30,40];

// array_push($array, 100);

// print_r($array);



// 9  array_pop()

// $array = [10,20,30,40];

// array_pop($array);

// print_r($array);


// 10 array_values()

// $array = [10,20,30,40];

// $array = [
//     "name" => "fsafsadf"
// ];

// echo "<pre>";


// print_r(array_values($array));

// 11 array_map()

// $array = [10,20,30,40];

// echo "<pre>";

// $mulitplyBy2 = array_map(function($value) {
//     return $value *2;
// },$array);

// print_r($mulitplyBy2);


// 12 array_unique()

// $array = [10,20,10,60,80];

// print_r(array_unique($array));

// 13 array_slice()

// $array = [10,20,10,60,80];

// print_r(array_slice($array, 0, 2));

// 14 array_diff()

// $array1  = [10,20,30,40,60,70];
// $array2  = [60,70,80,90,100];

// $diffArray = array_diff($array1, $array2);
// echo "<pre>";

// print_r($diffArray);

// 15 array_search()
// $array1  = [10,20,30,40,60,60];

// $searchArray = array_search(60,$array1); 
// echo "<pre>";

// print_r($searchArray);

// 16 array_reverse()

// $array1  = [10,20,30,40,60,60];

// echo "<pre>";

// $reverseArray = array_reverse($array1);

// print_r($reverseArray);

// 17 array_unshift(),,

// $array1  = [10,20,30,40,60,60];

// echo "<pre>";

// print_r($array1);

// array_unshift($array1, 100);

// print_r($array1);

// 18 array_splice()

$array1  = [10,20,30,40,60,60];
echo "<pre>";

// print_r($array1);

$key = array_search(20, $array1);

array_splice($array1, $key, 1);

print_r($array1);
