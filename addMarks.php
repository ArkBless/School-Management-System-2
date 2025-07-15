<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marks</title>
    <link rel="stylesheet" href="css/addMarks.css">
</head>
<body>
    <div class="container">
        <h2 class="header"><span class="icon">📊</span>MARKS ENTRY</h2>
        <div class="main">
            <!-- Left: Form -->
            <div class="form-section">
                <h3>New Marks Record</h3>
                <form id="marksForm" action="db/dbMarks.php" method="POST">
                    <label>Mark ID</label><br>
                    <input type="number" id="mark-id" name="marksID"><br>

                    <label>Grade</label><br>
                    <input type="text" id="grade" name="grade" maxlength="2"><br>

                    <label>Scores</label><br>
                    <input type="number" id="scores" name="scores"><br>

                    <label>Student ID</label><br>
                    <input type="number" id="student-id" name="studentID"><br>

                    <label>Subject ID</label><br>
                    <input type="number" id="subject-id" name="subjectID"><br>

                    <div class="form-buttons">
                        <button type="submit" class="save">SAVE</button>
                        <button type="button" class="update">UPDATE</button>
                        <button type="reset" class="clear">CLEAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="viewMarks.php" style="margin-left:20px;">🔍 View All Marks</a>


    <script src="js/addMarks.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/adminDashboard.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const addMarksLink = document.getElementById("add-marks-link");
            const mainContent = document.getElementById("main-content");

            if (addMarksLink) {
                addMarksLink.addEventListener("click", () => {
                    fetch("addMarks.php")
                        .then(response => response.text())
                        .then(html => {
                            mainContent.innerHTML = html;
                        })
                        .catch(error => {
                            mainContent.innerHTML = "<p>Error loading Add Marks page.</p>";
                            console.error("Error loading addMarks.html:", error);
                        });
                });
            }
        });
    </script>
</body>
</html>
