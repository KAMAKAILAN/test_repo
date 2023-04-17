<?php
// Include the config file to make the database connection available
require('config.php');

// Get the form data from the POST request

$product_name = $_POST["product_name"];
$price = $_POST["price"];
$brand = $_POST["brand"];
$supplier = $_POST["supplier"];
$category = $_POST["category"];
$manufacturer = $_POST["manufacturer"];
$description = $_POST["description"];
$quantity = $_POST["quantity"];
$weight = $_POST["weight"];
$arrival = $_POST["arrival"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Prepare the SQL statement
$sql = "INSERT INTO products (product_name, price, brand, supplier, category, manufacturer, description, quantity, weight, arrival) VALUES ('$product_name', '$price', '$brand', '$supplier', '$category', '$manufacturer', '$description', $quantity, $weight, '$arrival')";
// Execute the SQL statement and check for errors
if (mysqli_query($conn, $sql)) {
    // Redirect to index.php
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>