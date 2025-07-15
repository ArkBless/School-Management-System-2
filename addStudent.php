<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
    <link rel="stylesheet" href="css/addStudent.css">
</head>
<body>
    <div class="container">
        <h2 class="header"><span class="icon">👥</span>STUDENT</h2>
        <div class="main">
            <!-- Left: Form -->
            <div class="form-section">
                <h3>New Student</h3>
                <form id="employeeForm" action="db/dbStudent.php" method="POST">
                    <label>First Names</label><br>
                    <input type="text" id="first-name" name="first_name"><br>

                    <label>Last Name</label><br>
                    <input type="text" id="last-name" name="last_name"><br>

                    <label>Sex</label><br>
                    <select id="sex" name="sex">
                        <option>MALE</option>
                        <option>FEMALE</option>
                    </select><br>

                    <label>Age</label><br>
                    <input type="number" id="age-id" name="age"><br>

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
