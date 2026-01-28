<!DOCTYPE html>
<html>
<head>
    <title>Terms and Conditions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles/my2.css">
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

<body>
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
    <?php include '../bookhaven/nav.php'; ?>

        <h1>Terms and Conditions</h1>
        <p>Ordering and Purchasing: By placing an order on our website, you agree to purchase the items selected. All orders are
            subject to availability and acceptance by us. Once an order is placed, you will receive an email confirmation
            acknowledging receipt of your order. Please note that this confirmation does not constitute acceptance of your
            order; acceptance will be communicated to you through a separate email once the items have been dispatched. We
            reserve the right to refuse or cancel any order for any reason, including limitations on quantities available for
            purchase, inaccuracies, or errors in product or pricing information.
            Pricing and Payment: All prices listed on our website are in the currency specified and are inclusive of applicable
            taxes, unless otherwise stated. Prices are subject to change without notice, and such changes will not affect orders
            for which we have already sent you an acceptance email. Payment for orders must be made in full at the time of
            placing the order. We accept various payment methods as indicated on our website. By providing your payment
            information, you represent and warrant that you have the legal right to use the payment method provided and
            authorize us to charge the amount of your order to that payment method.
        </p>
        <p>Shipping and Delivery: We will make every effort to ensure that your order is dispatched promptly and delivered
            within the estimated timeframe provided at the time of purchase. However, we cannot guarantee specific delivery
            dates or times, as these may be subject to factors beyond our control, such as courier delays or customs processing.
            Risk of loss and title for items purchased from us pass to you upon delivery of the items to the carrier. Any claims
            for damaged or missing items must be reported to us within [number of days] days of receipt of the order.
        </p>
        <p>Returns and Refunds: We want you to be completely satisfied with your purchase. If for any reason you are not
            satisfied, you may return the item(s) within [number of days] days of receipt for a refund or exchange, subject to
            the conditions outlined in our Returns Policy. Please note that certain items, such as digital downloads or
            personalized products, may not be eligible for return or refund. To initiate a return, please contact our customer
            service team for instructions on how to proceed. Refunds will be issued to the original payment method used for the
            purchase, within a reasonable timeframe after we have received and processed the returned item(s).
        </p>

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
