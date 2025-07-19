<?php
include 'config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM students WHERE id=$id");
$conn->close();
header("Location: index.php");