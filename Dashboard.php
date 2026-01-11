<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>POLYNEROMA — Overview</title>
  <meta name="description" content="POLYNEROMA — Polymarket-style overview dashboard (static HTML for cPanel)." />
  <link rel="icon" href="/favicon.ico" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            background: "hsl(var(--background) / <alpha-value>)",
            foreground: "hsl(var(--foreground) / <alpha-value>)",
            card: "hsl(var(--card) / <alpha-value>)",
            "card-foreground": "hsl(var(--card-foreground) / <alpha-value>)",
            muted: "hsl(var(--muted) / <alpha-value>)",
            "muted-foreground": "hsl(var(--muted-foreground) / <alpha-value>)",
            accent: "hsl(var(--accent) / <alpha-value>)",
            "accent-foreground": "hsl(var(--accent-foreground) / <alpha-value>)",
            border: "hsl(var(--border) / <alpha-value>)",
            input: "hsl(var(--input) / <alpha-value>)",
            ring: "hsl(var(--ring) / <alpha-value>)",
            primary: "#2563EB",
          },
          borderRadius: {
            xl: "0.9rem",
          }
        }
      }
    };
  </script>

  <!-- Base tokens + small shadcn-ish utilities -->
  <style type="text/tailwindcss">
    @layer base {
      :root{
        /* FORCE FULL BLACK BACKGROUND (even if theme becomes light) */
        --background: 0 0% 0%;
        --foreground: 210 40% 98%;
        --card: 0 0% 4%;
        --card-foreground: 210 40% 98%;
        --muted: 217.2 32.6% 17.5%;
        --muted-foreground: 215 20.2% 65.1%;
        --accent: 217 91% 60% / 0.12;
        --accent-foreground: 210 40% 98%;
        --border: 217.2 32.6% 17.5%;
        --input: 217.2 32.6% 17.5%;
        --ring: 217.2 91.2% 59.8%;
      }
      .dark{
        /* KEEP FULL BLACK IN DARK TOO */
        --background: 0 0% 0%;
        --foreground: 210 40% 98%;
        --card: 0 0% 4%;
        --card-foreground: 210 40% 98%;
        --muted: 217.2 32.6% 17.5%;
        --muted-foreground: 215 20.2% 65.1%;
        --accent: 217 91% 60% / 0.12;
        --accent-foreground: 210 40% 98%;
        --border: 217.2 32.6% 17.5%;
        --input: 217.2 32.6% 17.5%;
        --ring: 217.2 91.2% 59.8%;
      }
      html, body { height: 100%; }
      body { @apply bg-background text-foreground; }
    }

    /* Tailwind v3 compat for some v4-looking classes used in your snippet */
    .bg-linear-to-r { background-image: linear-gradient(to right, var(--tw-gradient-stops)); }
    .shadow-xs { box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05); }
  </style>
</head>

<body class="flex min-h-screen flex-col" style="">
  <div hidden=""></div>

  <!-- Theme script (same style as your snippet) -->
  <script>
    ((a,b,c,d,e,f,g,h)=> {
      let i=document.documentElement,j=["light","dark"];
      function k(b){
        var c;
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

      <header class="pt-4">
        <div class="flex justify-between items-center py-4 px-4 md:px-0">
          <a href="/" class="flex items-center gap-2">
            <img alt="POLYNEROMA Logo" width="28" height="28" decoding="async" data-nimg="1" style="color:transparent" src="/logo.svg"
                 onerror="this.style.display='none'; document.getElementById('fallbackLogo').style.display='block';" />
            <svg id="fallbackLogo" style="display:none" width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 2l8.5 5v10L12 22 3.5 17V7L12 2z" stroke="currentColor" stroke-width="1.6"/>
              <path d="M7.2 9.3h9.6M7.2 12h9.6M7.2 14.7h6.2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
          </a>

          <!-- Desktop nav (same structure/look as your snippet) -->
          <nav aria-label="Main" data-orientation="horizontal" dir="ltr" data-slot="navigation-menu"
               data-viewport="true"
               class="group/navigation-menu relative max-w-max flex-1 items-center justify-center hidden md:block">
            <div style="position:relative">
              <ul data-orientation="horizontal" data-slot="navigation-menu-list"
                  class="group flex flex-1 list-none items-center justify-center gap-1" dir="ltr">

                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all
                            outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="true" data-slot="navigation-menu-link" href="/Dashboard.php">
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
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all
                            outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Portfolio.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet" aria-hidden="true">
                      <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                      <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                    </svg>
                    Portfolio
                  </a>
                </li>

                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all
                            outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Leaderboard.php">
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
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all
                            outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Markets.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up" aria-hidden="true">
                      <path d="M16 7h6v6"></path>
                      <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                    </svg>
                    Markets
                  </a>
                </li>

                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all
                            outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Ecosystem.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                      <path d="M2 12h20"></path>
                    </svg>
                    Ecosystem
                  </a>
                </li>

                <li data-slot="navigation-menu-item" class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                            text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                            focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all
                            outline-none focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                            px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" data-slot="navigation-menu-link" href="/Builders.php">
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
            <a class="block" href="https://x.com/polyneromaxyz" target="_blank" rel="noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x lucide-X w-7 h-7" aria-hidden="true">
                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" stroke="none" fill="currentColor"></path>
              </svg>
            </a>

            <!-- Mobile menu button (visual only) -->
            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all
                           outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                           hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9 md:hidden"
                    type="button" aria-haspopup="dialog" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu h-6 w-6" aria-hidden="true">
                <path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </header>

      <main class="flex-1">
        <div class="container mx-auto px-4 md:px-0 max-w-7xl mt-8 md:mt-16 mb-8 md:mb-16">

          <h1 class="md:text-3xl font-bold">POLYNEROMA Overview</h1>

          <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 md:mb-8 gap-4 sm:gap-0">
            <p class="text-sm md:text-base text-muted-foreground">Track activity in real time and analyze growth.</p>
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 md:gap-3">
              <span class="flex items-center text-xs md:text-sm text-[#3b82f6] bg-[#3b82f6]/10 px-2 md:px-3 py-1 rounded-xl border border-[#3b82f6]/20">
                <span class="w-1.5 h-1.5 md:w-2 md:h-2 bg-[#3b82f6] rounded-xl mr-1 md:mr-2 animate-pulse"></span>
                System Status
              </span>
              <span id="lastUpdated" class="text-xs md:text-sm text-muted-foreground">Last updated: —</span>
            </div>
          </div>

          <hr class="border-t my-8" />

          <!-- Cards (same vibe as your snippet) -->
          <div class="w-full space-y-6 md:space-y-8">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
              <!-- Total Volume (span 2) -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] lg:col-span-2 [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>

                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-column-increasing p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <path d="M5 21v-6"></path><path d="M12 21V9"></path><path d="M19 21V3"></path>
                      </svg>
                      Total Volume
                    </div>
                  </div>
                </div>

                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-currency="1" data-value="28676459009.59">$0</span>
                  </div>
                </div>

                <div data-slot="card-footer" class="flex items-center px-6 [.border-t]:pt-6">
                  <p class="text-[10px] md:text-xs text-muted-foreground">Global volume of share purchases in USDC base units.</p>
                </div>
              </div>

              <!-- TVL -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>

                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                        <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                        <path d="M3 12A9 3 0 0 0 21 12"></path>
                      </svg>
                      Total Value Locked
                    </div>
                  </div>
                </div>

                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-currency="1" data-value="275812041.78">$0</span>
                  </div>
                </div>
              </div>

              <!-- Open Interest -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>

                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-coins p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17"></path>
                        <path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"></path>
                        <path d="m2 16 6 6"></path>
                        <circle cx="16" cy="9" r="2.9"></circle>
                        <circle cx="6" cy="5" r="3"></circle>
                      </svg>
                      Open Interest
                    </div>
                  </div>
                </div>

                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-currency="1" data-value="292767509.00">$0</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
              <!-- Markets Volume -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>
                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path>
                      </svg>
                      Markets Volume
                    </div>
                  </div>
                </div>
                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-currency="1" data-value="2830713690.45">$0</span>
                  </div>
                </div>
              </div>

              <!-- Total Markets -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>
                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                        <path d="M18 17V9"></path>
                        <path d="M13 17V5"></path>
                        <path d="M8 17v-3"></path>
                      </svg>
                      Total Markets
                    </div>
                  </div>
                </div>
                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-value="18105">0</span>
                  </div>
                </div>
              </div>

              <!-- Total Traders -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>
                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                      </svg>
                      Total Traders
                    </div>
                  </div>
                </div>
                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-value="1688816">0</span>
                  </div>
                </div>
              </div>

              <!-- Total LP Rewards -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>
                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"></path>
                        <path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"></path>
                        <path d="M18 9h1.5a1 1 0 0 0 0-5H18"></path>
                        <path d="M4 22h16"></path>
                        <path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"></path>
                        <path d="M6 9H4.5a1 1 0 0 1 0-5H6"></path>
                      </svg>
                      Total LP Rewards
                    </div>
                  </div>
                </div>
                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-currency="1" data-value="11576347.00">$0</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
              <!-- Total Trades -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>
                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8" aria-hidden="true">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                        <path d="M2 12h20"></path>
                      </svg>
                      Total Trades
                    </div>
                  </div>
                </div>
                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-value="109029482">0</span>
                  </div>
                </div>
              </div>

              <!-- Total Buys -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>
                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8 text-green-600" aria-hidden="true">
                        <path d="M16 7h6v6"></path><path d="m22 7-8.5 8.5-5-5L2 17"></path>
                      </svg>
                      Total Buys
                    </div>
                    <span data-slot="badge"
                          class="inline-flex items-center justify-center rounded-xl border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0
                                 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                                 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow]
                                 overflow-hidden text-[10px] md:text-xs text-muted-foreground">
                      <span id="buyRatio">—</span>% Ratio
                    </span>
                  </div>
                </div>
                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-value="76561523" id="buysVal">0</span>
                  </div>
                </div>
              </div>

              <!-- Total Sells -->
              <div data-slot="card"
                   class="relative bg-card/60 backdrop-blur-md text-card-foreground flex flex-col gap-3 py-3 rounded-xl border border-white/5 shadow-sm transition-all duration-300 ease-out
                          hover:border-[#3b82f6]/30 hover:shadow-[0_0_20px_rgba(59,130,246,0.15)] [&_svg]:text-[#3b82f6]">
                <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-linear-to-r from-transparent via-[#3b82f6]/40 to-transparent opacity-0 transition-opacity duration-500"></div>
                <div data-slot="card-header" class="@container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-2 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                  <div data-slot="card-title" class="leading-none font-semibold flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2 sm:gap-0">
                    <div class="flex items-center gap-2 text-xs md:text-[14px] text-muted-foreground">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-down p-1.5 md:p-2 rounded-[12px] bg-card border h-7 w-7 md:h-8 md:w-8 text-red-600" aria-hidden="true">
                        <path d="M16 17h6v-6"></path><path d="m22 17-8.5-8.5-5 5L2 7"></path>
                      </svg>
                      Total Sells
                    </div>
                    <span data-slot="badge"
                          class="inline-flex items-center justify-center rounded-xl border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0
                                 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                                 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow]
                                 overflow-hidden text-[10px] md:text-xs text-muted-foreground">
                      <span id="sellRatio">—</span>% Ratio
                    </span>
                  </div>
                </div>
                <div data-slot="card-content" class="px-6">
                  <div class="text-[22px]">
                    <span class="tabular-nums" data-count data-value="32467959" id="sellsVal">0</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </main>

      <footer>
        <div class="flex flex-col md:flex-row justify-between items-center py-8 px-4 md:px-0 text-center md:text-left gap-4 md:gap-0">
          <p class="text-muted-foreground text-[14px]">
            © 2025 POLYNEROMA. All rights reserved.
            <span> Follow us on <a class="underline hover:text-[#3b82f6] transition-colors" href="https://x.com/polyneromaxyz" target="_blank" rel="noreferrer">X</a>.</span>
          </p>
        </div>
      </footer>

    </div>
  </div>

  <!-- Data + animations (safe for cPanel) -->
  <script>
    // === CONFIG (edit this later) ===
    // If you already have endpoints, set them here:
    // window.PE_CONFIG = { API_BASE: "https://yourdomain.com/api" };
    window.PE_CONFIG = window.PE_CONFIG || {
      API_BASE: "" // example: "/api" or "https://domain.tld/api"
    };

    function fmtNumber(n) {
      return (n || 0).toLocaleString("en-US", { maximumFractionDigits: 0 });
    }
    function fmtCurrency(n) {
      return (n || 0).toLocaleString("en-US", { style: "currency", currency: "USD", maximumFractionDigits: 2 });
    }

    function countUp(el, end, isCurrency) {
      const duration = 700;
      const start = 0;
      const t0 = performance.now();
      const step = (t) => {
        const p = Math.min(1, (t - t0) / duration);
        const v = start + (end - start) * (1 - Math.pow(1 - p, 3)); // easeOutCubic
        el.textContent = isCurrency ? fmtCurrency(v) : fmtNumber(v);
        if (p < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    }

    function runCounts() {
      document.querySelectorAll("[data-count]").forEach(el => {
        const end = Number(el.getAttribute("data-value") || "0");
        const isCurrency = el.getAttribute("data-currency") === "1";
        countUp(el, end, isCurrency);
      });
    }

    function setLastUpdated() {
      const d = new Date();
      const s = d.toLocaleString("en-US", {
        timeZone: "UTC",
        year: "numeric", month: "long", day: "2-digit",
        hour: "2-digit", minute: "2-digit"
      });
      document.getElementById("lastUpdated").textContent = "Last updated: " + s + " UTC";
    }

    // Optional: fetch live data (if you provide an endpoint)
    async function refreshData() {
      const base = (window.PE_CONFIG.API_BASE || "").replace(/\/$/, "");
      if (!base) { // no endpoint set
        setLastUpdated();
        computeRatios();
        runCounts();
        return;
      }
      try {
        const res = await fetch(base + "/overview", { cache: "no-store" });
        if (!res.ok) throw new Error("HTTP " + res.status);
        const data = await res.json();

        const map = {
          totalVolume: "[data-value='28676459009.59']",
          tvl: "[data-value='275812041.78']",
          openInterest: "[data-value='292767509.00']",
          marketsVolume: "[data-value='2830713690.45']",
          totalMarkets: "[data-value='18105']",
          totalTraders: "[data-value='1688816']",
          lpRewards: "[data-value='11576347.00']",
          totalTrades: "[data-value='109029482']"
        };

        // Update values (cards)
        if (typeof data.totalVolume === "number") document.querySelector(map.totalVolume).setAttribute("data-value", String(data.totalVolume));
        if (typeof data.tvl === "number") document.querySelector(map.tvl).setAttribute("data-value", String(data.tvl));
        if (typeof data.openInterest === "number") document.querySelector(map.openInterest).setAttribute("data-value", String(data.openInterest));
        if (typeof data.marketsVolume === "number") document.querySelector(map.marketsVolume).setAttribute("data-value", String(data.marketsVolume));
        if (typeof data.totalMarkets === "number") document.querySelector(map.totalMarkets).setAttribute("data-value", String(data.totalMarkets));
        if (typeof data.totalTraders === "number") document.querySelector(map.totalTraders).setAttribute("data-value", String(data.totalTraders));
        if (typeof data.lpRewards === "number") document.querySelector(map.lpRewards).setAttribute("data-value", String(data.lpRewards));
        if (typeof data.totalTrades === "number") document.querySelector(map.totalTrades).setAttribute("data-value", String(data.totalTrades));

        // Buys / sells
        if (typeof data.buys === "number") document.getElementById("buysVal").setAttribute("data-value", String(data.buys));
        if (typeof data.sells === "number") document.getElementById("sellsVal").setAttribute("data-value", String(data.sells));

        setLastUpdated();
        computeRatios();
        runCounts();
      } catch (e) {
        // fallback: still animate defaults
        setLastUpdated();
        computeRatios();
        runCounts();
      }
    }

    function computeRatios() {
      const buys = Number(document.getElementById("buysVal").getAttribute("data-value") || "0");
      const sells = Number(document.getElementById("sellsVal").getAttribute("data-value") || "0");
      const total = buys + sells;
      const buyR = total ? (buys / total) * 100 : 0;
      const sellR = total ? (sells / total) * 100 : 0;
      document.getElementById("buyRatio").textContent = buyR.toFixed(2);
      document.getElementById("sellRatio").textContent = sellR.toFixed(2);
    }

    // Init
    (function init() {
      setLastUpdated();
      computeRatios();
      runCounts();
      // Auto refresh once (if API_BASE set)
      refreshData();
    })();
  </script>

  <!-- Keep these (visual parity with your snippet; harmless in static) -->
  <script>(self.__next_f=self.__next_f||[]).push([0])</script>
  <script>self.__next_f.push([1,"1:\"$Sreact.fragment\"\\n"]) </script>

  <next-route-announcer style="position: absolute;"></next-route-announcer>
</body>
</html>
