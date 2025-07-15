<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher</title>
    <link rel="stylesheet" href="css/addStudent.css">
</head>
<body>
    <div class="container">
        <h2 class="header"><span class="icon">👥</span>TEACHER</h2>
        <div class="main">
            <!-- Left: Form -->
            <div class="form-section">
                <h3>New Teacher</h3>
                <form id="employeeForm" action="db/dbTeacher.php" method="POST">
                    <label>Teacher Name</label><br>
                    <input type="text" id="teacher-name" name="teacher-name"><br>

                    <label>Sex</label><br>
                    <select id="sex" name="sex">
                        <option>MALE</option>
                        <option>FEMALE</option>
                    </select><br>

                    <label>Telephone</label><br>
                    <input type="tel" id="telephone" name="telephone"><br>

                    <div class="form-buttons">
                        <button type="submit" class="save">SAVE</button>
                        <button type="button" class="update">UPDATE</button>
                        <button type="reset" class="clear">CLEAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/addStudent.js"></script>
</body>
</html>
