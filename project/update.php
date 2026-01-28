<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["uname"]) ? $_POST["uname"] : '';
    $id = isset($_POST["pwd"]) ? $_POST["pwd"] : '';

    if (empty($name) || empty($id)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE login1 SET Username='$name', Password='$id' WHERE Username='$name'";

        if ($con->query($sql)) {
            //js part
            echo "<script>alert('Successfully Updated');</script>";
        } else {
            echo "Not updated";
        }
    }
} else {
    echo "Invalid request";
}
?>