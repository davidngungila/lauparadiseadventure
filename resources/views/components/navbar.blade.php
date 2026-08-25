{{--
  ACTIVE LINK LOGIC:
  - request()->is('/') checks the current route against the pattern.
  - request()->is('safaris') matches /safaris, request()->is('safaris/*') matches sub-pages.
  - The parent dropdown link is marked active when ANY of its children are active.
  - Each <li> checks its own path; the matching <a> gets class="active".
  - request()->routeIs() is used where routes are named (e.g. route('home')).
--}}

<header class="site-header">
  <div class="top-bar">
    <div class="top-bar-inner">
      <div class="top-bar-left">
        <a href="tel:+255683163219"><i class="fas fa-phone"></i> +255 683 163 219</a>
        <a href="mailto:info@lauparadiseadventure.com"><i class="fas fa-envelope"></i> info@lauparadiseadventure.com</a>
        <span class="top-bar-location"><i class="fas fa-map-marker-alt"></i> Moshi, Tanzania</span>
      </div>
      <div class="top-bar-right">
        <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://www.tiktok.com/" target="_blank" rel="noopener" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <nav id="navbar">
  <a href="/" class="nav-logo">
    <img src="/lau-adventuress-logo.png" alt="LAU Paradise Adventure" class="nav-logo-img">
    <div class="nav-logo-text">LAU Paradise<span>Adventure</span></div>
  </a>

  <ul class="nav-links">
    <li>
      <a href="{{ request()->is('/') ? '#home' : '/' }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
    </li>

    {{-- SAFARIS --}}
    <li>
      <a href="/safaris"
         class="{{ request()->is('safaris*') ? 'active' : '' }}">
        Safaris ▾
      </a>
      <ul class="dropdown-menu">
        <li><a href="/safaris" class="{{ request()->is('safaris') && !request()->is('safaris/*') ? 'active' : '' }}">All Safaris</a></li>
        <li><a href="/safaris/luxury-safari" class="{{ request()->is('safaris/luxury-safari') ? 'active' : '' }}">Luxury Safaris</a></li>
        <li><a href="/safaris/private-safari" class="{{ request()->is('safaris/private-safari') ? 'active' : '' }}">Private Safaris</a></li>
        <li><a href="/safaris/family-safari" class="{{ request()->is('safaris/family-safari') ? 'active' : '' }}">Family Safaris</a></li>
        <li><a href="/safaris/group-safari" class="{{ request()->is('safaris/group-safari') ? 'active' : '' }}">Group Safaris</a></li>
        <li><a href="/safaris/photographic-safari" class="{{ request()->is('safaris/photographic-safari') ? 'active' : '' }}">Photographic Safaris</a></li>
        <li><a href="/safaris/great-migration-safari" class="{{ request()->is('safaris/great-migration-safari') ? 'active' : '' }}">Great Migration</a></li>
      </ul>
    </li>

    {{-- KILIMANJARO --}}
    <li>
      <a href="/kilimanjaro"
         class="{{ request()->is('kilimanjaro*') ? 'active' : '' }}">
        Kilimanjaro ▾
      </a>
      <ul class="dropdown-menu">
        <li><a href="/kilimanjaro" class="{{ request()->is('kilimanjaro') && !request()->is('kilimanjaro/*') ? 'active' : '' }}">All Routes</a></li>
        <li><a href="/kilimanjaro/machame-route" class="{{ request()->is('kilimanjaro/machame-route') ? 'active' : '' }}">Machame Route</a></li>
        <li><a href="/kilimanjaro/lemosho-route" class="{{ request()->is('kilimanjaro/lemosho-route') ? 'active' : '' }}">Lemosho Route</a></li>
        <li><a href="/kilimanjaro/marangu-route" class="{{ request()->is('kilimanjaro/marangu-route') ? 'active' : '' }}">Marangu Route</a></li>
        <li><a href="/kilimanjaro/rongai-route" class="{{ request()->is('kilimanjaro/rongai-route') ? 'active' : '' }}">Rongai Route</a></li>
        <li><a href="/kilimanjaro/northern-circuit" class="{{ request()->is('kilimanjaro/northern-circuit') ? 'active' : '' }}">Northern Circuit</a></li>
        <li><a href="/plan-your-trip/what-to-pack" class="{{ request()->is('plan-your-trip/what-to-pack') ? 'active' : '' }}">Preparation Guide</a></li>
      </ul>
    </li>

    {{-- DESTINATIONS --}}
    <li>
      <a href="/destinations"
         class="{{ request()->is('destinations*') ? 'active' : '' }}">
        Destinations ▾
      </a>
      <ul class="dropdown-menu">
        <li><a href="/destinations/serengeti" class="{{ request()->is('destinations/serengeti') ? 'active' : '' }}">Serengeti</a></li>
        <li><a href="/destinations/ngorongoro" class="{{ request()->is('destinations/ngorongoro') ? 'active' : '' }}">Ngorongoro</a></li>
        <li><a href="/destinations/tarangire" class="{{ request()->is('destinations/tarangire') ? 'active' : '' }}">Tarangire</a></li>
        <li><a href="/destinations/lake-manyara" class="{{ request()->is('destinations/lake-manyara') ? 'active' : '' }}">Lake Manyara</a></li>
        <li><a href="/destinations/kilimanjaro" class="{{ request()->is('destinations/kilimanjaro') ? 'active' : '' }}">Mount Kilimanjaro</a></li>
        <li><a href="/destinations/zanzibar" class="{{ request()->is('destinations/zanzibar') ? 'active' : '' }}">Zanzibar</a></li>
      </ul>
    </li>

    {{-- ZANZIBAR --}}
    <li>
      <a href="/zanzibar"
         class="{{ request()->is('zanzibar*') ? 'active' : '' }}">
        Zanzibar ▾
      </a>
      <ul class="dropdown-menu">
        <li><a href="/zanzibar" class="{{ request()->is('zanzibar') && !request()->is('zanzibar/*') ? 'active' : '' }}">Zanzibar Overview</a></li>
        <li><a href="/zanzibar/beach-holidays" class="{{ request()->is('zanzibar/beach-holidays') ? 'active' : '' }}">Beach Holidays</a></li>
        <li><a href="/zanzibar/stone-town" class="{{ request()->is('zanzibar/stone-town') ? 'active' : '' }}">Stone Town</a></li>
        <li><a href="/zanzibar/honeymoon" class="{{ request()->is('zanzibar/honeymoon') ? 'active' : '' }}">Honeymoon</a></li>
        <li><a href="/zanzibar/safari-and-zanzibar" class="{{ request()->is('zanzibar/safari-and-zanzibar') ? 'active' : '' }}">Safari + Zanzibar</a></li>
      </ul>
    </li>

    <li>
      <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </li>
    <li>
      <a href="/contact" class="nav-cta"><i class="fas fa-calendar-check"></i> Plan Your Adventure</a>
    </li>
  </ul>

  <button class="hamburger" id="hamburgerBtn" aria-label="Menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
</nav>
</header>
