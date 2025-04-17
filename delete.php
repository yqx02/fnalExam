<?php
$conn = new mysqli("localhost", "root", "", "final");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delete_id = $_POST['delete_id'];

$sql = "DELETE FROM string_info WHERE string_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $delete_id);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: showAll.php");
exit();
