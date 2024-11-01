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
    <script src="./css/form.js"></script>
    <title>Home Page</title>
  </head>
  <body>
    <header class="header_area">
      <div class="header">
      <div class="logo"><a href="home.php"><img src="images/logo4.png" alt="" width="190" height="90"></a></div>
      <div class="subheader">
      <div class="search">
        <form method="POST" action=""> 
          <input type="text" name="keyword" placeholder="Search"/> <a style="text-decoration:none"  href="search"><button type="submit" hidden></button><img src="./Images/icon.png" width="25" height="25"> 
          <a style="text-decoration:none"  href="wishlist.php"><img src="./Images/wishlist.png" alt="" width="27" height="27"> <a href="cart.php"><img src="images/cart.jpeg" alt="" width="30" height="30"></a>
          <a href="login.php"><img src="images/admin.jpg" alt="" width="30" height="30"></a>
        </form>
        </div>
      </div>
      <hr noshade="noshade">
      <section id="contactus">
        <p id="contact-head">Contact us</p>
        <p id="contact-message">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
        <div class="container">
          <div id="form-footer" class="row">
            <div style="width: 67%!important;" class="col-md-8">
              <div class="center-div">
                <div class="contact-table">
                  <form action="https://formspree.io/f/mgerlvrl" method="POST" id="my-form">
                    <div class="input-container">
                      <label class="contact-inputs" for="validationCustom01">Your Name :</label>
                      <input type="text" class="form-control contact-inputs-tags" required id="validationCustom01" placeholder="Enter your name" name="name" onchange="validateFormInput()">
                    
                    </div>
                    <div class="input-container">
                      <label class="contact-inputs" for="validationCustom02">Your Email :</label>
                      <input type="email" class="form-control contact-input-tags" required id="validationCustom02" placeholder="Enter your email address" name="email" onchange="validateFormInput()">
                     
                    </div>
                    <div class="input-container">
                      <label class="contact-inputs" for="validationCustom03">Message :</label>
                      <textarea type="text" class="form-control contact-input-tags" required id="validationCustom03" placeholder="Enter your message here . . ." rows="4" name="message"></textarea>
                    </div>
                    <div>
                      <button id="submit-btn" class="btn btn-md btn-outline-primary" type="submit">SUBMIT</button>
                    </div>
                  </form>
                </div>
                
              </div>
              <div style="margin-top: 20px;" id="status"></div>
            </div>
            <div style="width: 33%!important;" id="social-section" class="col-md-4">
              <div class="box-sz" style="padding:0px 20px;padding-bottom: 15px;border-bottom:3.5px solid grey">
                <div style="display: flex;justify-content: center;margin-bottom: 10px;">
                  <span class="footer-details"><i class="fa fa-map-marker mr-5" aria-hidden="true"></i></span>
                  <span class="footer-details"><span>8,BRB Basu Road, West Bengal, Kolkata-700001</span></span>
                </div>
                <a href="mailto:NHM@gmail.com" style="text-decoration: none;">
                  <p class="footer-details"><i class="fa fa-envelope mr-5" aria-hidden="true"></i><span>nathmrt@gmail.com</span></p>
                </a>
                <p class="footer-details"><i class="fa fa-phone mr-5" aria-hidden="true"></i><span>+91-7003506296</span></p>
                <p class="footer-details"><i class="fa fa-fax mr-5" aria-hidden="true"></i><span>033-40064066</span></p>
              </div>
            </div>
          </div>
        </div>
      </section>
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