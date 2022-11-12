<?php

// operand
// unary , binary , ternary
// echo "operator";

/**
 *
 * 1. Arithmetic Operators
 * 2. Assignment Operators
 * 3. Comparison Operators
 * 4. Incrementing/Decrementing Operators
 * 5. Logical Operators
 * 6. String Operators
 * 7. Array Operators
 */

/**
 * Arithmetic Operators
 * 
 * +$a	Identity	Conversion of $a to int or float as appropriate.
 * -$a	Negation	Opposite of $a.
 * $a + $b	Addition	Sum of $a and $b.
 * $a - $b	Subtraction	Difference of $a and $b.
 * $a * $b	Multiplication	Product of $a and $b.
 * $a / $b	Division	Quotient of $a and $b.
 * $a % $b	Modulo	Remainder of $a divided by $b.
 * $a ** $b	Exponentiation	Result of raising $a to the $b'th power.
 * 
 */

//  $a = 10;
//  $b = 20;

// addition
//  $c = $a + $b;

//  echo "$a + $b = $c <br>";

// substraction
//  $c = $b - $a;
//  echo "$b - $a = $c <br>";

// multiplication
// $c = $b * $a;
// echo "$b * $a = $c <br>";

// division
// $c = $a / $b;
// echo "$b / $a = $c <br>";

// reminder
// $c = $b % $a;
// echo "$b % $a = $c <br>";

// exponentiation
// $c = $b ** $a;
// echo "$b ** $a = $c <br>";


// $a = 20;
// $b = 40;
// $flag = "substraction";

// switch ($flag) {
//     case 'addition':
//         $c = $a +  $b;
//         echo "$b + $a = $c <br>";
//         break;

//     case 'substraction':
//         $c = $a - $b;
//         echo "$a - $b = $c <br>";
//         break;

//     case 'multiplication':
//         $c = $a * $b;
//         echo "$b * $a = $c <br>";
//         break;

//     case 'division':
//         $c = $a / $b;
//         echo "$b / $a = $c <br>";
//         break;

//     case 'reminder':
//         $c = $a % $b;
//         echo "$b % $a = $c <br>";
//         break;

//     case 'exponentiation':
//         $c = $a ** $b;
//         echo "$b ** $a = $c <br>";
//         break;

//     default:
//         echo "incorrect flag";
//         break;
// }


/**
 * Assignment Operators
 * 
 * $a += $b	$a = $a + $b	Addition
 * $a -= $b	$a = $a - $b	Subtraction
 * $a *= $b	$a = $a * $b	Multiplication
 * $a /= $b	$a = $a / $b	Division
 * $a %= $b	$a = $a % $b	Modulus
 * $a **= $b	$a = $a ** $b	Exponentiation
 */

//  $a = 10;
//  $b = 10;

//  $c = $a;
//  $a = $a + $b;

//  echo "$a = $c + $b <br>";

//  +=

// $a += $b;

// echo "a = $a <br>";

//  -=

// $a -= $b;

// echo "a = $a <br>";

//  *=

// $a *= $b;
// echo "a = $a <br>";
//  /=

// $a /= $b;
// echo "a = $a <br>";

//  %=
// $a %= $b;
// echo "a = $a <br>";

//  **=
// $a **= $b;
// echo "a = $a <br>";


/**
 * Comparison Operators
 *
 * $a == $b	Equal	true if $a is equal to $b after type juggling.
 * $a === $b	Identical	true if $a is equal to $b, and they are of the same type.
 * $a != $b	Not equal	true if $a is not equal to $b after type juggling.
 * $a <> $b	Not equal	true if $a is not equal to $b after type juggling.
 * $a !== $b	Not identical	true if $a is not equal to $b, or they are not of the same type.
 * $a < $b	Less than	true if $a is strictly less than $b.
 * $a > $b	Greater than	true if $a is strictly greater than $b.
 * $a <= $b	Less than or equal to	true if $a is less than or equal to $b.
 * $a >= $b	Greater than or equal to	true if $a is greater than or equal to $b.
 * $a <=> $b	Spaceship	An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.
 */

//  $a = 9;

//  $b = 10;

//  == / ===
//  echo $a === $b;

// != / !== / <>
// echo $a !== $b;
// echo $a <> $b;

// > / >= 
// echo $a >= $b;

// < / <=
// echo $a <= $b;

// <=> 
// if a == b 0
// if a > b -1
// if a < b 1
// echo $a <=> $b;

/**
 * Incrementing/Decrementing Operators
 * 
 * ++$a	Pre-increment	Increments $a by one, then returns $a.
 * $a++	Post-increment	Returns $a, then increments $a by one.
 * --$a	Pre-decrement	Decrements $a by one, then returns $a.
 * $a--	Post-decrement	Returns $a, then decrements $a by one.
 */

//  $a = 10;

//  $a = $a + 1;

// increment
// $a++;
// echo $a ."<br>";
// ++$a;
// echo $a ."<br>";

// decrement
// $a--;
// echo $a ."<br>";
// --$a;
// echo $a ."<br>";

/**
 * Logical Operators 
 * 
 * $a and $b	And	true if both $a and $b are true.
 * $a or $b	Or	true if either $a or $b is true.
 * $a xor $b	Xor	true if either $a or $b is true, but not both.
 * ! $a	Not	true if $a is not true.
 * $a && $b	And	true if both $a and $b are true.
 * $a || $b	Or	true if either $a or $b is true. 
 */

 //$a = null; // 1010 
 //$b = 11; // 1010

//  add  && 
//  echo ($a == 10 && $b == 10). "<br>";
//  echo ($a == 10 and $b == 10) . "<br>";

//  &
// echo ($a & $b) . "<br>";

// or ||

// echo ($a == 11 || $b == 10) . "<br>";

// echo ($a | $b) . "<br>";

// ! 

// echo !$a;

/**
 * String Operators
 *
 * There are two string operators. The first is the concatenation operator ('.'), 
 * which returns the concatenation of its right and left arguments. 
 * The second is the concatenating assignment operator ('.='), which appends the argument 
 * on the right side to the argument on the left side.
 */

//  $name = "deepak";
//  $name = $name . " singh";
// $name .= "Singh";

//  echo $name;

/**
 * Array Operators
 * 
 * $a + $b	Union	Union of $a and $b.
 * $a == $b	Equality	true if $a and $b have the same key/value pairs.
 * $a === $b	Identity	true if $a and $b have the same key/value pairs in the same order and of the same types.
 * $a != $b	Inequality	true if $a is not equal to $b.
 * $a <> $b	Inequality	true if $a is not equal to $b.
 * $a !== $b	Non-identity	true if $a is not identical to $b.
 */

//  union
//  $array_one = [10,20,30,40,60,100];
//  $array_two = [10,20,30,40,50];
//  $array_three = $array_two + $array_one;

//  print_r($array_three);

// equal
// $array_one = [10,20,30,40,50,60];
// $array_two = [10,20,30,40,50,60];

// echo $array_one === $array_two;

// inequality
// $array_one = [10,20,30,40,50,60];
// $array_two = [10,20,30,40,50];

// echo $array_one !== $array_two;

// echo $array_one <> $array_two;

// $array = [10,20,30];

// echo in_array(100,$array);


// ternary

// $a = 10;

// echo $a === 10 ? "true" : "false";

// null collesion

// $a = 10;

// echo $a ?? "null";

