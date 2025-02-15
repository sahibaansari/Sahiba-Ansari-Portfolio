<?php
include 'db_connect.php';

$sql = "SELECT * FROM messages ORDER BY id DESC";
$result = $conn->query($sql);

echo "<h2>Messages Received</h2>";
echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Message</th></tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No messages found.</td></tr>";
}
echo "</table>";

$conn->close();
?>
