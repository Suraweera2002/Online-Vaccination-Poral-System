<?php

require 'config.php';

$user=$_POST["uname1"];


$sql="DELETE FROM login1 WHERE username='$user'";
//js part
if($con->query($sql))
{
    echo "<script>alert('Successfil Deleted');</script>";
}
else{
    echo "<script>alert('Not Success');</script>";
}
