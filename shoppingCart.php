<?php
include_once "config.php";

// Fetch cart items from the database
$sql = "SELECT * FROM cart1";
$result = $connec->query($sql);

// Initialize subtotal
//$subTotal = 0;
$subTotal = 0;
$taxRate = 0.05; // 5%
$shippingCost = 15;
// Check if delete button is clicked
if(isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql_delete = "DELETE FROM cart1 WHERE id='$id'";
    if ($connec->query($sql_delete) === TRUE) {
        echo "Record deleted successfully";
        // Redirect to the same page after deletion
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Error deleting record: " . $connec->error;
    }


}


if(isset($_POST['btnSubmit'])) {
    // Process your form submission here
    $id = $_POST['id']; // Fetch the item ID

    $price = $_POST['price'];
    $qty = $_POST['quantity'];

    // Prepare and bind parameters to prevent SQL injection
    $stmt = $connec->prepare("UPDATE cart1 SET price=?, qty=? WHERE id=?");
    $stmt->bind_param("dii", $price, $qty, $id); // Corrected parameter types: 'd' for price, 'i' for quantity

    // Execute the update statement
    if ($stmt->execute()) {
        // Output a success message
        echo "Record updated successfully";
		header("Location: ".$_SERVER['PHP_SELF']);
        exit();
        // Redirect to another page
        // You can redirect here if needed
    } else {
        // Output an error message if the update fails
        echo "Error updating record: " . $connec->error;
    }
}


// Close database connection
$connec->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="styles/shoppingCart.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
body {
    background-image: url('https://images2.alphacoders.com/261/26102.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>

<body>
    <div class="wrapper">
        <div class="container">
            <h1 class="header">Shopping Cart</h1>
            <button class="button-small" onclick="goBack()">Go to Home</button>
        </div>
        <div class="project">
            <div class="shop">
                <?php
                // Loop through each cart item
                while($row = $result->fetch_assoc()) {
                    $id = $row['id']; // Get the item ID
                    $itemName = $row['name'];
                    $itemDescription = $row['description'];
                    $itemPrice = $row['price'];
					$qty = $row['qty'];
                    $image = $row['img'];
					$subTotal += ($itemPrice * $qty);
                    // Output HTML for each item
                    echo '<form method="post" action="">
                            <div class="box">
                                <img src='. $image . '>
                                <div class="content">
                                    <h3>' . $itemName . '</h3>
                                    <h5>' . $itemDescription . '</h5>
                                    <h4>Price: $' . $itemPrice . '<input type="hidden" name="price" value= ' . $itemPrice . '></h4>
                                    <p class="unit">Quantity: <input type="number" name="quantity" value = ' . $qty . '></p>
                                    <input type="hidden" name="id" value="' . $id . '">
                                    <button type="submit" name="btnSubmit" class="btn-area1"> <i class="fa fa-edit"></i></button>
                                    <button type="submit" name="delete" class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i></button>
                                </div>
                            </div>
                          </form>';
                }
                ?>
            </div>
            <div class="right-bar">
                <!-- Display subtotal, tax, shipping, and total -->
				<?php
                // Calculate tax and total
                $tax = $subTotal * $taxRate;
                $total = $subTotal + $tax + $shippingCost;
                ?>
                <p><span>Subtotal</span> <span>$<?php echo number_format($subTotal, 2); ?></span></p>
                <hr>
                <p><span>Tax (5%)</span> <span>$<?php echo number_format($tax, 2); ?></span></p>
                <hr>
                <p><span>Shipping</span> <span>$<?php echo $shippingCost; ?></span></p>
                <hr>
                <p><span>Total</span> <span>$<?php echo number_format($total, 2); ?></span></p>
                <a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
            </div>
        </div>
    </div>
    <script>
    function goBack() {
        // Redirect to the other page
        window.location.href = "product.php";
    }
    </script>
</body>
</html>
