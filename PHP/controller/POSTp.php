
<?php

/* one way of doing it
if(isset($_POST['Name']) && isset($_POST['Username']))
{
echo $_POST['Name'] . '<br>';
echo $_POST['Username'];
}
// elseif (isset($_POST['Name'])) {
//     echo $_POST['Name'];
// }
// elseif (isset($_POST['Username'])) {
//     echo $_POST['Username'];
// }
else {
echo "Enter a name";
echo "Enter a username";
}
*/

// if(isset($_REQUEST["submit"])){
//     if(isset($_REQUEST["Name"])){
//     echo $_REQUEST["Name"] ."<br>";
//     }
//     else{
//     echo "enter a name";
//     }
    
//     if(isset($_REQUEST["Username"])){
//     echo $_REQUEST["Username"];
//     }
//     else{
//     echo "enter a username";
//     }
//     }



$nameER=$unameER="";
if(isset($_REQUEST["submit"])){
    if(empty($_REQUEST["Name"]) && empty($_REQUEST["Username"])){
        $nameER="enter a name";
        $unameER="enter a username";
    }
    elseif(empty($_REQUEST["Name"])){
        $nameER="enter a name";
    }
    elseif(empty($_REQUEST["Username"])){
        $unameER="enter a username";
    }
    else{
        $nameER=$_REQUEST["Name"] ."<br>";
        $unameER=$_REQUEST["Username"];
    }
}
?>