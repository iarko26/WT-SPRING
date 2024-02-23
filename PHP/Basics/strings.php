<?php
// $x = "John";
// echo "Hello $x <br>"; 

// //string length
// echo strlen("hello! ") ."<br>";

// //wrord count
// echo str_word_count("Hello World!") ."<br>";

// //Search For Text Within a String
// echo stripos("Hello World!" ,"Hello") . "<br>";


//modify string
$x ="hello";
echo strtoupper($x) . "<br>";

//replace string
$y="hey this is php";
echo str_replace("php","javascript",$y) . "<br>";


//reverse string
echo strrev("arnob") ."<br>";

//convert string tinto array
//splits strings into array use explode()
$z="hello world";
$i=explode(" ",$z);
print_r($i);

?>