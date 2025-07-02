<?php
/**
 * Database Setup Script
 * This script helps set up the database and tables for iHome Web
 */

// Include configuration
require_once 'config.php';

echo "<h2>Database Setup for iHome Web</h2>";

// Step 1: Test connection without database
echo "<h3>Step 1: Testing MySQL Connection</h3>";
try {
    $test_conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
    if ($test_conn->connect_error) {
        echo "❌ MySQL connection failed: " . $test_conn->connect_error . "<br>";
        echo "Please check your MySQL server and credentials.<br>";
        exit;
    } else {
        echo "✅ MySQL connection successful!<br>";
    }
} catch (Exception $e) {
    echo "❌ MySQL connection error: " . $e->getMessage() . "<br>";
    exit;
}

// Step 2: Create database if it doesn't exist
echo "<h3>Step 2: Creating Database</h3>";
try {
    $sql = "CREATE DATABASE IF NOT EXISTS `" . DB_NAME . "` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
    if ($test_conn->query($sql)) {
        echo "✅ Database '" . DB_NAME . "' created or already exists.<br>";
    } else {
        echo "❌ Error creating database: " . $test_conn->error . "<br>";
    }
} catch (Exception $e) {
    echo "❌ Database creation error: " . $e->getMessage() . "<br>";
}

$test_conn->close();

// Step 3: Test connection with database
echo "<h3>Step 3: Testing Database Connection</h3>";
try {
    $db_conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($db_conn->connect_error) {
        echo "❌ Database connection failed: " . $db_conn->connect_error . "<br>";
        exit;
    } else {
        echo "✅ Database connection successful!<br>";
    }
} catch (Exception $e) {
    echo "❌ Database connection error: " . $e->getMessage() . "<br>";
    exit;
}

// Step 4: Check if tables exist
echo "<h3>Step 4: Checking Database Tables</h3>";
$tables = [];
$result = $db_conn->query("SHOW TABLES");
if ($result) {
    while ($row = $result->fetch_array()) {
        $tables[] = $row[0];
    }
    echo "Found " . count($tables) . " table(s) in database:<br>";
    foreach ($tables as $table) {
        echo "• " . $table . "<br>";
    }
} else {
    echo "❌ Error checking tables: " . $db_conn->error . "<br>";
}

// Step 5: Import SQL file if tables don't exist
if (empty($tables)) {
    echo "<h3>Step 5: Importing Database Structure</h3>";
    $sql_file = 'ihome.sql';
    if (file_exists($sql_file)) {
        echo "Found SQL file: " . $sql_file . "<br>";
        echo "Please import this file manually using phpMyAdmin or MySQL command line.<br>";
        echo "Or run: mysql -u " . DB_USER . " -p " . DB_NAME . " < " . $sql_file . "<br>";
    } else {
        echo "❌ SQL file not found: " . $sql_file . "<br>";
    }
} else {
    echo "<h3>Step 5: Database Already Set Up</h3>";
    echo "✅ Database tables already exist. Setup complete!<br>";
}

// Step 6: Test the connection class
echo "<h3>Step 6: Testing Connection Class</h3>";
try {
    require_once 'connection.php';
    if (testDatabaseConnection()) {
        echo "✅ Database connection class working properly!<br>";
    } else {
        echo "❌ Database connection class failed!<br>";
    }
} catch (Exception $e) {
    echo "❌ Connection class error: " . $e->getMessage() . "<br>";
}

$db_conn->close();

echo "<h3>✅ Database Setup Complete!</h3>";
echo "<p>Your database is now ready to use.</p>";
echo "<p><a href='test_db.php'>Test Database Connection</a></p>";
echo "<p><a href='index.php'>Go to Homepage</a></p>";

?> 