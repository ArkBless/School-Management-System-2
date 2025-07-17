<?php
// Connect DB
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    // Add student
    $stmt = $conn->prepare("INSERT INTO students (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->close();

    // Redirect back to dashboard to see updated count
    header("Location: dashboard.php");
    exit;
}
?>

