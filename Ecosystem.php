<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>POLYNEROMA — Ecosystem</title>
  <meta name="description" content="Discover verified tools, apps, and analytics for Polymarket. Projects only with the Polymarket Builders badge." />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind tokens (shadcn/polydata-like) -->
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            background: "rgb(var(--background) / <alpha-value>)",
            foreground: "rgb(var(--foreground) / <alpha-value>)",
            card: "rgb(var(--card) / <alpha-value>)",
            "card-foreground": "rgb(var(--card-foreground) / <alpha-value>)",
            muted: "rgb(var(--muted) / <alpha-value>)",
            "muted-foreground": "rgb(var(--muted-foreground) / <alpha-value>)",
            accent: "rgb(var(--accent) / <alpha-value>)",
            "accent-foreground": "rgb(var(--accent-foreground) / <alpha-value>)",
            secondary: "rgb(var(--secondary) / <alpha-value>)",
            "secondary-foreground": "rgb(var(--secondary-foreground) / <alpha-value>)",
            border: "rgb(var(--border) / <alpha-value>)",
            input: "rgb(var(--input) / <alpha-value>)",
            ring: "rgb(var(--ring) / <alpha-value>)",
            primary: "rgb(var(--primary) / <alpha-value>)",
            "primary-foreground": "rgb(var(--primary-foreground) / <alpha-value>)",
            destructive: "rgb(var(--destructive) / <alpha-value>)",
          }
        }
      }
    };
  </script>

  <style>
    /* ====== TOKENS (FORCED BLACK BACKGROUND) ====== */
    :root{
      --background: 0 0 0;
      --foreground: 248 250 252;

      --card: 10 10 12;
      --card-foreground: 226 232 240;

      --muted: 18 18 22;
      --muted-foreground: 148 163 184;

      --border: 38 38 45;
      --input: 38 38 45;
      --ring: 99 102 241;

      --primary: 59 130 246;
      --primary-foreground: 0 0 0;

      /* Accent model */
      --accent: 248 250 252;
      --accent-foreground: 248 250 252;
      --accent-bg: 255 255 255;

      --secondary: 18 18 22;
      --secondary-foreground: 226 232 240;

      --destructive: 248 113 113;
    }

    html, body { height: 100%; }
    body { background-color: rgb(var(--background)); color: rgb(var(--foreground)); }

    /* Helpers so the pasted classes behave nicely under Tailwind CDN */
    .shadow-xs{ box-shadow: 0 1px 2px rgba(0,0,0,.25); }

    /* Tailwind v4 style gradient aliases used in snippets */
    .bg-linear-to-r { background-image: linear-gradient(to right, var(--tw-gradient-stops)); }
    .bg-linear-to-b { background-image: linear-gradient(to bottom, var(--tw-gradient-stops)); }
    .bg-linear-to-br{ background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }

    ::selection{ background: rgba(59,130,246,.25); }

    .bg-card\/60 { background-color: rgb(var(--card) / .60); }
    .text-card-foreground { color: rgb(var(--card-foreground)); }
    .text-muted-foreground { color: rgb(var(--muted-foreground)); }

    .bg-accent { background-color: rgb(var(--accent-bg) / .06); }
    .text-accent-foreground { color: rgb(var(--accent)); }

    .bg-white\/1{ background-color: rgba(255,255,255,.01); }
    .bg-white\/2{ background-color: rgba(255,255,255,.02); }
    .bg-\[\#3b82f6\]\/2 { background-color: rgba(59,130,246,.02); }

    [data-slot="card"] { position: relative; }
    [data-slot="card"]:hover > .pointer-events-none { opacity: 1 !important; }
  </style>
</head>

<body class="flex min-h-screen flex-col">
  <div hidden=""></div>

  <div class="flex flex-1 flex-col">
    <div class="mx-auto w-full max-w-6xl flex-1 flex flex-col">

      <!-- HEADER -->
      <header class="pt-4">
        <div class="flex justify-between items-center py-4 px-4 md:px-0">
          <a href="/" class="flex items-center gap-3" aria-label="Go to Home">
            <img
              alt="POLYNEROMA Logo"
              width="28"
              height="28"
              decoding="async"
              style="color:transparent"
              src="https://i.ibb.co.com/Y7246jJ9/Chat-GPT-Image-Dec-21-2025-10-54-20-AM-removebg-preview.png"
            />
            <span class="hidden sm:block font-semibold tracking-wide">POLYNEROMA</span>
          </a>

          <nav aria-label="Main" class="group/navigation-menu relative max-w-max flex-1 items-center justify-center hidden md:block">
            <div style="position:relative">
              <ul class="group flex flex-1 list-none items-center justify-center gap-1">
                <li class="relative">
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground hover:bg-accent hover:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-row items-center gap-2 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 px-4 py-2"
                     data-active="false" href="/Dashboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard" aria-hidden="true">
                      <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                      <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                    </svg>
                    Dashboard
                  </a>
                </li>

                <li class="relative">
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground hover:bg-accent hover:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-row items-center gap-2 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 px-4 py-2"
                     data-active="false" href="/Portfolio.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet" aria-hidden="true">
                      <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                      <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                    </svg>
                    Portfolio
                  </a>
                </li>

                <li class="relative">
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground hover:bg-accent hover:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-row items-center gap-2 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 px-4 py-2"
                     data-active="false" href="/Leaderboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy" aria-hidden="true">
                      <path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"></path>
                      <path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"></path>
                      <path d="M18 9h1.5a1 1 0 0 0 0-5H18"></path>
                      <path d="M4 22h16"></path>
                      <path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"></path>
                      <path d="M6 9H4.5a1 1 0 0 1 0-5H6"></path>
                    </svg>
                    Leaderboard
                  </a>
                </li>

                <li class="relative">
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground hover:bg-accent hover:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-row items-center gap-2 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 px-4 py-2"
                     data-active="false" href="/Markets.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up" aria-hidden="true">
                      <path d="M16 7h6v6"></path>
                      <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                    </svg>
                    Markets
                  </a>
                </li>

                <li class="relative">
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground hover:bg-accent hover:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-row items-center gap-2 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 px-4 py-2"
                     data-active="false" href="/Ecosystem.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                      <path d="M2 12h20"></path>
                    </svg>
                    Ecosystem
                  </a>
                </li>

                <li class="relative">
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground hover:bg-accent hover:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-row items-center gap-2 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 px-4 py-2"
                     data-active="false" href="/Builders.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-blocks" aria-hidden="true">
                      <path d="M10 22V7a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5a1 1 0 0 0-1-1H2"></path>
                      <rect x="14" y="2" width="8" height="8" rx="1"></rect>
                    </svg>
                    Builders
                  </a>
                </li>
              </ul>
            </div>
            <div class="absolute top-full left-0 isolate z-50 flex justify-center"></div>
          </nav>

          <div class="flex items-center gap-4">
            <!-- X link (POLYNEROMA) -->
            <a class="block text-muted-foreground hover:text-white transition-colors"
               href="https://x.com/polyneromaxyz"
               target="_blank" rel="noopener noreferrer"
               aria-label="X">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                class="w-7 h-7" aria-hidden="true">
                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"
                  fill="currentColor"></path>
              </svg>
            </a>

            <!-- Mobile menu button -->
            <button id="openSheet"
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all
              hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9 md:hidden
              outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]"
              type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="mobileSheet">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-menu h-6 w-6" aria-hidden="true">
                <path d="M4 5h16"></path>
                <path d="M4 12h16"></path>
                <path d="M4 19h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </header>

      <!-- MAIN -->
      <main class="flex-1">
        <div class="container mx-auto px-4 md:px-0 max-w-7xl mt-8 md:mt-16 mb-8 md:mb-16 space-y-4 md:space-y-6">
          <div>
            <h1 class="md:text-3xl font-bold flex items-center gap-2">
              Polymarket Ecosystem Projects
              <span class="inline-flex items-center justify-center border border-transparent bg-secondary text-secondary-foreground text-xs md:text-xl rounded-md px-2 py-0.5 font-medium w-fit whitespace-nowrap"
                    title="Count">
                <span id="countBadge" class="tabular-nums">0</span>
              </span>
            </h1>
            <p class="text-muted-foreground mt-2 text-sm md:text-base">
              Discover verified tools, apps, and analytics for Polymarket. Projects only with the Polymarket Builders badge.
            </p>
          </div>

          <hr class="border-t border-white/10 my-8">

          <!-- Controls -->
          <div class="flex flex-col sm:flex-row gap-4">
            <div class="relative flex-1 w-full">
              <svg xmlns="http://www.w3.org/2000/svg"
                   class="absolute left-2 top-1/2 h-4 w-4 -translate-y-1/2 text-muted-foreground"
                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle>
              </svg>
              <input id="searchInput"
                class="border-input dark:bg-input/30 h-9 w-full rounded-md border bg-transparent pl-8 pr-3 py-1 shadow-xs outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50 text-sm md:text-base"
                placeholder="Search projects..." value="">
            </div>

            <!-- Select trigger -->
            <div class="relative w-full sm:w-[180px]">
              <button id="catBtn" type="button"
                class="w-full border-input data-[placeholder]:text-muted-foreground dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-transparent px-3 py-2 whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50 text-xs md:text-sm">
                <span id="catLabel" class="line-clamp-1 text-muted-foreground">All Categories</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 opacity-50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="m6 9 6 6 6-6"></path>
                </svg>
              </button>

              <div id="catMenu"
                   class="hidden absolute z-50 mt-2 w-full overflow-hidden rounded-md border border-white/10 bg-background/95 backdrop-blur-md shadow-[0_12px_40px_rgba(0,0,0,0.35)]">
                <div class="p-1">
                  <!-- options injected by JS -->
                </div>
              </div>
            </div>
          </div>

          <!-- Cards grid -->
          <div id="grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6"></div>

          <!-- Empty state -->
          <div id="emptyState" class="hidden rounded-xl border border-white/10 bg-card/40 backdrop-blur-md p-6 text-center">
            <div class="text-lg font-semibold">No results</div>
            <div class="text-muted-foreground text-sm mt-1">Try a different search or category.</div>
          </div>
        </div>
      </main>

      <!-- FOOTER -->
      <footer>
        <div class="flex flex-col md:flex-row justify-between items-center py-8 px-4 md:px-0 text-center md:text-left gap-4 md:gap-0">
          <p class="text-muted-foreground text-[14px]">
            © 2025 POLYNEROMA. All rights reserved.
            <span> Follow us on
              <a class="underline hover:text-[#3b82f6] transition-colors" href="https://x.com/polyneromaxyz" target="_blank" rel="noopener noreferrer">X</a>.
            </span>
          </p>
        </div>
      </footer>

    </div>
  </div>

  <!-- MOBILE SHEET -->
  <div id="mobileSheet" class="fixed inset-0 z-[100] hidden">
    <div id="sheetBackdrop" class="absolute inset-0 bg-black/60"></div>

    <div class="absolute right-0 top-0 h-full w-[86%] max-w-sm bg-background/95 backdrop-blur-md border-l border-white/10 shadow-[0_20px_80px_rgba(0,0,0,0.6)]">
      <div class="flex items-center justify-between p-4 border-b border-white/10">
        <div class="flex items-center gap-2">
          <img
            alt="POLYNEROMA Logo"
            width="24"
            height="24"
            decoding="async"
            style="color:transparent"
            src="https://i.ibb.co.com/Y7246jJ9/Chat-GPT-Image-Dec-21-2025-10-54-20-AM-removebg-preview.png"
          />
          <div class="font-semibold">Menu</div>
        </div>

        <button id="closeSheet" class="rounded-md p-2 hover:bg-accent" aria-label="Close">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
               stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M18 6 6 18"></path><path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>

      <div class="p-4 space-y-2">
        <a class="block rounded-md px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-accent-foreground" href="/Dashboard.php">Dashboard</a>
        <a class="block rounded-md px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-accent-foreground" href="/Portfolio.php">Portfolio</a>
        <a class="block rounded-md px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-accent-foreground" href="/Leaderboard.php">Leaderboard</a>
        <a class="block rounded-md px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-accent-foreground" href="/Markets.php">Markets</a>
        <a class="block rounded-md px-3 py-2 text-sm bg-[#2563EB]/10 text-[#2563EB]" href="/Ecosystem.php">Ecosystem</a>
        <a class="block rounded-md px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-accent-foreground" href="/Builders.php">Builders</a>

        <hr class="border-white/10 my-3" />
        <a class="block rounded-md px-3 py-2 text-sm text-muted-foreground hover:bg-accent hover:text-accent-foreground"
           href="https://x.com/polyneromaxyz" target="_blank" rel="noopener noreferrer">X</a>
      </div>
    </div>
  </div>

  <script>
    // ---------- DATA ----------
    const PROJECTS = [
      {
        name: "PolyAlertHub",
        category: "Alerts",
        desc: "Follow top traders and catch market moves as they happen. Insider, whales, traders, markets, even your own portfolio we track it all so you don’t have to.",
        image: "https://pbs.twimg.com/profile_images/1986838812908195840/qNVVShhW_400x400.jpg",
        website: "https://polyalerthub.com/",
        x: "https://x.com/PolyAlertHub"
      },
      {
        name: "PolySpy",
        category: "Alerts",
        desc: "Get notifications about new markets on Polymarket.",
        image: "https://pbs.twimg.com/profile_images/1978851032756027392/znh7A05Q_400x400.jpg",
        website: "",
        x: "https://x.com/PolySpybot"
      },
      {
        name: "HashDive",
        category: "Analytics",
        desc: "Advanced Polymarket & Kalshi analytics with a special focus on Smart Scores.",
        image: "https://pbs.twimg.com/profile_images/1996865574761054208/w5jyfQPW_200x200.jpg",
        website: "https://www.hashdive.com/",
        x: "https://x.com/hash_dive"
      },
      {
        name: "zerosupercycle",
        category: "Culture",
        desc: "ZSC DAO builds tools & community resources to bring Polymarket into the everyday lexicon.",
        image: "https://pbs.twimg.com/profile_images/1981445426751365121/0FALz7jb_400x400.jpg",
        website: "https://zscdao.com/",
        x: "https://x.com/zscdao"
      },
      {
        name: "PredictFolio",
        category: "Analytics",
        desc: "Track your own portfolio and analyze other traders.",
        image: "https://pbs.twimg.com/profile_images/1990563103134625792/PqRZHzNZ_400x400.jpg",
        website: "https://predictfolio.com/",
        x: "https://x.com/PredictFolio"
      },
      {
        name: "LayerHub",
        category: "Analytics",
        desc: "In-depth analysis of wallets by studying their behavior, activity and much more.",
        image: "https://pbs.twimg.com/profile_images/1767236564810149888/y2X7bZP2_400x400.jpg",
        website: "https://layerhub.xyz/",
        x: "https://x.com/layerhub"
      },
      {
        name: "Berry",
        category: "Trading",
        desc: "Invest without bank accounts.",
        image: "https://pbs.twimg.com/profile_images/1874826562194776064/-Ziq6dgt_400x400.png",
        website: "https://apps.apple.com/ar/app/berry/id6477979345?l=en-GB",
        x: "https://x.com/berryinvesting"
      },
      {
        name: "ZEIT",
        category: "DeFi",
        desc: "ZEIT Finance turns prediction markets into perpetual assets.",
        image: "https://pbs.twimg.com/profile_images/1983893073940578304/yamb9q_i_400x400.jpg",
        website: "https://www.zeit.finance/",
        x: "https://x.com/ZEITFinance"
      },
      {
        name: "fireplace",
        category: "Social",
        desc: "Bet on the news with your friends.",
        image: "https://pbs.twimg.com/profile_images/1948388556990488576/hsA4cvEi_400x400.jpg",
        website: "https://fireplace.gg/",
        x: "https://x.com/fireplacegg"
      },
      {
        name: "Liquid",
        category: "DeFi",
        desc: "Insurance protocol for prediction markets. Choose your safety level.",
        image: "https://pbs.twimg.com/profile_images/1850603917312143360/b0IoTluE_400x400.png",
        website: "https://protocol.useliquid.xyz/",
        x: "https://x.com/getliquid"
      },
      {
        name: "Betmoar",
        category: "Trading",
        desc: "The unified platform for every data point, every decision.",
        image: "https://pbs.twimg.com/profile_images/1929920870660878344/7dYYP0IP_400x400.jpg",
        website: "https://www.betmoar.fun/",
        x: "https://x.com/betmoardotfun"
      },
      {
        name: "Sportstensor",
        category: "Analytics",
        desc: "Beating the odds through collective intelligence.",
        image: "https://pbs.twimg.com/profile_images/1979195442047934464/t2HY2XZD_400x400.jpg",
        website: "https://www.sportstensor.com/",
        x: "https://x.com/sportstensor"
      },
      {
        name: "Nevua Markets",
        category: "Others",
        desc: "Real-time watchlists + alerts in Telegram, Discord and Webhooks.",
        image: "https://pbs.twimg.com/profile_images/1966798147021062144/wGyj8yZo_400x400.jpg",
        website: "https://nevua.markets/",
        x: "https://x.com/NevuaMarkets"
      },
      {
        name: "Polyfactual",
        category: "Analytics",
        desc: "Deep AI research & API layer for prediction markets.",
        image: "https://pbs.twimg.com/profile_images/1944830322077507584/oSNlEgJm_400x400.jpg",
        website: "https://www.polyfactual.com/",
        x: "https://x.com/polyfactual"
      },
      {
        name: "Stand",
        category: "Trading",
        desc: "Pro trading terminal: auto trades, live feeds, alerts, & more.",
        image: "https://pbs.twimg.com/profile_images/1884702654988693504/lW6dUJmw_400x400.jpg",
        website: "https://www.stand.trade/",
        x: "https://x.com/StandDOTtrade"
      },
      {
        name: "okbet",
        category: "Trading",
        desc: "All-in-one prediction markets bot.",
        image: "https://pbs.twimg.com/profile_images/1980776266002206720/VmNez6hJ_400x400.jpg",
        website: "https://tryokbet.com/",
        x: "https://x.com/tryokbet"
      },
      {
        name: "Rodeo",
        category: "Social",
        desc: "Bet on the game in your group chat.",
        image: "https://pbs.twimg.com/profile_images/1985812702061629440/eoFdLx5T_400x400.jpg",
        website: "https://www.rodeo.earth/",
        x: "https://x.com/rodeo"
      },
      {
        name: "Fortuna Protocol",
        category: "Trading",
        desc: "The pro trading terminal for Polymarket. Auto-trade, AI analysis, instant execution.",
        image: "https://pbs.twimg.com/profile_images/1989379781796720640/2Tegl6V3_400x400.jpg",
        website: "https://www.fortunaprotocol.xyz",
        x: "https://x.com/FortunaPro_sol"
      }
    ];

    const CATEGORIES = ["All Categories", "Alerts", "Analytics", "Culture", "Trading", "DeFi", "Social", "Others"];

    // ---------- ICONS ----------
    function iconExternalLink() {
      return `
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="lucide lucide-external-link w-3 h-3 md:w-4 md:h-4 mr-1 md:mr-2" aria-hidden="true">
          <path d="M15 3h6v6"></path>
          <path d="M10 14 21 3"></path>
          <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
        </svg>
      `;
    }

    // ---------- UI STATE ----------
    const $grid = document.getElementById("grid");
    const $count = document.getElementById("countBadge");
    const $search = document.getElementById("searchInput");
    const $empty = document.getElementById("emptyState");
    const $catBtn = document.getElementById("catBtn");
    const $catMenu = document.getElementById("catMenu");
    const $catLabel = document.getElementById("catLabel");

    let activeCategory = "All Categories";

    // ---------- RENDER ----------
    function renderCard(p) {
      // Special-case PolyAlertHub: keep exact card HTML
      if (p && p.name === "PolyAlertHub") {
        return `<div data-slot="card" class="bg-card/60 backdrop-blur-md text-card-foreground rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] flex flex-col h-full gap-4 md:gap-6 py-4 md:py-6"><div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div><div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6"><div data-slot="card-title" class="leading-none font-semibold flex flex-row items-center justify-between"><div class="flex gap-2 md:gap-3 items-center text-base md:text-lg"><img alt="PolyAlertHub" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="rounded-xl w-8 h-8 md:w-12 md:h-12" src="https://pbs.twimg.com/profile_images/1986838812908195840/qNVVShhW_400x400.jpg" style="color: transparent;">PolyAlertHub</div><span data-slot="badge" class="inline-flex items-center justify-center border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs md:text-sm rounded-md">Alerts</span></div></div><div data-slot="card-content" class="px-6 grow"><div data-slot="card-description" class="text-muted-foreground text-sm">Follow top traders and catch market moves as they happen. Insider, whales, traders, markets, even your own portfolio we track it all so you don’t have to.</div></div><div data-slot="card-footer" class="flex items-center px-6 [.border-t]:pt-6 mt-auto"><div class="w-full flex gap-2"><a target="_blank" rel="noopener noreferrer" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-10 text-xs md:text-sm hover:[&amp;_svg]:text-[#3b82f6]" href="https://polyalerthub.com/">${iconExternalLink()}Visit</a><a target="_blank" rel="noopener noreferrer" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1 text-xs md:text-sm hover:[&amp;_svg]:text-[#3b82f6]" href="https://x.com/PolyAlertHub"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x lucide-X w-3 h-3 md:w-4 md:h-4" aria-hidden="true"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" stroke="none" fill="currentColor"></path></svg></a></div></div></div>`;
      }

      // Special-case Fortuna Protocol: keep exact card HTML
      if (p && p.name === "Fortuna Protocol") {
        return `<div data-slot="card" class="bg-card/60 backdrop-blur-md text-card-foreground rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] flex flex-col h-full gap-4 md:gap-6 py-4 md:py-6"><div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div><div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6"><div data-slot="card-title" class="leading-none font-semibold flex flex-row items-center justify-between"><div class="flex gap-2 md:gap-3 items-center text-base md:text-lg"><img alt="Fortuna Protocol" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="rounded-xl w-8 h-8 md:w-12 md:h-12" src="https://pbs.twimg.com/profile_images/1989379781796720640/2Tegl6V3_400x400.jpg" style="color: transparent;">Fortuna Protocol</div><span data-slot="badge" class="inline-flex items-center justify-center border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs md:text-sm rounded-md">Trading</span></div></div><div data-slot="card-content" class="px-6 grow"><div data-slot="card-description" class="text-muted-foreground text-sm">The pro trading terminal for Polymarket. Auto-trade, AI analysis, instant execution.</div></div><div data-slot="card-footer" class="flex items-center px-6 [.border-t]:pt-6 mt-auto"><div class="w-full flex gap-2"><a target="_blank" rel="noopener noreferrer" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-10 text-xs md:text-sm hover:[&amp;_svg]:text-[#3b82f6]" href="https://www.fortunaprotocol.xyz"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-3 h-3 md:w-4 md:h-4 mr-1 md:mr-2" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg>Visit</a><a target="_blank" rel="noopener noreferrer" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1 text-xs md:text-sm hover:[&amp;_svg]:text-[#3b82f6]" href="https://x.com/FortunaPro_sol"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x lucide-X w-3 h-3 md:w-4 md:h-4" aria-hidden="true"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" stroke="none" fill="currentColor"></path></svg></a></div></div></div>`;
      }

      const hasWebsite = !!(p.website && p.website.trim());
      const safeName = (p.name || "").replace(/</g, "&lt;").replace(/>/g, "&gt;");
      const safeDesc = (p.desc || "").replace(/</g, "&lt;").replace(/>/g, "&gt;");
      const safeCat  = (p.category || "Others").replace(/</g, "&lt;").replace(/>/g, "&gt;");

      return `
        <div data-slot="card" class="bg-card/60 backdrop-blur-md text-card-foreground rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] flex flex-col h-full gap-4 md:gap-6 py-4 md:py-6">
          <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>

          <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
            <div data-slot="card-title" class="leading-none font-semibold flex flex-row items-center justify-between">
              <div class="flex gap-2 md:gap-3 items-center text-base md:text-lg">
                <img alt="${safeName}" loading="lazy" width="32" height="32" decoding="async" data-nimg="1" class="rounded-xl w-8 h-8 md:w-12 md:h-12" src="${p.image}" style="color: transparent;">${safeName}
              </div>
              <span data-slot="badge" class="inline-flex items-center justify-center border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-xs md:text-sm rounded-md">${safeCat}</span>
            </div>
          </div>

          <div data-slot="card-content" class="px-6 grow">
            <div data-slot="card-description" class="text-muted-foreground text-sm">${safeDesc}</div>
          </div>

          <div data-slot="card-footer" class="flex items-center px-6 [.border-t]:pt-6 mt-auto">
            <div class="w-full flex gap-2">
              ${
                hasWebsite
                ? `<a target="_blank" rel="noopener noreferrer" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-10 text-xs md:text-sm hover:[&amp;_svg]:text-[#3b82f6]" href="${p.website}">${iconExternalLink()}Visit</a>`
                : `<button data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs dark:bg-input/30 dark:border-input h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-10 text-xs md:text-sm opacity-60 cursor-not-allowed" disabled>No Website</button>`
              }

              ${
                p.x
                ? `<a target="_blank" rel="noopener noreferrer" data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1 text-xs md:text-sm hover:[&amp;_svg]:text-[#3b82f6]" href="${p.x}" aria-label="X"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x lucide-X w-3 h-3 md:w-4 md:h-4" aria-hidden="true"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" stroke="none" fill="currentColor"></path></svg></a>`
                : `<span class="inline-flex items-center justify-center border bg-background shadow-xs dark:bg-input/30 dark:border-input h-8 rounded-md px-3 text-xs md:text-sm flex-1 opacity-60">—</span>`
              }
            </div>
          </div>
        </div>
      `;
    }

    function applyFilters() {
      const q = ($search.value || "").trim().toLowerCase();

      const filtered = PROJECTS.filter(p => {
        const matchText =
          (p.name || "").toLowerCase().includes(q) ||
          (p.desc || "").toLowerCase().includes(q) ||
          (p.category || "").toLowerCase().includes(q);

        const matchCat =
          activeCategory === "All Categories" ||
          (p.category || "") === activeCategory;

        return matchText && matchCat;
      });

      $grid.innerHTML = filtered.map(renderCard).join("");
      $count.textContent = String(filtered.length);
      $empty.classList.toggle("hidden", filtered.length !== 0);
    }

    // ---------- CATEGORY MENU ----------
    function buildCategoryMenu() {
      const wrap = $catMenu.querySelector("div");
      wrap.innerHTML = CATEGORIES.map(cat => {
        const active = (cat === activeCategory);
        return `
          <button type="button" data-cat="${cat}"
            class="w-full text-left rounded-md px-2 py-2 text-sm transition-all
                   ${active ? "bg-[#2563EB]/10 text-[#2563EB]" : "text-muted-foreground hover:bg-accent hover:text-accent-foreground"}">
            ${cat}
          </button>
        `;
      }).join("");

      wrap.querySelectorAll("button[data-cat]").forEach(btn => {
        btn.addEventListener("click", () => {
          activeCategory = btn.getAttribute("data-cat");
          $catLabel.textContent = activeCategory;
          $catLabel.classList.toggle("text-muted-foreground", activeCategory === "All Categories");
          $catLabel.classList.toggle("text-foreground", activeCategory !== "All Categories");
          closeCategoryMenu();
          applyFilters();
          buildCategoryMenu();
        });
      });
    }

    function openCategoryMenu() { $catMenu.classList.remove("hidden"); }
    function closeCategoryMenu() { $catMenu.classList.add("hidden"); }

    $catBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      if ($catMenu.classList.contains("hidden")) openCategoryMenu();
      else closeCategoryMenu();
    });

    document.addEventListener("click", () => closeCategoryMenu());
    document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeCategoryMenu(); });

    // ---------- SEARCH ----------
    $search.addEventListener("input", applyFilters);

    // ---------- MOBILE SHEET ----------
    const $sheet = document.getElementById("mobileSheet");
    const $openSheet = document.getElementById("openSheet");
    const $closeSheet = document.getElementById("closeSheet");
    const $sheetBackdrop = document.getElementById("sheetBackdrop");

    function openSheet() {
      $sheet.classList.remove("hidden");
      document.body.style.overflow = "hidden";
    }
    function closeSheet() {
      $sheet.classList.add("hidden");
      document.body.style.overflow = "";
    }
    $openSheet.addEventListener("click", openSheet);
    $closeSheet.addEventListener("click", closeSheet);
    $sheetBackdrop.addEventListener("click", closeSheet);
    document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeSheet(); });

    // ---------- INIT ----------
    buildCategoryMenu();
    applyFilters();
  </script>

  <!-- Auto set active nav -->
  <script>
    (function(){
      const path = (location.pathname || "/").replace(/\/+$/, "") || "/";
      document.querySelectorAll("a.navlink").forEach(a=>{
        const href = (a.getAttribute("href") || "").replace(/\/+$/, "") || "/";
        const active =
          (href === "/" && path === "/") ||
          (href !== "/" && path.toLowerCase() === href.toLowerCase());
        a.setAttribute("data-active", active ? "true" : "false");
      });
    })();
  </script>
</body>
</html>
