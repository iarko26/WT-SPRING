<?php declare(strict_types=1); // strict requirement
//default argument

function add($b=10){
    echo "value of b is $b";
}
add(20);//PRINT 20
add();//PRINT 10    

echo "<br>";
//return value
function sum(int $a,int $b){
    $c=$a+$b;
    return $c;
}
echo sum(10,20);

//return type declaration
function multiplication(float $a,float $b):int{
    return (int)($a*$b);
}
echo "<br>";
echo multiplication(10.2,20.5);

?>





<!-- <?php

// function addnumber(int $a,int $b){
//     return $a+$b;

// }
// echo addnumber(10,5);

// echo "<br>";

// //pass by reference
// function funbyref($v1,$v2){
//     // $v1=$v1+2;
//     // $v2=$v2+10;
//     // echo "value of a is $v1 and value of b is $v2";
//     return $v1+$v2;

// }

// echo funbyref(10,20);
// // $a=10;
// // $b=20;
// // funbyref($a,$b);


?> -->







