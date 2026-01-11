<?php
/**
 * apisuggest.php
 * Autocomplete search for Portfolio
 * FINAL FIX — handles empty usernames correctly
 */

header("Content-Type: application/json; charset=utf-8");
header("Cache-Control: no-store");

$q = strtolower(trim($_GET['q'] ?? ''));

if (strlen($q) < 2) {
    echo json_encode(["ok" => true, "items" => []]);
    exit;
}

$indexFile = __DIR__ . "/trader_index.json";

if (!file_exists($indexFile)) {
    echo json_encode(["ok" => true, "items" => []]);
    exit;
}

$data = json_decode(file_get_contents($indexFile), true);
if (!is_array($data)) {
    echo json_encode(["ok" => false, "items" => []]);
    exit;
}

$items = [];

foreach ($data as $t) {
    $addr = strtolower($t['address'] ?? '');
    $name = strtolower(trim($t['username'] ?? ''));

    $match = false;

    // 1️⃣ match by username if exists
    if ($name !== '' && str_contains($name, $q)) {
        $match = true;
    }

    // 2️⃣ always allow address match
    if (str_contains($addr, $q)) {
        $match = true;
    }

    // 3️⃣ fallback: if query is NOT address-like, allow showing traders with empty names
    if (!$match && $name === '' && !str_starts_with($q, '0x')) {
        $match = true;
    }

    if ($match) {
        $items[] = [
            "address" => $addr,
            "name" => $name !== ''
                ? $t['username']
                : substr($addr, 0, 6) . "…" . substr($addr, -4)
        ];
    }

    if (count($items) >= 8) break;
}

echo json_encode([
    "ok" => true,
    "items" => $items
]);

