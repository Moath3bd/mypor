<?php
include 'config.php';

$user_id = 1;  
$new_username = "new_username";

$sql = "UPDATE users SET username='$new_username' WHERE id=$user_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
