<?php

session_start();

// Database connection
$host = "localhost"; 
$username = "root";
$password = "abhi879687#";
$database = "spicymonk"; 

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT * FROM cart where email='ajinkya@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "".$row['title']."--";
        echo "".$row['quantity']."--";

        $title=$row['title'];
        $qty=$row['quantity'];
        echo $title."---";
        echo $qty."----";

        $productStmt = $conn->prepare("SELECT image_path, description, price FROM products WHERE title = ?");
    $productStmt->bind_param("s", $title);
    $productStmt->execute();
    $result = $productStmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "<br><br>".$row['image_path']."--";
    }
    }


} else {
    echo "<p>No categories available.</p>";
}

?>