<?php
function isLocalhost() {
    $host = strtolower($_SERVER['HTTP_HOST'] ?? '');
    return $host === 'localhost' || $host === '127.0.0.1' || $host === '::1';
}

function fetchUrl($url) {
    $verifySsl = !isLocalhost();
    $context = stream_context_create([
        'http' => [
            'timeout' => 8,
            'header' => "User-Agent: Mozilla/5.0\r\n",
        ],
        'ssl' => [
            'verify_peer' => $verifySsl,
            'verify_peer_name' => $verifySsl,
        ],
    ]);
    $response = @file_get_contents($url, false, $context);
    if ($response !== false && $response !== '') {
        return $response;
    }

    if (function_exists('curl_init')) {
        $ch = curl_init();
        $verifyHost = $verifySsl ? 2 : 0;
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => $verifySsl,
            CURLOPT_SSL_VERIFYHOST => $verifyHost,
            CURLOPT_USERAGENT => 'Mozilla/5.0',
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        if ($response !== false && $response !== '') {
            return $response;
        }
    }

    return false;
}

function getCryptoPrice($coin, $currency = 'usd') {
    $coin = strtolower(trim($coin));
    $currency = ensureCurrency($currency);
    if (!$coin) {
        return 0;
    }
    $url = "https://api.coingecko.com/api/v3/simple/price?ids={$coin}&vs_currencies={$currency}";
    $response = fetchUrl($url);
    if (!$response) {
        return 0;
    }
    $data = json_decode($response, true);
    return $data[$coin][$currency] ?? 0;
}

function getMarketChart($coin, $days = 1, $currency = 'usd') {
    $coin = strtolower(trim($coin));
    $currency = ensureCurrency($currency);
    $days = max(1, min(90, intval($days)));
    if (!$coin) {
        return [];
    }
    $interval = $days <= 1 ? 'hourly' : 'daily';
    $url = "https://api.coingecko.com/api/v3/coins/{$coin}/market_chart?vs_currency={$currency}&days={$days}&interval={$interval}";
    $response = fetchUrl($url);
    if (!$response) {
        return [];
    }
    $data = json_decode($response, true);
    return $data['prices'] ?? [];
}

function ensureCurrency($currency) {
    $value = strtolower(trim($currency));
    return $value ? $value : 'usd';
}

header('Content-Type: application/json');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

$command = $_REQUEST['command'] ?? '';

if ($command === 'getCryptoPrice') {
    $coin = $_REQUEST['coin'] ?? 'bitcoin';
    $currency = $_REQUEST['currency'] ?? 'usd';
    $price = getCryptoPrice($coin, $currency);
    echo json_encode(['price' => $price]);
    exit;
}

if ($command === 'getMarketChart') {
    $coin = $_REQUEST['coin'] ?? 'bitcoin';
    $days = $_REQUEST['days'] ?? 1;
    $currency = $_REQUEST['currency'] ?? 'usd';
    $prices = getMarketChart($coin, $days, $currency);
    echo json_encode(['prices' => $prices]);
    exit;
}

http_response_code(400);
echo json_encode(['error' => 'Invalid command']);
