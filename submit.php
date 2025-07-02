
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $layout = $_POST['layout'];
    
    $conn = new mysqli('localhost', 'root', ' ', 'kitchen_db');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("INSERT INTO kitchen_layouts (layout) VALUES (?)");
    $stmt->bind_param("s", $layout);
    $stmt->execute();
    
    echo "Layout saved successfully!";
    $stmt->close();
    $conn->close();
}
?>