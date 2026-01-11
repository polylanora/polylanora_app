<?php
/**
 * index_traders.php
 * Build local trader index from Polymarket Data API
 * FINAL FIX — API returns ROOT ARRAY
 */

set_time_limit(0);
header("Content-Type: text/plain; charset=utf-8");

$API = "https://data-api.polymarket.com/trades?limit=500";

$context = stream_context_create([
    "http" => [
        "method" => "GET",
        "header" => [
            "Accept: application/json",
            "User-Agent: POLYNEROMA/1.0"
        ],
        "timeout" => 20
    ]
]);

$response = @file_get_contents($API, false, $context);

if ($response === false) {
    die("ERROR: Failed to fetch Polymarket Data API\n");
}

$json = json_decode($response, true);

/**
 * FIX UTAMA:
 * Root JSON adalah ARRAY
 */
if (!is_array($json)) {
    echo "RAW RESPONSE:\n";
    echo substr($response, 0, 1000);
    die("\n\nERROR: API did not return array\n");
}

$index = [];

foreach ($json as $trade) {
    if (empty($trade['proxyWallet'])) continue;

    $addr = strtolower($trade['proxyWallet']);

    if (!isset($index[$addr])) {
        $index[$addr] = [
            "address"   => $addr,
            // pakai field TERBAIK yang tersedia
            "username"  => $trade['pseudonym']
                ?? $trade['name']
                ?? null,
            "last_seen" => $trade['timestamp'] ?? null
        ];
    }
}

$file = __DIR__ . "/trader_index.json";
file_put_contents($file, json_encode($index, JSON_PRETTY_PRINT));

echo "DONE\n";
echo "Total traders indexed: " . count($index) . "\n";
