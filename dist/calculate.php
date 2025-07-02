<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "ihome"; // Change if needed

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from AJAX request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $measurementType = mysqli_real_escape_string($conn, $_POST['measurementType']);
    $measurementValue = floatval($_POST['measurementValue']);
    $pageLink = mysqli_real_escape_string($conn, $_POST['pageLink']);
    $pageName = mysqli_real_escape_string($conn, $_POST['pageName']);

    // Validate inputs
    if (empty($username) || empty($email) || empty($category) || empty($measurementType) || $measurementValue <= 0) {
        echo "Error: All fields are required!";
        exit;
    }

    // Approximate budget calculation (dummy logic)
    $result = $measurementValue * 1.5; // Adjust this formula as needed

    // Prepare the SQL query using a prepared statement
    $sql = "INSERT INTO budget_calculations (username, email, category, measurement_type, measurement_value, page_link, page_name) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Bind parameters (s = string, d = double)
        $stmt->bind_param("ssssdss", $username, $email, $category, $measurementType, $measurementValue, $pageLink, $pageName);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Approx Your Budget: " . number_format($result, 2) . " sq meters.";
        } else {
            echo "Execution Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error in SQL Preparation: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
