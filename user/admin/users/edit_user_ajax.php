<?php
// Start session safely for AJAX
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!headers_sent()) {
    header('Content-Type: application/json');
}

// Log incoming request for debugging
error_log("Edit user AJAX called - POST data: " . print_r($_POST, true));
error_log("Session status: " . (isset($_SESSION['loggedin']) ? 'logged in' : 'not logged in'));

require_once __DIR__ . '/../../bundle/db/config.php';

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    error_log("Unauthorized access attempt");
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

$id         = isset($_POST['id']) ? trim($_POST['id']) : '';

$fname      = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$lname      = isset($_POST['lname']) ? trim($_POST['lname']) : '';
$email      = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone      = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$country    = isset($_POST['country']) ? trim($_POST['country']) : '';
$city       = isset($_POST['city']) ? trim($_POST['city']) : '';
$zip_code   = isset($_POST['zip_code']) ? trim($_POST['zip_code']) : '';
$address    = isset($_POST['address']) ? trim($_POST['address']) : '';
$deposit    = isset($_POST['deposit']) ? trim($_POST['deposit']) : '0';
$ref_bonus  = isset($_POST['ref_bonus']) ? trim($_POST['ref_bonus']) : '0';
$main_bal   = isset($_POST['crypto_btc']) ? trim($_POST['crypto_btc']) : '0';

if ($id === '' || !ctype_digit($id)) {
    echo json_encode(['success' => false, 'message' => 'Invalid user id']);
    exit;
}
if ($fname === '' || $lname === '' || $email === '') {
    echo json_encode(['success' => false, 'message' => 'First name, last name and email are required']);
    exit;
}

// Normalize optional fields
$phone     = $phone ?: '';
$country   = $country ?: '';
$city      = $city ?: '';
$zip_code  = $zip_code ?: '';
$address   = $address ?: '';
$deposit   = $deposit === '' ? '0' : $deposit;
$ref_bonus = $ref_bonus === '' ? '0' : $ref_bonus;
$main_bal  = $main_bal === '' ? '0' : $main_bal;

// Log the exact values we're about to save
error_log("Values being saved - ID: $id, fname: $fname, lname: $lname, phone: $phone, country: $country, city: $city, zip_code: $zip_code, address: $address");

$sql = "UPDATE users SET fname=?, lname=?, email=?, phone=?, country=?, city=?, zip_code=?, address=?, profit=?, ref_bonus=?, crypto_btc=? WHERE id=?";
$stmt = mysqli_stmt_init($dbconnected);
if (!$stmt = mysqli_prepare($dbconnected, $sql)) {
    echo json_encode(['success' => false, 'message' => 'Database error (prepare failed)']);
    exit;
}

mysqli_stmt_bind_param(
    $stmt,
    "sssssssssssi",
    $fname,
    $lname,
    $email,
    $phone,
    $country,
    $city,
    $zip_code,
    $address,
    $deposit,
    $ref_bonus,
    $main_bal,
    $id
);
if (mysqli_stmt_execute($stmt)) {
    error_log("User update successful for ID: $id");
    echo json_encode(['success' => true, 'message' => 'User information updated successfully']);
} else {
    $error = mysqli_error($dbconnected);
    error_log("User update failed: " . $error);
    echo json_encode(['success' => false, 'message' => 'Update failed: ' . $error]);
}

mysqli_stmt_close($stmt);
exit;
