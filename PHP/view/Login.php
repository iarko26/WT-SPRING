<?php
include('../controller/pLogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<h1>Sign In</h1>
    <table>

        <tr>
            <td><label for="email or username">Email/Username:</label></td>
            <td colspan="3"><input type="text" name="emus" id="emus" ></td>
            <td><span class="error">* <?php echo $emusErr; ?></span></td>
        </tr>

        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" name="password" id="password" ></td>
            <td><span class="error">* <?php echo $passwordErr; ?></span></td>
        </tr>
        <tr>




        <tr>
            <td colspan="3" >
                <button type="submit">Sign In</button>
            </td>
        </tr>
    </table>
</form>

<?php
if(empty($emus)&&empty($password)){
    echo "<br>";
}
else{
    echo $emus;
    echo "<br>";
    echo $password;
    echo "<br>";
}

?>
</body>
</html>
