<html>
    <head>
</head>
<body>
    
        <div class="container">
            <div class="login-box">
                <h2 title>Log In</h2>
                <form action="login.php" method="post">
                 <form method="post" action="insert.php">   
                    <div class="form-group">
                        <label for="username" name="uname"> Username</label>
                        <input type="text" name="username" id="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="password" name="pwd">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password">
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" name="remember_me" id="remember_me">
                        <label for="remember_me">Remember Me</label>
                    </div>
                    <button class="button">Log In</button>
                    <input type="reset"> 
                    <a href="#">Forget Password?</a>
                    <p>Still don't have an account? <a href="#">Sign Up</a></p>
                </form>
            </div>
        </div>
    <?php
        require 'config.php';   
    ?>

</body>
</html>