<?php
session_start();
require_once('config.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <p><strong>Name:</strong> <?php echo $row['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
