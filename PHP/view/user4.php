<?php
include(
    "../controller/process.php"
)


?>
<html >
<head>

    <title>Registration Form</title>
</head>
<body>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <h1>User 4</h1>
        <table>
        <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" name="name" id="name" ></td>
                <td><span class="error">* <?php echo $nameErr; ?></span></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" name="email" id="email" ></td>
                <td><span class="error">* <?php echo $emailErr; ?></span></td>
            </tr>

            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" required></td>
                <td><span class="error">* <?php echo $passwordErr; ?></span></td>
            </tr>
            <tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" name="dob" id="dob" ></td>
                <td><span class="error">* <?php echo $dobErr; ?></span></td>
            </tr>

            <tr>
                <td><label for="phone">Phone Number:</label></td>
                <td>
                <input type="tel" id="phone" name="phone">
                </td>
                <td><span class="error">* <?php echo $phoneErr; ?></span></td>
            </tr>


            <tr>
                <td colspan="3" >
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>

    <?php

if(empty($nameErr)   &&empty($emailErr)&&empty($passwordErr)&&empty($dobErr)&&empty($phoneErr) )  { 
    echo "<br>";
}
else{
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";


    echo $password;
    echo "<br>";
    echo $dob;
    echo "<br>";
    echo $phone;
    
}




?>



</body>
</html>
