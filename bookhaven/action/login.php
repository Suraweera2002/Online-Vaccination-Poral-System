<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Create SQL Query
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Check if the user exists
        $user = mysqli_fetch_assoc($result);
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['loggedin'] = true;
            header("Location: ../user_account.php"); // Redirect to a welcome page or dashboard
            exit();
        } else {
            // Invalid password
            header("Location: ../login.php?message=Invalid email or password.");

        }
    } else {
        // No user found
        header("Location: ../login.php?message=Invalid email or password.");
    }

    // Close connection
    mysqli_close($conn);

    if (!empty($error)) {
        // Redirect back to the login page with an error message
        header("Location: ../index.php?message=Invalid email or password");
        
        exit();
    }
}
?>
