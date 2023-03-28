<?php

// Connect to the database
$servername = "localhost";
$username = "user7";
$password = "Paradigm18";
$dbname = "psfinal";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query the database for the products
$sql = "SELECT id, name, description, price, image_url FROM products";
$result = $conn->query($sql);

// Display the products on the frontend
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='product-items'>
            <img src='" . $row["image_url"] . "'>
            <h2>" . $row["name"] . "</h2>
            <p>" . $row["description"] . "</p>
            <p class='price'>$" . $row["price"] . "</p>
            <button>Add to Cart</button>
          </div>";
  }
} else {
  echo "No products found.";
}

// Close the database connection
$conn->close();

?>