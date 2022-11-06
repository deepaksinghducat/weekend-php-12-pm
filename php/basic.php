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

//  $full_name = "Deepak singh gusain";

/**
 * 
 * Predefined Variables
 * 
 * Superglobals — Built-in variables that are always available in all scopes
 * $GLOBALS — References all variables available in global scope
 * $_SERVER — Server and execution environment information
 * $_GET — HTTP GET variables
 * $_POST — HTTP POST variables
 * $_FILES — HTTP File Upload variables
 * $_REQUEST — HTTP Request variables
 * $_SESSION — Session variables
 * $_ENV — Environment variables
 * $_COOKIE — HTTP Cookies
 * $php_errormsg — The previous error message
 * $http_response_header — HTTP response headers
 * $argc — The number of arguments passed to script
 * $argv — Array of arguments passed to script
 */

//  local scope
// $number = 10;

// function name($first_name, $last_name) {
//     global $number;
//     $number = 10;
//     echo $number;
// }

// name("John", "Doe");

// echo $number;

// global scope


// variables of variables

// $number = "num1";

// $$number = "num2";

// echo $$number;


/**
 * constants
 * 
 * 1. Syntax
 * 2. Predefined constants
 * 3. Magic constants
 */

define('FULL_NAME','deeepak singh gusain');

// var_dump(PHP_VERSION);

// echo __DIR__;

/**
 * 
 * Predefined constants
 *
 * PHP_VERSION (string)
 * PHP_MAJOR_VERSION (int)
 * PHP_MINOR_VERSION (int)
 * PHP_RELEASE_VERSION (int)
 * PHP_VERSION_ID (int)
 * PHP_EXTRA_VERSION (string)
 * PHP_ZTS (int)
 * PHP_DEBUG (int)
 * PHP_MAXPATHLEN (int)
 * PHP_OS (string)
 * PHP_OS_FAMILY (string)
 * PHP_SAPI (string)
 * PHP_EOL (string)
 * PHP_INT_MAX (int)
 * PHP_INT_MIN (int)
 * PHP_INT_SIZE (int)
 * PHP_FLOAT_DIG (int)
 * PHP_FLOAT_EPSILON (float)
 * PHP_FLOAT_MIN (float)
 * PHP_FLOAT_MAX (float)
 * DEFAULT_INCLUDE_PATH (string)
 * PEAR_INSTALL_DIR (string)
 * PEAR_EXTENSION_DIR (string)
 * PHP_EXTENSION_DIR (string)
 * PHP_PREFIX (string)
 * PHP_BINDIR (string)
 * PHP_BINARY (string)
 * PHP_MANDIR (string)
 * PHP_LIBDIR (string)
 * PHP_DATADIR (string)
 * PHP_SYSCONFDIR (string)
 * PHP_LOCALSTATEDIR (string)
 * PHP_CONFIG_FILE_PATH (string)
 * PHP_CONFIG_FILE_SCAN_DIR (string)
 * PHP_SHLIB_SUFFIX (string)
 * PHP_FD_SETSIZE (string)
 * E_ERROR (int)
 * E_WARNING (int)
 * E_PARSE (int)
 * E_NOTICE (int)
 * E_CORE_ERROR (int)
 * E_CORE_WARNING (int)
 * E_COMPILE_ERROR (int)
 * E_COMPILE_WARNING (int)
 * E_USER_ERROR (int)
 * E_USER_WARNING (int)
 * E_USER_NOTICE (int)
 * E_RECOVERABLE_ERROR (int)
 * E_DEPRECATED (int)
 * E_USER_DEPRECATED (int)
 * E_ALL (int)
 * E_STRICT (int)
 * true (bool)
 * false (bool)
 * null (null)
 * PHP_WINDOWS_EVENT_CTRL_C (int)
 * PHP_WINDOWS_EVENT_CTRL_BREAK (int)
 *  
 */
 
/**
 * Magic constants
 * 
 * __LINE__	        The current line number of the file 
 * __FILE__	        The full path and filename of the file with symlinks resolved. 
 *                  If used inside an include, the name of the included file is returned.
 * __DIR__	        The directory of the file. If used inside an include, the directory of the included file is returned. 
 *                  This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root 
 *                  directory.
 * __FUNCTION__	    The function name, or {closure} for anonymous functions.
 * __CLASS__	    The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). 
 *                  When used in a trait method, __CLASS__ is the name of the class the trait is used in.
 * __TRAIT__	    The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
 * __METHOD__	    The class method name.
 * __NAMESPACE__	The name of the current namespace.
 * ClassName::class	The fully qualified class name.
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