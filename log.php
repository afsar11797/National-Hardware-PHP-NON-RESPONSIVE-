<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
</head>
<body>
    <center>
    <?php
    // Check if the form has been submitted


    // Create connection
    $conn = mysqli_connect("localhost", "nhm", "nationalhardwaremart", "nhm");
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

   $query="SELECT email,password FROM customer WHERE email='$email' AND password='$password'";
   $result=mysqli_query($conn,$query);
   if(mysqli_num_rows($result) == 1)
   {
    $_POST['email']=$email;
    header("Location:home.php");
   }
    else{
    echo "<h1><font color=red>Error</font></h2>"."<h2>You have entered incorrect email or password please try again</h2>";
    echo "<form action='login.php'><button><font color=blue>Login</font></button></form>";
   }
?>

</center>
</body>
</html>