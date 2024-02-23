<?php
include("../model/mydb.php");

$name=$email=$password=$dob=$phone="";
$nameErr=$emailErr=$passwordErr=$dobErr=$phoneErr="";
$haserror=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    if(empty($_POST["name"])){
        $nameErr="Name is required";
        $haserror=true;
    }
    else{
     $name=test_input($_POST["name"]);
     if(preg_match('/[0-9]/', $name)){
         $nameErr="Name cannot contain numbers";
     }
    }

    if(empty($_POST["email"])){
        $emailErr="Email is required";
        $haserror=true;
    
        }else{
            $email=test_input($_POST["email"]);
if(!strlen($email)<=30 && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}

            
    
        }
        if(empty($_POST["password"])){
            $passwordErr="Password is required";
            $haserror=true;
        }
        else{
            $password=test_input($_POST["password"]);
            if(!preg_match('/[@#$&]/',$password)){
                $passwordErr="Password must be contain one spacial character";
            }
        }

        if(!empty($_POST["dob"])) {
            $dob = test_input($_POST["dob"]);
            $dateFromInput = DateTime::createFromFormat('d-m-Y', $dob);
            
            if($dateFromInput === false) {
                $dobErr = " ";
            } else {
                $dob = $dateFromInput->format('Y-m-d');
                $dob = strtotime($dob);
                $currentDate = strtotime(date("Y-m-d",strtotime("+1 years")));
                $prevDate = strtotime(date("Y-m-d", strtotime("-100 years"))); 
                
                if($dob > $currentDate){
                    $dobErr = "Date cannot be in the future";
                } elseif ($dob < $prevDate) {
                    $dobErr = "Date should be within the last 100 years";
                }
            }
        }


        if(empty($_POST["phone"])){
            $phoneErr="Phone Number is required";
            $haserror=true;
        }
        else{
            $phone=test_input($_POST["phone"]);
            if(!strlen($phone)<=11 &&!preg_match('/[0-9]/',$phone)){
                $phoneErr="Phone Number must be contain only numbers";
            }
        }
if($haserror==false){
    $mydb=new userf();
    $conobj=$mydb->openCon();
    $result=$mydb->create($conobj,$name,$email,$password,$dob,$phone);
    if($result===TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Creation failed".$conobj->error;
    }


}
else{
    echo "Complete the validation first";
}
        }














?>