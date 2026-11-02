<?php
// Immowelt Property API – PHP example (ext-curl)
// Usage: PILOTERR_API_KEY=your-key php property.php

$params = http_build_query([
    'query' => 'https://www.immowelt.de/expose/65de0309-bf41-48ce-86fd-6a3441fd0487',
]);

$ch = curl_init('https://api.piloterr.com/v2/immowelt/property?' . $params);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 120,
    CURLOPT_HTTPHEADER => ['x-api-key: ' . getenv('PILOTERR_API_KEY')],
]);

$body = curl_exec($ch);
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($status !== 200) {
    fwrite(STDERR, "Piloterr error $status: $body\n");
    exit(1);
}

$data = json_decode($body, true);
echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), PHP_EOL;
