<?php
header("Content-Type: application/json; charset=utf-8");
header("Cache-Control: no-store");

$wallet = $_GET['wallet'] ?? '';

if (!preg_match('/^0x[a-fA-F0-9]{40}$/', $wallet)) {
    echo json_encode([
        "ok" => false,
        "error" => "Invalid wallet address"
    ]);
    exit;
}

// TODO: sementara dummy agar UI tidak error
echo json_encode([
    "ok" => true,
    "query" => $wallet,
    "type" => "trader",
    "updated_at" => date("c"),
    "profile" => [
        "address" => $wallet,
        "display_name" => substr($wallet, 0, 6) . "…" . substr($wallet, -4)
    ],
    "stats" => [
        "portfolio_value_usd" => null,
        "total_volume_usd" => null,
        "trades_total" => null,
        "last_active" => null
    ]
]);

