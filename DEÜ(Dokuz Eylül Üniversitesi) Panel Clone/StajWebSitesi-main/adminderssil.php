<?php
include 'config.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if it's a POST request and if the 'ders_id' key is present in the JSON data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the JSON data from the request body
    $requestBody = file_get_contents('php://input');
    $data = json_decode($requestBody, true);

    // Check if the 'ders_id' key exists in the JSON data
    if (isset($data['ders_id'])) {
        // Get the ders_id value from the JSON data
        $dersId = $data['ders_id'];

        // Prepare the DELETE query using a prepared statement
        $deleteQuery = "DELETE FROM dersler WHERE ders_id = ?";
        $stmt = $conn->prepare($deleteQuery);

        // Bind the ders_id value to the prepared statement
        $stmt->bind_param("i", $dersId);

        // Execute the query and handle the result
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'error';
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}

// Close the database connection
$conn->close();
?>