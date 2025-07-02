<?php
/**
 * Contact Form Processing
 * iHome Web - Interior Design Website
 */

require_once 'config.php';
require_once 'connection.php';

// Set headers
header('Content-Type: application/json');

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
$subject = isset($_POST['subject']) ? sanitizeInput($_POST['subject']) : '';
$message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';
$service = isset($_POST['service']) ? sanitizeInput($_POST['service']) : '';
$budget = isset($_POST['budget']) ? sanitizeInput($_POST['budget']) : '';

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email)) {
    $errors[] = 'Email is required';
} elseif (!isValidEmail($email)) {
    $errors[] = 'Please enter a valid email address';
}

if (empty($phone)) {
    $errors[] = 'Phone number is required';
} elseif (!preg_match('/^[0-9+\-\s()]{10,15}$/', $phone)) {
    $errors[] = 'Please enter a valid phone number';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

if (empty($subject)) {
    $subject = 'New Contact Form Submission - iHome Master';
}

// If there are validation errors
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Validation failed', 'errors' => $errors]);
    exit;
}

try {
    // Save to database
    $sql = "INSERT INTO contact_inquiries (name, email, phone, subject, message, service, budget, ip_address, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    
    $stmt = db_prepare($sql);
    $stmt->bind_param("ssssssss", $name, $email, $phone, $subject, $message, $service, $budget, getClientIP());
    
    if ($stmt->execute()) {
        $inquiry_id = db_last_id();
        
        // Send email notification
        $email_sent = sendContactEmail($name, $email, $phone, $subject, $message, $service, $budget, $inquiry_id);
        
        // Send auto-reply to customer
        $auto_reply_sent = sendAutoReply($name, $email);
        
        // Log the inquiry
        logError("New contact inquiry received - ID: $inquiry_id, Name: $name, Email: $email", 'INFO');
        
        echo json_encode([
            'success' => true, 
            'message' => 'Thank you for contacting us! We will get back to you within 24 hours.',
            'inquiry_id' => $inquiry_id
        ]);
        
    } else {
        throw new Exception("Failed to save inquiry to database");
    }
    
} catch (Exception $e) {
    logError("Contact form error: " . $e->getMessage(), 'ERROR');
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'An error occurred. Please try again later.']);
}

/**
 * Send contact form email to admin
 */
function sendContactEmail($name, $email, $phone, $subject, $message, $service, $budget, $inquiry_id) {
    $to = ADMIN_EMAIL;
    $subject = "New Contact Form Submission - Inquiry #$inquiry_id";
    
    $body = "
    <html>
    <head>
        <title>New Contact Form Submission</title>
    </head>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Inquiry ID:</strong> #$inquiry_id</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Service:</strong> $service</p>
        <p><strong>Budget:</strong> $budget</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
        <p><strong>Submitted:</strong> " . date('Y-m-d H:i:s') . "</p>
        <p><strong>IP Address:</strong> " . getClientIP() . "</p>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: iHome Master <noreply@ihomemasters.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    return mail($to, $subject, $body, $headers);
}

/**
 * Send auto-reply to customer
 */
function sendAutoReply($name, $email) {
    $subject = "Thank you for contacting iHome Master Interior Designers";
    
    $body = "
    <html>
    <head>
        <title>Thank you for contacting us</title>
    </head>
    <body>
        <h2>Dear $name,</h2>
        <p>Thank you for contacting iHome Master Interior Designers!</p>
        <p>We have received your inquiry and our team will review it carefully. You can expect a response from us within 24 hours.</p>
        <p>In the meantime, you can:</p>
        <ul>
            <li>Visit our <a href='" . SITE_URL . "/gallery.php'>portfolio</a> to see our latest work</li>
            <li>Use our <a href='" . SITE_URL . "/cost-calculator.php'>cost calculator</a> to estimate your project</li>
            <li>Check out our <a href='" . SITE_URL . "/services.php'>services</a> page</li>
        </ul>
        <p>If you have any urgent questions, please call us at +91-9876543210.</p>
        <p>Best regards,<br>Team iHome Master</p>
        <hr>
        <p><small>This is an automated response. Please do not reply to this email.</small></p>
    </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: iHome Master <noreply@ihomemasters.com>\r\n";
    
    return mail($email, $subject, $body, $headers);
}

?>
