<!doctype html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>POLYLANORA — Markets</title>
  <meta name="description" content="Explore all active prediction markets (Polydata-style UI)." />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind config: shadcn-like tokens so classes like bg-card/60, text-muted-foreground, border-input work -->
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          fontFamily: {
            mono: ["JetBrains Mono", "ui-monospace", "SFMono-Regular", "Menlo", "Monaco", "Consolas", "Liberation Mono", "Courier New", "monospace"],
          },
          colors: {
            background: "hsl(var(--background) / <alpha-value>)",
            foreground: "hsl(var(--foreground) / <alpha-value>)",
            card: "hsl(var(--card) / <alpha-value>)",
            "card-foreground": "hsl(var(--card-foreground) / <alpha-value>)",
            popover: "hsl(var(--popover) / <alpha-value>)",
            "popover-foreground": "hsl(var(--popover-foreground) / <alpha-value>)",
            muted: "hsl(var(--muted) / <alpha-value>)",
            "muted-foreground": "hsl(var(--muted-foreground) / <alpha-value>)",
            accent: "hsl(var(--accent) / <alpha-value>)",
            "accent-foreground": "hsl(var(--accent-foreground) / <alpha-value>)",
            border: "hsl(var(--border) / <alpha-value>)",
            input: "hsl(var(--input) / <alpha-value>)",
            ring: "hsl(var(--ring) / <alpha-value>)",
            destructive: "hsl(var(--destructive) / <alpha-value>)",
          },
          boxShadow: {
            xs: "0 1px 2px 0 rgb(0 0 0 / 0.05)",
          }
        }
      }
    }
  </script>

  <style>
    /* Force full-black background on all themes */
    :root{
      --background: 0 0% 0%;
      --foreground: 210 40% 98%;

      --card: 0 0% 0%;
      --card-foreground: 210 40% 98%;

      --popover: 0 0% 0%;
      --popover-foreground: 210 40% 98%;

      --muted: 217.2 32.6% 17.5%;
      --muted-foreground: 215 20.2% 65.1%;

      --accent: 217.2 32.6% 17.5%;
      --accent-foreground: 210 40% 98%;

      --border: 217.2 32.6% 17.5%;
      --input: 217.2 32.6% 17.5%;
      --ring: 212.7 26.8% 83.9%;

      --destructive: 0 62.8% 30.6%;
    }
    .dark{
      --background: 0 0% 0%;
      --foreground: 210 40% 98%;

      --card: 0 0% 0%;
      --card-foreground: 210 40% 98%;

      --popover: 0 0% 0%;
      --popover-foreground: 210 40% 98%;

      --muted: 217.2 32.6% 17.5%;
      --muted-foreground: 215 20.2% 65.1%;

      --accent: 217.2 32.6% 17.5%;
      --accent-foreground: 210 40% 98%;

      --border: 217.2 32.6% 17.5%;
      --input: 217.2 32.6% 17.5%;
      --ring: 212.7 26.8% 83.9%;

      --destructive: 0 62.8% 30.6%;
    }
    html, body { height: 100%; }
    body { font-family: JetBrains Mono, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }
    .no-scrollbar::-webkit-scrollbar{ display:none; }
    .no-scrollbar{ -ms-overflow-style:none; scrollbar-width:none; }
  </style>
</head>

<body class="flex min-h-screen flex-col bg-background text-foreground" style="">
  <div hidden=""></div>

  <!-- EXACT theme script style (as you pasted) -->
  <script>
    ((a,b,c,d,e,f,g,h)=>{let i=document.documentElement,j=["light","dark"];
      function k(b){var c;
        (Array.isArray(a)?a:[a]).forEach(a=>{
          let c="class"===a,d=c&&f?e.map(a=>f[a]||a):e;
          c?(i.classList.remove(...d),i.classList.add(f&&f[b]?f[b]:b)):i.setAttribute(a,b)
        }),
        c=b,h&&j.includes(c)&&(i.style.colorScheme=c)
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

      <!-- HEADER -->
      <header class="pt-4">
        <div class="flex justify-between items-center py-4 px-4 md:px-0">
          <a href="/" class="flex items-center gap-2" aria-label="POLYLANORA Home">
            <img
              src="https://i.ibb.co.com/Y7246jJ9/Chat-GPT-Image-Dec-21-2025-10-54-20-AM-removebg-preview.png"
              alt="POLYLANORA Logo"
              width="28"
              height="28"
              decoding="async"
              style="color:transparent"
            />
          </a>

          <!-- DESKTOP NAV (same structure/classes vibe) -->
          <nav aria-label="Main" data-orientation="horizontal" dir="ltr" data-slot="navigation-menu" data-viewport="true"
               class="group/navigation-menu relative max-w-max flex-1 items-center justify-center hidden md:block">
            <div style="position:relative">
              <ul data-orientation="horizontal" data-slot="navigation-menu-list"
                  class="group flex flex-1 list-none items-center justify-center gap-1" dir="ltr">

                <!-- Dashboard -->
                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                            focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Dashboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-layout-dashboard" aria-hidden="true" width="24" height="24">
                      <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                      <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                    </svg>
                    Dashboard
                  </a>
                </li>

                <!-- Portfolio -->
                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                            focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Portfolio.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-wallet" aria-hidden="true" width="24" height="24">
                      <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                      <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                    </svg>
                    Portfolio
                  </a>
                </li>

                <!-- Leaderboard -->
                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                            focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Leaderboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-trophy" aria-hidden="true" width="24" height="24">
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

                <!-- Markets (active) -->
                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                            focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="true" data-slot="navigation-menu-link" href="/Markets.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-trending-up" aria-hidden="true" width="24" height="24">
                      <path d="M16 7h6v6"></path>
                      <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                    </svg>
                    Markets
                  </a>
                </li>

                <!-- Ecosystem -->
                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                            focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Ecosystem.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-globe" aria-hidden="true" width="24" height="24">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                      <path d="M2 12h20"></path>
                    </svg>
                    Ecosystem
                  </a>
                </li>

                <!-- Builders -->
                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                            focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Builders.php">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-blocks" aria-hidden="true" width="24" height="24">
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
            <!-- X icon -->
            <a class="block" href="https://x.com/POLYLANORAxyz" target="_blank" rel="noopener noreferrer" aria-label="X">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="lucide lucide-x lucide-X w-7 h-7" aria-hidden="true">
                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"
                      stroke="none" fill="currentColor"></path>
              </svg>
            </a>

            <!-- Mobile menu button -->
            <button id="mobileMenuBtn"
              data-slot="sheet-trigger"
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9 md:hidden"
              type="button" aria-haspopup="dialog" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                   fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-menu h-6 w-6" aria-hidden="true">
                <path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile sheet -->
        <div id="mobileSheet" class="md:hidden hidden px-4 pb-4">
          <div class="rounded-xl border border-input bg-card/60 p-3">
            <div class="grid grid-cols-2 gap-2 text-sm">
              <a class="rounded-md px-3 py-2 hover:bg-accent" href="/Dashboard.php">Dashboard</a>
              <a class="rounded-md px-3 py-2 hover:bg-accent" href="/Portfolio.php">Portfolio</a>
              <a class="rounded-md px-3 py-2 hover:bg-accent" href="/Leaderboard.php">Leaderboard</a>
              <a class="rounded-md px-3 py-2 hover:bg-accent bg-[#2563EB]/10 text-[#2563EB]" href="/Markets.php">Markets</a>
              <a class="rounded-md px-3 py-2 hover:bg-accent" href="/Ecosystem.php">Ecosystem</a>
              <a class="rounded-md px-3 py-2 hover:bg-accent" href="/Builders.php">Builders</a>
            </div>
          </div>
        </div>
      </header>

      <!-- MAIN -->
      <main class="flex-1">
        <div class="container mx-auto px-4 md:px-0 max-w-7xl mt-8 md:mt-16 mb-8 md:mb-16">
          <div>
            <h1 class="md:text-3xl font-bold">Markets</h1>
            <p class="text-muted-foreground mt-2 text-sm md:text-base">Explore all active prediction markets on Polymarket.</p>
          </div>

          <hr class="border-t my-8 border-border" />

          <div class="space-y-3 md:space-y-4">
            <div class="flex flex-col gap-4 sm:flex-row">
              <!-- Search -->
              <div class="relative flex-1 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-search absolute left-2 top-1/2 h-4 w-4 -translate-y-1/2 text-muted-foreground" aria-hidden="true">
                  <path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle>
                </svg>
                <input id="searchInput" data-slot="input"
                  class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input
                         h-9 min-w-0 rounded-md border bg-transparent px-3 py-1 shadow-xs transition-[color,box-shadow] outline-none
                         file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium
                         disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50
                         focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                         aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         w-full pl-8 text-sm md:text-base"
                  placeholder="Search markets..." value="" />
              </div>

              <!-- Tags dropdown -->
              <div class="relative">
                <button id="tagsBtn" data-slot="dropdown-menu-trigger"
                  class="inline-flex items-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                         [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                         focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                         aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50
                         h-9 px-4 py-2 has-[>svg]:px-3 justify-between text-xs md:text-sm"
                  type="button" aria-haspopup="menu" aria-expanded="false">
                  <span id="tagsBtnLabel">Tags (0)</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down text-muted-foreground" aria-hidden="true">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </button>

                <div id="tagsMenu" class="hidden absolute right-0 mt-2 z-50 w-56 rounded-xl border border-input bg-popover shadow-xs overflow-hidden">
                  <div class="px-3 py-2 text-xs text-muted-foreground border-b border-border">Filter by tags</div>
                  <div id="tagsList" class="max-h-64 overflow-auto no-scrollbar p-2 space-y-1"></div>
                  <div class="border-t border-border p-2 flex gap-2">
                    <button id="tagsClear"
                      class="inline-flex flex-1 items-center justify-center rounded-md border border-input bg-background px-3 py-2 text-xs hover:bg-accent">Clear</button>
                    <button id="tagsApply"
                      class="inline-flex flex-1 items-center justify-center rounded-md bg-[#2563EB] text-white px-3 py-2 text-xs hover:opacity-90">Apply</button>
                  </div>
                </div>
              </div>

              <!-- Advanced Filters popover -->
              <div class="relative">
                <button id="advBtn" data-slot="popover-trigger"
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                         [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                         focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                         aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50
                         h-9 px-4 py-2 has-[>svg]:px-3 text-xs md:text-sm"
                  type="button" aria-haspopup="dialog" aria-expanded="false">
                  Advanced Filters
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down text-muted-foreground" aria-hidden="true">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </button>

                <div id="advPopover" class="hidden absolute right-0 mt-2 z-50 w-[340px] rounded-xl border border-input bg-popover shadow-xs overflow-hidden">
                  <div class="px-3 py-3 border-b border-border">
                    <div class="font-semibold text-sm">Advanced Filters</div>
                    <div class="text-xs text-muted-foreground mt-1">Optional filters (UI only).</div>
                  </div>
                  <div class="p-3 space-y-3">
                    <div class="grid grid-cols-2 gap-2">
                      <div>
                        <label class="text-xs text-muted-foreground">Min Volume ($)</label>
                        <input id="minVol" class="mt-1 w-full h-9 rounded-md border border-input bg-background px-3 py-2 text-sm outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50"
                               placeholder="0" inputmode="numeric" />
                      </div>
                      <div>
                        <label class="text-xs text-muted-foreground">Min Liquidity ($)</label>
                        <input id="minLiq" class="mt-1 w-full h-9 rounded-md border border-input bg-background px-3 py-2 text-sm outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50"
                               placeholder="0" inputmode="numeric" />
                      </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                      <div>
                        <label class="text-xs text-muted-foreground">Sort</label>
                        <select id="sortBy" class="mt-1 w-full h-9 rounded-md border border-input bg-background px-3 py-2 text-sm outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50">
                          <option value="volume_desc">Volume (desc)</option>
                          <option value="volume_asc">Volume (asc)</option>
                          <option value="liq_desc">Liquidity (desc)</option>
                          <option value="liq_asc">Liquidity (asc)</option>
                          <option value="ends_asc">Ends (soon)</option>
                          <option value="ends_desc">Ends (late)</option>
                        </select>
                      </div>
                      <div>
                        <label class="text-xs text-muted-foreground">Only Featured</label>
                        <select id="onlyFeatured" class="mt-1 w-full h-9 rounded-md border border-input bg-background px-3 py-2 text-sm outline-none focus-visible:ring-[3px] focus-visible:ring-ring/50">
                          <option value="any">Any</option>
                          <option value="yes">Yes</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="border-t border-border p-3 flex gap-2">
                    <button id="advReset" class="inline-flex flex-1 items-center justify-center rounded-md border border-input bg-background px-3 py-2 text-xs hover:bg-accent">Reset</button>
                    <button id="advApply" class="inline-flex flex-1 items-center justify-center rounded-md bg-[#2563EB] text-white px-3 py-2 text-xs hover:opacity-90">Apply</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- TABLE -->
            <div class="rounded-xl border border-input bg-card/60 overflow-x-auto">
              <div data-slot="table-container" class="relative w-full overflow-x-auto">
                <table data-slot="table" class="w-full caption-bottom text-sm">
                  <thead data-slot="table-header" class="[&_tr]:border-b bg-white/1">
                    <tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors">
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm" style="width: 30px;"></th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm" style="width: 150px;">Event</th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm" style="width: 150px;">
                        <button id="sortVolume"
                          data-slot="button"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                                 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                                 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                                 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                                 hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 py-2 has-[>svg]:px-0 text-xs md:text-sm px-2 md:px-4"
                          type="button">
                          Volume
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                               fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                               class="lucide lucide-arrow-up-down ml-1 md:ml-2 h-3 w-3 md:h-4 md:w-4" aria-hidden="true">
                            <path d="m21 16-4 4-4-4"></path><path d="M17 20V4"></path><path d="m3 8 4-4 4 4"></path><path d="M7 4v16"></path>
                          </svg>
                        </button>
                      </th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm" style="width: 150px;">
                        <button id="sortLiquidity"
                          data-slot="button"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                                 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                                 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                                 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                                 hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 py-2 has-[>svg]:px-0 text-xs md:text-sm px-2 md:px-4"
                          type="button">
                          Liquidity
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                               fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                               class="lucide lucide-arrow-up-down ml-1 md:ml-2 h-3 w-3 md:h-4 md:w-4" aria-hidden="true">
                            <path d="m21 16-4 4-4-4"></path><path d="M17 20V4"></path><path d="m3 8 4-4 4 4"></path><path d="M7 4v16"></path>
                          </svg>
                        </button>
                      </th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm" style="width: 150px;">
                        <button id="sortEnds"
                          data-slot="button"
                          class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                                 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                                 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                                 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                                 hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 py-2 has-[>svg]:px-0 text-xs md:text-sm px-2 md:px-4"
                          type="button">
                          Ends
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                               fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                               class="lucide lucide-arrow-up-down ml-1 md:ml-2 h-3 w-3 md:h-4 md:w-4" aria-hidden="true">
                            <path d="m21 16-4 4-4-4"></path><path d="M17 20V4"></path><path d="m3 8 4-4 4 4"></path><path d="M7 4v16"></path>
                          </svg>
                        </button>
                      </th>
                      <th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm" style="width: 150px;">Tags</th>
                    </tr>
                  </thead>

                  <tbody id="tbody" data-slot="table-body" class="[&_tr:last-child]:border-0"></tbody>
                </table>
              </div>
            </div>

            <!-- Pagination row -->
            <div class="flex flex-row items-center justify-between px-2">
              <div class="flex items-center space-x-2">
                <p class="text-sm font-medium">Rows per page</p>

                <button id="rowsBtn" type="button" role="combobox" aria-expanded="false" dir="ltr"
                  data-slot="select-trigger" data-size="default"
                  class="border-input data-[placeholder]:text-muted-foreground [&_svg:not([class*='text-'])]:text-muted-foreground
                         focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-transparent px-3 py-2 text-sm whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none
                         focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50
                         data-[size=default]:h-9 data-[size=sm]:h-8
                         [&_svg]:pointer-events-none [&_svg]:shrink-0 [&_svg:not([class*='size-'])]:size-4 h-8 w-[70px]">
                  <span id="rowsValue" data-slot="select-value" style="pointer-events: none;">10</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-down size-4 opacity-50" aria-hidden="true">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </button>

                <div id="rowsMenu" class="hidden absolute mt-10 z-50 w-[110px] rounded-xl border border-input bg-popover shadow-xs overflow-hidden">
                  <button class="w-full text-left px-3 py-2 text-sm hover:bg-accent" data-rows="10">10</button>
                  <button class="w-full text-left px-3 py-2 text-sm hover:bg-accent" data-rows="25">25</button>
                  <button class="w-full text-left px-3 py-2 text-sm hover:bg-accent" data-rows="50">50</button>
                </div>
              </div>

              <div id="pageLabel" class="flex w-[150px] items-center justify-center text-sm font-medium">Page 1 of 1</div>

              <div class="flex items-center space-x-2">
                <button id="firstBtn" data-slot="button"
                  class="items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                         [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                         focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                         aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 hidden size-8 lg:flex"
                  type="button" disabled>
                  <span class="sr-only">Go to first page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevrons-left" aria-hidden="true">
                    <path d="m11 17-5-5 5-5"></path><path d="m18 17-5-5 5-5"></path>
                  </svg>
                </button>

                <button id="prevBtn" data-slot="button"
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                         [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                         focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                         aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-8"
                  type="button" disabled>
                  <span class="sr-only">Go to previous page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-left" aria-hidden="true">
                    <path d="m15 18-6-6 6-6"></path>
                  </svg>
                </button>

                <button id="nextBtn" data-slot="button"
                  class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                         [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                         focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                         aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-8"
                  type="button">
                  <span class="sr-only">Go to next page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-right" aria-hidden="true">
                    <path d="m9 18 6-6-6-6"></path>
                  </svg>
                </button>

                <button id="lastBtn" data-slot="button"
                  class="items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                         [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
                         focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                         aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive
                         border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 hidden size-8 lg:flex"
                  type="button">
                  <span class="sr-only">Go to last page</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevrons-right" aria-hidden="true">
                    <path d="m6 17 5-5-5-5"></path><path d="m13 17 5-5-5-5"></path>
                  </svg>
                </button>
              </div>
            </div>

          </div>
        </div>
      </main>

      <!-- FOOTER -->
      <footer>
        <div class="flex flex-col md:flex-row justify-between items-center py-8 px-4 md:px-0 text-center md:text-left gap-4 md:gap-0">
          <p class="text-muted-foreground text-[14px]">
            © 2025 POLYLANORA. All rights reserved.
            <span>Follow us on <a class="underline hover:text-[#3b82f6] transition-colors" href="https://x.com/POLYLANORAxyz" target="_blank" rel="noopener noreferrer">X</a>.</span>
          </p>
        </div>
      </footer>

    </div>
  </div>

  <next-route-announcer style="position: absolute;"></next-route-announcer>

  <!-- JS: UI behavior + sample data + filtering/sorting/pagination -->
  <script>
    // ------- SAMPLE DATA (replace later with real API if you want) -------
    const MARKETS = [
      {
        id: "m1",
        event: "Super Bowl Champion 2026",
        volume: 627.3e6,
        liquidity: 11e6,
        ends: "02/08/2026",
        tags: ["Sports"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/football-logo.png",
        url: "https://polymarket.com/event/super-bowl-champion-2026-731?via=polydata",
        featured: true,
      },
      {
        id: "m2",
        event: "Democratic Presidential Nominee 2028",
        volume: 390.2e6,
        liquidity: 18.1e6,
        ends: "11/07/2028",
        tags: ["Elections","Politics"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/democrats+2028+donkey.png",
        url: "https://polymarket.com/event/democratic-presidential-nominee-2028?via=polydata",
        featured: false,
      },
      {
        id: "m3",
        event: "Presidential Election Winner 2028",
        volume: 154.7e6,
        liquidity: 10.9e6,
        ends: "11/07/2028",
        tags: ["Elections","Politics"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/presidential-election-winner-2024-afdda358-219d-448a-abb5-ba4d14118d71.png",
        url: "https://polymarket.com/event/presidential-election-winner-2028?via=polydata",
        featured: true,
      },
      {
        id: "m4",
        event: "UEFA Champions League Winner",
        volume: 144.6e6,
        liquidity: 11.1e6,
        ends: "05/31/2026",
        tags: ["Sports"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/uefa-champions-league-2025-26-which-teams-qualify-StbSIjaEx2St.png",
        url: "https://polymarket.com/event/uefa-champions-league-winner?via=polydata",
        featured: false,
      },
      {
        id: "m5",
        event: "English Premier League Winner",
        volume: 139.4e6,
        liquidity: 7.3e6,
        ends: "05/27/2026",
        tags: ["Sports"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/english-premier-league-winner-VFcNkpZeA9Sz.jpg",
        url: "https://polymarket.com/event/english-premier-league-winner?via=polydata",
        featured: false,
      },
      {
        id: "m6",
        event: "What price will Bitcoin hit in 2025?",
        volume: 134.2e6,
        liquidity: 4.8e6,
        ends: "01/01/2026",
        tags: ["Crypto"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/BTC+fullsize.png",
        url: "https://polymarket.com/event/what-price-will-bitcoin-hit-in-2025?via=polydata",
        featured: true,
      },
      {
        id: "m7",
        event: "Highest grossing movie in 2025?",
        volume: 109.6e6,
        liquidity: 9.6e6,
        ends: "12/31/2025",
        tags: ["Culture"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/highest-grossing-movie-in-2025-23YRHKqq6Ete.jpg",
        url: "https://polymarket.com/event/highest-grossing-movie-in-2025?via=polydata",
        featured: false,
      },
      {
        id: "m8",
        event: "2026 NBA Champion",
        volume: 93.3e6,
        liquidity: 10.5e6,
        ends: "07/01/2026",
        tags: ["Sports"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/nba-finals-points-leader-7g2ZEZvMXxLb.jpg",
        url: "https://polymarket.com/event/2026-nba-champion?via=polydata",
        featured: true,
      },
      {
        id: "m9",
        event: "Portugal Presidential Election",
        volume: 77.6e6,
        liquidity: 1.1e6,
        ends: "01/25/2026",
        tags: ["Politics","Elections"],
        img: "https://polymarket-upload.s3.us-east-2.amazonaws.com/portugal-presidential-election-_h_A97vllNOX.png",
        url: "https://polymarket.com/event/portugal-presidential-election?via=polydata",
        featured: false,
      },
    ];

    // ------- Helpers -------
    const $ = (id) => document.getElementById(id);
    const fmtMoney = (n) => {
      const abs = Math.abs(n);
      if (abs >= 1e9) return `$${(n/1e9).toFixed(1)}B`;
      if (abs >= 1e6) return `$${(n/1e6).toFixed(1)}M`;
      if (abs >= 1e3) return `$${(n/1e3).toFixed(1)}K`;
      return `$${n.toFixed(0)}`;
    };
    const parseDate = (mmddyyyy) => {
      // expects "MM/DD/YYYY"
      const [m,d,y] = mmddyyyy.split("/").map(x=>parseInt(x,10));
      return new Date(y, m-1, d).getTime();
    };
    const safeNum = (v) => {
      const x = Number(String(v||"").replace(/[^\d.]/g,""));
      return Number.isFinite(x) ? x : 0;
    };

    // ------- State -------
    let state = {
      q: "",
      selectedTags: new Set(),
      minVol: 0,
      minLiq: 0,
      onlyFeatured: "any",
      sort: "volume_desc",
      page: 1,
      rows: 10
    };

    // ------- Tag UI -------
    function buildTags() {
      const all = new Map(); // tag -> count
      MARKETS.forEach(m => (m.tags||[]).forEach(t => all.set(t, (all.get(t)||0)+1)));
      const tags = Array.from(all.keys()).sort((a,b)=>a.localeCompare(b));
      const list = $("tagsList");
      list.innerHTML = "";
      tags.forEach(tag => {
        const id = "tag_" + tag.replace(/\s+/g,"_");
        const row = document.createElement("label");
        row.className = "flex items-center justify-between gap-2 rounded-md px-2 py-1.5 hover:bg-accent cursor-pointer";
        row.innerHTML = `
          <span class="text-sm">${tag}</span>
          <span class="text-xs text-muted-foreground">${all.get(tag)}</span>
        `;
        row.onclick = (e) => {
          e.preventDefault();
          if (state.selectedTags.has(tag)) state.selectedTags.delete(tag);
          else state.selectedTags.add(tag);
          renderTagsMenu();
        };
        list.appendChild(row);
      });
      renderTagsMenu();
    }

    function renderTagsMenu() {
      // update label
      $("tagsBtnLabel").textContent = `Tags (${state.selectedTags.size})`;
      // highlight selected in menu
      const children = Array.from($("tagsList").children);
      children.forEach((el) => {
        const tag = el.querySelector("span")?.textContent || "";
        if (state.selectedTags.has(tag)) {
          el.classList.add("bg-[#2563EB]/10");
          el.classList.add("text-[#2563EB]");
        } else {
          el.classList.remove("bg-[#2563EB]/10");
          el.classList.remove("text-[#2563EB]");
        }
      });
    }

    // ------- Filtering / Sorting / Paging -------
    function applyFilters(data) {
      let out = data.slice();

      // search
      const q = (state.q || "").trim().toLowerCase();
      if (q) {
        out = out.filter(m =>
          (m.event||"").toLowerCase().includes(q) ||
          (m.tags||[]).some(t => String(t).toLowerCase().includes(q))
        );
      }

      // tags
      if (state.selectedTags.size > 0) {
        out = out.filter(m => (m.tags||[]).some(t => state.selectedTags.has(t)));
      }

      // advanced
      if (state.minVol > 0) out = out.filter(m => (m.volume||0) >= state.minVol);
      if (state.minLiq > 0) out = out.filter(m => (m.liquidity||0) >= state.minLiq);
      if (state.onlyFeatured === "yes") out = out.filter(m => !!m.featured);

      // sort
      const s = state.sort;
      const by = (a,b) => (a<b?-1:(a>b?1:0));
      out.sort((A,B) => {
        if (s === "volume_desc") return by(B.volume||0, A.volume||0);
        if (s === "volume_asc") return by(A.volume||0, B.volume||0);
        if (s === "liq_desc") return by(B.liquidity||0, A.liquidity||0);
        if (s === "liq_asc") return by(A.liquidity||0, B.liquidity||0);
        if (s === "ends_asc") return by(parseDate(A.ends), parseDate(B.ends));
        if (s === "ends_desc") return by(parseDate(B.ends), parseDate(A.ends));
        return 0;
      });

      return out;
    }

    function renderTable() {
      const filtered = applyFilters(MARKETS);
      const totalPages = Math.max(1, Math.ceil(filtered.length / state.rows));
      state.page = Math.min(state.page, totalPages);

      const start = (state.page - 1) * state.rows;
      const pageItems = filtered.slice(start, start + state.rows);

      // table body
      const tb = $("tbody");
      tb.innerHTML = "";

      pageItems.forEach((m) => {
        const tr = document.createElement("tr");
        tr.setAttribute("data-slot","table-row");
        tr.className = "hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors";

        tr.innerHTML = `
          <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
            <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all
                    hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 has-[>svg]:px-3 p-0 h-auto" type="button"
                    aria-label="Expand row">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="lucide lucide-chevron-down h-4 w-4 transition-transform" aria-hidden="true">
                <path d="m6 9 6 6 6-6"></path>
              </svg>
            </button>
          </td>
          <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
            <div class="flex items-center space-x-2 md:space-x-3">
              <div class="h-8 w-8 md:h-10 md:w-10 shrink-0 overflow-hidden rounded-xl">
                <img alt="${m.event}" loading="lazy" width="40" height="40" decoding="async" class="h-full w-full object-cover" src="${m.img}" style="color: transparent;">
              </div>
              <p class="font-medium truncate max-w-[150px] sm:max-w-[200px] md:max-w-xs">
                <a href="${m.url}" target="_blank" rel="noopener noreferrer" class="hover:underline">${m.event}</a>
              </p>
            </div>
          </td>
          <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
            <div class="font-medium text-xs md:text-sm">${fmtMoney(m.volume||0)}</div>
          </td>
          <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
            <div class="font-medium text-xs md:text-sm">${fmtMoney(m.liquidity||0)}</div>
          </td>
          <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
            <div class="text-xs md:text-sm">${m.ends}</div>
          </td>
          <td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">
            <div class="flex items-center gap-1 md:gap-1.5 flex-wrap">
              ${(m.tags||[]).slice(0,2).map(t => `
                <span data-slot="badge" class="inline-flex items-center justify-center rounded-xl border border-input px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0
                      transition-[color,box-shadow] overflow-hidden text-foreground text-xs">${t}</span>
              `).join("")}
              ${(m.tags||[]).length > 2 ? `
                <span data-slot="popover-trigger" class="inline-flex items-center justify-center rounded-xl border border-input px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0
                      overflow-hidden text-foreground text-xs cursor-pointer hover:bg-accent transition-colors" title="${m.tags.join(", ")}">
                  +${(m.tags||[]).length - 2}
                </span>
              ` : ``}
            </div>
          </td>
        `;

        // expand behavior
        const btn = tr.querySelector("button");
        const icon = tr.querySelector("svg.lucide-chevron-down");
        let expanded = false;
        btn.addEventListener("click", () => {
          expanded = !expanded;
          icon.style.transform = expanded ? "rotate(180deg)" : "rotate(0deg)";
          const next = tr.nextElementSibling;
          if (expanded) {
            const detail = document.createElement("tr");
            detail.className = "border-b transition-colors";
            detail.innerHTML = `
              <td colspan="6" class="px-4 py-3 text-xs md:text-sm text-muted-foreground">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                  <div class="flex items-center gap-2">
                    <span class="inline-flex items-center rounded-md bg-[#2563EB]/10 text-[#2563EB] px-2 py-1 text-xs">Market</span>
                    <span class="truncate">${m.url}</span>
                  </div>
                  <a href="${m.url}" target="_blank" rel="noopener noreferrer"
                     class="inline-flex items-center justify-center rounded-md border border-input bg-background px-3 py-2 text-xs hover:bg-accent w-fit">
                    Open
                  </a>
                </div>
              </td>
            `;
            tr.parentNode.insertBefore(detail, tr.nextSibling);
          } else {
            if (next && next.querySelector && next.querySelector("td[colspan='6']")) next.remove();
          }
        });

        tb.appendChild(tr);
      });

      // pagination
      $("pageLabel").textContent = `Page ${state.page} of ${totalPages}`;
      $("prevBtn").disabled = state.page <= 1;
      $("firstBtn").disabled = state.page <= 1;
      $("nextBtn").disabled = state.page >= totalPages;
      $("lastBtn").disabled = state.page >= totalPages;
    }

    // ------- Wire UI -------
    function closeAllPopovers() {
      $("tagsMenu").classList.add("hidden");
      $("advPopover").classList.add("hidden");
      $("rowsMenu").classList.add("hidden");
    }

    // Search
    $("searchInput").addEventListener("input", (e) => {
      state.q = e.target.value || "";
      state.page = 1;
      renderTable();
    });

    // Tags dropdown
    $("tagsBtn").addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = !$("tagsMenu").classList.contains("hidden");
      closeAllPopovers();
      $("tagsMenu").classList.toggle("hidden", isOpen);
    });
    $("tagsClear").addEventListener("click", (e) => {
      e.preventDefault();
      state.selectedTags.clear();
      state.page = 1;
      renderTagsMenu();
      renderTable();
    });
    $("tagsApply").addEventListener("click", (e) => {
      e.preventDefault();
      state.page = 1;
      renderTable();
      $("tagsMenu").classList.add("hidden");
    });

    // Advanced filters
    $("advBtn").addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = !$("advPopover").classList.contains("hidden");
      closeAllPopovers();
      $("advPopover").classList.toggle("hidden", isOpen);
    });
    $("advReset").addEventListener("click", () => {
      $("minVol").value = "";
      $("minLiq").value = "";
      $("sortBy").value = "volume_desc";
      $("onlyFeatured").value = "any";
      state.minVol = 0;
      state.minLiq = 0;
      state.sort = "volume_desc";
      state.onlyFeatured = "any";
      state.page = 1;
      renderTable();
    });
    $("advApply").addEventListener("click", () => {
      state.minVol = safeNum($("minVol").value) * 1; // assume already $
      state.minLiq = safeNum($("minLiq").value) * 1;
      state.sort = $("sortBy").value;
      state.onlyFeatured = $("onlyFeatured").value;
      state.page = 1;
      renderTable();
      $("advPopover").classList.add("hidden");
    });

    // Quick sort from header buttons
    $("sortVolume").addEventListener("click", () => {
      state.sort = (state.sort === "volume_desc") ? "volume_asc" : "volume_desc";
      state.page = 1; renderTable();
    });
    $("sortLiquidity").addEventListener("click", () => {
      state.sort = (state.sort === "liq_desc") ? "liq_asc" : "liq_desc";
      state.page = 1; renderTable();
    });
    $("sortEnds").addEventListener("click", () => {
      state.sort = (state.sort === "ends_asc") ? "ends_desc" : "ends_asc";
      state.page = 1; renderTable();
    });

    // Rows per page
    $("rowsBtn").addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = !$("rowsMenu").classList.contains("hidden");
      closeAllPopovers();
      $("rowsMenu").classList.toggle("hidden", isOpen);
      // place under button
      const rect = $("rowsBtn").getBoundingClientRect();
      $("rowsMenu").style.left = rect.left + "px";
    });
    $("rowsMenu").addEventListener("click", (e) => {
      const btn = e.target.closest("[data-rows]");
      if (!btn) return;
      state.rows = parseInt(btn.getAttribute("data-rows"), 10);
      $("rowsValue").textContent = String(state.rows);
      state.page = 1;
      renderTable();
      $("rowsMenu").classList.add("hidden");
    });

    // Pagination buttons
    $("prevBtn").addEventListener("click", () => { if (state.page>1) { state.page--; renderTable(); } });
    $("nextBtn").addEventListener("click", () => { state.page++; renderTable(); });
    $("firstBtn").addEventListener("click", () => { state.page = 1; renderTable(); });
    $("lastBtn").addEventListener("click", () => {
      const filtered = applyFilters(MARKETS);
      state.page = Math.max(1, Math.ceil(filtered.length / state.rows));
      renderTable();
    });

    // Close popovers on outside click
    document.addEventListener("click", () => closeAllPopovers());
    document.addEventListener("keydown", (e) => { if (e.key === "Escape") closeAllPopovers(); });

    // Mobile menu
    $("mobileMenuBtn").addEventListener("click", (e) => {
      e.stopPropagation();
      $("mobileSheet").classList.toggle("hidden");
    });

    // Init
    buildTags();
    renderTable();
  </script>
</body>
</html>

