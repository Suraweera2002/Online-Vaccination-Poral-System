<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles/my1.css">
</head>
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
<body>
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

        <h1 class="title1">Contact Us</h1> <br>
        

        <form method="post" action="insert.php">
            <h5 class="title2">Send a message</h5> <br>

            <label>Name</label> <br>
            <input type="text" name="name" required> <br>

            <label>Contact Number</label> <br>
            <input type="text" name="contact" required> <br>

            <label>Email Address</label> <br>
            <input type="email" name="email" required> <br>

            <label>Message</label> <br>
            <textarea name="message" id="Message" rows="4" cols="40" required></textarea> <br><br>
        

            <input type="checkbox" name="terms" required>
            <label>✔ I agree to the terms and conditions</label> <br> <br>

            <button type="submit">Submit</button> 
            
           </form>

        
        
        
        
        <h3>Stay Connected with us</h3>
        <a href="tel:+94761234567"><img src="images/call.png" width="30px" height="30px" alt="call"></a>
        <a href="tel:+94761234567">+94761234567</a> <br>
        <a href="https://maps.app.goo.gl/XCjzPdrkg8mGMGdu8"><img src="images/map.png" width="30px" height="30px" alt="location"></a>
        <a href="https://maps.app.goo.gl/XCjzPdrkg8mGMGdu8">293/B, New Street, Colombo</a> <br>
        <a href="bookhaven@gmail.com"><img src="images/mail.png" width="30px" height="30px" alt="email"></a>
        <a href="bookhaven@gmail.com">bookhaven@gmail.com</a> <br><br>

        <a href="http://www.facebook.com"><img src="images/facebook.png" width="30px" height="30px" alt="facebook"></a>
        <a href="http://www.instagram.com"><img src="images/instagram.png" width="30px" height="30px" alt="instagram"></a>
        <a href="http://www.twitter.com"><img src="images/twitter.png" width="30px" height="30px" alt="twitter"></a>
        <a href="http://www.youtube.com"><img src="images/youtube.png" width="30px" height="30px" alt="youtube"></a> <br><br>


        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.6302503084!2d79.85620549999999!3d6.921838650000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1714900248934!5m2!1sen!2slk" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>

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
                  <li><a href="http://localhost/IWT/aboutus.php">About Us</a></li>
                  <li><a href="http://localhost/IWT/contactus.php">Contact Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="http://localhost/IWT/termsconditions.php">Terms and Conditions</a></li>
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