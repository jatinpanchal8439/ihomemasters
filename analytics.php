<?php
/**
 * Google Analytics Integration
 * iHome Web - Interior Design Website
 */

// Get Google Analytics ID from settings
function getGoogleAnalyticsId() {
    // You can store this in database or config file
    return 'G-XXXXXXXXXX'; // Replace with your actual GA4 ID
}

// Get Google Tag Manager ID
function getGoogleTagManagerId() {
    return 'GTM-XXXXXXX'; // Replace with your actual GTM ID
}

// Check if user has consented to analytics
function hasAnalyticsConsent() {
    return isset($_COOKIE['analytics_consent']) && $_COOKIE['analytics_consent'] === 'true';
}

// Set analytics consent cookie
function setAnalyticsConsent($consent = true) {
    $expiry = time() + (365 * 24 * 60 * 60); // 1 year
    setcookie('analytics_consent', $consent ? 'true' : 'false', $expiry, '/');
}

// Track page view
function trackPageView($page_title = '', $page_location = '') {
    if (!hasAnalyticsConsent()) {
        return;
    }
    
    $ga_id = getGoogleAnalyticsId();
    if (empty($ga_id) || $ga_id === 'G-XXXXXXXXXX') {
        return;
    }
    
    $page_title = $page_title ?: $_SERVER['REQUEST_URI'];
    $page_location = $page_location ?: 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    // Send pageview to Google Analytics
    $data = [
        'v' => 1,
        'tid' => $ga_id,
        'cid' => getClientId(),
        't' => 'pageview',
        'dp' => $_SERVER['REQUEST_URI'],
        'dt' => $page_title,
        'dl' => $page_location
    ];
    
    sendToGoogleAnalytics($data);
}

// Track custom events
function trackEvent($category, $action, $label = '', $value = 0) {
    if (!hasAnalyticsConsent()) {
        return;
    }
    
    $ga_id = getGoogleAnalyticsId();
    if (empty($ga_id) || $ga_id === 'G-XXXXXXXXXX') {
        return;
    }
    
    $data = [
        'v' => 1,
        'tid' => $ga_id,
        'cid' => getClientId(),
        't' => 'event',
        'ec' => $category,
        'ea' => $action,
        'el' => $label,
        'ev' => $value
    ];
    
    sendToGoogleAnalytics($data);
}

// Track form submissions
function trackFormSubmission($form_name, $form_id = '') {
    trackEvent('Form', 'Submit', $form_name, 1);
}

// Track phone clicks
function trackPhoneClick($phone_number) {
    trackEvent('Contact', 'Phone Click', $phone_number, 1);
}

// Track email clicks
function trackEmailClick($email) {
    trackEvent('Contact', 'Email Click', $email, 1);
}

// Track calculator usage
function trackCalculatorUsage($service_type, $area_sqft) {
    trackEvent('Calculator', 'Used', $service_type, $area_sqft);
}

// Track gallery views
function trackGalleryView($category) {
    trackEvent('Gallery', 'View', $category, 1);
}

// Track service page views
function trackServiceView($service_name) {
    trackEvent('Service', 'View', $service_name, 1);
}

// Get or generate client ID
function getClientId() {
    if (!isset($_COOKIE['_ga'])) {
        $client_id = generateClientId();
        setcookie('_ga', $client_id, time() + (2 * 365 * 24 * 60 * 60), '/'); // 2 years
        return $client_id;
    }
    
    return $_COOKIE['_ga'];
}

// Generate unique client ID
function generateClientId() {
    return 'GA1.1.' . time() . '.' . rand(1000000000, 9999999999);
}

// Send data to Google Analytics
function sendToGoogleAnalytics($data) {
    $url = 'https://www.google-analytics.com/collect';
    $post_data = http_build_query($data);
    
    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => $post_data
        ]
    ]);
    
    // Send asynchronously (don't wait for response)
    @file_get_contents($url, false, $context);
}

// Enhanced ecommerce tracking
function trackEcommerceTransaction($transaction_id, $revenue, $tax = 0, $shipping = 0, $currency = 'INR') {
    if (!hasAnalyticsConsent()) {
        return;
    }
    
    $ga_id = getGoogleAnalyticsId();
    if (empty($ga_id) || $ga_id === 'G-XXXXXXXXXX') {
        return;
    }
    
    $data = [
        'v' => 1,
        'tid' => $ga_id,
        'cid' => getClientId(),
        't' => 'transaction',
        'ti' => $transaction_id,
        'tr' => $revenue,
        'tt' => $tax,
        'ts' => $shipping,
        'cu' => $currency
    ];
    
    sendToGoogleAnalytics($data);
}

// Track user engagement
function trackUserEngagement($engagement_time = 10) {
    if (!hasAnalyticsConsent()) {
        return;
    }
    
    $ga_id = getGoogleAnalyticsId();
    if (empty($ga_id) || $ga_id === 'G-XXXXXXXXXX') {
        return;
    }
    
    $data = [
        'v' => 1,
        'tid' => $ga_id,
        'cid' => getClientId(),
        't' => 'event',
        'ec' => 'User Engagement',
        'ea' => 'Engagement',
        'el' => 'Time on page',
        'ev' => $engagement_time
    ];
    
    sendToGoogleAnalytics($data);
}

// Track scroll depth
function trackScrollDepth($depth_percentage) {
    trackEvent('User Engagement', 'Scroll Depth', $depth_percentage . '%', $depth_percentage);
}

// Track video views
function trackVideoView($video_title, $video_duration = 0) {
    trackEvent('Video', 'View', $video_title, $video_duration);
}

// Track social media clicks
function trackSocialClick($platform, $url) {
    trackEvent('Social', 'Click', $platform, 1);
}

// Track search queries
function trackSearch($search_term, $results_count = 0) {
    trackEvent('Search', 'Query', $search_term, $results_count);
}

// Track 404 errors
function track404Error($url) {
    trackEvent('Error', '404', $url, 1);
}

// Track performance metrics
function trackPerformance($load_time, $page_size = 0) {
    trackEvent('Performance', 'Page Load', 'Load Time', $load_time);
    if ($page_size > 0) {
        trackEvent('Performance', 'Page Size', 'Bytes', $page_size);
    }
}

// Initialize analytics on page load
function initAnalytics() {
    if (!hasAnalyticsConsent()) {
        return;
    }
    
    // Track page view
    trackPageView();
    
    // Track initial engagement
    trackUserEngagement();
}

// Consent banner HTML
function getConsentBanner() {
    if (hasAnalyticsConsent()) {
        return '';
    }
    
    return '
    <div id="analytics-consent-banner" style="position: fixed; bottom: 0; left: 0; right: 0; background: #333; color: white; padding: 15px; z-index: 10000; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <p style="margin: 0;">We use cookies and analytics to improve your experience. By continuing to use this site, you consent to our use of cookies.</p>
        </div>
        <div>
            <button onclick="acceptAnalytics()" style="background: #4CAF50; color: white; border: none; padding: 10px 20px; margin-right: 10px; cursor: pointer;">Accept</button>
            <button onclick="rejectAnalytics()" style="background: #f44336; color: white; border: none; padding: 10px 20px; cursor: pointer;">Reject</button>
        </div>
    </div>
    <script>
    function acceptAnalytics() {
        document.cookie = "analytics_consent=true; max-age=31536000; path=/";
        document.getElementById("analytics-consent-banner").style.display = "none";
        location.reload();
    }
    function rejectAnalytics() {
        document.cookie = "analytics_consent=false; max-age=31536000; path=/";
        document.getElementById("analytics-consent-banner").style.display = "none";
    }
    </script>';
}

// Google Analytics script tag
function getAnalyticsScript() {
    if (!hasAnalyticsConsent()) {
        return '';
    }
    
    $ga_id = getGoogleAnalyticsId();
    if (empty($ga_id) || $ga_id === 'G-XXXXXXXXXX') {
        return '';
    }
    
    return "
    <!-- Google Analytics -->
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=$ga_id\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '$ga_id', {
            'page_title': '" . addslashes($_SERVER['REQUEST_URI']) . "',
            'page_location': '" . addslashes('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) . "'
        });
    </script>";
}

?> 