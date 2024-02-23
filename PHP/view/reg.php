<?php
include "../controller/Regp.php";
?>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <?php 

if(!empty($regsmessage)){
    echo '<p >' . $regsmessage . '</p>';
}
?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset >
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td><label for="name">Name:</label></td> 
                    <td><input type="text" name="Name" id="" value=""></td>
                    <td><span class="error">* <?php echo $nameErr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" id="" value=""></td>
                    <td><span class="error">* <?php echo $emailErr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username" id="" value=""></td>
                    <td><span class="error">* <?php echo $usernameErr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id=""></td>
                    <td><span class="error">* <?php echo $passwordErr; ?></span></td>
                </tr>
                <tr>
                    <td><label for="confirmPassword">Confirm Password:</label></td>
                    <td><input type="password" name="confirmPassword" id=""></td>
                    <td><span class="error">* <?php echo $confirmPasswordErr; ?></span></td>
                </tr>
                <tr>
                    <td><fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" id="male" value="Male" <?php echo isset($gender) && $gender=="Male" ? "checked" : ""; ?>>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="Female" <?php echo isset($gender) && $gender=="Female" ? "checked" : ""; ?>>
                        <label for="female">Female</label>
                        <input type="radio" name="gender" id="other" value="Other" <?php echo isset($gender) && $gender=="Other" ? "checked" : ""; ?>>
                        <label for="other">Other</label>
                        <span class="error">* <?php echo $genderErr; ?></span>
                    </fieldset></td>
                </tr>
                <tr>
                    <td><fieldset>
                        <legend>Date of Birth</legend>
                        <input type="text" id="" name="date" value="<?php echo isset($dob['day']) ? $dob['day'] : ''; ?>"> /
                        <input type="text" id="" name="month" value="<?php echo isset($dob['month']) ? $dob['month'] : ''; ?>"> /
                        <input type="text" id="" name="year" value="<?php echo isset($dob['year']) ? $dob['year'] : ''; ?>"> (dd/mm/yyyy)
                        <span class="error">* <?php echo $dobErr; ?></span>
                    </fieldset></td>
                </tr>
                <tr>
                    <td ><input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>

                </tr>
            </table>
        </fieldset>
    </form>

    <?php
if(empty($nameErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr) && empty($confirmPasswordErr) && empty($genderErr) && empty($dobErr) && !empty($name) && !empty($email) && !empty($username) && !empty($password) && !empty($confirmPassword) && !empty($gender) && !empty($dob) ){
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $dob;
}

if(empty($name) && empty($email) && empty($username) && empty($password) && empty($confirmPassword) && empty($gender) && empty($dob)){
    echo "Enter all the information";

}

    ?>

</body>
</html>
