<?php
include 'config.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Process each row of data
        echo "ID: " . $row["id"]. " - Username: " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
