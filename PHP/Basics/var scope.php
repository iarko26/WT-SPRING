<?php
//global variables

$x=5;
$y=10;
function test(){
    global $x,$y;
    $y=$x+$y;

}

test();
echo $y . "<br>";



//static variables
function test2(){
static $x=0;
echo $x . "<br>";
$x++;
}

test2();
test2();    
test2();
?>