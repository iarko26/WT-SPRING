<?php
include "../controller/pRegp.php";


?>
<html >
<head>

    <title>Registration Form</title>
</head>
<body>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <h1>Sign Up</h1>
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
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username" id="username" ></td>
                <td><span class="error">* <?php echo $usernameErr; ?></span></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" id="password" ></td>
                <td><span class="error">* <?php echo $passwordErr; ?></span></td>
            </tr>
            <tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" name="dob" id="dob" ></td>
                <td><span class="error">* <?php echo $dobErr; ?></span></td>
            </tr>

            <tr>
                <td><label for="gender">Gender:</label></td>
                <td>
                    <input type="radio" name="gender" value="Male" id="male" <?php echo isset($gender) && $gender=="Male" ? "checked" : ""; ?>> Male
                    <input type="radio" name="gender" value="Female" id="female"  <?php echo isset($gender) && $gender=="Male" ? "checked" : ""; ?> > Female
                </td>
                <td><span class="error">* <?php echo $genderErr; ?></span></td>
            </tr>


            <tr>
                <td colspan="3" >
                    <button type="submit">Sign Up</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
