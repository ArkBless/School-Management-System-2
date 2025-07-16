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

        <!-- Search input -->
        <input type="text" id="searchInput" placeholder="🔍 Search by student name..." class="search-box">

        <div class="main">
            <div class="form-section">
                <h3>All Marks</h3>
                <div class="table-responsive">
                    <table border="1">
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
                            <?php if ($result && $result->num_rows > 0): ?>
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
    </div>

    <a href="addMarks.php" class="back-link">➕ Back to Add Marks</a>

    <!-- Search Script -->
    <script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            const nameCell = row.cells[2]?.textContent.toLowerCase(); // Student Name
            row.style.display = nameCell.includes(searchTerm) ? "" : "none";
        });
    });
    </script>
</body>
</html>
