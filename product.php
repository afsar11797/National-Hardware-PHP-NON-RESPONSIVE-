<!DOCTYPE html>
<html>
<head>
	<title>Review</title>
</head>
<body>
	<center>
		<?php
    
    /*var_dump($_POST);*/

			// Create connection
			$conn = mysqli_connect("localhost", "nhm", "nationalhardwaremart", "nhm");
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// Retrieve the data from the form
			if (isset($_POST['pname'])) {
				$pname = $_POST['pname'];
			}
			
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
			}
			
			if (isset($_POST['rating'])) {
				$rating = $_POST['rating'];
			}
			
			if (isset($_POST['reviews'])) {
				$reviews = $_POST['reviews'];
			}
			
			$cid = null;
			$pid = null;
			
			// Retrieve the customer ID from the database
			$result1 = $conn->query("SELECT cid FROM customer WHERE email = '$email'");
			if ($result1->num_rows > 0) {
				$row1 = $result1->fetch_assoc();
				$cid = $row1["cid"];
			} else {
				die("Customer not found");
			}
			
			// Retrieve the product ID from the database
			$result2 = $conn->query("SELECT pid FROM product WHERE pname = '$pname'");
			if ($result2->num_rows > 0) {
				$row2 = $result2->fetch_assoc();
				$pid = $row2["pid"];
			} else {
				die("Product not found");
			}
			
			// Insert the review into the database
			$stmt = $conn->prepare("INSERT INTO review (cid, pid, description) VALUES ('$cid', '$pid','$reviews')");
			//$stmt->bind_param("iis",$cid, $pid,$reviews);
			$stmt->execute();
			
			// Close the prepared statement and database connection
			$stmt->close();
			$conn->close();
			
			// Display a message to the user
			echo "<h2>Thank you for your review!</h2>";
		?>
	</center>
</body>
</html>
