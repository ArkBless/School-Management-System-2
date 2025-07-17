<?php 
// Include DB connection
require_once 'db/connector.php';

// Fetch student records
$query = "SELECT firstname, lastname, gender, age FROM studentsdetails";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Management</title>
  <link rel="stylesheet" href="css/addStudent.css">
</head>
<body>
  <div class="container">
    <h2 class="header"><span class="icon">👥</span> STUDENTS</h2>

    <div class="main">
      <!-- LEFT: FORM -->
      <div class="form-section">
        <h3>New Student</h3>
        <form id="studentForm" action="db/dbStudent.php" method="POST">
          <label>First Name</label><br>
          <input type="text" id="first_name" name="first_name"><br>

          <label>Last Name</label><br>
          <input type="text" id="last_name" name="last_name"><br>

          <label>Sex</label><br>
          <select id="sex" name="sex">
            <option>MALE</option>
            <option>FEMALE</option>
          </select><br>

          <label>Age</label><br>
          <input type="number" id="age" name="age"><br>

          <div class="form-buttons">
            <form method="POST" action="count.php">
    <input type="text" name="name" required placeholder="Student Name">

            <button type="submit" class="save">SAVE</button>
            <button type="button" class="update">UPDATE</button>
            <button type="reset" class="clear">CLEAR</button>
            <button type="button" class="select">SELECT</button>
          </div>
        </form>
      </div>

      <!-- RIGHT: TABLE -->
      <div class="table-section">
        <div class="top-controls">
          <label><strong>📋 STUDENT LIST</strong></label>
          <div>
            <input type="text" placeholder="Search...">
            <button class="search">🔍</button>
          </div>
        </div>

        <!-- DYNAMIC TABLE -->
        <table>
          <thead>
            <tr>
              <th>Select</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Gender</th>
              <th>Age</th>
            </tr>
          </thead>
          <tbody>
            <?php if (mysqli_num_rows($result) > 0): ?>
              <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                  <!-- Checkbox with student data -->
                  <td>
                    <input type="checkbox" class="row-check"
                      data-first="<?= htmlspecialchars($row['firstname']); ?>"
                      data-last="<?= htmlspecialchars($row['lastname']); ?>"
                      data-gender="<?= htmlspecialchars($row['gender']); ?>"
                      data-age="<?= htmlspecialchars($row['age']); ?>"
                    >
                  </td>
                  <td><?= htmlspecialchars($row['firstname']); ?></td>
                  <td><?= htmlspecialchars($row['lastname']); ?></td>
                  <td><?= htmlspecialchars($row['gender']); ?></td>
                  <td><?= htmlspecialchars($row['age']); ?></td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" style="text-align:center;">No records found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
