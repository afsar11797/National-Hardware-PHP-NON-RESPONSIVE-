<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css?v=<?php echo time();?>">
        <title>register_page</title>
    </head>
    <body>
        
    <header class="header_area">
        <div class="header">
        <a href="home.php"><img src="images/logo4.png" alt="" width="190" height="90"></a></div>
        <div class="subheader">
        <div class="search"> 
        <form action="#"> 
        <a style="text-decoration:none"  href="login.php"><img src="./Images/wishlist.png" alt="" width="30" height="30">
        <a href="login.php"><img src="images/cart.jpeg" alt="" width="30" height="30"></a>
        <a href="login.php"><img src="Images/admin.jpg" alt="" width="30" height="30"></a>
        </form>
        </div>
        </div>
        <hr noshade="noshade">
                <div class="back">
                <img src="images/loginback.jpg" alt="Snow" style="width:100%;">
                
<div class="registration_wrapper">
    <div class="form-box login">
        <h2>Registration</h2>
        <form action="register.php" method="POST">
        <div class="input-box">
                <span class="icon">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </span>
                <input type="Text" name="username" required>
                 <label>Full Name</label>
            </div>
            <div class="input-box">
               <span class="icon">
                    <ion-icon name="enter-outline"></ion-icon>
                </span>
                <input type="number" name="phone" required>
                <label>Phone no.</label>
            </div> 
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">I agree to the terms and conditions</label>
                
            </div>
            <button type="submit" class="btn">Register</button>
            
            <div class="login-register">
                <p>Already have an account?<a href="login.php" class="register-link">Login</a>
                </p>
            </div>
        </form>
    </div>

</div>
</div>
</ul>
</div>
</nav>
</div>
</header>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>