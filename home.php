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
    <link rel="stylesheet" href="css/images.css">
    <title>Home Page</title>
  </head>
  <body>
    <header class="header_area">
      <div class="header">
      <a href="home.php"><img src="images/logo4.png" alt="" width="190" height="90"></a></div>
      <div class="subheader">
        <div class="search"> 
          <form method="POST" action=""> 
          <input type="text" name="keyword" placeholder="Search"/> <a style="text-decoration:none"  href="search"><button type="submit" hidden></button><img src="./Images/icon.png" width="25" height="25"> 
          <a style="text-decoration:none"  href="wishlist.php"><img src="./Images/wishlist.png" alt="" width="27" height="27">
          <a href="cart.php"><img src="images/cart.jpeg" alt=""width="30" height="30"></a>
          <a href="login.php"><img src="images/admin.jpg" alt="" width="30" height="30"></a>
          </form>
        </div>
      </div>
      <hr noshade="noshade">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active"><a style="text-decoration:none" class="nav-link" href="home.php">Home</a></li> 
              <li class="nav-item submenu dropdown">
                <a style="text-decoration:none" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Power Tools</a>
                <ul class="dropdown-menu">
                  <div class="col-md-4">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="drill_machine.php">Drill Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="chopsaw.php">Chopsaw Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="circular_saw_machine.php">Circular Saw Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="marble_cutter.php">Marble Cutter Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="heat_gun.php">Heat Gun</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="bag_closing.php">Bag Closing Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="blower.php">Blower</a></li>
                      <li class="nav-item"><a class="nav-link" href="planer.php">Planer</a></li>
                      <li class="nav-item"><a class="nav-link" href="mitersaw.php">Mitersaw Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="slab_cutter.php">Slab Cutter Machine</a></li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="electric_chainsaw.php">Electric Chainsaw</a></li>
                      <li class="nav-item"><a class="nav-link" href="paint_mixture.php">Paint Mixture</a></li>
                      <li class="nav-item"><a class="nav-link" href="hammer_drill.php">Hammer Drill</a></li>
                    </ul>
                  </div>
                </ul>
              </li> 
              <li class="nav-item submenu dropdown">
                <a style="text-decoration:none" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hand Tools</a>
                <ul class="dropdown-menu">
                  <div class="col-md-2">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="de_spanner.php">De-Spanner</a></li>
                      <li class="nav-item"><a class="nav-link" href="plastic_sealing.php">Plastic Sealing Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="ring_spanner.php">Ring Spanner Set</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="ballpen_hammer.php">Ballpen Hammer</a></li>
                      <li class="nav-item"><a class="nav-link" href="claw_hammer.php">Claw Hammer</a></li>
                      <li class="nav-item"><a class="nav-link" href="socket_set.php">Socket Set</a></li>
                      <li class="nav-item"><a class="nav-link" href="pipe_wrench.php">Pipe Wrench</a></li>
                    </ul>
                  </div>
                </ul>
              </li>
              <li class="nav-item submenu dropdown">
                <a style="text-decoration:none" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Heavy Machinery</a>
                <ul class="dropdown-menu">
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./pipe_bending.php">Pipe Bending</a></li>
                      <li class="nav-item"><a class="nav-link" href="./cotton_candy_machine.php">Cotton Candy Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="./ice-gola_machine.php">Ice-Gola Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="./welding_machine.php">Welding Machine</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./pressure_washer.php">Pressure Washer</a></li>
                      <li class="nav-item"><a class="nav-link" href="./vaccum_cleaner.php">Vaccum Cleaner</a></li>
                      <li class="nav-item"><a class="nav-link" href="./profile_cutting.php">Profile Cutting Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="./bench_grinder.php">Bench Grinder</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./sheet_bending.php">Sheet Bending Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="./pillar_drill.php">Pillar Drill Machine</a></li>
                      <li class="nav-item"><a class="nav-link" href="./ball_press.php">Ball Press Machine</a></li>
                </ul>
                  </div>
                </ul>
              </li> 
              <li class="nav-item submenu dropdown">
                <a style="text-decoration:none"  href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Measuring Tools</a>
                <ul class="dropdown-menu">
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./vernier_calliper.php">Vernier Calliper</a></li>
                      <li class="nav-item"><a class="nav-link" href="./micrometer.php">Micrometer</a></li>
                      <li class="nav-item"><a class="nav-link" href="./clampmeter.php">Clampmeter</a></li>
                      <li class="nav-item"><a class="nav-link" href="./digital_thermo.php">Digital Thermometer</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./wire_gauge.php">Wire Gauge</a></li>
                      <li class="nav-item"><a class="nav-link" href="./depthmeter.php">Depthmeter</a></li>
                      <li class="nav-item"><a class="nav-link" href="./height_gauge.php">Height Guage</a></li>
                </ul>
                  </div>
                </ul>
              </li> 
              <li class="nav-item submenu dropdown">
                <a style="text-decoration:none" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Motor/Pumps</a>
                <ul class="dropdown-menu">
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./monoblock_pump.php">Monoblock</a></li>
                      <li class="nav-item"><a class="nav-link" href="./hydraulic_pump.php">Hydraulic test Pump</a></li>
                      <li class="nav-item"><a class="nav-link" href="./submersible_pump.php">Submersible Pump</a></li>
                      </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./5hp.php">5HP Motor</a></li>
                      <li class="nav-item"><a class="nav-link" href="./2hp.php">2HP Motor</a></li>
                      <li class="nav-item"><a class="nav-link" href="./openwell_pump.php">Openwell Pump</a></li>
                  </div>
                </ul>
              </li> 
              <li class="nav-item submenu dropdown">
              <a style="text-decoration:none" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Spare Tools</a>
                <ul class="dropdown-menu">
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./bolts.php">Bolts Nuts & Washer</li>
                      <li class="nav-item"><a class="nav-link" href="./armature.php">Armature</a></li>
                      <li class="nav-item"><a class="nav-link" href="./carbon_brush.php">Carbon Brush</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="nav flex-column">
                      <li class="nav-item"><a class="nav-link" href="./field_coil.php">Field Coil</a></li>
                      <li class="nav-item"><a class="nav-link" href="./bearing.php">Bearing</a></li>
                      <li class="nav-item"><a class="nav-link" href="./gear_pinion.php">Gear Pinion</a></li>
                </ul>
                  </div>
                </ul>
              </li> 
                <li class="nav-item"><a style="text-decoration:none" class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a style="text-decoration:none" class="nav-link" href="contact.php">Contact Us</a></li>
            </div> 
          </nav>
          <hr noshade="noshade">
               <section class="background">
                <img class="background_img1" src="images/background_img.jpg"/>
                <div class="backgroundtext">
                  <h1>HOT DEALS THIS WEEK</h1>
                  <h2>SALE UPTO 50%<br>MODERN TOOLS</h2>
                  <button onclick="" style="color: green;"> View Now </button>
                </div>
               </section>
               <h1><center>Featured Products</center></h1>
               <section>
                <div class="section">
                  <div class="img-slider">
                    <div class="slider__section section_left">
                      <img class="bolts" src="images/bolts.jpg"/>
                      <div class="section__text boltstext">
                        <h1>Bolts, Nuts & Washer </h1>
                        <button><a style="text-decoration:none" href="bolts.php">View Details</a></button>
                      </div>
                    </div>
                    <div class="slider__section section_right">
                      <img class="de" src="images/de_spanner.jpg"/>
                      <div class="section__text spannertext">
                        <h1>De-Spanner</h1>
                        <button><a style="text-decoration:none" href="de_spanner.php">View Details</a></button>
                      </div>
                    </div>
                  </div>
                </div>
                </section>
                <section>
                    <div class="section_down">
                        <img class="chop_saw" src="images/chopsaw.jpg">
                        <div class="choptext"> 
                          <h1>Chopsaw Machine</h1> <h2>Rs10500</h2>
                          <button><a style="text-decoration:none" href="chopsaw.php">View Details</a></button>
                        </div>
                        </div>
                          <img class="circular" src="images/circular_saw_machine.jpg"/>
                          <div class="circulartext">
                            <h1>Circular Saw Machine</h1> <h2>Rs3500</h2>
                            <button><a style="text-decoration:none" href="circular_saw_machine.php">View Details</a></button>
                          </div>
                        <img class="drill" src="images/drill_machine.jpg"/>
                      <div class="drilltext">
                        <h1>Drill Machine</h1> <h2>₹2500</h2>
                        <button><a style="text-decoration:none" href="drill_machine.php">View Details</a></button>
                      </div>
                      <img class="marble" src="images/marble_cutter.jpg"/>
                      <div class="marbletext">
                        <h1>Marble Cutter Machine</h1> <h2>₹2400</h2>
                        <button><a style="text-decoration:none" href="marble_cutter.php">View Details</a></button>
                      </div>
                </section>
                <section>
                  <div class="section_down_down">
                  <img class="pipe" src="images/pipe_bending.jpg"/>
                  <div class="pipetext">
                    <h1>Pipe Bending Machine</h1> <h2>₹17000</h2>
                    <button><a style="text-decoration:none" href="pipe_bending.php">View Details</a></button>
                  </div>
                  </div>
                  <img class="vernier" src="images/vernier_calliper2.jpg"/>
                  <div class="verniertext">
                    <h1>Vernier Calliper</h1> <h2>₹800</h2>
                    <button><a style="text-decoration:none" href="vernier_calliper.php">View Details</a></button>
                  </div>
                  <img class="cotton" src="images/cotton_candy_machine.jpg"/>
                  <div class="cottontext">
                 <h1>Cotton Candy Machine</h1> <h2>₹12000</h2>
                 <button><a style="text-decoration:none" href="cotton_candy_machine.php">View Details</a></button>
               </div>
               <img class="ice" src="images/ice-gola_machine.jpg"/>
               <div class="icetext">
                 <h1>Ice Gola Machine</h1> <h2>₹4500</h2>
                 <button><a style="text-decoration:none" href="ice-gola_machine.php">View Details</a></button>
               </div>
               <div class="toptext">
                    <h1>Top Ratings</h1>
               </div>
               <div class="section_top">
                  <img class="welding" src="images/welding_machine2.jpg"/>
                 <div class="weldingtext">
                   <h1>Welding Machine</h1> <h2>₹4500</h2>
                   <button><a style="text-decoration:none" href="welding_machine.php">View Details</a></button>
                </div>
                </div>
                <img class="monoblock" src="images/monoblock_pump.jpg"/>
               <div class="monoblocktext">
                 <h1>Monoblock pump</h1> <h2>₹3000</h2>
                 <button><a style="text-decoration:none" href="monoblock_pump.php">View Details</a></button>
               </div>
               <img class="heatgun" src="images/heat_gun.jpg"/>
               <di
               v class="heatguntext">
                 <h1>Heat Gun</h1> <h2>₹1800</h2>
                 <button><a style="text-decoration:none" href="heat_gun.php">View Details</a></button>
               </div>
               <div class="section_top_top">
               <img class="plastic_sealing" src="images/plastic_sealing.jpg"/>
               <div class="plastic_sealingtext">
                <h1>Plastic Sealing Machine</h1> <h2>₹1500</h2>
                <button><a style="text-decoration:none" href="plastic_sealing.php">View Details</a></button>
              </div>
              </div>
              <img class="bagclosing" src="./Images/bag_closing.webp"/>
               <div class="bagclosingtext">
                <h1>Bag Closing Machine</h1> <h2>₹1500</h2>
                <button><a style="text-decoration:none" href="bag_closing.php">View Details</a></button>
              </div>
              <img class="pressure_washer" src="images/pressure_washer.jpg">
               <div class="pressure_washertext">
                <h1>Pressure Washer</h1> <h2>₹5500</h2>
                <button><a style="text-decoration:none" href="pressure_washer.php">View Details</a></button>
              </div>
              <img class="vaccum_cleaner" src="images/vaccum_cleaner.jpg">
               <div class="vaccum_cleanertext">
                <h1>Vaccum Cleaner</h1> <h2>₹8000</h2>
                <button><a style="text-decoration:none" href="vaccum_cleaner.php">View Details</a></button>
              </div>

              <img class="Hydraulic_Pump" src="./Images/hydraulic_pump.webp"/>
               <div class="hydraulic_pumptext">
                <h1>Hydraulic Pump</h1> <h2>₹3500</h2>
                <button><a style="text-decoration:none" href="hydraulic_pump.php">View Details</a></button>
              </div>
              <img class="drills" src="Images/drill_machine2.jpg"/>
              <div class="drillstext">
               <h1>Drill Machine</h1> <h2>₹2500</h2>
               <button><a style="text-decoration:none" href="drill_machine.php">View Details</a></button>
             </div>
            </section>
    </header>
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
      <a style="text-decoration:none" href="http://localhost/project/login.php" class="signin">Login</a></div>
    </div>
    <div class="footer3">Copyright © <h4>NHM</h4> 2020-2023</div>
  </footer>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="app.js"></script>
</body>
</html>