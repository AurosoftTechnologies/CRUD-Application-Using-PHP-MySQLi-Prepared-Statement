<?php
require_once 'include/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM stud WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        header("Location: stud_list.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
