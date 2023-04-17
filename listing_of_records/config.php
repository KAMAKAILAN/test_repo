<?php
$servername = "local.list";
$username = "root";
$password = "";
$dbname = "listing";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Close database connection
mysqli_close($conn);
?>