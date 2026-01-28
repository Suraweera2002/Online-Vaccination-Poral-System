<!DOCTYPE html>
<html>
<head>
    <title>Book Haven</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        

        
        
       



    </style>
</head>
<body >
<?php include '../bookhaven/nav.php'; ?>
<!-- <header>
    <div class="promotions">
        <p>Welcome to Book Haven! Enjoy our latest promotions.</p>
    </div>
</header>

<div class="header-content">
    <div class="logo">
        <img src="images/logo.png" alt="Book Haven Logo">
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Search for books...">
    </div>
    <div class="user-options">
        <a href="#"><i class="fas fa-user"></i> Login/Sign Up</a>
        <a href="#"><i class="fas fa-heart"></i> Wishlist</a>
        <a href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
    </div>
</div>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">E-Book</a></li>
        <li><a href="#">New Arrivals</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Help</a></li>
        <li class="admin-option"><a href="#">Admin <i class="fas fa-cogs"></i></a></li>
    </ul>
</nav> -->

<br><br>



<!-- Login page -->
    <main>
        <div class="container">
            <div class="login-box">
                <h2 title><b>Log In</b></h2>
                
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" name="remember_me" id="remember_me">
                        <label for="remember_me">Remember Me</label>
                    </div>
                    <button class="button">Log In</button> 
                    <a href="#">Forget Password?</a>
                    <p>Still don't have an account? <a href="file:///C:/xampp/htdocs/project/index.html">Sign Up</a></p>
                </form>
            </div>
        </div>
    </main>
    <br><br><br>
    <p>
        Welcome to the login page for our book store system! You are a
                valuable part of our bookstore community,<br> and this is how you can
                explore the amazing world of books. 
     </p>
     <p>           To access special features such as
                order monitoring, personalized suggestions, and seamless browsing,<br>
                enter your Email and password.
     </p>
     <p>           Come for a voyage through the annals
                of knowledge and imagination. Enjoy your reading!
    </p>
    
    <!-- footer -->
    <!-- <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="contact-us">
                <h3>CONTACT US</h3>
                <p>Need Anything? use our live chat below.</p>
                <a href="#">+94 76 123 4567</a>
                <a href="#">onlinebookstore@gmail.lk</a>
              </div>
            </div>
            <div class="col-md-3">
              <div class="information">
                <h3>INFORMATION</h3>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="file:///C:/xampp/htdocs/project/index2.html">Privacy Policy</a></li>
                  <li><a href="#">Terms and Conditions</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="my-account">
                <h3>MY ACCOUNT</h3>
                <ul>
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">My Cart</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="newsletter">
                <h3>NEWSLETTER</h3>
                <p>Subscribe to our mailing list for new updates</p>
                <form action="#">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Adress">
                  </div>
                  <button type="submit" class="btn btn-default">SIGN UP</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>&copy; 2024 BOOK HAVEN. ALL RIGHTS RESERVED.</p>
        </div>
      </footer> -->
      <?php include "../footer.php"; ?>
      </body>
      </html>