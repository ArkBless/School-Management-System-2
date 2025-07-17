<?php
include 'Connector.php'; // Adjust path if needed
$sql = "SELECT 
            m.marksID,
            s.studentID,
            CONCAT(s.firstname, ' ', s.lastname) AS student_name,
            sb.subject_id,
            sb.subject_name,
            m.grade,
            m.scores
        FROM marks m
       JOIN studentsdetails s ON m.studentID = s.studentID

        JOIN subjects sb ON m.subjectID = sb.subject_id";

$result = $conn->query($sql);

// Optional error handling
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>
