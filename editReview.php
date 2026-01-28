<?php
include_once "config.php";

$id = $_GET['id'];
// Check if the form is submitted
if(isset($_POST['btnSubmit'])) {
    // Process your form submission here

    $name = $_POST['name'];
    $message = $_POST['message'];

    // Prepare and bind parameters to prevent SQL injection
    $stmt = $connec->prepare("UPDATE rateus SET name=?, message=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $message, $id);

    // Execute the update statement
    if ($stmt->execute()) {
        // Output a success message
        echo "Record updated successfully";

        // Redirect to another page
        header("Location: rating.php");
        exit(); // Make sure to exit after redirection
    } else {
        // Output an error message if the update fails
        echo "Error updating record: " . $connec->error;
    }
}

// Fetch data from the database
$sql = "SELECT * FROM rateus WHERE id=$id";
$result = $connec->query($sql);

// Check if the query was successful
if($result->num_rows > 0) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();
    // Extract data from the row
    $name = $row['name'];
    $message = $row['message'];
    // You can extract other fields in a similar manner
} else {
    // Handle the case when no data is found
    $name = "";
}
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Edit Review</title>
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
          <h1><a  rel="dofollow">Edit Rate & Review </a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <form method="POST" id="stripe-login">
                <div class="field padding-bottom--24">
                  <label for="name">Name</label>
                  <input type="text" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="text">Message</label>
                  </div>
                  <input type="text" name="message" value="<?php echo $message; ?>" required>
                </div>
                <input type="file" > <br><br>
                <div class="field padding-bottom--24">
                  <input type="submit" name="btnSubmit">
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
