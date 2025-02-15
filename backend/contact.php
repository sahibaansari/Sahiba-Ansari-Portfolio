<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO messages (name, email, message,subject) VALUES ('$name', '$email', '$message','$subject')";

    if ($conn->query($sql) === TRUE) {
        echo "success"; // Response for AJAX
    } else {
        echo "error: " . $conn->error;
    }

    $conn->close();
}
?>
