<?php
require 'config.php';

$username = $_POST["name"];
$usercontact = $_POST["contact"];
$useremail = $_POST["email"];
$usermessage = $_POST["message"];

if(empty($username)||empty($usercontact)||empty($useremail)||empty($usermessage))
{
    echo "All Required";
}
else{
    $sql="UPDATE details set usercontact='$usercontact',useremail='$useremail',usermessage='$usermessage' WHERE username='$username' ";

    if($con->query($sql))
    {
        echo "Updated";
    }
}

?>

