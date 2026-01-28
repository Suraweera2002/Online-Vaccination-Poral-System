<?php

require 'config.php';

$name = $_POST ["uname"];
$id = $_POST ["pwd"];

$sql="INSERT INTO login1 VALUES ('$name','$id')";

if($con->query($sql))
{
    echo "Insert Successful";
}
else{
    echo "Error".$con->error; 
}
$con-> close();


?>