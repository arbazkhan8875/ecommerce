<?php
session_start();
include('../components/dbconnection.php'); // Ensure you include the database connection file

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // echo $id;die;
        // If confirmed, delete the category
        $sql_delete = "UPDATE categories SET is_deleted = 1 WHERE id = $id";
        // ;

        if ($conn->query($sql_delete)) {
            $message = "Category Deleted Succfully!";
            $message_type = "success"; // सफलतापूर्वक का प्रकार
           
        } else {
            $message = "Error deleting category: " . $conn->error;
            $message_type = "error"; 
        }
    
} else {
    $message = "Invalid request!";
    $message_type = "error"; 
}
 header('Location: index.php?message=' . urlencode($message) . '&type='.$message_type);
            exit();
$conn->close();
?>