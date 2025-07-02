<?php
header('Content-Type: application/json');

// Get the user message
$data = json_decode(file_get_contents('php://input'), true);
$userMessage = strtolower(trim($data['message'] ?? ''));

function contains($str, $arr) {
    foreach ($arr as $a) {
        if (strpos($str, $a) !== false) return true;
    }
    return false;
}

$response = '';

if ($userMessage === '' || contains($userMessage, ['hi', 'hello', 'hey', 'helo'])) {
    $response = "Hello! 👋 This is <b>iHome Smart</b>.<br>How can I help you today?<br><br>Contact us:<br>📧 <b>interiors@ihomemasters.com</b><br>📞 <b>+91-8506052612</b>";
} elseif (contains($userMessage, ['service', 'offer', 'do you do'])) {
    $response = "We offer interior design for homes and offices, modular kitchens, wardrobes, 3D visualization, turnkey projects, and more. Would you like details on any specific service?";
} elseif (contains($userMessage, ['portfolio', 'project', 'work', 'gallery'])) {
    $response = "You can view our portfolio on our website's Projects section. Would you like to see residential or commercial work?";
} elseif (contains($userMessage, ['contact', 'call', 'email', 'phone'])) {
    $response = "You can contact us at <b>+91-8506052612</b> or email <b>interiors@ihomemasters.com</b>. Would you like our address or a callback?";
} elseif (contains($userMessage, ['where', 'location', 'address', 'located'])) {
    $response = "We are based in Noida, Sector 63. Would you like directions or our full address?";
} elseif (contains($userMessage, ['kitchen', 'modular kitchen'])) {
    $response = "We specialize in modular kitchens: L-Shape, U-Shape, Straight, and more. Want to try our Kitchen Cost Calculator or see kitchen designs?";
} elseif (contains($userMessage, ['bedroom', 'wardrobe'])) {
    $response = "We design bedrooms with custom wardrobes, beds, and decor. Would you like to see some bedroom ideas?";
} elseif (contains($userMessage, ['living room', 'tv unit', 'sofa'])) {
    $response = "Our living room solutions include TV units, sofas, wall designs, and more. Want to see our living room gallery?";
} elseif (contains($userMessage, ['office', 'workspace', 'commercial'])) {
    $response = "We do commercial interiors: offices, cafes, salons, and more. Would you like to discuss your office project?";
} elseif (contains($userMessage, ['price', 'cost', 'charge', 'quote', 'range'])) {
    $response = "Our pricing depends on your project. You can use our Kitchen Cost Calculator or request a free quote. Would you like a callback for a detailed estimate?";
} elseif (contains($userMessage, ['bye', 'thank', 'thanks', 'goodbye'])) {
    $response = "Thank you for chatting! If you have more questions, just open the chat again. 😊";
} else {
    $response = "I'm here to help! You can ask about our services, portfolio, pricing, or how to contact us. Or use the quick reply buttons below.";
}

echo json_encode(['response' => $response]);
