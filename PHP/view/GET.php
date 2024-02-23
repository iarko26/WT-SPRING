<?php
include '../controller/GETp.php';
?>
<html >
<head>
   
    <title>Home</title>
</head>
<body>
    <h1>Hello World Home</h1>
    <form method="GET" action="">
        <label for="">Name:</label>
        <input type="text" name="Name" id=""><br><br>
        <?php echo $nameER; ?><br>
        <label for="">Username:</label>
        <input type="text" name="Username" id=""><br><br>
        <?php echo $unameER; ?><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>


</body>
</html>

