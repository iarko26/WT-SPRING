<?php
class userf{
    function openCon(){
        $conn=new mysqli("localhost","root","","mydb");
        return $conn;
    }


    function create($conn,$name,$email,$password,$dob,$phone){
       
$sql="INSERT INTO user(name,email,password,date,phone) VALUES('$name','$email','$password','$dob','$phone')";

$result=$conn->query($sql);
return $result;
    }
}


?>