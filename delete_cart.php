<?php
session_start();
// Database
$host = "localhost"; 
$username = "root";
$password = "abhi879687#";
$database = "spicymonk"; 

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} // Replace with your database connection file


if (!isset($_POST['id'])) {
    echo json_encode(['success' => false]);
    exit();
}

$id = intval($_POST['id']);
$useremail = $_SESSION['useremail'];

$sql = "DELETE FROM cart WHERE id = ? AND email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $id, $useremail);
$stmt->execute();

echo json_encode(['success' => true]);
?>
