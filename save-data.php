<?php
$servername = "localhost"; // Change if necessary
$username = "root"; // Change to your DB username
$password = ""; // Change to your DB password
$dbname = "ihomemaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Prepare SQL statement
$sql = "INSERT INTO contact_form (fullname, email, phone, message) 
        VALUES ('$fullname', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Record saved successfully. Redirecting to home page...";
    
    // Redirect to the homepage after 3 seconds
    echo "<script>
            setTimeout(function(){
                window.location.href = 'index.php'; // Change this if your homepage URL is different
            }, 2000);
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
