<?php 

$arr=[1,5,6,7,3,7,5,6,8,9,10,12,16];

$array = [];

$c = 0;

$a = [];

for ($i=0; $i < count($arr) ; $i++) {
   
    
    if(isset($arr[$i +1])  && $arr[$i] < $arr[$i+1]) {
        
        // echo $arr[$i]. ' '. $arr[$i+1];
        
        array_push($a, $arr[$i+1]);

        // echo "<br>";

        // var_dump($a);

        // echo "<br>";
        
        // echo $c;

        // echo "<br>";

        $c++;

    }else{

        $afterBreak = [
            $c => $a
        ];

        // var_dump($c, $a);

        // echo "<br>";

        array_push($array , $afterBreak);

        $a = [];
        $c = 0;
    }
}

echo "<pre>";

var_dump($array);




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
    <!-- <h1>Required</h1> -->
    <?php //require_once 'test1.php';  ?>

    <?php //  require_once('test1.php')  ?>

    <h1>Include</h1>

    <?php //include_once "test1.php" ?>

    <?php  // include_once "test1.php" ?>

    fsafasf
</body>
</html>