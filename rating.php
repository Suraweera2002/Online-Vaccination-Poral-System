<?php
include_once "config.php";

$sql = "SELECT * FROM rateus";
$result = $connec->query($sql);

if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM rateus WHERE id='$id'";
    if ($connec->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting record: " . $connec->error;
    }
}

$connec->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/rating.css" />
    <link rel="stylesheet" href="styles/footer.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Ratings</title>
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
<!-- <header>
<div class="header">
  <a href="#default" class="logo">CompanyLogo</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
</header> -->


    <div class="container">
        <div class="container__left">
            <h1>Read what our customers love about us</h1>
            <p>Over 200 companies from diverse sectors consult us to enhance the user experience of their products and services.</p>
            <p>We have helped companies increase their customer base and generate multifold revenue with our service.</p>
            <button onclick="goBack()">Go Home</button>
            <button onclick="reviewComponent()">Rate & Review</button>
        </div>
        <div class="container__right">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="card">
                <img src="imgCart/women.jpg" alt="user" />
                <div class="card__content">
                    <span><i class="ri-double-quotes-l"></i></span>
                    <div class="card__details">
                        <p><?php echo $row['message']; ?></p>
                        <h4>- <?php echo $row['name']; ?></h4>
                        <div class="button-container">
                            <button class="edit-button" onclick="editReview(<?php echo $row['id']; ?>)">Edit</button>
                            <form method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
                               <div class="card__actions">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" name="delete" value="Delete" class="delete-button">
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "No reviews available.";
            }
            ?>
        </div>
    </div>


<script>
    function reviewComponent() {
        // Redirect to the other page
        window.location.href = "reviews.php";
    }

    function editReview(id) {
        //console.log("Review ID:", reviewId);
        window.location.href = "editReview.php?id=" +id;
    }

    function goBack() {
        // Redirect to the other page
        window.location.href = "product.php";
    }
</script>

<div class="footer">
        <footer class="footer-distributed">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
            <div class="footer-right">
                <div class="icons"><br>
         
             <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-instagram"></a>
             <a href="#" class="fa fa-google-plus"></a>
         
            </div>
         </div>
         
            <div class="footer-left">
         
             <p class="footer-links">
              
         <a href="#">Hotline: +94 117 457 767 | +94 770 333 877</a><br>
         
              <a href="#">Receive The Latest Offers & Updates Via Our Site</a>
             </p>
         
             <p>All recerved.Terms of use|Privacy policy</p>
            </div>
         
        </footer>
</div>

</body>
</html>
