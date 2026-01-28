<?php

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["name"];
    $usercontact = $_POST["contact"];
    $useremail = $_POST["email"];
    $usermessage = $_POST["message"];

    $sql = "INSERT INTO details (username, usercontact, useremail, usermessage) VALUES ('$username', '$usercontact', '$useremail', '$usermessage')";

    if ($con->query($sql)) {
        echo "Insert Successful";
    } else {
        echo "Error: " . $con->error;
    }
}
?>
c 
