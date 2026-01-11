# POLYLANORA

**Advanced Analytics Platform for Polymarket**

POLYLANORA is a lightweight, PHP-native web application designed to deliver real-time market analytics, wallet intelligence, and ecosystem insights for Polymarket.  
It focuses on performance, clarity, and modular analytics views without relying on heavy backend frameworks.

---

## ✨ Features

- **Real-time Market Analytics**
  - Volume
  - Open Interest
  - Active Traders
  - Market Growth Metrics

- **Wallet & Portfolio Analysis**
  - Wallet PnL breakdown
  - Exposure & position tracking
  - Win rate and volume analysis

- **Leaderboard**
  - Rank traders by PnL, volume, and activity
  - Identify top and emerging performers

- **Markets Explorer**
  - Browse all Polymarket markets
  - Filter by category, volume, and activity

- **Ecosystem & Builders**
  - Discover Polymarket community tools
  - Track builder activity and contributions

---

## 🛠 Tech Stack

- **Backend:** PHP (Native / No Framework)
- **Frontend:** HTML5 + Tailwind CSS (CDN)
- **UI Style:** Dark mode, glassmorphism, shadcn-inspired
- **Icons:** Lucide Icons (SVG)
- **Architecture:** Multi-page PHP

---

## 📁 Project Structure

```bash
POLYLANORA/
│
├── index.php
├── Dashboard.php
├── Portfolio.php
├── Leaderboard.php
├── Markets.php
├── Ecosystem.php
├── Builders.php
│
├── assets/
│   ├── images/
│   └── icons/
│
└── README.md
```

---

## 🚀 Getting Started

### Requirements
- PHP 7.4 or higher
- Local server (Apache / Nginx / PHP built-in server)
- Internet connection (Tailwind CDN)

### Run Locally

```bash
php -S localhost:8000
```

Open in browser:

```
http://localhost:8000/index.php
```

---

## 🧩 Example: PHP Native Page

```php
<?php
$pageTitle = "POLYLANORA — Dashboard";
?>

<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8">
  <title><?= $pageTitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white min-h-screen">

  <header class="p-6 border-b border-white/10">
    <h1 class="text-2xl font-bold">Dashboard</h1>
  </header>

  <main class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white/5 border border-white/10 rounded-xl p-6">
      <h2 class="text-lg font-semibold mb-2">Total Volume</h2>
      <p class="text-2xl text-blue-400">$12,450,000</p>
    </div>
  </main>

</body>
</html>
```

---

## 🗺 Roadmap

- Live API integration
- Historical charts
- Wallet comparison
- Saved dashboards

---

## 📄 License

MIT License  
© 2026 POLYLANORA

---

## 🌐 Links

- X (Twitter): https://x.com/POLYLANORAxyz
