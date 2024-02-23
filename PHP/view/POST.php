<?php
include '../controller/POSTp.php';
?>
<html >
<head>
   
    <title>Home</title>
</head>
<body>
    <h1>Hello World Home</h1>
    <form method="POST" action="">
        <label for="">Name:</label>
        <input type="text" name="Name" id="">
        <?php echo $nameER; ?><br>
  
        <label for="">Username:</label>
        <input type="text" name="Username" id="">
        <?php echo $unameER; ?>  <br>
 
        <input type="submit" name="submit" value="SUBMIT">
    </form>

</body>
</html>
