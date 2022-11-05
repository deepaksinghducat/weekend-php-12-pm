<?php

/**
 * 1. PHP tags
 * 2. Escaping from HTML
 * 3. Instruction separation
 * 4. Comments
 * 5. outputing data 
 */

/**
 * 1. Booleans
 * 2. Integers 
 * 3. Floating point numbers
 * 4. Strings 
 * 5. Numeric strings
 * 6. Arrays 
 * 8. Objects 
 * 9. Enumerations
 * 10. Resources  $_POST, $_GET
 * 11. NULL 
 * 12. Callbacks / Callables
 * 13. Type declarations
 * 14. Type Juggling
 * 15. gettype()
 */

//  boolean true(1) / false(0)
// $check = false;

// echo gettype($check);

// print $check;

// integer
// $num1 = 10;

// echo "number" . $num1;
// echo gettype($num1);

// floating point numbers
// $num2 = 10.45;

// echo $num2;

// echo gettype($num2);

// strings
// $str = "fafasfafs\"afsdasfadsf";

// $str[0] = "fasfasf";

// echo $str[0];

// string number

// $sum = 10 +  "10";

// echo $sum;

// Array 

// $array = ["10",10,true, false];

// $array = array(10, 20, 30, 40);

// echo "<pre>";

// var_dump($array);

// print_r($array);


// associative array
// $array = [
//     "name" => "John",
//     "age" => 20
// ];

// var_dump($array);

// multidimensional array

// $array = [10, [10,20,30], 40,50];

// echo "<pre>";
// var_dump($array);

// Objects
// class Car {

// }

// $car = new Car();

// print_r($car);

// Enumerations

// enum Room {
//     case first;
//     case last;
// }

// print_r(Room::first);

// $pending = "pending";
// $completed= "completed";

// enum OrderStatus {
//     case pending;
//     case completed;
// }

// print_r(OrderStatus::pending);

//  type juggling

// $str = (int) "10";

// echo $str;


/**
 * 
 * 1. Basics
 * 2. Predefined Variables
 * 3. Variable scope
 * 4. Variable variables 
 * 5. Variables From External Sources
 */


/**
 * 
 * 1. Syntax
 * 2. Predefined constants
 * 3. Magic constants
 */
?>

<?php

//   single line comments
/**
 * multiline comments
 */

//  ctrl + / for single line 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <h1><?= "Hello World" ?></h1> -->
    
</body>

</html>