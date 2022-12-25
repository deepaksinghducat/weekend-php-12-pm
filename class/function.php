<?php

/**
 * 
 * 1. User-defined functions
 * 2. Function arguments
 * 3. Returning values
 * 4. Variable functions
 * 6. Anonymous functions
 * 7. Arrow Functions
 */

/**
 * User-defined functions
 * 
 * A function may be defined using syntax such as the following:
 */

//  function myFullName() {
//     echo "deepak singh gusain";
//  }

//  myFullName();


/**
 * Function arguments
 * 
 * Information may be passed to functions via the argument list, which is a comma-delimited list of 
 * expressions. The arguments are evaluated from left to right, before the function is actually 
 * called (eager evaluation).
 */


//  function addition($a , $b) {
//     echo $a + $b;
//  }

//  addition(40,20);



/**
 * Returning values
 * 
 * Values are returned by using the optional return statement. Any type may be returned, 
 * including arrays and objects. This causes the function to end its execution immediately 
 * and pass control back to the line from which it was called
 */

// function addition($a, $b)
// {
//     $sum = $a +  $b;
//     return $sum;
// }

// $result = addition(40, 20);

// echo $result;


/**
 * Variable functions
 * 
 * PHP supports the concept of variable functions. This means that if a variable name has parentheses 
 * appended to it, PHP will look for a function with the same name as whatever the variable evaluates 
 * to, and will attempt to execute it. Among other things, this can be used to implement callbacks, 
 * function tables, and so forth.
 * 
 */

// function addition($a, $b)
// {
//     $sum = $a +  $b;
//     return $sum;
// }

// $sum  = 'addition';

// $result = $sum(40, 20);

// echo $result;

/**
 * Anonymous functions
 * 
 * Anonymous functions, also known as closures, allow the creation of functions which have no 
 * specified name. They are most useful as the value of callable parameters, but they have many 
 * other uses.
 */

//  $fullname = function($a , $b) {
//     return $a + $b;
//  };

//  $result = $fullname(10,20);

//  echo $result;

// $array = [10,20,30,40,50];

// $newArray = array_map(function($item) {
//   return $item * 2;
// }, $array);

// echo "<pre>";

// print_r($array);

// print_r($newArray);

/**
 * Arrow Functions
 * 
 * Arrow functions were introduced in PHP 7.4 as a more concise syntax for anonymous functions.
 */

//  function addtonumber() {

//  }

 $addToNumber = fn($a,$b) => $a + $b;

 echo $addToNumber(10,20);

