<?php
// Connect to DB (update with your DB credentials)
$conn = new mysqli("localhost", "root", "", "studentperfomance");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data
$marksID = $_POST['marksID'];
$grade = $_POST['grade'];
$scores = $_POST['scores'];
$studentID = $_POST['studentID'];
$subjectID = $_POST['subjectID'];

// Insert into DB
$sql = "INSERT INTO marks (marksID, grade, scores, studentsdetails_studentID, subjectID)
        VALUES ('$marksID', '$grade', '$scores', '$studentID', '$subjectID')";

if ($conn->query($sql) === TRUE) {
    echo "Marks record added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
