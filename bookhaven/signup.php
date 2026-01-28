<?php
session_start();
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
        .bainer{
            background-color: white;
            width: 100%;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .fandcenterr{
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form{
            background-color: white;
            width: 450px;
            padding: 40px;
            margin: 20px;
            text-align: center;
        }
        input{
            font-size: large;
            width: 100%;
            padding: 10px;
        }
        .form-item{
            display: flex;
            flex-direction: column;
            align-items: start;
            width: 100%;
        }
        .btn{
            padding: 10px;
            width: 100%;
            background-color: black;
            color: white;
            font-weight: bold;
        }
        footer{
            margin-top: 60px;
            display: flex;
            width: 100%;
            padding: 20px 80px;
            justify-content: space-between;
            background-color: white;
            min-height: 300px;
            position: relative;
            
        }
        .botton_nav_resived{
            position: absolute;
            width: 100%;
            right: 0;
            bottom: 15px;
            text-align: center;
            z-index: 99;
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
        <div class="bainer">
            <h2>Create New Customer Account</h2>
        </div>
        <form action="./action/signup.php" method="post">
            <h2>CUSTOMER REGISTRATION</h2>
            <br>
            <div class="form-item">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname" required>
            </div>
            <div class="form-item">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" required>
            </div>
            <div class="form-item">
                <label for="tel">Telephone</label>
                <input type="text" name="tel" id="tel" required>
            </div>
            <div class="form-item">
                <label for="whatsapp">whatsapp</label>
                <input type="text" name="whatsapp" id="whatsapp" required>
            </div>
            <div class="form-item">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-item">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" required>
            </div>
            <div class="form-item">
                <label for="cpassword">Confirm Password</label>
                <input type="text" name="cpassword" id="cpassword" required>
            </div>
            <br>
            <input class="btn" type="submit" value="Create Account">
        </form>
        <br>
        <div style="display: flex; align-items: center; flex-direction: column;">
            <h2>THE BIGGEST ONLINE BOOK STORE</h2>
            <br>
            <p>Sign up for an account and ordering is simplified made easy</p>
            <div>
                <li>Your data is securely stored in our secure server</li>
                <li>Faster and Easier Checkout Process</li>
                <li>A1/ island delivery of your order to your doorstep</li>
                <li>Various Payment methods available</li>
            </div>
        </div>
    </div>
    
    <?php include './footer.php'; ?>

</body>

</html>