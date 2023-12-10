<?php
include 'config.php';
$result = $conn->query("SELECT * FROM projects");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='project'>";
        echo "<h2>" . $row['project_title'] . "</h2>";
        echo "<p>" . $row['project_description'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No projects found.";
}

$conn->close();
?>