<?php
    include_once "config.php";
    if(isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO rateus VALUES (0,'$name', '$message')";
        if ($connec->query($sql) === TRUE) {
            // Redirect to another page after successful form submission
            header("Location: rating.php");
            exit(); // Make sure to exit after redirection
        } else {
            echo "Error: " . $sql . "<br>" . $connec->error;
        }
    }
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Create Review</title>
  <link rel="stylesheet" type="text/css" href="styles/reviews.css">
  <style>
        body {
            background-image: url('https://images2.alphacoders.com/261/26102.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
  </style>
</head>

<body>
  <div>
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a  rel="dofollow">Create Rate & Review </a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              
              <form method="POST" id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="name">Name</label>
                  <input type="name" name="name" required>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="text">Message</label>
                  </div>
                  <input type="text" required name="message"></input>
                </div>
                    <input type="file" > <br><br>
                <div class="field padding-bottom--24">
                  <input type="submit" name="btnSubmit" >
                </div>
                
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>