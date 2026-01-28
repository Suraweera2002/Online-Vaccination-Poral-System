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
            justify-content: center;
            min-height: 80vh;
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
        .itemslist{
            display: flex;
            flex-wrap: wrap;
        }
        .item{
            width: 200px;
            margin: 20px;
            padding: 20px;
            background-color: white;
            font-size:20px;

        }
        img{
            width: 100%;
        }
        .banner{
            width: 100%;
            padding: 40px;
            height: 200px;
            display: flex;
            font-size:40px;
            justify-content: space-around;
            background-color: white;
            font-weight:bold;
            justify-content: space-around;
            align-items: center;
        }

    </style>
</head>

<body>

    <?php include './nav.php'; ?>


    <div class="container">
        <br><br>
        <h2>New Arrival</h2>
        <div class="itemslist">

        <?php
            
            // Database configuration
            $host = 'localhost'; // or your host
            $dbname = 'iwt';
            $username = 'root';
            $password = '12345678';

            // Create connection
            $conn = mysqli_connect($host, $username, $password, $dbname);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM books WHERE category='New Arrival'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='item'>";
                    echo "<img src='" . $row["image_url"] . "' alt=''>";
                    echo "<h5>" . $row["name"] . "</h5>";
                    echo "<p>Rs. " . $row["price"] . " .00</p>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            ?>

        </div>

        <br>

        <h2>Children</h2>
        <div class="itemslist">

            <?php
                
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
                $sql = "SELECT * FROM books WHERE category='Children'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='item'>";
                        echo "<img src='" . $row["image_url"] . "' alt=''>";
                        echo "<h5>" . $row["name"] . "</h5>";
                        echo "<p>Rs. " . $row["price"] . " .00</p>";
                        echo "</div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>    

        </div>

        
        <br><br>

        <br>

        <div class="banner" >
            <div>
                20% OFF On Selected Book
            </div>
            <div>
                Don't miss such a desk
                <button>Shop now</button>
            </div>
        </div>

        <br><br>

        <h2>Top Authers</h2>
        <div class="itemslist">

        <?php
                
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
                $sql = "SELECT * FROM authors ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='item'>";
                        echo "<img src='" . $row["image_url"] . "' alt=''>";
                        echo "<h5>" . $row["name"] . "</h5>";
                        echo "</div>";
                    }
                } else {
                    echo "0 results";
                }
                ?>  

        </div>
        <br><br>
    </div>

    <?php include './footer.php'; ?>
    
</body>

</html>