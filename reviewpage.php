<html>
<head>
  <title>review</title>
</head>
<body>
<h3>Write a Review</h3>
  
    <form action="./product.php" method="POST">
    <input type="text" id="pname" name="pname" required>
      <label for="pname">Product Name:</label>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="rating">Rating:</label>
      <select id="rating" name="rating" required>
        <option value="">Select Rating</option>
        <option value="5">5 Stars</option>
        <option value="4">4 Stars</option>
        <option value="3">3 Stars</option>
        <option value="2">2 Stars</option>
        <option value="1">1 Star</option>
        </select>
      <label for="reviews">Review:</label>
      <textarea id="reviews" name="reviews" required></textarea>
      
      <button type="submit">Submit Review</button>
    </form>
</body>
</html>