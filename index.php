<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Management</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="container">
    <h2>Student Management System</h2>
    <form method="POST" action="save.php" onsubmit="return validateForm()">
      <input type="hidden" name="id" id="studentId"/>
      <input type="text" name="name" id="name" placeholder="Name" required/>
      <input type="email" name="email" id="email" placeholder="Email" required/>
      <input type="text" name="course" id="course" placeholder="Course" required/>
      <button type="submit">Save</button>
    </form>
    <table>
      <thead>
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Actions</th></tr>
      </thead>
      <tbody>
        <?php
          $result = $conn->query("SELECT * FROM students");
          while ($row = $result->fetch_assoc()):
        ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['course'] ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete student?')">Delete</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <script src="script.js"></script>
</body>
</html>