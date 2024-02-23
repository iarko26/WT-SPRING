<?php
include('../model/mydb.php');


$nameErr=$emailErr=$usernameErr=$passwordErr=$dobErr=$genderErr="";
$name=$email=$username=$password=$dob=$gender="";
$haserror=false;


if(($_SERVER["REQUEST_METHOD"] =="POST")){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

//validate Name
if(empty($_POST["name"])){
    $nameErr="Name is required";
    $haserror=true;


}
else{
$name=test_input($_POST["name"]);
if( !preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $nameErr="Only letters and white space allowed and not more than 20 characters";
}else if(strlen($name) > 20){
    $nameErr = "Name must not be more than 20 characters";

}
}

//validate email
if(empty($_POST["email"])){
    $emailErr="Email is required";
    $haserror=true;

    }else{
        $email=test_input($_POST["email"]);
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            $emailErr = "Invalid email format";
        }

    }

    //validate username
    if(empty($_POST["username"])){
        $usernameErr = "Username is required";
        $haserror=true;
    }
    else{
        $username = test_input($_POST["username"]);
        if ( !preg_match("/^[a-zA-Z0-9._-]*$/", $username)) {
            $usernameErr = "Username must contain only alphanumeric characters, period, dash, or underscore ";
            
        }elseif(strlen($username) > 11){
            $usernameErr = "Username must not be more than 11 characters";
           
        }
    }


    //validate password
    if(empty($_POST["password"])){
        $passwordErr="Password is required";
        $haserror=true;
    }
    else{
        $password=test_input($_POST["password"]);
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$password)){
            $passwordErr="Password must contain at least 8 characters, 1 number, 1 uppercase letter, 1 lowercase letter and 1 special character";
        }
    }
    //validate date of birth
    if(empty($_POST["dob"])){
        $dobErr = "Date of Birth is required";
        $haserror=true;
    } else {
        $dob = test_input($_POST["dob"]);
        $dob = date("Y-m-d", strtotime($dob)); 
    
        if(!strtotime($dob)){
            $dobErr = "Invalid Date of Birth";
        } else {
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

//validate gender
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $haserror=true;
} else {
    $gender = test_input($_POST["gender"]);
}

if($haserror==false){
$mydb=new reg();
$conobj=$mydb->openCon();
$result=$mydb->registration($conobj,$name,$email,$username,$password,$dob,$gender);
if($result===TRUE){
    echo "Registration Successful";
}
else{
    echo "Registration Failed ".$conobj->error;
}
}
else{
    echo "Complete the validation first";
}



}

?>