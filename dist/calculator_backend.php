<?php
/**
 * Cost Calculator Backend
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
$service_type = isset($_POST['service_type']) ? sanitizeInput($_POST['service_type']) : '';
$area_sqft = isset($_POST['area_sqft']) ? floatval($_POST['area_sqft']) : 0;
$selected_options = isset($_POST['selected_options']) ? $_POST['selected_options'] : [];
$additional_requirements = isset($_POST['additional_requirements']) ? sanitizeInput($_POST['additional_requirements']) : '';

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

if (empty($service_type)) {
    $errors[] = 'Service type is required';
}

if ($area_sqft <= 0) {
    $errors[] = 'Area must be greater than 0';
}

// If there are validation errors
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Validation failed', 'errors' => $errors]);
    exit;
}

// Calculate estimated cost based on service type and area
$estimated_cost = calculateCost($service_type, $area_sqft, $selected_options);

try {
    // Save to database
    $sql = "INSERT INTO calculator_quotes (name, email, phone, service_type, area_sqft, selected_options, estimated_cost, additional_requirements, ip_address, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    
    $selected_options_json = json_encode($selected_options);
    
    $stmt = db_prepare($sql);
    $stmt->bind_param("ssssdsss", $name, $email, $phone, $service_type, $area_sqft, $selected_options_json, $estimated_cost, $additional_requirements, getClientIP());
    
    if ($stmt->execute()) {
        $quote_id = db_last_id();
        
        // Send email notification
        $email_sent = sendCalculatorEmail($name, $email, $phone, $service_type, $area_sqft, $selected_options, $estimated_cost, $additional_requirements, $quote_id);
        
        // Send auto-reply to customer
        $auto_reply_sent = sendCalculatorAutoReply($name, $email, $service_type, $estimated_cost, $quote_id);
        
        // Log the quote
        logError("New calculator quote received - ID: $quote_id, Name: $name, Service: $service_type, Cost: $estimated_cost", 'INFO');
        
        echo json_encode([
            'success' => true, 
            'message' => 'Your quote has been generated successfully!',
            'quote_id' => $quote_id,
            'estimated_cost' => $estimated_cost,
            'breakdown' => getCostBreakdown($service_type, $area_sqft, $selected_options)
        ]);
        
    } else {
        throw new Exception("Failed to save quote to database");
    }
    
} catch (Exception $e) {
    logError("Calculator error: " . $e->getMessage(), 'ERROR');
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'An error occurred. Please try again later.']);
}

/**
 * Calculate cost based on service type and area
 */
function calculateCost($service_type, $area_sqft, $selected_options) {
    $base_rates = [
        'modular_kitchen' => 2500, // per sqft
        'bedroom_interior' => 1500,
        'living_room' => 2000,
        'bathroom' => 3000,
        'office_interior' => 1800,
        'restaurant' => 2200,
        'cafe' => 2000,
        'complete_home' => 1800
    ];
    
    $base_rate = isset($base_rates[$service_type]) ? $base_rates[$service_type] : 2000;
    $base_cost = $area_sqft * $base_rate;
    
    // Add additional costs for selected options
    $additional_cost = 0;
    
    if (is_array($selected_options)) {
        foreach ($selected_options as $option) {
            switch ($option) {
                case 'premium_materials':
                    $additional_cost += $base_cost * 0.3; // 30% premium
                    break;
                case 'smart_home':
                    $additional_cost += $base_cost * 0.25; // 25% premium
                    break;
                case 'custom_furniture':
                    $additional_cost += $base_cost * 0.2; // 20% premium
                    break;
                case 'lighting_design':
                    $additional_cost += $base_cost * 0.15; // 15% premium
                    break;
                case 'acoustics':
                    $additional_cost += $base_cost * 0.1; // 10% premium
                    break;
            }
        }
    }
    
    return $base_cost + $additional_cost;
}

/**
 * Get detailed cost breakdown
 */
function getCostBreakdown($service_type, $area_sqft, $selected_options) {
    $base_rates = [
        'modular_kitchen' => 2500,
        'bedroom_interior' => 1500,
        'living_room' => 2000,
        'bathroom' => 3000,
        'office_interior' => 1800,
        'restaurant' => 2200,
        'cafe' => 2000,
        'complete_home' => 1800
    ];
    
    $base_rate = isset($base_rates[$service_type]) ? $base_rates[$service_type] : 2000;
    $base_cost = $area_sqft * $base_rate;
    
    $breakdown = [
        'base_cost' => [
            'description' => 'Base ' . str_replace('_', ' ', $service_type) . ' design',
            'amount' => $base_cost,
            'per_sqft' => $base_rate
        ],
        'additional_options' => []
    ];
    
    $additional_cost = 0;
    
    if (is_array($selected_options)) {
        foreach ($selected_options as $option) {
            $option_cost = 0;
            $description = '';
            
            switch ($option) {
                case 'premium_materials':
                    $option_cost = $base_cost * 0.3;
                    $description = 'Premium materials upgrade';
                    break;
                case 'smart_home':
                    $option_cost = $base_cost * 0.25;
                    $description = 'Smart home integration';
                    break;
                case 'custom_furniture':
                    $option_cost = $base_cost * 0.2;
                    $description = 'Custom furniture design';
                    break;
                case 'lighting_design':
                    $option_cost = $base_cost * 0.15;
                    $description = 'Professional lighting design';
                    break;
                case 'acoustics':
                    $option_cost = $base_cost * 0.1;
                    $description = 'Acoustic treatment';
                    break;
            }
            
            if ($option_cost > 0) {
                $breakdown['additional_options'][] = [
                    'description' => $description,
                    'amount' => $option_cost
                ];
                $additional_cost += $option_cost;
            }
        }
    }
    
    $breakdown['total_cost'] = $base_cost + $additional_cost;
    $breakdown['area_sqft'] = $area_sqft;
    
    return $breakdown;
}

/**
 * Send calculator quote email to admin
 */
function sendCalculatorEmail($name, $email, $phone, $service_type, $area_sqft, $selected_options, $estimated_cost, $additional_requirements, $quote_id) {
    $to = ADMIN_EMAIL;
    $subject = "New Cost Calculator Quote - Quote #$quote_id";
    
    $options_text = '';
    if (is_array($selected_options) && !empty($selected_options)) {
        $options_text = implode(', ', $selected_options);
    }
    
    $body = "
    <html>
    <head>
        <title>New Cost Calculator Quote</title>
    </head>
    <body>
        <h2>New Cost Calculator Quote</h2>
        <p><strong>Quote ID:</strong> #$quote_id</p>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Service Type:</strong> " . str_replace('_', ' ', $service_type) . "</p>
        <p><strong>Area:</strong> $area_sqft sq ft</p>
        <p><strong>Selected Options:</strong> $options_text</p>
        <p><strong>Estimated Cost:</strong> ₹" . number_format($estimated_cost, 2) . "</p>
        <p><strong>Additional Requirements:</strong> $additional_requirements</p>
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
 * Send auto-reply to customer with quote details
 */
function sendCalculatorAutoReply($name, $email, $service_type, $estimated_cost, $quote_id) {
    $subject = "Your Cost Estimate from iHome Master Interior Designers";
    
    $body = "
    <html>
    <head>
        <title>Your Cost Estimate</title>
    </head>
    <body>
        <h2>Dear $name,</h2>
        <p>Thank you for using our cost calculator!</p>
        <p><strong>Quote ID:</strong> #$quote_id</p>
        <p><strong>Service:</strong> " . str_replace('_', ' ', $service_type) . "</p>
        <p><strong>Estimated Cost:</strong> ₹" . number_format($estimated_cost, 2) . "</p>
        <p>This is an initial estimate based on the information you provided. For a detailed quote and consultation, please contact us:</p>
        <ul>
            <li>Phone: +91-9876543210</li>
            <li>Email: info@ihomemasters.com</li>
            <li>Address: Sector 62, Noida, Uttar Pradesh</li>
        </ul>
        <p>Our team will review your requirements and provide you with a comprehensive proposal including:</p>
        <ul>
            <li>Detailed design concepts</li>
            <li>Material specifications</li>
            <li>Project timeline</li>
            <li>Payment schedule</li>
        </ul>
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