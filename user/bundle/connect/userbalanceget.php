<?php
session_start();
header('Content-Type: application/json');
require_once __DIR__ . '/../db/config.php';

function getCryptoPrice($coin, $currency = 'usd') {
    $url = "https://api.coingecko.com/api/v3/simple/price?ids={$coin}&vs_currencies={$currency}";
    $response = @file_get_contents($url);
    if (!$response) return 0;
    $data = json_decode($response, true);
    return $data[$coin][$currency] ?? 0;
}

// Get user email from POST or SESSION
$email = isset($_POST['email']) ? $_POST['email'] : (isset($_SESSION['email']) ? $_SESSION['email'] : '');

if (empty($email)) {
    echo json_encode(['error' => 'No email provided', 'totalBalance' => 0]);
    exit;
}

// Fetch user data
$sql = "SELECT crypto_btc, crypto_eth, crypto_usdt, crypto_bnb FROM users WHERE email = ?";
$stmt = mysqli_prepare($dbconnected, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    // Get current crypto prices
    $btcPrice = getCryptoPrice('bitcoin');
    $ethPrice = getCryptoPrice('ethereum');
    $usdtPrice = 1; // USDT is pegged to USD
    $bnbPrice = getCryptoPrice('binancecoin');

    // Calculate balances in USD
    $btcBalance = floatval($row['crypto_btc'] ?? 0) * $btcPrice;
    $ethBalance = floatval($row['crypto_eth'] ?? 0) * $ethPrice;
    $usdtBalance = floatval($row['crypto_usdt'] ?? 0) * $usdtPrice;
    $bnbBalance = floatval($row['crypto_bnb'] ?? 0) * $bnbPrice;

    $totalBalance = $btcBalance + $ethBalance + $usdtBalance + $bnbBalance;

    echo json_encode([
        'success' => true,
        'totalBalance' => number_format($totalBalance, 2, '.', ''),
        'balances' => [
            'btc' => [
                'crypto' => number_format(floatval($row['crypto_btc'] ?? 0), 8, '.', ''),
                'usd' => number_format($btcBalance, 2, '.', ''),
                'price' => $btcPrice
            ],
            'eth' => [
                'crypto' => number_format(floatval($row['crypto_eth'] ?? 0), 8, '.', ''),
                'usd' => number_format($ethBalance, 2, '.', ''),
                'price' => $ethPrice
            ],
            'usdt' => [
                'crypto' => number_format(floatval($row['crypto_usdt'] ?? 0), 2, '.', ''),
                'usd' => number_format($usdtBalance, 2, '.', ''),
                'price' => $usdtPrice
            ],
            'bnb' => [
                'crypto' => number_format(floatval($row['crypto_bnb'] ?? 0), 8, '.', ''),
                'usd' => number_format($bnbBalance, 2, '.', ''),
                'price' => $bnbPrice
            ]
        ]
    ]);
} else {
    echo json_encode(['error' => 'User not found', 'totalBalance' => 0]);
}

mysqli_stmt_close($stmt);
mysqli_close($dbconnected);
?>
