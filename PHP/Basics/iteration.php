<?php
$age=18;
while($age<30){
    echo "i can drive a car <br>";
    $age++;
}

$x=1;
do{
    echo "what are you doing <br>"; 
    $x++;
}while($x<=5);


for($x=0;$x<=10;$x++){
    echo "the number is $x <br>";
}

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}

?>

