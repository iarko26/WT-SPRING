<?php
class circle{
//properties
private $radius;
private $area;

//constructor
public function __construct($radius=1){
    $this->radius=$radius;
   
}
//destrcutor
public function __destruct(){
    echo "this is destructor";


}

//methods

public function get_radius(){
    return $this->radius;
}
public function set_radius($radius){
    $this->radius=$radius;
}



public function get_area(){
    return pi()*$this->radius*$this->radius;
}
public function __toString() {
    return "radius is $this->radius and area is $this->area";
}
}
$rad=new circle(10);
echo $rad->get_radius();
echo "<br>";
echo $rad->get_area();
echo "<br>";









