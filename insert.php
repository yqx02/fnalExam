<?php
$conn = new mysqli("localhost", "root", "", "final");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = $_POST['message'];

$sql = "INSERT INTO string_info (message) VALUES (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $message);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: index.php");
exit();
