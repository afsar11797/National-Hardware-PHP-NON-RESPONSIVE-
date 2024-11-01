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
    <title>wishlist</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/Cart.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet"/>
    <script src="javascript"></script>
    <div class="logo"><a href="home.php"><img src="images/logo4.png" alt="" width="190" height="90"></a></div>
    <div class="subheader">
      <div class="search">
        <form method="POST" action=""> 
          <input type="text" name="keyword" placeholder="Search"/> <a style="text-decoration:none"  href="search"><button type="submit" hidden></button><img src="./Images/icon.png" width="25" height="25"> 
 <a href="cart.php"><img src="images/cart.jpeg" alt="" width="30" height="30"></a>
          <a href="login.php"><img src="images/admin.jpg" alt="" width="30" height="30"></a>
        </form>
      </div>
    </div>   
    <hr noshade="noshade">
</head>

  <body>
    <div class="wrapper">
		<h1>wishlist</h1>
		<div class="project">
			<div class="shop">
				<div class="box">
					<img src="images/chopsaw.jpg">
					<div class="content">
						<h3>Chop Saw</h3>
						<h4>Price: ₹10500</h4>
					   <select style="width:60px;height:40px" class="form-select select-ui" aria-label="Disabled select example">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                  <form method="post" action="cart1.php">
                   <input type="hidden" name="product_id" value="2">
                   <button class="btn-area" type="submit">Move to Cart</button>
                  </form>
            </div>
				</div>
				<div class="box">
					<img src="Images/blower.jpg">
					<div class="content">
						<h3>Blower</h3>
						<h4>Price: ₹1500</h4>
				   <select style="width:60px;height:40px" class="form-select select-ui" aria-label="Disabled select example">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                  <form method="post" action="cart1.php">
                   <input type="hidden" name="product_id" value="11">
                   <button class="btn-area" type="submit">Move to Cart</button>
                  </form>
					</div>
				</div>
        <div class="box">
					<img src="Images/clampmeter.jpg">
					<div class="content">
						<h3>Clampmeter</h3>
						<h4>Price: ₹1800</h4>
				   <select style="width:60px;height:40px" class="form-select select-ui" aria-label="Disabled select example">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                  <form method="post" action="cart1.php">
                   <input type="hidden" name="product_id" value="8">
                   <button class="btn-area" type="submit">Move to Cart</button>
                  </form>
					</div>
				</div>
        <div class="box">
					<img src="Images/de_spanner1.jpg">
					<div class="content">
						<h3>De- spanner</h3>
						<h4>Price: ₹500</h4>
				   <select style="width:60px;height:40px" class="form-select select-ui" aria-label="Disabled select example">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                  <form method="post" action="cart1.php">
                   <input type="hidden" name="product_id" value="3">
                   <button class="btn-area" type="submit">Move to Cart</button>
                  </form>
					</div>
				</div>
        <div class="box">
					<img src="Images/cotton_candy_machine.jpg">
					<div class="content">
						<h3>Cotton Candy Machine</h3>
						<h4>Price: ₹12000</h4>
				   <select style="width:60px;height:40px" class="form-select select-ui" aria-label="Disabled select example">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
						      <form method="post" action="cart1.php">
                   <input type="hidden" name="product_id" value="9">
                   <button class="btn-area" type="submit">Move to Cart</button>
                  </form>
					</div>
				</div>
				<div class="box">
					<img src="Images/drill_machine.jpg">
					<div class="content">
						<h3>Drill Machine</h3>
						<h4>Price: ₹2500</h4>
						   <select style="width:60px;height:40px" class="form-select select-ui" aria-label="Disabled select example">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
						      <form method="post" action="cart1.php">
                   <input type="hidden" name="product_id" value="1">
                   <button class="btn-area" type="submit">Move to Cart</button>
                  </form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
  <br><br><br><br>
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
      <a style="text-decoration:none" href="login.html" class="login">Login</a></div>
    </div>
    <div class="footer3">Copyright © <h4>NHM</h4> 2023-2024</div>
  </footer>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="app.js"></script>
</body>
</html>