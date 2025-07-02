<?php
/**
 * Database Connection Test
 * This file tests the database connection and shows basic functionality
 */

// Include the database connection
require_once 'connection.php';

echo "<h2>Database Connection Test</h2>";

// Test 1: Basic Connection
echo "<h3>1. Testing Basic Connection</h3>";
if (testDatabaseConnection()) {
    echo "✅ Database connection successful!<br>";
} else {
    echo "❌ Database connection failed!<br>";
}

// Test 2: Test a simple query
echo "<h3>2. Testing Simple Query</h3>";
try {
    $result = db_query("SELECT COUNT(*) as total FROM about");
    if ($result) {
        $row = $result->fetch_assoc();
        echo "✅ Query successful! Found " . $row['total'] . " records in 'about' table<br>";
    } else {
        echo "❌ Query failed!<br>";
    }
} catch (Exception $e) {
    echo "❌ Query error: " . $e->getMessage() . "<br>";
}

// Test 3: Test prepared statement
echo "<h3>3. Testing Prepared Statement</h3>";
try {
    $stmt = db_prepare("SELECT * FROM about WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $id = 1;
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "✅ Prepared statement successful! Found " . $result->num_rows . " record(s)<br>";
        } else {
            echo "⚠️ Prepared statement worked but no records found<br>";
        }
        $stmt->close();
    } else {
        echo "❌ Prepared statement failed!<br>";
    }
} catch (Exception $e) {
    echo "❌ Prepared statement error: " . $e->getMessage() . "<br>";
}

// Test 4: Show database info
echo "<h3>4. Database Information</h3>";
echo "Database Host: " . DB_HOST . "<br>";
echo "Database Name: " . DB_NAME . "<br>";
echo "Database User: " . DB_USER . "<br>";
echo "Debug Mode: " . (DEBUG_MODE ? 'Enabled' : 'Disabled') . "<br>";

// Test 5: Show available tables
echo "<h3>5. Available Tables</h3>";
try {
    $result = db_query("SHOW TABLES");
    if ($result) {
        echo "Tables in database:<br>";
        while ($row = $result->fetch_array()) {
            echo "• " . $row[0] . "<br>";
        }
    }
} catch (Exception $e) {
    echo "❌ Error getting tables: " . $e->getMessage() . "<br>";
}

// Test 6: Test escape function
echo "<h3>6. Testing Escape Function</h3>";
$test_string = "Test string with 'quotes' and \"double quotes\"";
$escaped = db_escape($test_string);
echo "Original: " . $test_string . "<br>";
echo "Escaped: " . $escaped . "<br>";

echo "<h3>✅ Database Test Complete!</h3>";
echo "<p>If all tests passed, your database connection is working properly.</p>";
echo "<p><a href='index.php'>← Back to Homepage</a></p>";

?> 