<?php include 'db/fetchMarks.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewMarks.css">
</head>
<body>
    <div class="container">
        <h2 class="header"><span class="icon">📊</span>MARKS RECORD</h2>
        <div class="main">
            <div class="form-section">
                <h3>All Marks</h3>
                <table border="1" style="width:100%; border-collapse: collapse; margin-top: 15px;">
                    <thead>
                        <tr>
                            <th>Mark ID</th>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Subject ID</th>
                            <th>Subject Name</th>
                            <th>Grade</th>
                            <th>Scores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= htmlspecialchars($row['marksID']) ?></td>
                                    <td><?= htmlspecialchars($row['student_id']) ?></td>
                                    <td><?= htmlspecialchars($row['student_name']) ?></td>
                                    <td><?= htmlspecialchars($row['subject_id']) ?></td>
                                    <td><?= htmlspecialchars($row['subject_name']) ?></td>
                                    <td><?= htmlspecialchars($row['grade']) ?></td>
                                    <td><?= htmlspecialchars($row['scores']) ?></td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr><td colspan="7" style="text-align:center;">No marks found.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="addMarks.php" style="margin-left:20px;">➕ Back to Add Marks</a>

    <script src="js/addMarks.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/adminDashboard.js"></script>

    <script>
document.addEventListener("DOMContentLoaded", () => {
    const mainContent = document.getElementById("main-content");

    const viewMarksLink = document.getElementById("view-marks-link");
    if (viewMarksLink) {
        viewMarksLink.addEventListener("click", () => {
            fetch("viewMarks.php")
                .then(res => res.text())
                .then(html => mainContent.innerHTML = html)
                .catch(() => mainContent.innerHTML = "<p>Error loading View Marks page.</p>");
        });
    }
});
</script>

</body>
</html>
