<?php

/**
 * 
 * 1. The Basics
 * 2. Properties
 * 3. Class Constants
 * 4. Autoloading Classes
 * 5. Constructors and Destructors
 * 6. Visibility
 * 7. Object Inheritance
 * 8. Scope Resolution Operator (::)
 * 9. Static Keyword
 * 10. Class Abstraction
 * 11. Object Interfaces
 * 12. Traits
 * 13. Anonymous classes
 * 14. Overloading
 * 15. Object Iteration
 * 16. Magic Methods
 * 17. Final Keyword
 * 18. Object Cloning
 * 19. Comparing Objects
 * 20. Late Static Bindings
 * 21. Objects and references
 * 22. Object Serialization
 * 
 */

// $fullname = "asdfkjl;";

//  public private protected


// class Employee
// {
//     // properties
//     private $fullname;
//     public $firstname;
//     public $lastname;

//     public const fullname = "deepak singh gusain";

//     public static $username = "deepak"; 

//     public function __construct($firstname, $lastname) {
//         $this->firstname = $firstname;
//         $this->lastname = $lastname;
//         $this->fullname = $firstname . " ". $lastname;
//     }

//     // method
//     public function getFullName() {
//         // echo "full name function called";

//     //    return $this->fullname;

//         return "<br>".$this->getFirstName();
//     }

//     private function getFirstName() {
//         return self::getUser();
//     }

//     public function __destruct()
//     {
//         // echo "<br> $this->firstname destruct function called";
//     }

//     public static function getUser() {
//         // echo "user function called";

//         return self::fullname . " ". self::$username;
//     }
// }

// $employee = new Employee('deepak', 'singh gusain'); 

// $employee1 = new Employee('deepak1', 'singh gusain'); 


// echo $employee->fullname; // instance of Employee

// echo $employee->getFullName();

// echo $employee1->getFullName();

// echo Employee::fullname;

// echo Employee::getUser();

// echo Employee::$username;

// public private protected 

// class Car
// {
//     // properties
//     public $name;

//     public const fullname = "fullname";

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     // method
//     public function fullName()
//     {
//         // echo $this->name;

//         return self::fullname;
//     }

//     public function __destruct(){
//         // echo "<br> destructor called";
//     }
// }

// echo Car::fullname;

// $alto =  new Car('alto');
// echo $alto->name;
// echo "<br>";
// echo $alto->fullName();

// $alto =  new Car('tiago');
// echo $alto->name;

// class Root {
//     protected $name = "root";

//     public function test() {
//         return $this->name;
//     }
// }

// $root = new Root();

// echo $root->name;

// class Child extends Root {
//     public function test() {
//         return 'dsfgdfsghg';
//     }
// }

// $children = new Child();

// echo $children->test();

// class Car {
//     public static $hasFourWheel = "true";

//     public static function test() {
//         return self::$hasFourWheel;
//     }
// }

// $car = new Car();
// echo $car->hasFourWeheel;

// echo Car::test();

// class Test {

// }

// abstract class Employee {
//     abstract public function test(); 

//     public function test2() {
//         return "test2";
//     }
// }

// class Deepak extends Employee {
//     public function test() {
//         return "fsdsghh";
//     }
// }

// $deepak = new Deepak();
// echo $deepak->test();

// interface Employee {
//     public function getFullName();
// }

// interface Department {
//     public function getDepartmentDetail();
// }

// class Deepak implements Employee, Department {
//     public function getFullName(){
//         return "getfull name function called";
//     }

//     public function getDepartmentDetail() {
//         return "get department details function called";
//     }
// }

// $deepak  = new Deepak();

// echo $deepak->getFullName();

// trait FullName {
//     public function getFullName() {

//     }
// }

// trait DepartmentDetail {
//     public function getDepartmentDetail() {

//     }
// }

// class Employee {
//    use FullName, DepartmentDetail;
// }

// class Department {
//     use FullName, DepartmentDetail;
// }

// function getName($class) {

// }

// getName(new Employee());// anonymous class

// final class Root {
//     final public function getName() {

//     }
// }

// class Child extends Root {
//     public function getName() {

//     }
// }

// parentclass -> childclass inheritance

//  class ParentClass {
//     protected $parentName = 'parent';

//     public function getParentName() {
//         echo $this->parentName;
//     }
//  }

//  $parentClass = new ParentClass();

//  echo $parentClass->getParentName();

//  class ChildClass extends ParentClass {
//     public function getParent() {
//         return $this->parentName;
//     }
//  }

//  $childClass = new ChildClass();

//  echo $childClass->getParent();

// super

// Class Department {
//     protected $employeename;

//     public function __construct($name)
//     {   
//         $this->employeename = $name;
//     }

//     public function getDepartmentDetail() {
//         return "Name:$this->employeename , Department: PHP";
//     }
// }

// class Employee extends Department {
//     public $name;

//     public function __construct($name) {
//         parent::__construct($name);
//         $this->name = $name;
//     }

//     public function getName() {
//        return  $this->name;
//     }
// }

// $employee = new Employee('deepak');

// echo $employee->getDepartmentDetail();

// set and get

// class Employee
// {
//     private $name;
//     private $age;

//     // public function __construct($name)
//     // {
//     //     $this->name = $name;
//     // }

//     public function __get($var)
//     {
//         return $this->{$var};
//     }

//     public function __set($var, $value)
//     {
//         $this->{$var} = $value;
//     }

//     // public function getName() {
//     //     return $this->name;
//     // }
// }

// $employee = new Employee();

// $employee->name = "deepak";
// $employee->age = 26;

// echo $employee->name;
// echo $employee->age;

// echo $employee->getName();

// abstraction 50% datahiding

// abstract class ParentClass {
//     abstract public function getName(); // this method is implemented by child class or inherited class

//     public function getAge() {

//     }
// }

// abstract class ChildClass extends ParentClass {
//     abstract public function getName();
// }

// interface 100% datahiding

// interface EmployeePrototype
// {
//     public function getName();
//     public function getAge();
//     public function getDepartmentDetail();
// }

// class Employee implements EmployeePrototype
// {
//     public function getName()
//     {
//         return "deepak";
//     }

//     public function getAge()
//     {
//         return 26;
//     }

//     public function getDepartmentDetail()
//     {
//         return "PHP";
//     }
// }

// $employee = new Employee();

// echo $employee->getName();

// echo $employee->getAge();

// echo $employee->getDepartmentDetail();

// mulitple inheritance class 

// class ParentClass {

// }

// class ChildClass extends ParentClass {

// }

// class ChildChildClass extends ChildClass {

// }

// class Course {

// }

// class Sports {

// }

// class Student extends Course, Sports {

// }

// interface

// interface Course
// {
//     public function getCourseName();
// }

// interface Sports
// {
//     public function getSportName();
// }

// class Student implements Course, Sports
// {
//     public function getCourseName()
//     {
//     }

//     public function getSportName()
//     {
//     }
// }

// trait 

// trait Student
// {
//     public function getStudentName()
//     {
//         return 'Student';
//     }
// }

// trait testing
// {
//     public function getTesting()
//     {
//         return $this->name;
//     }
// }

// class Course
// {
//     use Student, testing;

//     public function getCourseName()
//     {
//     }
// }

// class Sports
// {
//     use Student, testing;

//     public function getSportsName()
//     {
//     }
// }

// overloading custom is not supported in php and overriding

// class ParentClass
// {
//     public $name = "parent";

//     public function getName()
//     {
//         return $this->name;
//     }
// }

// class ChildClass extends ParentClass
// {
//     public $name = "child"; // property overridding

//     public function getName() // method overridding
//     {
//         return "deepak";
//     }
// }


// $childClass = new ChildClass();

// echo $childClass->getName();

// final keyword

// final class ParentClass
// {
//     public $name = "parent";

//     final public function getName()
//     {
//         return $this->name;
//     }

//     public function getLastName() {

//     }
// }

// class ChildClass extends ParentClass
// {
//     public $name = "child";

//     public function getLastName() {
        
//     }
// }

// Late Static Bindings
// class ParentClass {
//     public static function staticFunction() {
//         return "parent::staticFunction";
//     }

//     public function getStaticFunction() {
//         return self::staticFunction();
//     }
// }

// echo ParentClass::staticFunction();

// $parentClass = new ParentClass();

// echo $parentClass->getStaticFunction();

// Object Cloning

// class Car {
//     public $name = "car";

//     public function __construct($name)
//     {   
//         $this->name = $name;
//     }
// }

// $car = new Car('Maruti');

// echo $car->name;

// $car1 = clone $car;

// echo $car1->name;

// Comparing Objects

// class Test {

// }

// $test = new Test();

// $test3 = clone $test;

// class Test2 {

// }

// $test2 = new Test2();

// echo $test === $test3 ? '1' : '2';

// 21. Objects and references

// class Test {

// }

// $test = new Test();

// $test2  = &$test;


// $name = 'deepak';

// $$name = "singh";

// echo $deepak;

// Object Serialization

class Test {

}

$test = new Test();

print_r(unserialize(serialize($test)));


