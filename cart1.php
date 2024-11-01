<?php

session_start();
// Create connection
$conn = mysqli_connect("localhost", "nhm", "nationalhardwaremart", "nhm");
			
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Check if product ID was submitted
//if (!isset($_POST['product_id'])) {
  //header('Location: bearing.php');
  //exit;
//}

// Get product details from the database
$product_id = $_POST['product_id'];
$pname = null;
$price = null;
			
		    // Retrieve the product name from the database
			$result1 = $conn->query("SELECT pname FROM product WHERE pid = '$product_id'");
			if ($result1->num_rows > 0) {
				$row1= $result1->fetch_assoc();
				$pname= $row1["pname"];
			} else {
				die("product not found");
			}
      // Retrieve the price from the database
			$result2 = $conn->query("SELECT price FROM product WHERE pid = '$product_id'");
			if ($result2->num_rows > 0) {
				$row2= $result2->fetch_assoc();
				$price= $row2["price"];
			} else {
				die("product not found");
			}


//$product_name = 'Bearing'; // Replace with actual product name
//$product_price = 20; // Replace with actual product price

// Check if the product is already in the cart
if (isset($_SESSION['cart'][$product_id])) {
  // If it is, increase the quantity by 1
  $_SESSION['cart'][$product_id]['quantity'] += 1;
} else {
  // If it's not, add the product to the cart
  $_SESSION['cart'][$product_id] = array(
    'name' => $pname,
    'price' => $price,
    'quantity' => 1
  );
}

// Redirect to the cart page
header('Location: cart.php');
exit;
