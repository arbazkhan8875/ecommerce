<?php
session_start();
include('../components/dbconnection.php'); // Include your database connection file

if (isset($_SESSION['username'])) {
    if (isset($_POST['id']) && isset($_POST['status'])) {
        $id = intval($_POST['id']);
        $status = intval($_POST['status']);

        // Update the status in the database
        $sql = "UPDATE categories SET is_active = $status WHERE id = $id";

        if ($conn->query($sql)) {
            $response = ['success' => true, 'message' => 'Status updated successfully.'];
       
        } else {
            $response = ['success' => false, 'message' => 'Failed to update status.'];
        }
        header('Content-Type: application/json');

        echo json_encode($response);
        exit();
       
    } else {
        $response = ['success' => false, 'message' => 'Invalid request.'];
        header('Content-Type: application/json');
        echo json_encode($response);
        exit(); 
    }
} else {
    header('Content-Type: application/json');
    $response = ['success' => false, 'message' => 'Not logged in.'];
    echo json_encode($response);
    exit();
   
}

$conn->close();
?>
