<?php
session_start();
header('Content-Type: application/json');
require_once __DIR__ . '/../db/config.php';

// Get POST data
$email = $_POST['email'] ?? '';
$amount = floatval($_POST['amount'] ?? 0);
$crypto = strtolower($_POST['crypto'] ?? '');

if (empty($email) || $amount <= 0 || empty($crypto)) {
    echo json_encode(['success' => false, 'error' => 'Invalid parameters']);
    exit;
}

// Map crypto symbol to database column
$cryptoColumns = [
    'btc' => 'crypto_btc',
    'eth' => 'crypto_eth',
    'usdt' => 'crypto_usdt',
    'bnb' => 'crypto_bnb',
    'doge' => 'crypto_doge',
    'xlm' => 'crypto_xlm',
    'xrp' => 'crypto_xrp',
    'usdc' => 'crypto_usdc',
    'sol' => 'crypto_sol',
    'trx' => 'crypto_trx',
    'ltc' => 'crypto_ltc',
    'paxg' => 'crypto_paxg',
    'ton' => 'crypto_ton',
    'shib' => 'crypto_shib',
    'ada' => 'crypto_ada',
    'avax' => 'crypto_avax',
    'flr' => 'crypto_flr',
    'link' => 'crypto_link',
    'eur' => 'crypto_eur',
    'yen' => 'crypto_yen',
    'wbtc' => 'crypto_wbtc',
    'bch' => 'crypto_bch',
    'gno' => 'crypto_gno',
    'woo' => 'crypto_woo'
];

if (!isset($cryptoColumns[$crypto])) {
    echo json_encode(['success' => false, 'error' => 'Invalid crypto type']);
    exit;
}

$column = $cryptoColumns[$crypto];

// Check if column exists, if not create it
$checkColumnSql = "SHOW COLUMNS FROM users LIKE '$column'";
$checkResult = mysqli_query($dbconnected, $checkColumnSql);
if (mysqli_num_rows($checkResult) == 0) {
    $addColumnSql = "ALTER TABLE users ADD $column VARCHAR(50) DEFAULT '0'";
    if (!mysqli_query($dbconnected, $addColumnSql)) {
        echo json_encode(['success' => false, 'error' => 'Failed to create currency column']);
        exit;
    }
}

// Get current balance
$sql = "SELECT $column, fname FROM users WHERE email = ?";
$stmt = mysqli_prepare($dbconnected, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    $currentBalance = floatval($row[$column] ?? 0);
    $fname = $row['fname'];
    $newBalance = $currentBalance + $amount;

    // Update balance
    $updateSql = "UPDATE users SET $column = ? WHERE email = ?";
    $updateStmt = mysqli_prepare($dbconnected, $updateSql);
    mysqli_stmt_bind_param($updateStmt, "ds", $newBalance, $email);

    if (mysqli_stmt_execute($updateStmt)) {
        // Log the transaction in deposit table
        $mode = strtoupper($crypto) . ' ' . number_format($amount, 8);
        $status = 'Approved';
        $payment_mode = 'Admin Fund';
        $date = date('Y-m-d H:i:s');
        $token = bin2hex(random_bytes(8));

        $logSql = "INSERT INTO deposit (email, amount, payment_mode, mode, status, date_created, upload) VALUES (?,?,?,?,?,?,?)";
        $logStmt = mysqli_prepare($dbconnected, $logSql);
        $usdAmount = 0; // You can calculate USD value if needed
        mysqli_stmt_bind_param($logStmt, "sdsssss", $email, $usdAmount, $payment_mode, $mode, $status, $date, $token);
        mysqli_stmt_execute($logStmt);
        mysqli_stmt_close($logStmt);

        echo json_encode([
            'success' => true,
            'message' => 'Successfully funded ' . $amount . ' ' . strtoupper($crypto),
            'newBalance' => number_format($newBalance, 8, '.', ''),
            'crypto' => strtoupper($crypto)
        ]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to update balance']);
    }

    mysqli_stmt_close($updateStmt);
} else {
    echo json_encode(['success' => false, 'error' => 'User not found']);
}

mysqli_stmt_close($stmt);
mysqli_close($dbconnected);
?>
