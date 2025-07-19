<?php include 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$data = $result->fetch_assoc();
?>
<script>
  window.onload = function() {
    document.getElementById('studentId').value = "<?= $data['id'] ?>";
    document.getElementById('name').value = "<?= $data['name'] ?>";
    document.getElementById('email').value = "<?= $data['email'] ?>";
    document.getElementById('course').value = "<?= $data['course'] ?>";
  }
</script>
<?php include 'index.php'; ?>