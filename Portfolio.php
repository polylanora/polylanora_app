<?php
// Portfolio.php — FULL REPLACE (cPanel friendly)
// - Polydata-style UI + Search suggestions dropdown
// - Suggestion source via local endpoint (no CORS):
//    ./apisuggest.php?q=...
// - Search submit hits: ./apitrader.php?q=0x...
?><!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>POLYNEROMA — Portfolio</title>
  <meta name="description" content="Track Polymarket portfolio (Polydata-style UI) with suggestions + trader lookup." />

  <!-- Font (optional) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          fontFamily: {
            mono: ["JetBrains Mono","ui-monospace","SFMono-Regular","Menlo","Monaco","Consolas","Liberation Mono","Courier New","monospace"],
          }
        }
      }
    }
  </script>

  <style>
    :root{
      --card: rgba(255,255,255,.04);
      --bd: rgba(255,255,255,.08);
      --muted: rgba(255,255,255,.6);
      --muted2: rgba(255,255,255,.45);
      --blue:#3b82f6;
    }
    html,body{height:100%;}
    body{
      font-family: JetBrains Mono, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      background:#000; /* Full black background */
      color:#fff;      /* Keep all text (including headings & input text) white by default */
    }
    .card{
      background: var(--card);
      border: 1px solid var(--bd);
      border-radius: 16px;
      box-shadow: 0 0 0 1px rgba(0,0,0,.2) inset;
      backdrop-filter: blur(10px);
    }
    .muted{color: var(--muted);}
    .muted2{color: var(--muted2);}
    .kbd{
      border: 1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.06);
      border-radius: 10px;
      padding: 2px 8px;
      font-size: 12px;
      color: rgba(255,255,255,.75);
    }
    .pill{
      border: 1px solid rgba(59,130,246,.25);
      background: rgba(59,130,246,.10);
      color: #dbeafe;
      border-radius: 999px;
    }
  </style>
</head>

<body class="flex min-h-screen flex-col">
  <div hidden></div>

  <div class="flex flex-1 flex-col">
    <div class="mx-auto w-full max-w-6xl flex-1 flex flex-col">

      <!-- HEADER -->
      <header class="pt-4">
        <div class="flex justify-between items-center py-4 px-4 md:px-0">
          <a href="/" class="flex items-center gap-2">
            <div class="h-7 w-7 rounded-xl border border-white/10 bg-white/5 grid place-items-center overflow-hidden">
              <img
                src="https://i.ibb.co.com/Y7246jJ9/Chat-GPT-Image-Dec-21-2025-10-54-20-AM-removebg-preview.png"
                alt="POLYNEROMA"
                class="h-7 w-7 object-contain"
                loading="eager"
                decoding="async"
              />
            </div>
            <span class="hidden sm:inline text-sm font-semibold tracking-tight">POLYNEROMA</span>
          </a>

          <nav class="hidden md:block">
            <ul class="flex items-center justify-center gap-1 text-sm">
              <li><a class="px-4 py-2 rounded-md muted hover:bg-white/5 hover:text-white transition-all flex items-center gap-2" href="/Dashboard.php">Dashboard</a></li>
              <li><a class="px-4 py-2 rounded-md text-white bg-[#2563EB]/10 text-[#93c5fd] transition-all flex items-center gap-2" href="/Portfolio.php">Portfolio</a></li>
              <li><a class="px-4 py-2 rounded-md muted hover:bg-white/5 hover:text-white transition-all flex items-center gap-2" href="/Leaderboard.php">Leaderboard</a></li>
              <li><a class="px-4 py-2 rounded-md muted hover:bg-white/5 hover:text-white transition-all flex items-center gap-2" href="/Markets.php">Markets</a></li>
              <li><a class="px-4 py-2 rounded-md muted hover:bg-white/5 hover:text-white transition-all flex items-center gap-2" href="/Ecosystem.php">Ecosystem</a></li>
              <li><a class="px-4 py-2 rounded-md muted hover:bg-white/5 hover:text-white transition-all flex items-center gap-2" href="/Builders.php">Builders</a></li>
            </ul>
          </nav>

          <div class="flex items-center gap-3 px-4 md:px-0">
            <a class="block opacity-90 hover:opacity-100 transition" href="https://x.com/polyneromaxyz" target="_blank" rel="noreferrer" title="X">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" class="text-white">
                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"></path>
              </svg>
            </a>
          </div>
        </div>
      </header>

      <!-- MAIN -->
      <main class="flex-1 px-4 md:px-0">
        <section class="mt-8 md:mt-16">
          <div class="flex flex-col items-center justify-center gap-2 md:gap-4">
            <div class="h-12 w-12 rounded-2xl border border-white/10 bg-white/5 grid place-items-center">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="opacity-90">
                <path d="M16 7h6v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="m22 7-8.5 8.5-5-5L2 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>

            <h1 class="text-xl md:text-2xl font-semibold text-center">Track Portfolio</h1>
            <p class="muted text-center text-sm md:text-base">Enter a Polymarket username or address to view stats.</p>

            <!-- SEARCH + SUGGEST -->
            <div class="w-full max-w-xl mt-3">
              <form id="searchForm" class="w-full">
                <div class="relative w-full">
                  <label class="sr-only" for="q">Search</label>

                  <input id="q" name="q" autocomplete="off"
                    class="w-full h-11 rounded-xl border border-white/10 bg-white/5 px-4 pl-10 text-sm outline-none
                           focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500/30"
                    placeholder="Search traders..." />

                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                    class="pointer-events-none absolute top-1/2 left-3 -translate-y-1/2 opacity-60">
                    <path d="m21 21-4.34-4.34" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                  </svg>

                  <button type="submit"
                    class="absolute right-2 top-1/2 -translate-y-1/2 h-9 px-4 rounded-lg font-semibold
                           bg-blue-500/90 hover:bg-blue-500 text-white transition">
                    Search
                  </button>

                  <!-- Dropdown -->
                  <div id="suggestBox"
                       class="hidden absolute left-0 right-0 mt-2 z-50 rounded-xl border border-white/10 bg-black/60 backdrop-blur
                              overflow-hidden shadow-2xl">
                    <div id="suggestList" class="max-h-72 overflow-y-auto"></div>
                  </div>
                </div>

                <div class="mt-3 flex items-center justify-between gap-3 text-xs muted2">
                  <div id="status" class="opacity-90"></div>
                </div>
              </form>
            </div>

            <!-- RESULT -->
            <div id="results" class="w-full max-w-4xl mt-6 hidden">
              <div class="card p-5 md:p-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                  <div>
                    <div class="text-xs muted2">Trader</div>
                    <div class="text-lg font-bold" id="r_name">—</div>
                    <div class="text-xs muted2 mt-1" id="r_meta">—</div>
                  </div>
                  <div class="flex flex-wrap gap-2">
                    <span class="pill px-3 py-1 text-xs" id="r_type">TYPE</span>
                    <span class="kbd" id="r_updated">updated</span>
                  </div>
                </div>

                <hr class="border-white/10 my-5" />

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                  <div class="card p-4">
                    <div class="text-xs muted2">Portfolio Value</div>
                    <div class="text-2xl font-bold mt-1" id="m_value">$—</div>
                  </div>
                  <div class="card p-4">
                    <div class="text-xs muted2">Total Volume</div>
                    <div class="text-2xl font-bold mt-1" id="m_volume">$—</div>
                  </div>
                  <div class="card p-4">
                    <div class="text-xs muted2">Trades</div>
                    <div class="text-2xl font-bold mt-1" id="m_trades">—</div>
                  </div>
                  <div class="card p-4">
                    <div class="text-xs muted2">Last Active</div>
                    <div class="text-xl font-bold mt-1" id="m_last_active">—</div>
                  </div>
                </div>

                <div class="mt-5">
                  <div class="text-xs muted2 mb-2">Raw JSON</div>
                  <pre class="text-xs p-4 rounded-xl border border-white/10 bg-black/30 overflow-x-auto" id="rawJson"></pre>
                </div>
              </div>
            </div>

            <!-- ERROR -->
            <div id="errorBox" class="w-full max-w-xl mt-6 hidden">
              <div class="card p-5 border border-red-500/20">
                <div class="font-semibold text-red-200">Error</div>
                <div class="text-sm text-red-200/80 mt-2" id="errorText"></div>
              </div>
            </div>

          </div>
        </section>
      </main>

      <!-- FOOTER -->
      <footer>
        <div class="flex flex-col md:flex-row justify-between items-center py-8 px-4 md:px-0 text-center md:text-left gap-4 md:gap-0">
          <p class="muted2 text-[14px]">
            © 2025 POLYNEROMA. All rights reserved.
            <span>Follow us on <a class="underline hover:text-[#3b82f6] transition-colors" href="https://x.com/polyneromaxyz" target="_blank" rel="noreferrer">X</a>.</span>
          </p>
        </div>
      </footer>
    </div>
  </div>

  <script>
    // ================== CONFIG ==================
    const ENDPOINT_TRADER  = "./apitrader.php";   // must exist in same folder
    const ENDPOINT_SUGGEST = "./apisuggest.php";  // suggestions only via this file

    // ================== HELPERS ==================
    const $ = (id) => document.getElementById(id);
    const show = (el, yes) => el.classList.toggle("hidden", !yes);

    const isAddr = (s) => /^0x[a-fA-F0-9]{40}$/.test(s || "");
    const shortAddr = (a) => (a && a.length > 12) ? (a.slice(0,6) + "…" + a.slice(-4)) : (a || "—");

    const money0 = (n) => (typeof n === "number" && isFinite(n))
      ? n.toLocaleString(undefined, { style:"currency", currency:"USD", maximumFractionDigits:0 })
      : "—";

    const num0 = (n) => (typeof n === "number" && isFinite(n)) ? n.toLocaleString() : "—";

    function escapeHtml(s){
      return String(s ?? "")
        .replaceAll("&","&amp;").replaceAll("<","&lt;").replaceAll(">","&gt;")
        .replaceAll('"',"&quot;").replaceAll("'","&#039;");
    }

    // ================== SUGGEST UI ==================
    const input = $("q");
    const box = $("suggestBox");
    const list = $("suggestList");

    let activeIndex = -1;
    let lastItems = [];

    function renderSuggest(items){
      lastItems = items;
      activeIndex = -1;

      if (!items.length){
        show(box, false);
        list.innerHTML = "";
        return;
      }

      list.innerHTML = items.map((it, idx) => {
        const initials = (it.name || "W").trim().slice(0,1).toUpperCase();
        return `
          <button type="button" data-idx="${idx}"
            class="w-full text-left px-3 py-2 flex items-center gap-3 hover:bg-white/5 transition border-b border-white/5 last:border-b-0">
            <div class="h-9 w-9 rounded-full border border-white/10 bg-white/5 grid place-items-center text-xs font-bold">${initials}</div>
            <div class="min-w-0">
              <div class="text-sm font-semibold truncate">${escapeHtml(it.name || "Trader")}</div>
              <div class="text-xs muted2 truncate">${escapeHtml(shortAddr(it.address))}</div>
            </div>
          </button>
        `;
      }).join("");

      list.querySelectorAll("button[data-idx]").forEach(btn => {
        btn.addEventListener("click", () => {
          const idx = Number(btn.getAttribute("data-idx"));
          const it = lastItems[idx];
          if (!it) return;
          input.value = it.address;
          show(box, false);
          $("searchForm").requestSubmit();
        });
      });

      show(box, true);
    }

    function setActive(idx){
      activeIndex = idx;
      const buttons = [...list.querySelectorAll("button[data-idx]")];
      buttons.forEach((b, i) => b.classList.toggle("bg-white/5", i === activeIndex));
      if (activeIndex >= 0 && buttons[activeIndex]){
        buttons[activeIndex].scrollIntoView({ block:"nearest" });
      }
    }

    // ================== SUGGEST FETCH (apisuggest.php ONLY) ==================
    let tmr = null;
    let lastQ = "";

    async function runSuggest(){
      const q = (input.value || "").trim();
      lastQ = q;

      if (q.length < 2){ renderSuggest([]); return; }
      if (isAddr(q)){ renderSuggest([]); return; }

      try{
        const url = ENDPOINT_SUGGEST + "?q=" + encodeURIComponent(q);
        const r = await fetch(url, { headers: { "Accept":"application/json" }, cache:"no-store" });
        const j = await r.json().catch(()=>null);

        if (!r.ok || !j || j.ok !== true){
          renderSuggest([]);
          return;
        }

        const items = Array.isArray(j.items) ? j.items : [];
        const cleaned = items
          .filter(x => x && typeof x.address === "string" && isAddr(x.address))
          .slice(0, 8)
          .map(x => ({ address: x.address, name: String(x.name || shortAddr(x.address)) }));

        if ((input.value || "").trim() !== lastQ) return;
        renderSuggest(cleaned);
      }catch(e){
        renderSuggest([]);
      }
    }

    input.addEventListener("input", () => {
      clearTimeout(tmr);
      tmr = setTimeout(runSuggest, 180);
    });

    input.addEventListener("focus", () => {
      if (lastItems.length) show(box, true);
    });

    document.addEventListener("click", (e) => {
      const within = e.target.closest("#suggestBox") || e.target.closest("#q");
      if (!within) show(box, false);
    });

    input.addEventListener("keydown", (e) => {
      if (box.classList.contains("hidden")) return;

      if (e.key === "ArrowDown"){
        e.preventDefault();
        const next = Math.min(lastItems.length - 1, activeIndex + 1);
        setActive(next);
      } else if (e.key === "ArrowUp"){
        e.preventDefault();
        const next = Math.max(0, activeIndex - 1);
        setActive(next);
      } else if (e.key === "Enter"){
        if (activeIndex >= 0 && lastItems[activeIndex]){
          e.preventDefault();
          input.value = lastItems[activeIndex].address;
          show(box, false);
          $("searchForm").requestSubmit();
        }
      } else if (e.key === "Escape"){
        show(box, false);
      }
    });

    // ================== TRADER LOOKUP (apitrader.php) ==================
    const form = $("searchForm");
    const status = $("status");
    const results = $("results");
    const errorBox = $("errorBox");
    const errorText = $("errorText");

    async function fetchTrader(q){
      const url = ENDPOINT_TRADER + "?action=portfolio&wallet=" + encodeURIComponent(q) + "&limit=150";
      const res = await fetch(url, { headers: { "Accept":"application/json" }, cache: "no-store" });
      const text = await res.text();
      let data = null;
      try{ data = JSON.parse(text); }catch(e){}

      if (!res.ok || !data || data.ok !== true){
        const msg = data?.error ? data.error : (text ? text.slice(0,200) : ("HTTP " + res.status));
        throw new Error(msg);
      }
      return data;
    }

    function renderTrader(data){
      const p = data.profile || {};
      const s = data.stats || {};

      $("r_name").textContent = p.display_name || p.handle || data.query || "—";
      $("r_meta").textContent = (p.address ? ("Address: " + p.address) : "—");
      $("r_type").textContent = String(data.type || "trader").toUpperCase();
      $("r_updated").textContent = "updated: " + (data.updated_at || "—");

      $("m_value").textContent = money0(s.portfolio_value_usd);
      $("m_volume").textContent = money0(s.total_volume_usd);
      $("m_trades").textContent = num0(s.trades_total);
      $("m_last_active").textContent = s.last_active || "—";

      $("rawJson").textContent = JSON.stringify(data, null, 2);

      show(errorBox, false);
      show(results, true);
    }

    form.addEventListener("submit", async (e) => {
      e.preventDefault();
      const q = (input.value || "").trim();

      show(results, false);
      show(errorBox, false);
      show(box, false);

      if (!q){
        show(errorBox, true);
        errorText.textContent = "Enter a username or address first.";
        return;
      }

      // NOTE: Your apitrader.php currently supports only 0x addresses.
      // If the user types a username, they must click a suggestion (which fills the 0x address).
      if (!isAddr(q)){
        show(errorBox, true);
        errorText.textContent = "For now, click a suggestion so the 0x... address is filled, then press Search.";
        return;
      }

      status.textContent = "Loading…";
      try{
        const data = await fetchTrader(q);
        renderTrader(data);
        status.textContent = "Done.";
      }catch(err){
        status.textContent = "";
        show(errorBox, true);
        errorText.textContent = (err && err.message) ? err.message : "Unknown error";
      }
    });
  </script>
</body>
</html>
