<?php
// Include the CoinGate PHP SDK
require 'coingate/init.php';

use CoinGate\Client;

// Log function for debugging
function logCallback($message) {
    file_put_contents('callback.log', date('Y-m-d H:i:s') . " - " . $message . "\n", FILE_APPEND);
}

// Retrieve the callback data
$callbackData = file_get_contents('php://input');
$decodedData = json_decode($callbackData, true);

logCallback("Received callback: " . json_encode($decodedData));

// Verify the signature (optional but recommended)
$signature = $_SERVER['HTTP_X_CG_SIGNATURE'];
if (Client::validateSignature($decodedData, $signature)) {
    // Handle the callback data (e.g., update order status in your database)
    $order_id = $decodedData['order_id'];
    $status = $decodedData['status'];
    
    // Update your order status in the database
    // Example: update_order_status($order_id, $status);
    logCallback("Order ID: $order_id, Status: $status");
    
    http_response_code(200); // Respond with 200 OK
} else {
    logCallback("Invalid callback signature");
    http_response_code(400); // Invalid callback
}
?>
