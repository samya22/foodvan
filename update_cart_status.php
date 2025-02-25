<?php
$host = "localhost";  
$username = "root";  
$password = "abhi879687#";  
$database = "spicymonk";  

$conn = new mysqli($host, $username, $password, $database);  

if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}

$status = $_GET['status'];
$sql = "UPDATE cart_status SET status='$status' LIMIT 1";
$conn->query($sql);

$conn->close();
echo "Status Updated";
?>
