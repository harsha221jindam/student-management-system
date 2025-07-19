<?php
include 'config.php';
$id = $_POST['id'] ?? '';
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

if ($id) {
  $stmt = $conn->prepare("UPDATE students SET name=?, email=?, course=? WHERE id=?");
  $stmt->bind_param("sssi", $name, $email, $course, $id);
} else {
  $stmt = $conn->prepare("INSERT INTO students (name, email, course) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $course);
}
$stmt->execute();
$stmt->close();
$conn->close();
header("Location: index.php");