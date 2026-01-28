/<nav>
    <div class="nav_top">
        <h1>Logo</h1>
        <input type="text" style="width: 400px;" placeholder="search">
        <div class="fandcenterr">
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo    '<div style="display: flex; align-items: center">' . $_SESSION['email'] . '&nbsp;<a href="user_account.php"> <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/test-account.png" alt="test-account"/> </a> </div>';
            }else{
                echo '
                <h4><a href="signup.php">Signup</a></h4>
            <h4><a href="login.php">Login</a></h4>
            ';
            }

            ?>
        </div>
        <div class="fandcenterr">
            <h4>Watchlist</h4>
            <img width="30" height="30"
                src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/24/external-bookmark-library-tanah-basah-basic-outline-tanah-basah.png"
                alt="external-bookmark-library-tanah-basah-basic-outline-tanah-basah" />
        </div>
        <div class="fandcenterr">
            <h4><a href="../shoppingCart.php">Cart</a></h4>
            <img width="30" height="30" src="https://img.icons8.com/fluency/48/shopping-cart.png" alt="shopping-cart" />
        </div>
    </div>
    <div class="nav-items">
        <a href="../product.php">Home</a>
        <a href="">Products</a>
        <a href="">E-Book</a>
        <a href="book_recommendations.php">New Arrivals</a>
        <a href="../about/aboutus.php">About</a>
        <a href="../rating.php">Feedback</a>
        <a href="../about/contactus.php">Contact Us</a>
        <li class="admin-option"><a href="../project/new.php">Admin <i class="fas fa-cogs"></i></a></li>
    </div>
</nav>