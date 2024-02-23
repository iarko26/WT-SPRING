<?php
$emusErr = $passwordErr = "";
$emus = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST["emus"])) {
        $emusErr = "Email or Username is required";
    } 
    else {
        $emus = test_input($_POST["emus"]);
        if ( !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$emus)  && !preg_match("/^[a-zA-Z0-9_-]*$/", $emus)) {
            $emusErr = "Invalid email or username format";
        
        }

    


    }


}

if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
} else {
    $password = test_input($_POST["password"]);
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        $passwordErr = "Password must contain at least 8 characters, 1 number, 1 uppercase letter, 1 lowercase letter and 1 special character";
    }
}




    
?>

