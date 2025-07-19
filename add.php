<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
mysqli_query($conn, "INSERT INTO students (name, email) VALUES ('$name', '$email')");
header("Location: index.php");
?>
