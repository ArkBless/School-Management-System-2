<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// database connection
require_once 'db/connector.php';

// get student count
$studentQuery = $conn->query("SELECT COUNT(*) AS count FROM studentsdetails");
$totalStudents = $studentQuery->fetch_assoc()['count'];

// get employee count (if needed)
try {
    $employeeQuery = $conn->query("SELECT COUNT(*) AS count FROM teacherresponsible");
    $totalEmployees = $employeeQuery->fetch_assoc()['count'];
} catch (Exception $e) {
    echo "Error counting teacherresponsible: " . $e->getMessage();
}

?>


<div class="dashboard-container">
    <div class="dashboard-header">
        <div class="dashboard-cards">
            <div class="dashboard-card">
                <div class="card-icon card-students">🎓</div>
                <div class="card-info">
                    <div class="card-value" id="total-students"><?= $totalStudents ?></div>
                    <div class="card-label">Total Students</div>
                </div>
            </div>
           <div class="dashboard-card">
                <div class="card-icon card-employees">👨‍💼</div>
                <div class="card-info">
                    <div class="card-value" id="total-employees"><?= $totalEmployees ?></div>
                    <div class="card-label">Total Employees</div>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="card-icon card-subjects">📚</div>
                <div class="card-info">
                    <div class="card-value" id="total-subjects">4</div>
                    <div class="card-label">Total Subjects</div>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="card-icon card-holidays">📅</div>
                <div class="card-info">
                    <div class="card-value" id="total-holidays">7</div>
                    <div class="card-label">Total Holidays</div>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-actions">
       <a href="addStudent.php" class="dashboard-action-btn">➕ Add Student</a>
    <a href="addTeacher.php" class="dashboard-action-btn">👨‍💼 Add Employee</a>
        <button class="dashboard-action-btn" id="plan-calendar-btn">📅 Plan Academic Calendar</button>
        <button class="dashboard-action-btn" id="send-announcement-btn">✉️ Send Announcement</button>
    </div>
    <div class="dashboard-charts">
        <div class="dashboard-chart-card">
            <div class="chart-title">Absentees (Current Month)</div>
            <canvas id="absenteesChart" width="220" height="220"></canvas>
        </div>
    </div>
</div>
