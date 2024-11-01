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
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>about us</title>
  </head>
  <body>
    <header class="header_area">
      <div class="header">
      <a href="home.php"><img src="images/logo4.png" alt="" width="190" height="90"></a></div>
      <div class="subheader">
        <div class="search"> 
          <form action="#"> 
            <input type="text" placeholder="Search"/> <a style="text-decoration:none"  href="search"><img src="./Images/icon.png" width="25" height="25"> 
              <a style="text-decoration:none"  href="wishlist.php"><img src="./Images/wishlist.png" alt="" width="27" height="27">
                 <a href="cart.php"><img src="images/cart.jpeg" alt=""width="30" height="30"></a>
                 <a href="login.php"><img src="images/admin.jpg" alt="" width="30" height="30"></a>
          </form>
        </div>
      </div>
      <hr noshade="noshade">
      <div class="progress-container" id="progressContainer" style="top: -50px;">
        <div class="progress-bar" id="progressBar" style="background: rgb(67, 67, 163, 0.5);"></div>
      </div>
       
        <div class ="aboutUsContentContainer aboutUsContent" >
          <div class="aboutUsBanner" style="text-align: center ;position: relative;">
            <img class="img-sz" src="./Images/about_us.jpg" style=" height: 250px;width: 100%;">
            <div class="head-sz" style="font-weight:bold; font-size:50px; color: black; position: absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-shadow: 2px 2px rgb(67, 67, 163);">
                About Us
            </div>
          </div>
          <h1 class="fadeIn mid-sz" style= "text-align: center;">--Who We Are and What We Do--</h1>
          <div class="aboutDesc fadeIn mid1-sz">
          Welcome to National Hardware Mart, your one-stop online shop for all your hardware needs. We take pride in offering a wide range of high-quality products, from power tools and machinery to plumbing and electrical supplies, all at competitive prices.
    <br>Our mission is to provide our customers with a seamless shopping experience, whether you are a DIY enthusiast or a professional contractor. We strive to offer a user-friendly website with easy navigation and a secure checkout process to ensure that you can shop with confidence.
<br>At National Hardware Mart, we believe in providing exceptional customer service, and our knowledgeable and friendly staff are always available to assist you with any queries or concerns you may have. We also offer fast and reliable shipping to ensure that your order reaches you as quickly as possible.
<br>Thank you for choosing National Hardware Mart as your go-to destination for all your hardware needs. We look forward to serving you and helping you achieve your project goals.
          </div>
          <div class="w3-container w3-center DescContainerLeft" id="slideLeft" style="margin-right: auto; margin-left: auto;width: fit-content;">
            <div class="DescBoxLeft mid2-sz">NHM Cares</div>
            <p class="mid3-sz" style="text-align: center; margin-top:50px;color: rgb(128, 128, 128);">NHMWale is a smart, passionate builder with different backgrounds and goals, who share a common desire to always be learning and inventing on behalf of our customers. We believe that if you’re not left with an amazing experience, we haven’t done our job. We don’t measure success through achievements or awards, but through the satisfaction of our customers.</p>
          </div>
          <div class="w3-container w3-center DescContainerRight" id="slideRight" style="margin-right: auto; margin-left: auto;width: fit-content;">
            <div class="DescBoxRight mid2-sz">Why Choose Us</div>
            <p class="mid3-sz" style="text-align: center; margin-top:50px;color: rgb(128, 128, 128);">In NHM, there is a wide range of options in the category, exclusively handpicked to help you find the best quality with the lowest prices. No more getting stuck in traffic jams, the order will be delivered right to your doorstep. We guarantee on-time delivery and the best quality! Shopping online is now easy as every product on your shopping list is available at NHM.com</p>
          </div>
          <h2 class="mid4-sz" style= "text-align: center;">--What We Provide--</h2>
          <div class="flip-card-Container" style="margin-right: auto; margin-left: auto;width: fit-content;">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="./Images/best_price.jpg" width=60>
                  <p>Best Prices & Offers</p>
                </div>
                <div class="flip-card-back">
                  <h2>Best Prices & Offers</h2> 
                  <p>We provide the best value for money. We also specials on every weekend and special occasions. You can get the best quality products at the lowest prices at NHM.com</p> 
                </div>
              </div>
            </div>
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="./Images/satisfaction.jpg" width=60>
                  <p>Satisfaction Guarantee</p>
                </div>
                <div class="flip-card-back">
                  <h2>Satisfaction Guarantee</h2> 
                  <p>If you are not satisfied with any of our products for a valid reason, we will be more than happy to refund/replace those products for you (terms and conditions applied).</p> 
                </div>
              </div>
            </div>
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="./Images/delivery.jpg" width=60>
                  <p>Delivery Service</p>
                </div>
                <div class="flip-card-back">
                  <h2>Delivery Service</h2> 
                  <p>We also deliver multiple days a week in most areas. No more stucking in the traffic jams! The products will be delivered to your doorsteps</p> 
                </div>
              </div>
            </div>
      
          </div>
      
        </div>
      
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
            <a style="text-decoration:none"  href="terms and condition.html" class="terms_and_condition">Terms And Condition</a>
            <div class="div"></div>
            <a style="text-decoration:none" href="http://localhost/project/login.php" class="signin">Login</a></div>
          </div>
          <div class="footer3">Copyright © <h4>NHM</h4> 2020-2023</div>
        </footer>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="app.js"></script>
      </body>
      </html>