<?php
	include_once 'config.php';

  if(isset($_POST['submit'])) {
    $topic = $_POST['topic'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    $img = $_POST['imgg'];
    $sql = "INSERT INTO cart1(id,name,description,price,qty,img)  VALUES (0,'$topic','$des','$price',1,'$img')";
    if ($connec->query($sql) === TRUE) {
        echo "New record created successfully";
        
        header("Location: shoppingCart.php");
            exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $connec->error;
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="stylesheet" href="styles/product.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
      background-image: url('https://images2.alphacoders.com/261/26102.jpg');  */  */
        background-size: cover; /* Cover the entire background */
        background-repeat: no-repeat; /* Prevent the background from repeating */
        background-attachment: fixed; /* Fix the background position */
    }
</style>
<body>
  <div class="card-container">
    <div class="card-row">
      <form method="POST">
      <div class="card">
        <img class="card-media" src="imgCart/Janadhipathi.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Janadhipathi Thaththa</h2>
          <input type="hidden" name="topic" value="Janadhipathi Thaththa">
          <p class="card-description">The book, was in fact written by Sachini Navarathne, an employee of Media Gang, which is an advertising agency owned by Ms Sirisena. The final proof was read by the President’s Media Advisor and former Editor-in-Chief of the Divaina (Sunday) Gamini Sumanasekera.</p>
          <input type="hidden" name="description" value="The book, was in fact written by Sachini Navarathne, an employee of Media Gang, which is an advertising agency owned by Ms Sirisena. The final proof was read by the President’s Media Advisor and former Editor-in-Chief of the Divaina (Sunday) Gamini Sumanasekera.">
        </div>
        <div class="card-actions">
        <button class="button-small" name='submit'  onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 100.00</div>
          <input type="hidden" name="price" value="100.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/Janadhipathi.jpg">
        </div>
      </div>
      </form>
      <form method="POST">
      <div class="card">
        <img class="card-media" src="imgCart/MadolDoova.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Madol Duwa</h2>
          <input type="hidden" name="topic" value="Madol Duwa">
          <p class="card-description">Madol Doova is a children's novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern coast of Sri Lanka during the 1890s.</p>
          <input type="hidden" name="description" value="Madol Doova">
        </div>
        <div class="card-actions">
          <button class="button-small"  name='submit' onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 200.00</div>
          <input type="hidden" name="price" value="200.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/MadolDoova.jpg">
          <p>
        </div>
      </div>
      </form>
      <form method="POST">
      <div class="card">
        <img class="card-media" src="imgCart/AbaYaluwo.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Aba Yaluwo</h2>
          <input type="hidden" name="topic" value="Aba Yaluwo">
          <p class="card-description">Amba Yaluwo (Sinhala: lit. 'Best Friends') is a 1957 novel by Sri Lankan author Tikiri Bandara Ilangaratne. The novel has been translated into multiple languages with the English translation by Seneviratne B.Aludeniy published by Sarasavi Publishers in 1998.</p>
          <input type="hidden" name="description" value="Amba Yaluwo The novel has been translated into multiple languages with the English translation by Seneviratne B.Aludeniy published by Sarasavi Publishers in 1998.">
        </div>
        <div class="card-actions">
          <button class="button-small" name='submit' onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 300.00</div>
          <input type="hidden" name="price" value="300.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/AbaYaluwo.jpg">
          <p>
        </div>
      </div>
      </form>
      <form method="POST">
      <div class="card">
        <img class="card-media" src="imgCart/ApeGama.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Ape Gama</h2>
          <input type="hidden" name="topic" value="Ape Gama">
          <p class="card-description">Madol Doova is a children's novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern coast of Sri Lanka during the 1890s.</p>
          <input type="hidden" name="description" value="Madol Doovaankan.">
        </div>
        <div class="card-actions">
          <button class="button-small" name='submit' onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 400.00</div>
          <input type="hidden" name="price" value="400.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/ApeGama.jpg">
          <p>
        </div>
      </div>
    </div>
    </form>
    <form method="POST">
    <div class="card-row">
      <div class="card">
        <img class="card-media" src="imgCart/Gamperaliya.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Gamperaliya</h2>
          <input type="hidden" name="topic" value="Gamperaliya">
          <p class="card-description">Madol Doova is a children's novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern coast of Sri Lanka during the 1890s.</p>
          <input type="hidden" name="description" value="Madol Doovaankan.">
        </div>
        <div class="card-actions">
          <button class="button-small" name='submit' onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 500.00</div>
          <input type="hidden" name="price" value="500.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/Gamperaliya.jpg">
          <p>
        </div>
      </div>
      </form>
      <form method="POST">
      <div class="card">
        <img class="card-media" src="imgCart/HathPana.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Hath Pana</h2>
          <input type="hidden" name="topic" value="Hath Pana">
          <p class="card-description">Madol Doova is a children's novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern coast of Sri Lanka during the 1890s.</p>
          <input type="hidden" name="description" value="novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern">
        </div>
        <div class="card-actions">
          <button class="button-small" name='submit' onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 600.00</div>
          <input type="hidden" name="price" value="600.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/HathPana.jpg">
          <p>
        </div>
      </div>
      </form>
      <form method="POST">
      <div class="card">
        <img class="card-media" src="imgCart/Loveena.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Loveena</h2>
          <input type="hidden" name="topic" value="Loveena">
          <p class="card-description">Madol Doova is a children's novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern coast of Sri Lanka during the 1890s.</p>
          <input type="hidden" name="description" value="Madol Doovaankan.">
        </div>
        <div class="card-actions">
          <button class="button-small" name='submit' onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 700.00</div>
          <input type="hidden" name="price" value="700.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/Loveena.jpg">
          <p>
        </div>
      </div>
      </form>
      <form method="POST">
      <div class="card">
        <img class="card-media" src="imgCart/Senkottan.jpg" alt="green iguana">
        <div class="card-content">
          <h2 class="card-title">Senkottan</h2>
          <input type="hidden" name="topic" value="Senkottan">
          <p class="card-description">Madol Doova is a children's novel and coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern coast of Sri Lanka during the 1890s.</p>
          <input type="hidden" name="description" value="Madol Doovaankan.coming-of-age story written by Sri Lankan writer Martin Wickramasinghe and first published in 1947. The book recounts the misadventures of Upali Giniwella and his friends on the Southern coast of Sri Lanka during the 1890s.">
        </div>
        <div class="card-actions">
          <button class="button-small" name='submit' onclick="addToCart()">ADD TO CART</button>
          <div class="price">Rs. 800.00</div>
          <input type="hidden" name="price" value="800.00">
          <img src="imgCart/Like.png" onclick="likeRating()">
          <input type="hidden" name="imgg" value="imgCart/Senkottan.jpg">
          <p>
        </div>
      </div>
      </form>
    </div>
  </div>
  <script>
  function addToCart() {
    // Redirect to the other page
    window.location.href = "shoppingCart.php";
  }

  function likeRating() {
    // Redirect to the other page
    window.location.href = "rating.php";
  }
</script>
</body>
</html>

