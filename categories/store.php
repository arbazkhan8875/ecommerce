<?php 
include '../components/dbconnection.php';
$name = $_POST["name"];
// SQL क्वेरी
$sql = "INSERT INTO categories (name)
        VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    $message = "New category created successfully";
    $message_type = "success"; // सफलतापूर्वक का प्रकार
} else {
    $message = "Error: " . $sql . "<br>" . $conn->error;
    $message_type = "error"; // त्रुटि का प्रकार
}

header('Location: http://localhost/phpclass/categories/index.php?message=' . ($message) . '&type=' . urlencode($message_type));
exit();