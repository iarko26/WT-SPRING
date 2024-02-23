<?php
//indexed array
$myarr=array("volvo",'marcedes',15,array("red","green","blue"));
//access indwed array
echo $myarr[2];
echo "<br>";
echo $myarr[3][2];
echo "<br>";
var_dump($myarr);   
echo "<br>";


//COUNT
$cars=["volvo","BMW","Toyota"];
echo count($cars);
//change value
echo "<br>";
$cars[1]="Marcedes";
echo $cars[1];
echo "<br>";
var_dump($cars);
echo "<br>";

//loop through an indexed array
foreach($cars as $key){
    echo "$key <br>";
}


//push
echo "<br>";
array_push($cars,"suzuki");
var_dump($cars);


//create arrray
#multiple line
$bikes = [
    "Volvo",
    "BMW",
    "Toyota"
  ];


  #arrays key
  $trucks = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
  ];

  #empty array
  $jets=[];
  $jets["brand"] = "Ford";
$jets["model"] = "Mustang";
$jets["year"] = 1964;
echo $jets["model"];
echo "<br>";






?>


<?php

$clubs=array("name" => "ReaL Madrid" ,"ucl"=>14, "year"=>1902);
var_dump($clubs);

//access
echo "<br>";
echo $clubs["name"];
echo "<br>";
$clubs["ucl"]=15;
echo $clubs["ucl"];
?>
