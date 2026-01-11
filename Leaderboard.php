<!DOCTYPE html>
<html lang="en" class="jetbrains_mono_b84eaf9e-module__QAF0rG__variable" suppressHydrationWarning="true">
<head>
  <meta charSet="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="next-size-adjust" content=""/>

  <title>POLYLANORA — Leaderboard</title>
  <meta name="description" content="Advanced analytics for Polymarket"/>
  <link rel="icon" href="/favicon.ico?favicon.ea6e120d.ico" sizes="256x256" type="image/x-icon"/>

  <!-- Font (JetBrains Mono) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind tokens ala shadcn/polydata -->
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          fontFamily: {
            mono: ["JetBrains Mono", "ui-monospace", "SFMono-Regular", "Menlo", "Monaco", "Consolas", "Liberation Mono", "Courier New", "monospace"]
          },
          colors: {
            background: "rgb(var(--background) / <alpha-value>)",
            foreground: "rgb(var(--foreground) / <alpha-value>)",
            card: "rgb(var(--card) / <alpha-value>)",
            muted: "rgb(var(--muted) / <alpha-value>)",
            "muted-foreground": "rgb(var(--muted-foreground) / <alpha-value>)",
            accent: "rgb(var(--accent) / <alpha-value>)",
            "accent-foreground": "rgb(var(--accent-foreground) / <alpha-value>)",
            border: "rgb(var(--border) / <alpha-value>)",
            input: "rgb(var(--input) / <alpha-value>)",
            ring: "rgb(var(--ring) / <alpha-value>)",
            primary: "rgb(var(--primary) / <alpha-value>)",
            destructive: "rgb(var(--destructive) / <alpha-value>)",
          }
        }
      }
    };
  </script>

  <style>
    :root{
      /* FORCE full black background on all modes */
      --background: 0 0 0;
      --foreground: 229 231 235;

      --card: 255 255 255;
      --muted: 243 244 246;
      --muted-foreground: 148 163 184;

      --accent: 31 41 55;
      --accent-foreground: 255 255 255;

      --border: 229 231 235;
      --input: 229 231 235;
      --ring: 59 130 246;

      --primary: 37 99 235;
      --destructive: 239 68 68;
    }
    .dark{
      /* KEEP full black in dark too */
      --background: 0 0 0;
      --foreground: 229 231 235;

      --card: 15 23 42;
      --muted: 17 24 39;
      --muted-foreground: 148 163 184;

      --accent: 31 41 55;
      --accent-foreground: 255 255 255;

      --border: 30 41 59;
      --input: 30 41 59;
      --ring: 99 102 241;

      --primary: 59 130 246;
      --destructive: 248 113 113;
    }

    html, body { height: 100%; }
    body {
      font-family: "JetBrains Mono", ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      background:#000; /* Full black background */
      color:#fff;
    }

    /* polydata-ish helpers */
    .shadow-xs{ box-shadow: 0 1px 2px rgba(0,0,0,.08); }
    .bg-linear-to-br{ background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
    .bg-white\/1{ background-color: rgba(255,255,255,.01); }
  </style>
</head>

<body class="flex min-h-screen flex-col bg-background text-foreground">
  <div hidden=""><!--$--><!--/$--></div>

  <!-- Theme script (persis gaya contoh) -->
  <script>
    ((a,b,c,d,e,f,g,h)=> {
      let i=document.documentElement,j=["light","dark"];
      function k(b){
        var c;
        (Array.isArray(a)?a:[a]).forEach(a=>{
          let c="class"===a,d=c&&f?e.map(a=>f[a]||a):e;
          c?(i.classList.remove(...d),i.classList.add(f&&f[b]?f[b]:b)):i.setAttribute(a,b)
        }),
        c=b,
        h&&j.includes(c)&&(i.style.colorScheme=c)
      }
      if(d)k(d);
      else try{
        let a=localStorage.getItem(b)||c,
            d=g&&"system"===a?window.matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light":a;
        k(d)
      }catch(a){}
    })("class","theme","system",null,["light","dark"],null,true,true)
  </script>

  <div class="flex flex-1 flex-col">
    <div class="mx-auto w-full max-w-6xl flex-1 flex flex-col">

      <!-- HEADER (sama struktur & class seperti contoh) -->
      <header class="pt-4">
        <div class="flex justify-between items-center py-4 px-4 md:px-0">
          <a href="/" class="flex items-center gap-2">
            <div class="h-7 w-7 rounded-xl border border-white/10 bg-white/5 grid place-items-center overflow-hidden">
              <img
                src="https://i.ibb.co.com/Y7246jJ9/Chat-GPT-Image-Dec-21-2025-10-54-20-AM-removebg-preview.png"
                alt="POLYLANORA"
                class="h-7 w-7 object-contain"
                loading="eager"
                decoding="async"
              />
            </div>
            <span class="hidden sm:inline text-sm font-semibold tracking-tight">POLYLANORA</span>
          </a>

          <nav aria-label="Main" data-orientation="horizontal" dir="ltr" data-slot="navigation-menu" data-viewport="true"
               class="group/navigation-menu relative max-w-max flex-1 items-center justify-center hidden md:block">
            <div style="position:relative">
              <ul data-orientation="horizontal" data-slot="navigation-menu-list"
                  class="group flex flex-1 list-none items-center justify-center gap-1" dir="ltr">

                <li data-slot="navigation-menu-item" class="relative">
                  <!-- CHANGED: /Dashboard.php -> /dashboard -->
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]! px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard" aria-hidden="true">
                      <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                      <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                    </svg>
                    Dashboard
                  </a>
                </li>

                <li data-slot="navigation-menu-item" class="relative">
                  <!-- CHANGED: /Portfolio.php -> /portfolio -->
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]! px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/portfolio">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet" aria-hidden="true">
                      <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                      <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                    </svg>
                    Portfolio
                  </a>
                </li>

                <li data-slot="navigation-menu-item" class="relative">
                  <!-- /Leaderboard.php -> /leaderboard -->
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]! px-4 py-2 flex flex-row items-center gap-2"
                     data-active="true" data-slot="navigation-menu-link" href="/leaderboard">
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

                <li data-slot="navigation-menu-item" class="relative">
                  <!-- CHANGED: /Markets.php -> /markets -->
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]! px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/markets">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up" aria-hidden="true">
                      <path d="M16 7h6v6"></path>
                      <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                    </svg>
                    Markets
                  </a>
                </li>

                <li data-slot="navigation-menu-item" class="relative">
                  <!-- CHANGED: /Ecosystem.php -> /ecosystem -->
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]! px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/ecosystem">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                      <path d="M2 12h20"></path>
                    </svg>
                    Ecosystem
                  </a>
                </li>

                <li data-slot="navigation-menu-item" class="relative">
                  <!-- CHANGED: /Builders.php -> /builders -->
                  <a class="navlink data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB] text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]! px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/builders">
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
            <a class="block" href="https://x.com/POLYLANORAxyz" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x lucide-X w-7 h-7" aria-hidden="true">
                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" stroke="none" fill="currentColor"></path>
              </svg>
            </a>

            <button data-slot="sheet-trigger"
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9 md:hidden"
              type="button" aria-haspopup="dialog" aria-expanded="false" data-state="closed">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu h-6 w-6" aria-hidden="true">
                <path d="M4 5h16"></path>
                <path d="M4 12h16"></path>
                <path d="M4 19h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </header>

      <!-- MAIN (match structure) -->
      <main class="flex-1">
        <div class="container mx-auto px-4 md:px-0 max-w-7xl mt-8 md:mt-16 mb-8 md:mb-16">
          <div>
            <h1 class="md:text-3xl font-bold">Leaderboard</h1>
            <p class="text-muted-foreground mt-2 text-sm md:text-base">Top Polymarket traders by trading volume and profit.</p>
          </div>

          <hr class="border-t my-8"/>

          <!-- (sisanya BIARKAN persis seperti file kamu) -->
          <!-- ………… KODE MAIN KAMU TETAP ………… -->

          <div class="space-y-3 md:space-y-4">
            <div class="flex flex-col sm:flex-row gap-4">
              <div class="relative flex-1 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-2 top-1/2 h-4 w-4 -translate-y-1/2 text-muted-foreground" aria-hidden="true">
                  <path d="m21 21-4.34-4.34"></path>
                  <circle cx="11" cy="11" r="8"></circle>
                </svg>
                <input id="lbSearch" data-slot="input"
                  class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input h-9 min-w-0 rounded-md border bg-transparent px-3 py-1 shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive w-full pl-8 text-sm md:text-base"
                  placeholder="Search users..." value=""/>
              </div>

              <div class="flex flex-col sm:flex-row gap-3">
                <button id="lbCatBtn" type="button" role="combobox" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" data-slot="select-trigger" data-size="default"
                  class="border-input data-[placeholder]:text-muted-foreground [&_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-transparent px-3 py-2 whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4 w-full sm:w-[180px] text-xs md:text-sm">
                  <span id="lbCatVal" data-slot="select-value" style="pointer-events:none">All Categories</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down size-4 opacity-50" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                </button>
                <select aria-hidden="true" tabindex="-1" style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal"></select>

                <button id="lbTimeBtn" type="button" role="combobox" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" data-slot="select-trigger" data-size="default"
                  class="border-input data-[placeholder]:text-muted-foreground [&_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-transparent px-3 py-2 whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4 w-full sm:w-[140px] text-xs md:text-sm">
                  <span id="lbTimeVal" data-slot="select-value" style="pointer-events:none">All Time</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down size-4 opacity-50" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                </button>
                <select aria-hidden="true" tabindex="-1" style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal"></select>
              </div>
            </div>

            <div class="relative overflow-x-auto rounded-xl border bg-card/60">
              <div data-slot="table-container" class="relative w-full overflow-x-auto">
                <table data-slot="table" class="w-full caption-bottom text-sm">
                  <thead data-slot="table-header" class="[&_tr]:border-b bg-white/1">
                    <tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors">
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">Rank</th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">User</th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
                        <button id="lbSortProfit" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 py-2 has-[>svg]:px-0 px-2 md:px-0 cursor-pointer text-xs md:text-sm" type="button">
                          Profit/Loss
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down ml-1 h-3 w-3 md:h-4 md:w-4" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                      </th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
                        <button id="lbSortVol" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 py-2 has-[>svg]:px-0 px-2 md:px-0 cursor-pointer text-xs md:text-sm" type="button">
                          Volume
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down ml-1 h-3 w-3 md:h-4 md:w-4" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                        </button>
                      </th>
                    </tr>
                  </thead>

                  <tbody id="lbBody" data-slot="table-body" class="[&_tr:last-child]:border-0">
                    <tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors">
                      <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] h-24 text-center text-xs md:text-sm" colSpan="4">No results.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="flex flex-row items-center justify-between px-2">
              <div class="flex items-center space-x-2">
                <p class="text-sm font-medium">Rows per page</p>
                <button id="lbRowsBtn" type="button" role="combobox" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" data-slot="select-trigger" data-size="default"
                  class="border-input data-[placeholder]:text-muted-foreground [&_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-transparent px-3 py-2 text-sm whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4 h-8 w-[70px]">
                  <span id="lbRowsVal" data-slot="select-value" style="pointer-events:none">10</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down size-4 opacity-50" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                </button>
                <select aria-hidden="true" tabindex="-1" style="position:absolute;border:0;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;word-wrap:normal"></select>
              </div>

              <div id="lbPageInfo" class="flex w-[150px] items-center justify-center text-sm font-medium">Page 1 of 0</div>

              <div class="flex items-center space-x-2">
                <button id="lbFirst" data-slot="button" class="items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 hidden size-8 lg:flex" disabled type="button">
                  <span class="sr-only">Go to first page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-left" aria-hidden="true"><path d="m11 17-5-5 5-5"></path><path d="m18 17-5-5 5-5"></path></svg>
                </button>

                <button id="lbPrev" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-8" disabled type="button">
                  <span class="sr-only">Go to previous page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left" aria-hidden="true"><path d="m15 18-6-6 6-6"></path></svg>
                </button>

                <button id="lbNext" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-8" disabled type="button">
                  <span class="sr-only">Go to next page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg>
                </button>

                <button id="lbLast" data-slot="button" class="items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 hidden size-8 lg:flex" disabled type="button">
                  <span class="sr-only">Go to last page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-right" aria-hidden="true"><path d="m6 17 5-5-5-5"></path><path d="m13 17 5-5-5-5"></path></svg>
                </button>
              </div>
            </div>

          </div>
        </div>

        <div id="lbMenus" class="relative z-50"></div>

        <!-- SCRIPT (data + render) -->
        <script>
          (function () {
            const LEADERBOARD = [
              { username:"ImJustKen", tagline:"Domahhhh", profileUrl:"https://polymarket.com/@ImJustKen?via=polydata", avatar:"https://polymarket-upload.s3.us-east-2.amazonaws.com/profile-image-82662-8ddbc8e8-0500-44b7-bb13-c0b32a40a45d.jpg", profit:2544649.56, volume:427020530.22, category:"All Categories", timeframe:"All Time" },
              { username:"cigarettes", tagline:"friendlyping", profileUrl:"https://polymarket.com/@cigarettes?via=polydata", avatar:"", profit:770038.77, volume:410665038.29, category:"All Categories", timeframe:"All Time" },
              { username:"interstellaar", tagline:"", profileUrl:"https://polymarket.com/@interstellaar?via=polydata", avatar:"", profit:116387.50, volume:399698743.81, category:"All Categories", timeframe:"All Time" },
              { username:"TheGuru", tagline:"", profileUrl:"https://polymarket.com/@TheGuru?via=polydata", avatar:"https://polymarket-upload.s3.us-east-2.amazonaws.com/view_ancient_greek_bust_figure_23_2151616992_e46bd428-7fec-4b3b-95b1-210f906105d8_1725465460772.jpg", profit:574038.70, volume:398282431.48, category:"All Categories", timeframe:"All Time" },
              { username:"risk-manager", tagline:"", profileUrl:"https://polymarket.com/@risk-manager?via=polydata", avatar:"https://polymarket-upload.s3.us-east-2.amazonaws.com/profile-image-910447-e4276f18-6c7b-4e99-8a46-2177423035a0.PNG", profit:151644.27, volume:397831705.33, category:"All Categories", timeframe:"All Time" },
              { username:"debased", tagline:"debased_PM", profileUrl:"https://polymarket.com/@debased?via=polydata", avatar:"https://polymarket-upload.s3.us-east-2.amazonaws.com/trump_farmer_b64c6dcd-13e2-4dda-b1c2-0fb46389fb22_1743074825403.png", profit:1104900.68, volume:342985897.82, category:"All Categories", timeframe:"All Time" },
              { username:"InfiniteCrypt0", tagline:"", profileUrl:"https://polymarket.com/@InfiniteCrypt0?via=polydata", avatar:"https://polymarket-upload.s3.us-east-2.amazonaws.com/infinity_symbol_limitless_logo_design_template_vector_13924f96-6905-4638-9316-c88999d36a2f_1742326096240.jpg", profit:88125.91, volume:326073717.99, category:"All Categories", timeframe:"All Time" },
              { username:"YatSen", tagline:"HarveyMackinto2", profileUrl:"https://polymarket.com/@YatSen?via=polydata", avatar:"https://polymarket-upload.s3.us-east-2.amazonaws.com/profile-image-547319-56f15c24-45ba-4517-9c74-b6d47dc061cb.jpeg", profit:2290826.04, volume:318248603.50, category:"All Categories", timeframe:"All Time" },
              { username:"GMIB", tagline:"", profileUrl:"https://polymarket.com/@GMIB?via=polydata", avatar:"", profit:75946.00, volume:260622188.38, category:"All Categories", timeframe:"All Time" },
              { username:"StarryPath", tagline:"", profileUrl:"https://polymarket.com/@StarryPath?via=polydata", avatar:"", profit:41707.60, volume:237996450.29, category:"All Categories", timeframe:"All Time" },
            ];

            let q = "";
            let category = "All Categories";
            let timeframe = "All Time";
            let rowsPerPage = 10;
            let page = 1;

            let sortKey = "volume";
            let sortDir = "desc";

            const $body = document.getElementById("lbBody");
            const $search = document.getElementById("lbSearch");

            const $catBtn = document.getElementById("lbCatBtn");
            const $catVal = document.getElementById("lbCatVal");

            const $timeBtn = document.getElementById("lbTimeBtn");
            const $timeVal = document.getElementById("lbTimeVal");

            const $rowsBtn = document.getElementById("lbRowsBtn");
            const $rowsVal = document.getElementById("lbRowsVal");

            const $pageInfo = document.getElementById("lbPageInfo");
            const $first = document.getElementById("lbFirst");
            const $prev = document.getElementById("lbPrev");
            const $next = document.getElementById("lbNext");
            const $last = document.getElementById("lbLast");

            const $sortProfit = document.getElementById("lbSortProfit");
            const $sortVol = document.getElementById("lbSortVol");

            const $menus = document.getElementById("lbMenus");

            function money(n) {
              const sign = n >= 0 ? "+" : "-";
              const abs = Math.abs(n);
              return sign + new Intl.NumberFormat("en-US", {
                style: "currency",
                currency: "USD",
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
              }).format(abs);
            }
            function usd(n) {
              return new Intl.NumberFormat("en-US", {
                style: "currency",
                currency: "USD",
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
              }).format(n);
            }
            function escapeHtml(s) {
              return String(s || "").replace(/[&<>"']/g, (c) => ({
                "&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"
              }[c]));
            }
            function initial(name) {
              const t = (name || "").trim();
              return t ? t[0].toUpperCase() : "?";
            }

            function rankIcon(rank) {
              if (rank === 1) {
                return `
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-trophy h-3 w-3 md:h-4 md:w-4 text-yellow-500" aria-hidden="true">
                    <path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"></path>
                    <path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"></path>
                    <path d="M18 9h1.5a1 1 0 0 0 0-5H18"></path>
                    <path d="M4 22h16"></path>
                    <path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"></path>
                    <path d="M6 9H4.5a1 1 0 0 1 0-5H6"></path>
                  </svg>
                `;
              }
              if (rank === 2) {
                return `
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-medal h-3 w-3 md:h-4 md:w-4 text-gray-400" aria-hidden="true">
                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                    <path d="M11 12 5.12 2.2"></path>
                    <path d="m13 12 5.88-9.8"></path>
                    <path d="M8 7h8"></path>
                    <circle cx="12" cy="17" r="5"></circle>
                    <path d="M12 18v-2h-.5"></path>
                  </svg>
                `;
              }
              if (rank === 3) {
                return `
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-medal h-3 w-3 md:h-4 md:w-4 text-orange-600" aria-hidden="true">
                    <path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path>
                    <path d="M11 12 5.12 2.2"></path>
                    <path d="m13 12 5.88-9.8"></path>
                    <path d="M8 7h8"></path>
                    <circle cx="12" cy="17" r="5"></circle>
                    <path d="M12 18v-2h-.5"></path>
                  </svg>
                `;
              }
              return `<span class="text-xs md:text-sm">${rank}</span>`;
            }

            function avatarCell(item) {
              const img = (item.avatar || "").trim();
              if (img) {
                return `
                  <span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden rounded-full border border-white/10 h-8 w-8 md:h-10 md:w-10">
                    <img data-slot="avatar-image" class="aspect-square size-full" alt="${escapeHtml(item.username)}" src="${escapeHtml(img)}">
                  </span>
                `;
              }
              return `
                <span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden rounded-full border border-white/10 h-8 w-8 md:h-10 md:w-10">
                  <span data-slot="avatar-fallback" class="bg-linear-to-br from-gray-800 to-black flex size-full items-center justify-center rounded-full text-xs md:text-sm">
                    ${escapeHtml(initial(item.username))}
                  </span>
                </span>
              `;
            }

            function compute() {
              const needle = q.trim().toLowerCase();
              let rows = LEADERBOARD.slice();

              if (needle) {
                rows = rows.filter(r => ((r.username + " " + (r.tagline || "")).toLowerCase()).includes(needle));
              }
              if (category && category !== "All Categories") rows = rows.filter(r => r.category === category);
              if (timeframe && timeframe !== "All Time") rows = rows.filter(r => r.timeframe === timeframe);

              rows.sort((a, b) => {
                const va = (sortKey === "profit") ? a.profit : a.volume;
                const vb = (sortKey === "profit") ? b.profit : b.volume;
                const diff = (va - vb);
                return (sortDir === "asc") ? diff : -diff;
              });

              return rows;
            }

            function render() {
              const rows = compute();
              const totalPages = Math.max(1, Math.ceil(rows.length / rowsPerPage));
              page = Math.min(Math.max(1, page), totalPages);

              const start = (page - 1) * rowsPerPage;
              const slice = rows.slice(start, start + rowsPerPage);

              if (!slice.length) {
                $body.innerHTML = `
                  <tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors">
                    <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] h-24 text-center text-xs md:text-sm" colSpan="4">No results.</td>
                  </tr>
                `;
              } else {
                $body.innerHTML = slice.map((item, idx) => {
                  const rank = start + idx + 1;
                  const profitClass = item.profit >= 0 ? "text-emerald-500/70" : "text-red-500/80";
                  const profitText = money(item.profit);

                  return `
                    <tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false">
                      <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
                        ${rankIcon(rank)}
                      </td>
                      <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
                        <div class="flex items-center space-x-2 md:space-x-3">
                          ${avatarCell(item)}
                          <div class="min-w-0">
                            <p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">
                              <a href="${escapeHtml(item.profileUrl)}" target="_blank" rel="noopener noreferrer" class="hover:underline">${escapeHtml(item.username)}</a>
                            </p>
                            <p class="text-xs md:text-sm text-muted-foreground truncate">${escapeHtml(item.tagline || "")}</p>
                          </div>
                        </div>
                      </td>
                      <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
                        <div class="${profitClass} text-xs md:text-sm">${escapeHtml(profitText)}</div>
                      </td>
                      <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&:has([role=checkbox])]:pr-0 [&>[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
                        <div class="text-xs md:text-sm">${escapeHtml(usd(item.volume))}</div>
                      </td>
                    </tr>
                  `;
                }).join("");
              }

              $pageInfo.textContent = `Page ${page} of ${Math.max(0, Math.ceil(rows.length / rowsPerPage))}`;

              const isFirst = page === 1;
              const isLast = page === totalPages;

              $first.disabled = isFirst;
              $prev.disabled = isFirst;
              $next.disabled = isLast;
              $last.disabled = isLast;

              if (sortKey === "profit") {
                $sortProfit.classList.add("underline");
                $sortVol.classList.remove("underline");
              } else {
                $sortVol.classList.add("underline");
                $sortProfit.classList.remove("underline");
              }
            }

            function openMenu(anchorEl, options, onPick) {
              closeMenus();
              const rect = anchorEl.getBoundingClientRect();
              const menu = document.createElement("div");
              menu.className = "fixed rounded-xl border bg-background/95 backdrop-blur shadow-xl overflow-hidden";
              menu.style.minWidth = rect.width + "px";
              menu.style.top = (rect.bottom + 6) + "px";
              menu.style.left = rect.left + "px";

              const list = document.createElement("div");
              list.className = "py-1";
              options.forEach(opt => {
                const btn = document.createElement("button");
                btn.type = "button";
                btn.className = "w-full text-left px-3 py-2 text-sm hover:bg-muted/50";
                btn.textContent = opt;
                btn.addEventListener("click", () => { onPick(opt); closeMenus(); });
                list.appendChild(btn);
              });

              menu.appendChild(list);
              $menus.appendChild(menu);

              setTimeout(() => {
                window.addEventListener("mousedown", outsideClick, { once: true });
                window.addEventListener("scroll", closeMenus, { once: true, passive: true });
                window.addEventListener("resize", closeMenus, { once: true });
              }, 0);

              function outsideClick(e) {
                if (!menu.contains(e.target) && e.target !== anchorEl) closeMenus();
              }
            }
            function closeMenus() { $menus.innerHTML = ""; }

            $search.addEventListener("input", (e) => { q = e.target.value || ""; page = 1; render(); });

            $sortProfit.addEventListener("click", () => {
              if (sortKey === "profit") sortDir = (sortDir === "desc" ? "asc" : "desc");
              else { sortKey = "profit"; sortDir = "desc"; }
              page = 1; render();
            });

            $sortVol.addEventListener("click", () => {
              if (sortKey === "volume") sortDir = (sortDir === "desc" ? "asc" : "desc");
              else { sortKey = "volume"; sortDir = "desc"; }
              page = 1; render();
            });

            $first.addEventListener("click", () => { page = 1; render(); });
            $prev.addEventListener("click", () => { page = Math.max(1, page - 1); render(); });
            $next.addEventListener("click", () => { page = page + 1; render(); });
            $last.addEventListener("click", () => {
              const totalPages = Math.max(1, Math.ceil(compute().length / rowsPerPage));
              page = totalPages; render();
            });

            $catBtn.addEventListener("click", () => {
              openMenu($catBtn, ["All Categories"], (val) => { category = val; $catVal.textContent = val; page = 1; render(); });
            });

            $timeBtn.addEventListener("click", () => {
              openMenu($timeBtn, ["All Time"], (val) => { timeframe = val; $timeVal.textContent = val; page = 1; render(); });
            });

            $rowsBtn.addEventListener("click", () => {
              openMenu($rowsBtn, ["10","25","50"], (val) => { rowsPerPage = parseInt(val, 10) || 10; $rowsVal.textContent = String(rowsPerPage); page = 1; render(); });
            });

            render();
          })();
        </script>

      </main>

      <!-- FOOTER (sama) -->
      <footer>
        <div class="flex flex-col md:flex-row justify-between items-center py-8 px-4 md:px-0 text-center md:text-left gap-4 md:gap-0">
          <p class="text-muted-foreground text-[14px]">© 2025 POLYLANORA. All rights reserved. <span>Follow us on <a class="underline hover:text-[#3b82f6] transition-colors" href="https://x.com/POLYLANORAxyz" target="_blank" rel="noopener noreferrer">X</a>.</span></p>
        </div>
      </footer>

    </div>
  </div>

  <!-- Auto set active nav -->
  <script>
    (function(){
      const path = (location.pathname || "/").replace(/\/+$/, "") || "/";
      document.querySelectorAll("a.navlink").forEach(a=>{
        const href = (a.getAttribute("href") || "").replace(/\/+$/, "") || "/";
        const active =
          (href === "/" && path === "/") ||
          (href !== "/" && path.startsWith(href));
        a.setAttribute("data-active", active ? "true" : "false");
      });
    })();
  </script>
</body>
</html>

