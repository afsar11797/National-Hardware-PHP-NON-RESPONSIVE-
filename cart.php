<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="./css/tables.css">
        
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/Cart.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet"/>
    <script src="javascript"></script>
    <div class="logo"><a href="home.php"><img src="images/logo4.png" alt="" width="190" height="90"></a></div>
    <div class="subheader">
      <div class="search">
        <form method="POST" action=""> 
          
          <a style="text-decoration:none"  href="wishlist.php"><img src="./Images/wishlist.png" alt="" width="27" height="27"> 
          <a href="login.php"><img src="images/admin.jpg" alt="" width="30" height="30"></a>
        </form>
      </div>
    </div>   
    <hr noshade="noshade">
</head>

        </head>
<body>
<div class="wrapper">
		<h1>Shopping Cart</h1>
		
    <center>
<?php
session_start();
$total = 0;
if(isset($_POST['remove_key'])) {
  $remove_key = $_POST['remove_key'];
  unset($_SESSION['cart'][$remove_key]);
}
// Check if the cart is empty
if (empty($_SESSION['cart'])) {
  echo 'Your cart is empty.';
} 
else 
{
  // Output the table header
  echo '<table class="cart-table">';
  echo '<thead><tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th><th></th></tr></thead>';
  echo '<tbody>';

  foreach ($_SESSION['cart'] as $product_key => $product) {
    $subtotal = $product['price'] * $product['quantity'];
    $total += $subtotal;
  
    // Generate dropdown list of quantities
    $options = '';
    for ($i = 1; $i <= 10; $i++) {
      if ($i == $product['quantity']) {
        $selected = 'selected';
      } else {
        $selected = '';
      }
      $options .= '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
    }
  
    echo '<tr>
            <td>' . $product['name'] . '</td>
            <td>' . $product['price'] . '</td>
            <td>
              <div class="quantity">
                <select class="quantity-select" data-product-key="' . $product_key . '">' . $options . '</select>
              </div>
            </td>
            <td>₹' . $subtotal . '</td>
            <td>
              <form method="POST" action="">
                <input type="hidden" name="remove_key" value="' . $product_key . '"/>
                <button id="con-btn" class="con1" type="submit">Remove</button>
              </form>
            </td>
          </tr>';
  }
  


  // Output the total row
  echo '<tr class="total"><td>Total:</td><td></td><td></td><td>₹' . $total . '</td></tr>';
    echo '</tbody></table>';
    echo '<a href="payment_option.html"><button id="con-btn" class="con" type="submit">Confirm Order</button></a>';
}
?>

<script>
  let cart = <?php echo json_encode($_SESSION['cart']); ?>;
</script>

<script>

  // Function to update the total
function updateTotal() {
  let total = 0;
  let subtotalElements = document.querySelectorAll('tbody tr:not(:last-child) td:nth-child(4)');
  subtotalElements.forEach(function(subtotalElement) {
    let subtotal = parseInt(subtotalElement.innerText.slice(1));
    total += subtotal ;
  });
  console.log("total", total);
  document.querySelector('.total td:nth-child(4)').innerText = '₹' + total;
}
  
// Get all quantity dropdowns and add event listener to each
let quantitySelects = document.querySelectorAll('.quantity-select');
quantitySelects.forEach(function(quantitySelect) {
  quantitySelect.addEventListener('change', function() {
    // Get the selected quantity and product key
    let quantity = parseInt(quantitySelect.value);
    let productKey = quantitySelect.dataset.productKey;

    // Update the quantity in the cart object and update the subtotal and total
    let row = quantitySelect.parentNode.parentNode.parentNode;
    let price = parseInt(row.children[1].innerText);
    let subtotal = price * quantity;
    row.children[3].innerText = '₹' + subtotal;
    cart[productKey].quantity = quantity;

    updateTotal();
  });
});
</script>


</center>
</body>
</html>