<?php
/**
 * Application Configuration
 * iHome Web - Interior Design Website
 */

// ========================================
// DATABASE CONFIGURATION
// ========================================
define('DB_HOST', 'localhost');        // Database host
define('DB_USER', 'root');             // Database username
define('DB_PASS', '');                 // Database password
define('DB_NAME', 'ihome');            // Database name

// ========================================
// APPLICATION SETTINGS
// ========================================
define('SITE_NAME', 'iHome Masters');
define('SITE_URL', 'http://192.168.1.11:8000');
define('ADMIN_EMAIL', 'admin@ihomemasters.com');

// ========================================
// DEBUG & ERROR SETTINGS
// ========================================
define('DEBUG_MODE', true);            // Set to false in production
define('ERROR_REPORTING', true);       // Set to false in production
define('LOG_ERRORS', true);            // Log errors to file

// ========================================
// SECURITY SETTINGS
// ========================================
define('SESSION_TIMEOUT', 3600);       // Session timeout in seconds (1 hour)
define('MAX_LOGIN_ATTEMPTS', 5);       // Maximum login attempts
define('PASSWORD_MIN_LENGTH', 8);      // Minimum password length

// ========================================
// FILE UPLOAD SETTINGS
// ========================================
define('MAX_FILE_SIZE', 5242880);      // Maximum file size (5MB)
define('ALLOWED_IMAGE_TYPES', ['jpg', 'jpeg', 'png', 'gif', 'webp']);
define('UPLOAD_PATH', 'uploads/');     // Upload directory

// ========================================
// EMAIL SETTINGS
// ========================================
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
define('SMTP_SECURE', 'tls');

// ========================================
// MOBILE SETTINGS
// ========================================
define('MOBILE_OPTIMIZED', true);
define('TOUCH_TARGET_SIZE', 44);       // Minimum touch target size in pixels

// ========================================
// CACHE SETTINGS
// ========================================
define('CACHE_ENABLED', false);
define('CACHE_DURATION', 3600);        // Cache duration in seconds

// ========================================
// API SETTINGS
// ========================================
define('API_ENABLED', false);
define('API_KEY', 'your-api-key-here');

// ========================================
// ENVIRONMENT SETTINGS
// ========================================
define('ENVIRONMENT', 'development');  // development, staging, production

// ========================================
// TIMEZONE SETTINGS
// ========================================
date_default_timezone_set('Asia/Kolkata');

// ========================================
// ERROR HANDLING
// ========================================
if (ERROR_REPORTING) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// ========================================
// SESSION SETTINGS
// ========================================
ini_set('session.gc_maxlifetime', SESSION_TIMEOUT);
ini_set('session.cookie_lifetime', SESSION_TIMEOUT);

// ========================================
// HELPER FUNCTIONS
// ========================================

/**
 * Get configuration value
 */
function getConfig($key, $default = null) {
    return defined($key) ? constant($key) : $default;
}

/**
 * Check if running in development mode
 */
function isDevelopment() {
    return ENVIRONMENT === 'development';
}

/**
 * Check if running in production mode
 */
function isProduction() {
    return ENVIRONMENT === 'production';
}

/**
 * Get current environment
 */
function getEnvironment() {
    return ENVIRONMENT;
}

/**
 * Log error message
 */
function logError($message, $type = 'ERROR') {
    if (LOG_ERRORS) {
        $log_file = 'logs/error.log';
        $timestamp = date('Y-m-d H:i:s');
        $log_message = "[$timestamp] [$type] $message" . PHP_EOL;
        
        // Create logs directory if it doesn't exist
        if (!is_dir('logs')) {
            mkdir('logs', 0755, true);
        }
        
        file_put_contents($log_file, $log_message, FILE_APPEND | LOCK_EX);
    }
}

/**
 * Validate email address
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Sanitize input
 */
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

/**
 * Generate random string
 */
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

/**
 * Format file size
 */
function formatFileSize($bytes) {
    $units = ['B', 'KB', 'MB', 'GB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= pow(1024, $pow);
    return round($bytes, 2) . ' ' . $units[$pow];
}

/**
 * Check if request is from mobile
 */
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

/**
 * Get client IP address
 */
function getClientIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?> 