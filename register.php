<!DOCTYPE html>
<html>
    <head>
        <title>register</title>
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

    // Sanitize and retrieve form data
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Create and execute SQL query
    $sql = "INSERT INTO customer(username,phone,email,password) VALUES ('$username','$phone','$email', '$password')";

    if (mysqli_query($conn, $sql)) 
    {
        echo "<h3>successfully Registered.</h3>";
        echo "<form action='login.php'><button>Please Login</button></form>";
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>

</center>
</body>
</html>