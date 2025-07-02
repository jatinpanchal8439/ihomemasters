<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "ihome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST request is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data and sanitize
    $estimate_name = trim($_POST['estimate_name']);
    $estimate_ph_number = trim($_POST['estimate_ph_number']);
    $estimate_email = trim($_POST['estimate_email']);

    // Validate inputs
    if (empty($estimate_name) || empty($estimate_ph_number) || empty($estimate_email)) {
        die("Error: All fields are required!");
    }

    if (!filter_var($estimate_email, FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email format!");
    }

    if (!preg_match("/^[0-9]{10,15}$/", $estimate_ph_number)) {
        die("Error: Invalid phone number!");
    }

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO kitchencontact (estimate_name, estimate_ph_number, estimate_email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $estimate_name, $estimate_ph_number, $estimate_email);

    // Execute query
    if ($stmt->execute()) {
        echo "<script> alert('Thank you for your message');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>





