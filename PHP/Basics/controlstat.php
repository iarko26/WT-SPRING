<?php
//if
$age=22;
if($age<18){
    echo "you are not able take part in election";
}

elseif($age==18){
    echo "you can vote for the first time";

}
else{
    echo "you are able to take part in election";
}

//switch
$favcolor="red";
switch($favcolor){
    case "red":
        echo "your favorite color is red";
        break;
    case "blue":
        echo "your favorite color is blue";
        break;
    case "green":
        echo "your favorite color is green";
        break;
    default:
        echo "your favorite color is neither red, blue, nor green";
}
?>