<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "expense_tracker";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $stmt = $conn->prepare("INSERT INTO expenses (title, category, amount, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $title, $category, $amount, $date);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
header("Location: index.php");
?>