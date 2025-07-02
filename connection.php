<?php
/**
 * Database Connection Configuration
 * iHome Web - Interior Design Website
 */

// Include configuration
require_once 'config.php';

// Database Connection Class
class Database {
    private $connection;
    private static $instance = null;
    
    private function __construct() {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
            
            // Set charset to utf8mb4
            $this->connection->set_charset("utf8mb4");
            
        } catch (Exception $e) {
            if (DEBUG_MODE) {
                die("Database connection error: " . $e->getMessage());
            } else {
                die("Database connection error. Please try again later.");
            }
        }
    }
    
    // Singleton pattern
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    // Get connection
    public function getConnection() {
        return $this->connection;
    }
    
    // Execute query
    public function query($sql) {
        try {
            $result = $this->connection->query($sql);
            if (!$result) {
                throw new Exception("Query failed: " . $this->connection->error);
            }
            return $result;
        } catch (Exception $e) {
            if (DEBUG_MODE) {
                die("Query error: " . $e->getMessage());
            } else {
                die("Database error. Please try again later.");
            }
        }
    }
    
    // Prepare and execute statement
    public function prepare($sql) {
        try {
            $stmt = $this->connection->prepare($sql);
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->connection->error);
            }
            return $stmt;
        } catch (Exception $e) {
            if (DEBUG_MODE) {
                die("Prepare error: " . $e->getMessage());
            } else {
                die("Database error. Please try again later.");
            }
        }
    }
    
    // Escape string
    public function escape($string) {
        return $this->connection->real_escape_string($string);
    }
    
    // Get last insert ID
    public function getLastInsertId() {
        return $this->connection->insert_id;
    }
    
    // Get affected rows
    public function getAffectedRows() {
        return $this->connection->affected_rows;
    }
    
    // Close connection
    public function close() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}

// Global database instance
$db = Database::getInstance();
$conn = $db->getConnection();

// Helper functions
function db_query($sql) {
    global $db;
    return $db->query($sql);
}

function db_prepare($sql) {
    global $db;
    return $db->prepare($sql);
}

function db_escape($string) {
    global $db;
    return $db->escape($string);
}

function db_last_id() {
    global $db;
    return $db->getLastInsertId();
}

// Test connection function
function testDatabaseConnection() {
    global $db;
    try {
        $result = $db->query("SELECT 1");
        if ($result) {
            return true;
        }
    } catch (Exception $e) {
        return false;
    }
    return false;
}

// Auto-close connection on script end
register_shutdown_function(function() {
    global $db;
    $db->close();
});

?> 