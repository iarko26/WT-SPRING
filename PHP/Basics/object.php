<?php

class Car{
    function __construct(){
        $this->model="VW";
    }

}

//create an object
$herbie=new Car();
echo $herbie->model;
?>

