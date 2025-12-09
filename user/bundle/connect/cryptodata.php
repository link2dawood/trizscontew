<?php
header('Content-Type: application/json');

function getCryptoPrice($coin, $currency = 'usd') {
    $url = "https://api.coingecko.com/api/v3/simple/price?ids={$coin}&vs_currencies={$currency}&include_24hr_change=true";
    $response = @file_get_contents($url);
    if (!$response) return null;
    $data = json_decode($response, true);
    return $data[$coin] ?? null;
}

// Fetch crypto prices
$btcData = getCryptoPrice('bitcoin');
$ethData = getCryptoPrice('ethereum');
$usdtData = getCryptoPrice('tether');
$bnbData = getCryptoPrice('binancecoin');

// Prepare response
$response = [
    'BTC' => [
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'price' => $btcData['usd'] ?? 0,
        'change_24h' => $btcData['usd_24h_change'] ?? 0,
        'image' => '../assets/media/images/icons/Bitcoin.svg'
    ],
    'ETH' => [
        'name' => 'Ethereum',
        'symbol' => 'ETH',
        'price' => $ethData['usd'] ?? 0,
        'change_24h' => $ethData['usd_24h_change'] ?? 0,
        'image' => '../assets/media/images/icons/ETH.svg'
    ],
    'USDT' => [
        'name' => 'Tether',
        'symbol' => 'USDT',
        'price' => $usdtData['usd'] ?? 1,
        'change_24h' => $usdtData['usd_24h_change'] ?? 0,
        'image' => '../assets/media/images/icons/logo-usdt.svg'
    ],
    'BNB' => [
        'name' => 'Binance Coin',
        'symbol' => 'BNB',
        'price' => $bnbData['usd'] ?? 0,
        'change_24h' => $bnbData['usd_24h_change'] ?? 0,
        'image' => '../assets/media/images/icons/logo-bnb.svg'
    ]
];

echo json_encode($response);
?>
