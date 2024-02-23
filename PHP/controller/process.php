<?php
$name=$email=$password=$dob=$phone="";
$nameErr=$emailErr=$passwordErr=$dobErr=$phoneErr="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    if(empty($_POST["name"])){
        $nameErr="Name is required";
    }
    else{
     $name=test_input($_POST["name"]);
     if(preg_match('/[0-9]/', $name)){
         $nameErr="Name cannot contain numbers";
     }
    }

    if(empty($_POST["email"])){
        $emailErr="Email is required";
    
        }else{
            $email=test_input($_POST["email"]);
if(!strlen($email)<=30 && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}

            
    
        }
        if(empty($_POST["password"])){
            $passwordErr="Password is required";
        }
        else{
            $password=test_input($_POST["password"]);
            if(!preg_match('/[@#$&]/',$password)){
                $passwordErr="Password must be contain one spacial character";
            }
        }

        if(empty($_POST["dob"])){
            $dobErr = "Date of Birth is required";
        } else {
            $dob = test_input($_POST["dob"]);
            if(!strtotime($dob)){
                $dobErr = "Invalid Date of Birth";
            } else {
                $currentDate = date("m-d-Y",strtotime("100years"));
                $prevDate = date("m-d-Y", strtotime("-100 years")); 
                
                if($dob > $currentDate){
                    $dobErr = "Date cannot be in the future";
                } elseif ($dob < $prevDate) {
                    $dobErr = "Date should be within the last 100 years";
                }
            }
        }


        if(empty($_POST["phone"])){
            $phoneErr="Phone Number is required";
        }
        else{
            $phone=test_input($_POST["phone"]);
            if(!strlen($phone)<=11 &&!preg_match('/[0-9]/',$phone)){
                $phoneErr="Phone Number must be contain only numbers";
            }
        }


        }














?>