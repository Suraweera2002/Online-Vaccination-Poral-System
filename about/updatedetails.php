<!DOCTYPE html>
<html>
<head>
    <title>Update User Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles/my4.css">
</head>

<body>
    <header>
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
    </nav>

        <h3 class="title1">Update User Details</h3> <br>
        

        <form method="post" action="update.php">

            <label>Name</label> <br>
            <input type="text" name="name" required> <br>

            <label>Contact Number</label> <br>
            <input type="text" name="contact" required> <br>

            <label>Email Address</label> <br>
            <input type="email" name="email" required> <br>

            <label>Message</label> <br>
            <textarea name="message" id="Message" rows="4" cols="40" required></textarea> <br><br>

            <button type="submit">Update</button> 

           </form>
        
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
                  <li><a href="http://localhost/IWT/terms.php">Terms and Conditions</a></li>
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