@extends('layouts.app')

@section('page-title', 'Tanzania Safari Tours, Kilimanjaro & Zanzibar | LAU Paradise Adventure')
@section('meta-description', 'Explore Tanzania with LAU Paradise Adventure. Discover Serengeti safaris, Kilimanjaro trekking, Zanzibar holidays, Great Migration experiences and customized Tanzania tours.')
@section('meta-keywords', 'Tanzania safari, Tanzania safari tours, Kilimanjaro trekking, Zanzibar holidays, Great Migration, Tanzania tour operator, Serengeti safari, Tanzania luxury safari')
@section('canonical', 'https://www.lauparadiseadventure.com/')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "LAU Paradise Adventure",
    "alternateName": "LAU Paradise",
    "url": "https://www.lauparadiseadventure.com",
    "description": "Tanzania safari tours, Kilimanjaro trekking and Zanzibar holidays with a local tour operator.",
    "potentialAction": {
        "@type": "SearchAction",
        "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://www.lauparadiseadventure.com/safaris?q={search_term_string}"
        },
        "query-input": "required name=search_term_string"
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TravelAgency",
    "name": "LAU Paradise Adventure",
    "alternateName": "LAU Paradise",
    "url": "https://www.lauparadiseadventure.com",
    "logo": "https://www.lauparadiseadventure.com/lau-adventuress-logo.png",
    "description": "LAU Paradise Adventure is a locally owned Tanzania tour operator creating authentic safari, mountain and beach experiences.",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Moshi",
        "addressLocality": "Moshi",
        "addressRegion": "Kilimanjaro",
        "addressCountry": "TZ"
    },
    "telephone": "+255683163219",
    "email": "info@lauparadiseadventure.com",
    "priceRange": "$$",
    "openingHours": "Mo-Su 08:00-20:00",
    "sameAs": [
        "https://www.facebook.com/",
        "https://www.instagram.com/",
        "https://www.tiktok.com/",
        "https://www.youtube.com/"
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Tanzania Safari Tours",
    "description": "Popular safari and trekking experiences offered by LAU Paradise Adventure",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Serengeti Safari", "url": "https://www.lauparadiseadventure.com/destinations/serengeti"},
        {"@type": "ListItem", "position": 2, "name": "Ngorongoro Crater Safari", "url": "https://www.lauparadiseadventure.com/destinations/ngorongoro"},
        {"@type": "ListItem", "position": 3, "name": "Kilimanjaro Machame Route", "url": "https://www.lauparadiseadventure.com/kilimanjaro/machame-route"},
        {"@type": "ListItem", "position": 4, "name": "Zanzibar Beach Holiday", "url": "https://www.lauparadiseadventure.com/zanzibar/beach-holidays"},
        {"@type": "ListItem", "position": 5, "name": "Great Migration Safari", "url": "https://www.lauparadiseadventure.com/safaris/great-migration-safari"},
        {"@type": "ListItem", "position": 6, "name": "Tarangire National Park", "url": "https://www.lauparadiseadventure.com/destinations/tarangire"}
    ]
}
</script>
@endverbatim
@endsection

@section('content')

{{-- ================================================================
     SECTION 1 — HERO
     ================================================================ --}}
<section id="home">
  <div class="hero-bg" style="background-image:url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')"></div>
  <div class="hero-content">
    <div class="hero-tag"><i class="fas fa-star"></i> Authentic Tanzania Adventures</div>
    <h1 class="hero-title">Discover the <em>Wild Heart</em> of Tanzania</h1>
    <p class="hero-sub">Experience unforgettable safaris, conquer Mount Kilimanjaro, explore Zanzibar and connect with the authentic cultures of Tanzania through carefully crafted journeys designed around you.</p>
    <div class="hero-actions">
      <a href="/safaris" class="btn-primary"><i class="fas fa-compass"></i> Explore Safaris</a>
      <a href="/contact" class="btn-outline"><i class="fas fa-play-circle"></i> Plan My Trip</a>
      <a href="https://wa.me/255683163219" class="btn-outline" style="border-color:rgba(37,211,102,0.6);color:#25D366" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
  </div>
  <div class="scroll-down">Scroll <i class="fas fa-chevron-down"></i></div>
</section>

{{-- ================================================================
     SECTION 2 — QUICK TRIP SEARCH BAR
     ================================================================ --}}
<div class="search-section">
  <div class="search-bar">
    <div class="search-field">
      <label><i class="fas fa-heart"></i> I'm Interested In</label>
      <select>
        <option>Safari</option>
        <option>Kilimanjaro</option>
        <option>Zanzibar</option>
        <option>Honeymoon</option>
        <option>Cultural Experience</option>
        <option>Family Adventure</option>
      </select>
    </div>
    <div class="search-field">
      <label><i class="fas fa-calendar"></i> Travel Dates</label>
      <input type="date">
    </div>
    <div class="search-field">
      <label><i class="fas fa-users"></i> Travelers</label>
      <select>
        <option>1 Person</option>
        <option>2 People</option>
        <option>3-5 People</option>
        <option>6-10 People</option>
        <option>10+ People</option>
      </select>
    </div>
    <button class="search-btn"><i class="fas fa-search"></i> Find My Adventure</button>
  </div>
</div>

{{-- ================================================================
     SECTION 3 — FEATURED EXPERIENCES (4 cards)
     ================================================================ --}}
<section id="experiences" style="background:var(--cream)">
  <div class="sec-header">
    <div>
      <div class="sec-label">Explore Tanzania</div>
      <h2 class="sec-title">Your Tanzania. Your <em>Adventure.</em></h2>
      <p class="sec-sub">From the endless plains of the Serengeti to the turquoise waters of Zanzibar — discover your perfect Tanzania experience.</p>
    </div>
  </div>
  <div class="activities-grid">
    <a href="/safaris" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Wildlife Safari in Tanzania">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-binoculars"></i></div>
        <div class="activity-name">Wildlife Safaris</div>
        <div class="activity-count">Explore the Big Five</div>
      </div>
    </a>
    <a href="/kilimanjaro" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Mount Kilimanjaro Trekking">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-mountain"></i></div>
        <div class="activity-name">Kilimanjaro</div>
        <div class="activity-count">Conquer Africa's highest peak</div>
      </div>
    </a>
    <a href="/zanzibar" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar Beach Paradise">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-umbrella-beach"></i></div>
        <div class="activity-name">Zanzibar</div>
        <div class="activity-count">Island paradise awaits</div>
      </div>
    </a>
    <a href="/experiences/cultural-tours" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Cultural Experiences in Tanzania">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-globe-africa"></i></div>
        <div class="activity-name">Cultural Experiences</div>
        <div class="activity-count">Authentic local traditions</div>
      </div>
    </a>
  </div>
</section>

{{-- ================================================================
     SECTION 4 — POPULAR DESTINATIONS (6 cards, dark bg)
     ================================================================ --}}
<section id="destinations">
  <div class="sec-header">
    <div>
      <div class="sec-label">Destinations</div>
      <h2 class="sec-title">Popular Tanzania <em>Destinations</em></h2>
      <p class="sec-sub">From the Serengeti's endless plains to Zanzibar's pristine beaches — explore Tanzania's most iconic destinations.</p>
    </div>
    <a href="/destinations" class="btn-outline" style="border-color:rgba(255,255,255,0.4);color:var(--white)">View All <i class="fas fa-arrow-right"></i></a>
  </div>
  <div class="dest-grid">
    <a href="/destinations/serengeti" class="dest-card">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti National Park">
      <div class="dest-overlay">
        <div class="dest-tag">Great Migration</div>
        <div class="dest-name">Serengeti National Park</div>
        <div class="dest-info">
          <span><i class="fas fa-binoculars"></i> Big Five</span>
          <span><i class="fas fa-map-marker-alt"></i> The Endless Plains</span>
        </div>
      </div>
    </a>
    <a href="/destinations/ngorongoro" class="dest-card">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Crater">
      <div class="dest-overlay">
        <div class="dest-tag">Africa's Natural Wonder</div>
        <div class="dest-name">Ngorongoro Crater</div>
        <div class="dest-info">
          <span><i class="fas fa-binoculars"></i> Big Five</span>
          <span><i class="fas fa-mountain"></i> Crater Landscape</span>
        </div>
      </div>
    </a>
    <a href="/destinations/tarangire" class="dest-card">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Tarangire National Park">
      <div class="dest-overlay">
        <div class="dest-tag">Land of Giants</div>
        <div class="dest-name">Tarangire National Park</div>
        <div class="dest-info">
          <span><i class="fas fa-paw"></i> Elephants</span>
          <span><i class="fas fa-tree"></i> Baobabs</span>
        </div>
      </div>
    </a>
    <a href="/destinations/lake-manyara" class="dest-card">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Lake Manyara">
      <div class="dest-overlay">
        <div class="dest-tag">The Birdwatcher's Paradise</div>
        <div class="dest-name">Lake Manyara</div>
        <div class="dest-info">
          <span><i class="fas fa-dove"></i> Flamingos</span>
          <span><i class="fas fa-paw"></i> Tree-climbing Lions</span>
        </div>
      </div>
    </a>
    <a href="/kilimanjaro" class="dest-card">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Mount Kilimanjaro">
      <div class="dest-overlay">
        <div class="dest-tag">Roof of Africa</div>
        <div class="dest-name">Mount Kilimanjaro</div>
        <div class="dest-info">
          <span><i class="fas fa-mountain"></i> Summit Trekking</span>
          <span><i class="fas fa-route"></i> Multiple Routes</span>
        </div>
      </div>
    </a>
    <a href="/zanzibar" class="dest-card">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar">
      <div class="dest-overlay">
        <div class="dest-tag">Where Adventure Meets Paradise</div>
        <div class="dest-name">Zanzibar</div>
        <div class="dest-info">
          <span><i class="fas fa-umbrella-beach"></i> Beaches</span>
          <span><i class="fas fa-landmark"></i> Stone Town</span>
        </div>
      </div>
    </a>
  </div>
</section>

{{-- ================================================================
     SECTION 5 — POPULAR TOUR PACKAGES (smoke bg)
     ================================================================ --}}
<section id="tours">
  <div class="sec-header">
    <div>
      <div class="sec-label">Tour Packages</div>
      <h2 class="sec-title">Handcrafted Tanzania <em>Tours</em></h2>
      <p class="sec-sub">Carefully designed itineraries to give you the most authentic and unforgettable Tanzania experience.</p>
    </div>
    <a href="/safaris" class="btn-outline-dark">View All Tours <i class="fas fa-arrow-right"></i></a>
  </div>
  <div class="filters">
    <button class="filter-btn active" data-filter="all">All</button>
    <button class="filter-btn" data-filter="luxury">Luxury</button>
    <button class="filter-btn" data-filter="adventure">Adventure</button>
    <button class="filter-btn" data-filter="budget">Budget</button>
    <button class="filter-btn" data-filter="family">Family</button>
    <button class="filter-btn" data-filter="beach">Beach</button>
    <button class="filter-btn" data-filter="honeymoon">Honeymoon</button>
  </div>
  <div class="tours-grid">

    {{-- Tour 1: Great Migration Luxury Safari --}}
    <div class="tour-card" data-category="luxury">
      <div class="tour-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Luxury Safari">
        <span class="tour-badge">Luxury</span>
        <button class="tour-wish"><i class="far fa-heart"></i></button>
      </div>
      <div class="tour-body">
        <div class="tour-meta">
          <span><i class="fas fa-clock"></i> 8 Days</span>
          <span><i class="fas fa-users"></i> Max 6</span>
          <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
        </div>
        <h3 class="tour-name">Great Migration Luxury Safari</h3>
        <p class="tour-desc">Witness the legendary Great Migration across the Serengeti plains with luxury tented camp accommodation and private game drives.</p>
        <div class="tour-footer">
          <div class="tour-price">
            <small>From</small>
            <strong>$4,500</strong>
            <em>/pp</em>
          </div>
          <a href="/safaris/great-migration-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Tour 2: Kilimanjaro Machame Route --}}
    <div class="tour-card" data-category="adventure">
      <div class="tour-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Kilimanjaro Machame Route">
        <span class="tour-badge" style="background:#E67E22;color:var(--white)">Adventure</span>
        <button class="tour-wish"><i class="far fa-heart"></i></button>
      </div>
      <div class="tour-body">
        <div class="tour-meta">
          <span><i class="fas fa-clock"></i> 7 Days</span>
          <span><i class="fas fa-users"></i> Max 12</span>
          <span><i class="fas fa-mountain"></i> Kilimanjaro</span>
        </div>
        <h3 class="tour-name">Kilimanjaro Machame Route</h3>
        <p class="tour-desc">The "Whiskey Route" offers stunning scenery and the highest success rate among popular routes to the summit of Kilimanjaro.</p>
        <div class="tour-footer">
          <div class="tour-price">
            <small>From</small>
            <strong>$2,100</strong>
            <em>/pp</em>
          </div>
          <a href="/kilimanjaro/machame-route" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Tour 3: Zanzibar Luxury Honeymoon --}}
    <div class="tour-card" data-category="honeymoon">
      <div class="tour-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar Luxury Honeymoon">
        <span class="tour-badge" style="background:#E74C3C;color:var(--white)">Honeymoon</span>
        <button class="tour-wish"><i class="far fa-heart"></i></button>
      </div>
      <div class="tour-body">
        <div class="tour-meta">
          <span><i class="fas fa-clock"></i> 6 Days</span>
          <span><i class="fas fa-heart"></i> Couples</span>
          <span><i class="fas fa-umbrella-beach"></i> Zanzibar</span>
        </div>
        <h3 class="tour-name">Zanzibar Luxury Honeymoon</h3>
        <p class="tour-desc">A romantic escape to Zanzibar's pristine beaches with private villa stays, sunset dhow cruises, and couples spa experiences.</p>
        <div class="tour-footer">
          <div class="tour-price">
            <small>From</small>
            <strong>$2,800</strong>
            <em>/pp</em>
          </div>
          <a href="/zanzibar/honeymoon" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Tour 4: Ngorongoro Crater Safari --}}
    <div class="tour-card" data-category="budget">
      <div class="tour-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg" alt="Ngorongoro Crater Safari">
        <span class="tour-badge" style="background:#27AE60;color:var(--white)">Budget</span>
        <button class="tour-wish"><i class="far fa-heart"></i></button>
      </div>
      <div class="tour-body">
        <div class="tour-meta">
          <span><i class="fas fa-clock"></i> 4 Days</span>
          <span><i class="fas fa-users"></i> Max 8</span>
          <span><i class="fas fa-map-marker-alt"></i> Ngorongoro</span>
        </div>
        <h3 class="tour-name">Ngorongoro Crater Safari</h3>
        <p class="tour-desc">Explore the world's largest intact volcanic caldera teeming with wildlife including the Big Five on a budget-friendly safari.</p>
        <div class="tour-footer">
          <div class="tour-price">
            <small>From</small>
            <strong>$1,200</strong>
            <em>/pp</em>
          </div>
          <a href="/safaris" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Tour 5: Tanzania Family Adventure --}}
    <div class="tour-card" data-category="family">
      <div class="tour-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Tanzania Family Adventure">
        <span class="tour-badge" style="background:#9B59B6;color:var(--white)">Family</span>
        <button class="tour-wish"><i class="far fa-heart"></i></button>
      </div>
      <div class="tour-body">
        <div class="tour-meta">
          <span><i class="fas fa-clock"></i> 10 Days</span>
          <span><i class="fas fa-users"></i> Family</span>
          <span><i class="fas fa-map-marker-alt"></i> Multi</span>
        </div>
        <h3 class="tour-name">Tanzania Family Adventure</h3>
        <p class="tour-desc">A perfectly paced family-friendly itinerary combining wildlife safaris, cultural visits, and beach relaxation in Zanzibar.</p>
        <div class="tour-footer">
          <div class="tour-price">
            <small>From</small>
            <strong>$2,600</strong>
            <em>/pp</em>
          </div>
          <a href="/safaris/family-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

    {{-- Tour 6: Ultimate Tanzania Grand Safari --}}
    <div class="tour-card" data-category="luxury">
      <div class="tour-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp" alt="Ultimate Tanzania Grand Safari">
        <span class="tour-badge">Luxury</span>
        <button class="tour-wish"><i class="far fa-heart"></i></button>
      </div>
      <div class="tour-body">
        <div class="tour-meta">
          <span><i class="fas fa-clock"></i> 12 Days</span>
          <span><i class="fas fa-users"></i> Max 4</span>
          <span><i class="fas fa-map-marker-alt"></i> Multi</span>
        </div>
        <h3 class="tour-name">Ultimate Tanzania Grand Safari</h3>
        <p class="tour-desc">The ultimate Tanzania experience — Serengeti, Ngorongoro, Tarangire, and Zanzibar in one unforgettable luxury journey.</p>
        <div class="tour-footer">
          <div class="tour-price">
            <small>From</small>
            <strong>$5,900</strong>
            <em>/pp</em>
          </div>
          <a href="/safaris" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- ================================================================
     SECTION 6 — KILIMANJARO SECTION (earth bg)
     ================================================================ --}}
<section id="kilimanjaro">
  <div class="kili-layout">
    <div class="kili-img-wrap">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Mount Kilimanjaro" class="kili-img-main">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324492/lemosho-route-packages-2-1-600x275.jpg.bv_vbxuaq.webp" alt="Kilimanjaro trekker" class="kili-img-float">
    </div>
    <div>
      <div class="sec-label" style="color:var(--gold-light)">Kilimanjaro</div>
      <h2 class="sec-title">Conquer <em>Kilimanjaro</em></h2>
      <p class="sec-sub">Rise to the summit of Africa's highest peak at 5,895m. Choose from six incredible routes, each offering unique scenery and challenges on your journey to the Roof of Africa.</p>
      <div class="routes-grid">
        <div class="route-card">
          <div class="route-icon"><i class="fas fa-route"></i></div>
          <div>
            <div class="route-name">Machame Route</div>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 7 Days</span>
              <span><i class="fas fa-chart-line"></i> 85% Success</span>
            </div>
            <div class="diff-bar">
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot"></div>
            </div>
          </div>
        </div>
        <div class="route-card">
          <div class="route-icon"><i class="fas fa-route"></i></div>
          <div>
            <div class="route-name">Lemosho Route</div>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 8 Days</span>
              <span><i class="fas fa-chart-line"></i> 90% Success</span>
            </div>
            <div class="diff-bar">
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot"></div>
              <div class="diff-dot"></div>
            </div>
          </div>
        </div>
        <div class="route-card">
          <div class="route-icon"><i class="fas fa-route"></i></div>
          <div>
            <div class="route-name">Marangu Route</div>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 6 Days</span>
              <span><i class="fas fa-chart-line"></i> 65% Success</span>
            </div>
            <div class="diff-bar">
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot"></div>
              <div class="diff-dot"></div>
              <div class="diff-dot"></div>
            </div>
          </div>
        </div>
        <div class="route-card">
          <div class="route-icon"><i class="fas fa-route"></i></div>
          <div>
            <div class="route-name">Rongai Route</div>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 7 Days</span>
              <span><i class="fas fa-chart-line"></i> 80% Success</span>
            </div>
            <div class="diff-bar">
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot filled"></div>
              <div class="diff-dot"></div>
              <div class="diff-dot"></div>
            </div>
          </div>
        </div>
      </div>
      <div style="display:flex;gap:14px;margin-top:30px;flex-wrap:wrap">
        <a href="/contact" class="btn-gold"><i class="fas fa-mountain"></i> Plan My Climb</a>
        <a href="/kilimanjaro" class="btn-outline" style="border-color:rgba(255,255,255,0.4);color:var(--white)"><i class="fas fa-route"></i> View All Routes</a>
      </div>
    </div>
  </div>
</section>

{{-- ================================================================
     SECTION 7 — EXPERIENCES / THINGS TO DO (cream bg)
     ================================================================ --}}
<section id="thingstodo" style="background:var(--cream)">
  <div class="sec-header">
    <div>
      <div class="sec-label">Things To Do</div>
      <h2 class="sec-title">Experiences Beyond <em>the Safari</em></h2>
      <p class="sec-sub">Tanzania offers more than just wildlife — discover cultural encounters, adventure activities, and unique experiences.</p>
    </div>
    <a href="/experiences" class="btn-outline-dark">All Experiences <i class="fas fa-arrow-right"></i></a>
  </div>
  <div class="activities-grid">
    <a href="/experiences/wildlife-safari" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Game Safari">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-paw"></i></div>
        <div class="activity-name">Game Safari</div>
        <div class="activity-count">38 experiences</div>
      </div>
    </a>
    <a href="/zanzibar" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Snorkeling and Diving">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-swimmer"></i></div>
        <div class="activity-name">Snorkeling & Diving</div>
        <div class="activity-count">22 experiences</div>
      </div>
    </a>
    <a href="/experiences/cultural-tours" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/man-with-dreads-representing-rastafari-movement_jmcqny.jpg" alt="Maasai Cultural Tours">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-users"></i></div>
        <div class="activity-name">Maasai Cultural Tours</div>
        <div class="activity-count">15 experiences</div>
      </div>
    </a>
    <a href="/experiences" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Balloon Safari">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-hot-air-balloon"></i></div>
        <div class="activity-name">Balloon Safari</div>
        <div class="activity-count">8 experiences</div>
      </div>
    </a>
    <a href="/zanzibar" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar Spice Tours">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-leaf"></i></div>
        <div class="activity-name">Zanzibar Spice Tours</div>
        <div class="activity-count">12 experiences</div>
      </div>
    </a>
    <a href="/experiences/bird-watching" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Birdwatching">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-dove"></i></div>
        <div class="activity-name">Birdwatching</div>
        <div class="activity-count">18 experiences</div>
      </div>
    </a>
    <a href="/experiences/great-migration" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Viewing">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-binoculars"></i></div>
        <div class="activity-name">Great Migration Viewing</div>
        <div class="activity-count">25 experiences</div>
      </div>
    </a>
    <a href="/experiences/photographic-safari" class="activity-card" style="text-decoration:none">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766262419/beautiful-zebra-wild.jpg" alt="Photographic Safari">
      <div class="activity-overlay">
        <div class="activity-icon"><i class="fas fa-camera"></i></div>
        <div class="activity-name">Photographic Safari</div>
        <div class="activity-count">10 experiences</div>
      </div>
    </a>
  </div>
</section>

{{-- ================================================================
     SECTION 8 — ABOUT LAU PARADISE (smoke bg)
     ================================================================ --}}
<section id="about">
  <div class="about-layout">
    <div class="about-images">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp" alt="Safari in Tanzania" class="about-img1">
      <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Tanzania Safari Guide" class="about-img2">
      <div class="about-badge">
        <strong>10+</strong>
        <span>Years Experience</span>
      </div>
    </div>
    <div>
      <div class="sec-label">Who We Are</div>
      <h2 class="sec-title">Born in Tanzania, <em>Experts</em> by Passion</h2>
      <p class="sec-sub">LAU Paradise Adventure is a locally owned tour operator based in Moshi, Tanzania — the gateway to Kilimanjaro. Born and raised in the heart of East Africa, our team combines deep local knowledge with world-class hospitality to craft safaris, treks, and beach holidays that are truly unforgettable.</p>
      <div class="values">
        <div class="value-item">
          <div class="value-icon"><i class="fas fa-map-marked-alt"></i></div>
          <div>
            <div class="value-title">Local Knowledge</div>
            <div class="value-desc">Insider access to Tanzania's hidden gems and best-kept secrets.</div>
          </div>
        </div>
        <div class="value-item">
          <div class="value-icon"><i class="fas fa-sliders-h"></i></div>
          <div>
            <div class="value-title">Personalized Journeys</div>
            <div class="value-desc">Every trip is tailored to your interests, pace, and budget.</div>
          </div>
        </div>
        <div class="value-item">
          <div class="value-icon"><i class="fas fa-user-tie"></i></div>
          <div>
            <div class="value-title">Professional Guides</div>
            <div class="value-desc">Certified, multilingual guides with years of field experience.</div>
          </div>
        </div>
        <div class="value-item">
          <div class="value-icon"><i class="fas fa-leaf"></i></div>
          <div>
            <div class="value-title">Responsible Tourism</div>
            <div class="value-desc">Committed to conservation and supporting local communities.</div>
          </div>
        </div>
      </div>
      <div style="display:flex;gap:14px;margin-top:30px;flex-wrap:wrap">
        <a href="/about" class="btn-gold"><i class="fas fa-info-circle"></i> About Us</a>
        <a href="/about" class="btn-outline-dark"><i class="fas fa-book-open"></i> Our Story</a>
      </div>
    </div>
  </div>
</section>

{{-- ================================================================
     SECTION 9 — REVIEWS (dark bg)
     ================================================================ --}}
<section id="reviews">
  <div style="text-align:center;max-width:600px;margin:0 auto">
    <div class="sec-label" style="justify-content:center;color:var(--gold-light)">Testimonials</div>
    <h2 class="sec-title">What Our <em>Travelers</em> Say</h2>
    <p class="sec-sub" style="margin:12px auto 0">Real stories from real travelers who explored Tanzania with us.</p>
  </div>
  <div class="reviews-grid">

    {{-- Review 1 --}}
    <div class="review-card">
      <div class="review-quote">&ldquo;</div>
      <div class="review-stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p class="review-text">"An unforgettable Serengeti experience from start to finish. Our guide was incredibly knowledgeable, and every game drive felt like a scene from a nature documentary. The migration crossing was beyond anything I could have imagined."</p>
      <div class="review-author">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&q=80" alt="Sarah Thompson" class="review-avatar">
        <div>
          <div class="review-name">Sarah Thompson</div>
          <div class="review-loc">London, United Kingdom</div>
        </div>
      </div>
    </div>

    {{-- Review 2 --}}
    <div class="review-card">
      <div class="review-quote">&ldquo;</div>
      <div class="review-stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p class="review-text">"The Kilimanjaro team was professional, caring, and truly passionate. They made summit day feel achievable, and the entire journey from Machame camp to Uhuru Peak was life-changing. I couldn't have done it without them."</p>
      <div class="review-author">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=80" alt="Marcus Reed" class="review-avatar">
        <div>
          <div class="review-name">Marcus Reed</div>
          <div class="review-loc">New York, USA</div>
        </div>
      </div>
    </div>

    {{-- Review 3 --}}
    <div class="review-card">
      <div class="review-quote">&ldquo;</div>
      <div class="review-stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <p class="review-text">"Our honeymoon in Zanzibar was perfect in every way. From the private beach dinner to the spice tour, every detail was thoughtfully arranged. LAU Paradise made us feel like VIPs throughout our entire stay."</p>
      <div class="review-author">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&q=80" alt="Amelia Kowalski" class="review-avatar">
        <div>
          <div class="review-name">Amelia Kowalski</div>
          <div class="review-loc">Warsaw, Poland</div>
        </div>
      </div>
    </div>

  </div>

  {{-- Trust Badges --}}
  <div class="trust-badges">
    <div class="trust-badge">
      <i class="fas fa-shield-alt"></i>
      <div>Licensed & Insured</div>
    </div>
    <div class="trust-badge">
      <i class="fas fa-award"></i>
      <div>TripAdvisor Rated</div>
    </div>
    <div class="trust-badge">
      <i class="fas fa-handshake"></i>
      <div>ATTA Member</div>
    </div>
    <div class="trust-badge">
      <i class="fas fa-headset"></i>
      <div>24/7 Support</div>
    </div>
    <div class="trust-badge">
      <i class="fas fa-credit-card"></i>
      <div>Flexible Payment</div>
    </div>
  </div>
</section>

{{-- ================================================================
     SECTION 10 — BLOG / TRAVEL GUIDE PREVIEW (cream bg)
     ================================================================ --}}
<section id="blog" style="background:var(--cream)">
  <div class="sec-header">
    <div>
      <div class="sec-label">Travel Guide</div>
      <h2 class="sec-title">Tanzania <em>Travel Guide</em></h2>
      <p class="sec-sub">Expert tips, guides, and insights to help you plan the perfect Tanzania adventure.</p>
    </div>
    <a href="/plan-your-trip/tanzania-travel-guide" class="btn-outline-dark">All Articles <i class="fas fa-arrow-right"></i></a>
  </div>
  <div class="blog-grid">

    {{-- Blog 1 --}}
    <a href="/plan-your-trip/best-time-to-visit-tanzania" class="blog-card" style="text-decoration:none">
      <div class="blog-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Best Time to See the Great Migration">
      </div>
      <div class="blog-body">
        <div class="blog-cat">Wildlife</div>
        <h3 class="blog-title">The Best Time to See the Great Migration</h3>
        <div class="blog-meta">
          <span><i class="far fa-calendar"></i> Jan 2025</span>
          <span><i class="far fa-clock"></i> 6 min read</span>
        </div>
      </div>
    </a>

    {{-- Blog 2 --}}
    <a href="/plan-your-trip/what-to-pack" class="blog-card" style="text-decoration:none">
      <div class="blog-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Kilimanjaro Packing List">
      </div>
      <div class="blog-body">
        <div class="blog-cat">Kilimanjaro</div>
        <h3 class="blog-title">Complete Kilimanjaro Packing List</h3>
        <div class="blog-meta">
          <span><i class="far fa-calendar"></i> Dec 2024</span>
          <span><i class="far fa-clock"></i> 8 min read</span>
        </div>
      </div>
    </a>

    {{-- Blog 3 --}}
    <a href="/plan-your-trip/tanzania-travel-guide" class="blog-card" style="text-decoration:none">
      <div class="blog-img">
        <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Foods in Zanzibar">
      </div>
      <div class="blog-body">
        <div class="blog-cat">Zanzibar</div>
        <h3 class="blog-title">10 Must-Try Foods in Zanzibar</h3>
        <div class="blog-meta">
          <span><i class="far fa-calendar"></i> Nov 2024</span>
          <span><i class="far fa-clock"></i> 5 min read</span>
        </div>
      </div>
    </a>

  </div>
</section>

{{-- ================================================================
     SECTION 11 — BOOK NOW BANNER (gold bg)
     ================================================================ --}}
<div class="book-banner">
  <div>
    <h2>Ready to Start Your Tanzania Adventure?</h2>
    <p>Speak with our expert travel consultants — no obligations, just inspiration.</p>
  </div>
  <div class="book-banner-actions">
    <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Trip</a>
    <a href="https://wa.me/255683163219" class="btn-outline" style="border-color:rgba(26,18,9,0.3);color:var(--dark)" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
  </div>
</div>

{{-- ================================================================
     SECTION 12 — CONTACT SECTION (smoke bg)
     ================================================================ --}}
<section id="contact">
  <div class="sec-header">
    <div>
      <div class="sec-label">Get In Touch</div>
      <h2 class="sec-title">Start Planning Your <em>Trip</em></h2>
      <p class="sec-sub">Reach out to us and let's create your dream Tanzania adventure together.</p>
    </div>
  </div>
  <div class="contact-layout">

    {{-- Left: Contact Info --}}
    <div>
      <div class="contact-info">
        <div class="contact-item">
          <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
          <div>
            <div class="contact-label">Office</div>
            <div class="contact-value">Moshi, Kilimanjaro Region, Tanzania</div>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="fas fa-phone"></i></div>
          <div>
            <div class="contact-label">Phone</div>
            <div class="contact-value"><a href="tel:+255683163219">+255 683 163 219</a></div>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="fas fa-envelope"></i></div>
          <div>
            <div class="contact-label">Email</div>
            <div class="contact-value"><a href="mailto:info@lauparadiseadventure.com">info@lauparadiseadventure.com</a></div>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
          <div>
            <div class="contact-label">WhatsApp</div>
            <div class="contact-value"><a href="https://wa.me/255683163219" target="_blank">+255 683 163 219</a></div>
          </div>
        </div>
      </div>

      <a href="https://wa.me/255683163219?text=Hello%20LAU%20Paradise%20Adventure!%20I'm%20interested%20in%20planning%20a%20trip%20to%20Tanzania." class="wa-btn" target="_blank" rel="noopener">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
      </a>

      <div style="margin-top:30px">
        <div class="contact-label" style="margin-bottom:14px">Follow Us</div>
        <div class="footer-socials" style="gap:12px">
          <a href="#" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
          <a href="#" class="social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>

    {{-- Right: Booking Form --}}
    <div class="booking-form">
      <h3>Plan Your Adventure</h3>
      <form action="/contact" method="POST">
        @csrf
        <div class="form-grid">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="your@email.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+1 234 567 8900">
          </div>
          <div class="form-group">
            <label for="destination">Destination</label>
            <select id="destination" name="destination">
              <option value="">Select destination</option>
              <option>Serengeti National Park</option>
              <option>Ngorongoro Crater</option>
              <option>Tarangire National Park</option>
              <option>Lake Manyara</option>
              <option>Mount Kilimanjaro</option>
              <option>Zanzibar</option>
              <option>Multi-Destination</option>
              <option>Not sure yet</option>
            </select>
          </div>
          <div class="form-group">
            <label for="travelers">Number of Travelers</label>
            <select id="travelers" name="travelers">
              <option value="">Select travelers</option>
              <option>1 Person</option>
              <option>2 People</option>
              <option>3-5 People</option>
              <option>6-10 People</option>
              <option>10+ People</option>
            </select>
          </div>
          <div class="form-group">
            <label for="dates">Preferred Dates</label>
            <input type="date" id="dates" name="dates">
          </div>
          <div class="form-group full">
            <label for="budget">Budget Range (USD per person)</label>
            <select id="budget" name="budget">
              <option value="">Select budget range</option>
              <option>Under $1,000</option>
              <option>$1,000 - $2,500</option>
              <option>$2,500 - $5,000</option>
              <option>$5,000 - $10,000</option>
              <option>$10,000+</option>
            </select>
          </div>
          <div class="form-group full">
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Tell us about your dream Tanzania trip — interests, special requirements, anything we should know." rows="4"></textarea>
          </div>
        </div>
        <button type="submit" class="form-submit"><i class="fas fa-paper-plane"></i> Send Inquiry</button>
      </form>
    </div>

  </div>
</section>

@endsection
