<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../db/config.php';

$sql = "SELECT * FROM deposit";
$result = mysqli_query($dbconnected, $sql);

if ($result === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Query failed', 'detail' => mysqli_error($dbconnected)]);
    mysqli_close($dbconnected);
    exit;
}

$data = [];
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

echo json_encode($data);
mysqli_close($dbconnected);
