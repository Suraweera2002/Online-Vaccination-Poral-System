<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}
?>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwt";

$id=$_SESSION['user_id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
$sql = "SELECT * FROM users WHERE id = $id"; // Assuming user ID 1 for demo purposes, you should adjust this query accordingly
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    $row = $result->fetch_assoc();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
            background-color: #edf6ff;
        }

        a {
            text-decoration: none;
            color: black;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            width: 100%;
            border-bottom: 1px solid black;
            padding-top: 10px;
            padding-bottom: 10px;
            align-items: center;
            background-color: white;

        }

        .nav_top {
            display: flex;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding: 0px 40px;
        }

        .nav-items {
            display: flex;
            width: 100%;
            justify-content: center;
            gap: 20px;
            padding-top: 10px;
            border-top: 1px solid black;
            align-items: center;
        }

        .bainer {
            background-color: white;
            width: 100%;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fandcenterr {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        form {
            background-color: white;
            width: 450px;
            padding: 40px;
            margin: 20px;
            text-align: center;
        }

        input {
            font-size: large;
            width: 100%;
            padding: 10px;
        }

        .form-item {
            display: flex;
            flex-direction: column;
            align-items: start;
            width: 100%;
        }

        .btn {
            padding: 10px;
            width: 100%;
            background-color: black;
            color: white;
            font-weight: bold;
        }

        footer {
            margin-top: 60px;
            display: flex;
            width: 100%;
            padding: 20px 80px;
            justify-content: space-between;
            background-color: white;
            min-height: 300px;
            position: relative;

        }

        .botton_nav_resived {
            position: absolute;
            width: 100%;
            right: 0;
            bottom: 15px;
            text-align: center;
            z-index: 99;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 0px 120px;
        }

        button {
        background-color: black;
        color: white;
        font-size: 20px;
        padding: 10px 30px;
        font-weight: bold;
    }

    .toast {
            background-color: darkred;
            color: white;
            padding: 14px;
            position: fixed;
            top: 16%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            /* Initially hidden */
        }

        .toast.show {
            display: block;
            animation: fadeInOut 2s forwards;
        }

        @keyframes fadeInOut {

            0%,
            100% {
                opacity: 0;
            }

            10%,
            90% {
                opacity: 1;
            }
        }

    </style>
</head>

<body>

    <?php include './nav.php'; ?>

    <?php
    if (isset($_GET['message'])) {
        echo "<div class='toast show'>{$_GET['message']}</div>";
    }
    ?>

    <div class="container">
        <br>
        <div style="display: flex; width: 100%; align-items: center; justify-content: center;gap: 40px; background-color: white;">
            <div>
                <div class="item">
                    <label for="name">Name</label>
                    <input type="text" value="<?php echo $row['first_name'] ." " .  $row['last_name'] ?>" name="name" id="name">
                </div>
                <div class="item">
                    <label for="address">district</label>
                    <input type="text" value="<?php echo $row['address']  ?>" name="address" id="address">
                </div>
                <div class="item">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $row['email']  ?>" name="email" id="email">
                </div>
                <div class="item">
                    <label for="birthday">whatsapp</label>
                    <input type="text" name="birthday" value="<?php echo $row['whatsapp']  ?>" id="birthday">
                </div>
            </div>
            <div>
                <form action="./action/update_password.php" method="post">

                    <div class="item">
                        <label for="npassword">Current Password</label>
                        <input type="text" name="currentpassword" id="npassword">
                    </div>
                    <div class="item">
                        <label for="npassword">New Password</label>
                        <input type="text" name="newpassword" id="npassword">
                    </div>
                    <div class="item">
                        <label for="cpassword">Cofirm Password</label>
                        <input type="text" name="confirmpassword" id="cpassword">
                    </div>
                    <br>
                    
                    <button type="submit">update password</button>
                    <br><br>
                </form>

                <a href="./action/logout.php"><button>Logout</button></a>
                <br>
                <br>
            </div>
        </div>

        <?php include './footer.php'; ?>
</body>

</html>