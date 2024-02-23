<?php





$nameErr = $emailErr = $usernameErr = $passwordErr = $confirmPasswordErr = $genderErr = $dobErr = "";
$name = $email = $username = $password = $confirmPassword = $gender = $dob = "";
$regsmessage = "";

if(($_SERVER["REQUEST_METHOD"] =="POST")){


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
   
    //validate Name
    if (empty($_POST["Name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["Name"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $nameErr = "Only letters and white space allowed";
        }
      }

      //validate email
      if(empty($_POST["email"])){
          $emailErr = "Email is required";
      }else{
        $email=test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
      }
        //validate username
        if(empty($_POST["username"])){
            $usernameErr = "Username is required";
        }else{
            $username=test_input($_POST["username"]);
            if (!preg_match("/^[a-z]*$/",$username)) {
                $usernameErr = "Username must contain only lowercase letters";
            }
        }
        //validate password and confirm password
if(empty($_POST["password"])){
    $passwordErr = "Password is required";
}
elseif(empty($_POST["confirmPassword"])){
    $confirmPasswordErr = "Confirm password is required";

}
else{
    $password=test_input($_POST["password"]);
    $confirmPassword=test_input($_POST["confirmPassword"]);
if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/" ,$password)){
    $passwordErr = "Password must contain at least 8 characters, 1 number, 1 uppercase letter, 1 lowercase letter and 1 special character";
}
if($password!=$confirmPassword){
    $confirmPasswordErr = "Password and confirm password must be same";

}


}
 //validate Gender
 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
} else {
    $gender = test_input($_POST["gender"]);
}

//validate date of birth
if (empty($_POST["date"]) || empty($_POST["month"]) || empty($_POST["year"])) {
    $dobErr = "Date of Birth is required";
} else {
    $day = test_input($_POST["date"]);
    $month = test_input($_POST["month"]);
    $year = test_input($_POST["year"]);
    $dob = $day . "/" . $month . "/" . $year;
}
if(empty($nameErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr) && empty($confirmPasswordErr) && empty($genderErr) && empty($dobErr)){
    $regsmessage = "Registration Successful";
}
else{
    $regsmessage = "Registration Failed";

}



}



?>
  