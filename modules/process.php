<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reliant_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total_users FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_users = $row["total_users"];
} else {
    $total_users = 0;
}

$conn->close();

?>
