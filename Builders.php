<!doctype html>
<html lang="en" class="dark">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>POLYNATERON — Lite Polymarket UI</title>
  <meta name="description" content="POLYNATERON — a lite, fast Polymarket-style UI for markets, portfolio, and real-time analytics." />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            background: "hsl(var(--background))",
            foreground: "hsl(var(--foreground))",
            card: "hsl(var(--card))",
            "card-foreground": "hsl(var(--card-foreground))",
            muted: "hsl(var(--muted))",
            "muted-foreground": "hsl(var(--muted-foreground))",
            accent: "hsl(var(--accent))",
            "accent-foreground": "hsl(var(--accent-foreground))",
            border: "hsl(var(--border))",
            input: "hsl(var(--input))",
            ring: "hsl(var(--ring))",
            primary: "hsl(var(--primary))",
            "primary-foreground": "hsl(var(--primary-foreground))",
            destructive: "hsl(var(--destructive))",
          },
          boxShadow: {
            xs: "0 1px 0 rgba(255,255,255,.06), 0 0 0 1px rgba(255,255,255,.04) inset",
          },
          borderRadius: {
            xl: "0.9rem",
          }
        }
      }
    };
  </script>

  <style>
    :root{
      /* keep tokens, but ensure full-black background */
      --background: 0 0% 0%;
      --foreground: 210 40% 98%;
      --card: 222 47% 8%;
      --card-foreground: 210 40% 98%;
      --muted: 223 35% 14%;
      --muted-foreground: 215 20% 65%;
      --accent: 223 35% 14%;
      --accent-foreground: 210 40% 98%;
      --border: 223 28% 18%;
      --input: 223 28% 18%;
      --ring: 216 97% 60%;
      --primary: 216 97% 60%;
      --primary-foreground: 222 47% 6%;
      --destructive: 0 75% 55%;
    }
    html, body { height: 100%; }
    body {
      background: #000;
      color: hsl(var(--foreground));
    }
    .focus-ring:focus-visible { outline: none; box-shadow: 0 0 0 3px hsla(var(--ring), .35); }
    .glass { background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.08); }
    .gridlines {
      background-image:
        linear-gradient(to right, rgba(255,255,255,.04) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255,255,255,.04) 1px, transparent 1px);
      background-size: 44px 44px;
      mask-image: radial-gradient(70% 70% at 50% 25%, #000 55%, transparent 100%);
      opacity: .7;
      pointer-events: none;
    }
    .sr-only {
      position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border-width:0;
    }
  </style>
</head>

<body class="flex min-h-screen flex-col" style="">
  <div hidden=""></div>

  <!-- Theme bootstrap (same pattern as your snippet) -->
  <script>
    ((a,b,c,d,e,f,g,h)=>{
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

      <!-- HEADER (Polydata-style) -->
      <header class="pt-4">
        <div class="flex justify-between items-center py-4 px-4 md:px-0">
          <a href="/index.php" class="flex items-center gap-3">
            <img
              alt="POLYNATERON Logo"
              width="28"
              height="28"
              decoding="async"
              style="color:transparent"
              src="https://i.ibb.co.com/Y7246jJ9/Chat-GPT-Image-Dec-21-2025-10-54-20-AM-removebg-preview.png"
            >
            <span class="hidden sm:block font-semibold tracking-wide">POLYNATERON</span>
          </a>

          <!-- Desktop Nav -->
          <nav aria-label="Main" class="group/navigation-menu relative max-w-max flex-1 items-center justify-center hidden md:block">
            <div style="position:relative">
              <ul class="group flex flex-1 list-none items-center justify-center gap-1" dir="ltr">

                <!-- Dashboard -->
                <li class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                             text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                             focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                             focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                             px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" href="/Dashboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard" aria-hidden="true">
                      <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                      <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                    </svg>
                    Dashboard
                  </a>
                </li>

                <!-- Portfolio -->
                <li class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                             text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                             focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                             focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                             px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" href="/Portfolio.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet" aria-hidden="true">
                      <path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path>
                      <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                    </svg>
                    Portfolio
                  </a>
                </li>

                <!-- Leaderboard -->
                <li class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                             text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                             focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                             focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                             px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" href="/Leaderboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy" aria-hidden="true">
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

                <!-- Markets -->
                <li class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                             text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                             focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                             focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                             px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" href="/Markets.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up" aria-hidden="true">
                      <path d="M16 7h6v6"></path>
                      <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                    </svg>
                    Markets
                  </a>
                </li>

                <!-- Ecosystem -->
                <li class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                             text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                             focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                             focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                             px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" href="/Ecosystem.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                      <path d="M2 12h20"></path>
                    </svg>
                    Ecosystem
                  </a>
                </li>

                <!-- Builders -->
                <li class="relative">
                  <a class="data-[active=true]:focus:bg-accent data-[active=true]:hover:bg-accent data-[active=true]:bg-[#2563EB]/10 data-[active=true]:text-[#2563EB]
                             text-muted-foreground [&_svg]:text-muted-foreground hover:bg-accent hover:text-white hover:[&_svg]:text-white
                             focus:bg-accent focus:text-accent-foreground focus-visible:ring-ring/50 flex flex-col gap-1 rounded-sm p-2 text-sm transition-all outline-none
                             focus-visible:ring-[3px] focus-visible:outline-1 [&_svg:not([class*='size-'])]:size-4 data-[active=true]:[&_svg]:text-[#2563EB]!
                             px-4 py-2 flex flex-row items-center gap-2"
                     data-active="false" href="/Builders.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-blocks" aria-hidden="true">
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

          <!-- Right controls -->
          <div class="flex items-center gap-4">
            <a class="block text-muted-foreground hover:text-white transition-colors"
               href="https://x.com/POLYNATERONxyz"
               aria-label="X">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   class="w-7 h-7" aria-hidden="true">
                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"
                      fill="currentColor"></path>
              </svg>
            </a>

            <button id="mobileMenuBtn"
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50
                     shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]
                     hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 size-9 md:hidden"
              type="button" aria-haspopup="dialog" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                   class="h-6 w-6" aria-hidden="true">
                <path d="M4 5h16"></path>
                <path d="M4 12h16"></path>
                <path d="M4 19h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </header>

      <!-- Mobile Drawer -->
      <div id="mobileDrawer" class="fixed inset-0 z-50 hidden">
        <div id="mobileBackdrop" class="absolute inset-0 bg-black/60"></div>
        <div class="absolute right-0 top-0 h-full w-[320px] max-w-[85vw] glass shadow-xl p-4">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img
                alt="POLYNATERON Logo"
                width="24"
                height="24"
                src="https://i.ibb.co.com/Y7246jJ9/Chat-GPT-Image-Dec-21-2025-10-54-20-AM-removebg-preview.png"
              />
              <span class="font-semibold">Menu</span>
            </div>
            <button id="mobileClose" class="rounded-md hover:bg-accent px-3 py-2 focus-ring">Close</button>
          </div>
          <div class="mt-4 space-y-2">
            <a class="block rounded-md px-3 py-2 hover:bg-accent text-muted-foreground hover:text-white" href="/Dashboard.php">Dashboard</a>
            <a class="block rounded-md px-3 py-2 hover:bg-accent text-muted-foreground hover:text-white" href="/Portfolio.php">Portfolio</a>
            <a class="block rounded-md px-3 py-2 hover:bg-accent text-muted-foreground hover:text-white" href="/Leaderboard.php">Leaderboard</a>
            <a class="block rounded-md px-3 py-2 hover:bg-accent text-muted-foreground hover:text-white" href="/Markets.php">Markets</a>
            <a class="block rounded-md px-3 py-2 hover:bg-accent text-muted-foreground hover:text-white" href="/Ecosystem.php">Ecosystem</a>
            <a class="block rounded-md px-3 py-2 hover:bg-accent text-muted-foreground hover:text-white" href="/Builders.php">Builders</a>
            <hr class="border-white/10 my-3" />
            <a class="block rounded-md px-3 py-2 hover:bg-accent text-muted-foreground hover:text-white"
               href="https://x.com/POLYNATERONxyz">X</a>
          </div>
        </div>
      </div>

      <!-- MAIN -->
      <main class="flex-1"><!--$--><!--/$--><div class="container mx-auto px-4 md:px-0 max-w-7xl mt-8 md:mt-16 mb-8 md:mb-16"><div><h1 class="md:text-3xl font-bold">Builders Leaderboard</h1><p class="text-muted-foreground mt-2 text-sm md:text-base">Top Polymarket projects by trading volume and active users.</p></div><hr class="border-t my-8"><div class="space-y-3 md:space-y-4"><div class="flex flex-col sm:flex-row gap-4"><div class="relative flex-1 w-full"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-2 top-1/2 h-4 w-4 -translate-y-1/2 text-muted-foreground" aria-hidden="true"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg><input data-slot="input" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input h-9 min-w-0 rounded-md border bg-transparent px-3 py-1 shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive w-full pl-8 text-sm md:text-base" placeholder="Search builders..." value=""></div><div class="flex flex-col sm:flex-row gap-3"><button type="button" role="combobox" aria-controls="radix-_r_3i_" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" data-slot="select-trigger" data-size="default" class="border-input data-[placeholder]:text-muted-foreground [&amp;_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-transparent px-3 py-2 whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 w-full sm:w-[140px] text-xs md:text-sm"><span data-slot="select-value" style="pointer-events: none;">All Time</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down size-4 opacity-50" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></button></div></div><div class="relative overflow-x-auto rounded-xl border bg-card/60"><div data-slot="table-container" class="relative w-full overflow-x-auto"><table data-slot="table" class="w-full caption-bottom text-sm"><thead data-slot="table-header" class="[&amp;_tr]:border-b bg-white/1"><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors"><th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">Rank</th><th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm">Project</th><th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 py-2 has-[&gt;svg]:px-0 px-2 md:px-0 cursor-pointer text-xs md:text-sm">Volume<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down ml-1 h-3 w-3 md:h-4 md:w-4" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></button></th><th data-slot="table-head" class="text-foreground h-10 text-left align-middle font-medium whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:bg-accent hover:text-accent-foreground dark:hover:bg-accent/50 h-9 py-2 has-[&gt;svg]:px-0 px-2 md:px-0 cursor-pointer text-xs md:text-sm">Active Users<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down ml-1 h-3 w-3 md:h-4 md:w-4" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></button></th></tr></thead><tbody data-slot="table-body" class="[&amp;_tr:last-child]:border-0"><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy h-3 w-3 md:h-4 md:w-4 text-yellow-500" aria-hidden="true"><path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"></path><path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"></path><path d="M18 9h1.5a1 1 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"></path><path d="M6 9H4.5a1 1 0 0 1 0-5H6"></path></svg></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="betmoar" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/betmoar_2.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">betmoar</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$176,574,161.99</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">976</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal h-3 w-3 md:h-4 md:w-4 text-gray-400" aria-hidden="true"><path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path><path d="M11 12 5.12 2.2"></path><path d="m13 12 5.88-9.8"></path><path d="M8 7h8"></path><circle cx="12" cy="17" r="5"></circle><path d="M12 18v-2h-.5"></path></svg></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="polytraderpro" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/polytraderpro.jpeg"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">polytraderpro</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$30,439,183.93</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">40</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal h-3 w-3 md:h-4 md:w-4 text-orange-600" aria-hidden="true"><path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"></path><path d="M11 12 5.12 2.2"></path><path d="m13 12 5.88-9.8"></path><path d="M8 7h8"></path><circle cx="12" cy="17" r="5"></circle><path d="M12 18v-2h-.5"></path></svg></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="standtrade" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/standtrade.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">standtrade</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$28,024,304.87</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">311</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><span class="text-xs md:text-sm">4</span></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="Polycule" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/polycule_logo.jpeg"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">Polycule</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$19,626,434.04</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">1581</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><span class="text-xs md:text-sm">5</span></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="Based" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/profile-image-3999360-e3642697-84ad-41c5-b019-574fb8bb4a1d.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">Based</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$11,052,864.68</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">1532</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><span class="text-xs md:text-sm">6</span></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="okbet" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/okbet.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">okbet</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$7,369,282.37</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">205</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><span class="text-xs md:text-sm">7</span></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="polymtrade" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/polymtrade.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">polymtrade</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$6,535,954.99</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">2048</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><span class="text-xs md:text-sm">8</span></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="Matchr.xyz" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/profile-image-3855151-8d61f765-ed4f-4542-8830-713c5bb639cc.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">Matchr.xyz</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$5,339,240.23</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">29</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><span class="text-xs md:text-sm">9</span></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="UnifAI Network" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/profile-image-3060342-fca4a3ce-e438-4302-bfb1-2933b12680ae.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">UnifAI Network</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$3,485,055.71</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">481</div></td></tr><tr data-slot="table-row" class="hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors" data-state="false"><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><span class="text-xs md:text-sm">10</span></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="flex items-center space-x-2 md:space-x-3"><span data-slot="avatar" class="relative flex size-8 shrink-0 overflow-hidden border border-white/10 h-8 w-8 md:h-10 md:w-10 rounded-md"><img data-slot="avatar-image" class="aspect-square size-full" alt="PolyBot" src="https://polymarket-upload.s3.us-east-2.amazonaws.com/profile-image-3666008-db9cf8ae-6c07-4de9-b4ad-89cca06a951f.png"></span><div class="min-w-0"><p class="font-medium truncate max-w-[100px] sm:max-w-[150px] md:max-w-[200px] text-sm md:text-base">PolyBot</p></div></div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">$2,231,847.55</div></td><td data-slot="table-cell" class="p-2 align-middle whitespace-nowrap [&amp;:has([role=checkbox])]:pr-0 [&amp;&gt;[role=checkbox]]:translate-y-[2px] px-2 md:px-4 py-2 md:py-3 text-xs md:text-sm"><div class="text-xs md:text-sm">181</div></td></tr></tbody></table></div></div><div class="flex flex-row items-center justify-between px-2"><div class="flex items-center space-x-2"><p class="text-sm font-medium">Rows per page</p><button type="button" role="combobox" aria-controls="radix-_r_3j_" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" data-slot="select-trigger" data-size="default" class="border-input data-[placeholder]:text-muted-foreground [&amp;_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-transparent px-3 py-2 text-sm whitespace-nowrap shadow-xs transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-8 w-[70px]"><span data-slot="select-value" style="pointer-events: none;">10</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down size-4 opacity-50" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></button></div><div class="flex w-[150px] items-center justify-center text-sm font-medium">Page 1 of 5</div><div class="flex items-center space-x-2"><button data-slot="button" class="items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 hidden size-8 lg:flex" disabled=""><span class="sr-only">Go to first page</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-left" aria-hidden="true"><path d="m11 17-5-5 5-5"></path><path d="m18 17-5-5 5-5"></path></svg></button><button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-8" disabled=""><span class="sr-only">Go to previous page</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left" aria-hidden="true"><path d="m15 18-6-6 6-6"></path></svg></button><button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-8"><span class="sr-only">Go to next page</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg></button><button data-slot="button" class="items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 hidden size-8 lg:flex"><span class="sr-only">Go to last page</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-right" aria-hidden="true"><path d="m6 17 5-5-5-5"></path><path d="m13 17 5-5-5-5"></path></svg></button></div></div></div></div></div></div></main>

      <!-- FOOTER -->
      <footer>
        <div class="flex flex-col md:flex-row justify-between items-center py-8 px-4 md:px-0 text-center md:text-left gap-4 md:gap-0">
          <p class="text-muted-foreground text-[14px]">
            © 2025 POLYNATERON. All rights reserved.
            <span> Follow us on
              <a class="underline hover:text-[#3b82f6] transition-colors" href="https://x.com/POLYNATERONxyz">X</a>.
            </span>
          </p>
        </div>
      </footer>

    </div>
  </div>

  <script>
    // Mobile drawer
    const drawer = document.getElementById("mobileDrawer");
    const btn = document.getElementById("mobileMenuBtn");
    const closeBtn = document.getElementById("mobileClose");
    const backdrop = document.getElementById("mobileBackdrop");

    function openDrawer() {
      drawer.classList.remove("hidden");
      btn.setAttribute("aria-expanded", "true");
      document.body.style.overflow = "hidden";
    }
    function closeDrawer() {
      drawer.classList.add("hidden");
      btn.setAttribute("aria-expanded", "false");
      document.body.style.overflow = "";
    }

    btn?.addEventListener("click", openDrawer);
    closeBtn?.addEventListener("click", closeDrawer);
    backdrop?.addEventListener("click", closeDrawer);
    window.addEventListener("keydown", (e) => { if (e.key === "Escape") closeDrawer(); });

    // Simple client-side search filter for demo market table
    const input = document.getElementById("marketSearch");
    const rows = () => Array.from(document.querySelectorAll("#marketRows tr"));
    input?.addEventListener("input", () => {
      const q = (input.value || "").toLowerCase().trim();
      rows().forEach(tr => {
        const text = tr.textContent.toLowerCase();
        tr.style.display = text.includes(q) ? "" : "none";
      });
    });
  </script>
</body>
</html>


