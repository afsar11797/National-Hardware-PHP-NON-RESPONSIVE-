<?php 
session_start();
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $key_emp="";
      $key=$_POST['keyword'];
      $choice=$_SESSION['choice'];
      if(empty($key))
      {
        ?>
        <script>window.alert("Please enter a keyword to search for products!");
        </script><?php
      }
      else
      {
        $key=strtolower($key);
        $_SESSION['keyword']=$key;
        $temp=$key.".php";
                header("Location: $temp");
        }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>mitersaw</title>  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/product_page.css">
    <link rel="stylesheet" href="css/review.css">  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet"/>
    <script src="javascript"></script>
    <div class="logo"><a href="home.php"><img src="images/logo4.png" alt="" width="190" height="90"></a></div>
    <div class="subheader">
      <div class="search">
        <form method="POST" action=""> 
          <input type="text" name="keyword" placeholder="Search"/> <a style="text-decoration:none"  href="search"><button type="submit" hidden></button><img src="./Images/icon.png" width="25" height="25"> 
          <a style="text-decoration:none"  href="wishlist.php"><img src="./Images/wishlist.png" alt="" width="27" height="27"> <a href="cart.php"><img src="images/cart.jpeg" alt="" width="30" height="30"></a>
          <a href="login.php"><img src="images/admin.jpg" alt="" width="30" height="30"></a>
        </form>
      </div>
    </div>   <hr noshade="noshade">
</head>

<body>
  <header>
    <h1>Mitersaw Machine</h1>
  </header>
  <br>
  <div class="container">
    <div class="product-img">
      <img src="Images/mitersaw.jpg" alt="Product Image" width="400" height="400">
    </div>
    <div class="product-details">
      <p>A power miter saw, also known as a drop saw, is a power tool used to make a quick, accurate crosscut in a workpiece at a selected angle. It is commonly used for cutting of molding and trim. </p>
      <p>Brand:Electro</p>
      <p class="price">₹7800</p>
      <form method="post" action="cart1.php">
      <input type="hidden" name="product_id" value="32">
      <button class="button" type="submit">Add to Cart</button>
      <a href="wishlist.php" class="wishlist-button">Add to Wishlist</a>
      </form>
    </div>
  </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="review-section">
  <h2>Reviews</h2>
  <div class="review-form">
    <h3>Write a Review</h3>
    <form action="./product.php" method="POST">
          <label for="pname">Product Name:</label>
          <input type="text" id="pname" name="pname" required>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <label for="rating">Rating:</label>
        <select id="rating" name="rating" required>
        <option value="">Select Rating</option>
        <option value="5">5 Stars</option>
        <option value="4">4 Stars</option>
        <option value="3">3 Stars</option>
        <option value="2">2 Stars</option>
        <option value="1">1 Star</option>
        </select>
      <label for="reviews">Review:</label>
      <textarea id="reviews" name="reviews" required></textarea>
      <button type="submit">Submit Review</button>
    </form>
  </div>
  <div class="reviews">
  <h2>Customer Reviews</h2>
  <div class="review-card">
    <div class="review-header">
      <h3>Charlotte Davis</h3>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>
    <p class="review-text"> This mitersaw is easy to use and has a smooth cutting action. The dust collection system is efficient and keeps the work area clean. A great addition to any workshop.</p>
  </div>
  <div class="review-card">
    <div class="review-header">
      <h3>Alexander Perez</h3>
      <div class="rating">
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
        <span class="star">&#9733;</span>
      </div>
    </div>
    <p class="review-text">The mitersaw is an excellent tool for precision cutting. The laser guide is very helpful and the blade is sharp and powerful.</p>
  </div>
</div>
</div>

<br><br>   
  <footer>
    <div id="footer" class="footer0">
      <h2>National Hardware Mart</h2>
    </div>
    <div class="footer1 ">Connect with us at
      <div class="social-media">
      <a href="https://www.facebook.com/profile.php?id=100063864818233"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="https://www.instagram.com/nathmrt2021/"><ion-icon name="logo-instagram"></ion-icon></a>
      </div>
    </div>
    <div class="footer2">
      <div class="products">
      <div class="heading">Products</div>
      <div class="div">Advertise</div>
      <div class="div">Pricing</div>
    </div>
    <div class="services">
      <div class="heading">Services</div>
      <div class="div">Return</div>
      <div class="div">Others</div>
    </div>
    <div class="Company">
      <div class="heading">Company</div>
      <div class="div">Complaint</div>
      <div class="div">Support</div>
    </div>
    <div class="Get Help">
      <div class="heading">Get Help</div>
      <div class="div">Help Center</div>
      <div class="div">Privacy Policy</div>
      <a style="text-decoration:none"  href="terms and condition.html" class="terms_and_conditions">Terms And Condition</a>
      <div class="div"></div>
      <a style="text-decoration:none" href="login.php" class="login">Login</a></div>
    </div>
    <div class="footer3">Copyright © <h4>NHM</h4> 2023-2024</div>
  </footer>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="app.js"></script>
</body>
</html>