<?php
// Start the session
session_start();

// Database configuration
$host = 'localhost'; // or your host
$dbname = 'iwt';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $first_name = mysqli_real_escape_string($conn, trim($_POST['fname']));
    $last_name = mysqli_real_escape_string($conn, trim($_POST['lname']));
    $telephone = mysqli_real_escape_string($conn, trim($_POST['tel']));
    $whatsapp = mysqli_real_escape_string($conn, trim($_POST['whatsapp']));
    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert data
        $sql = "INSERT INTO users (first_name, last_name, telephone, whatsapp, address, email, password) 
                VALUES ('$first_name', '$last_name', '$telephone', '$whatsapp', '$address', '$email', '$hashed_password')";

        // Execute the query
        if (mysqli_query($conn, $sql)) {
            header("location: ../login.php?message=Registered successfully!");
        } else {
            header("location: ../login.php?message=Registered Faild!");
        }
    }
}

// Close connection
mysqli_close($conn);
?>
