<?php
include 'Connector.php'; // Adjust path if needed

$sql = "SELECT 
            m.marksID,
            s.student_id,
            s.name AS student_name,
            sb.subject_id,
            sb.subject_name,
            m.grade,
            m.scores
        FROM marks m
        JOIN students s ON m.studentID = s.student_id
        JOIN subjects sb ON m.subjectID = sb.subject_id";

$result = $conn->query($sql);
?>
