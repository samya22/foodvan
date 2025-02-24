<?php
session_start();

$host = "localhost";
$username = "root";
$password = "abhi879687#";
$database = "spicymonk";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['useremail'])) {
    die("Please log in to view notifications.");
}

$useremail = $_SESSION['useremail'];
$sql = "SELECT id, message FROM usernotification WHERE email = ? ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $useremail);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <style>
        body{
            background-image: url('assets/images/faq-bg.png');
    background-size: cover;
    background-position: center;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h2 class="mb-4">Notifications</h2>
        <?php if ($result->num_rows > 0): ?>
            <div class="row">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-12 mb-3">
                        <div class="card shadow rounded-4">
                            <div class="card-body">
                                <p class="mb-0"><?php echo htmlspecialchars($row['message']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <p class="text-center text-muted">No new notifications.</p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$stmt->close();
$conn->close();
?>
