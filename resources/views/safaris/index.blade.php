@extends('layouts.app')

@section('page-title', 'Tanzania Safari Tours & Packages | LAU Paradise Adventure')
@section('meta-description', 'Discover unforgettable Tanzania safari tours across Serengeti, Ngorongoro, Tarangire and Lake Manyara. Private, luxury, family and customized safari packages.')
@section('meta-keywords', 'Tanzania safari tours, Tanzania safari packages, Serengeti safari, Ngorongoro safari, luxury safari Tanzania, private safari, group safari, family safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tanzania Safari Tours",
    "description": "Discover unforgettable Tanzania safari tours across Serengeti, Ngorongoro, Tarangire and Lake Manyara.",
    "url": "https://www.lauparadiseadventure.com/safaris",
    "touristType": "Tourist",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": [
        {
            "@type": "Offer",
            "name": "Great Migration Luxury Safari",
            "price": "4500",
            "priceCurrency": "USD",
            "description": "8-day luxury safari through Serengeti witnessing the Great Migration"
        },
        {
            "@type": "Offer",
            "name": "Ngorongoro Crater Safari",
            "price": "1200",
            "priceCurrency": "USD",
            "description": "4-day budget group safari to the Ngorongoro Crater"
        },
        {
            "@type": "Offer",
            "name": "Ultimate Tanzania Grand Safari",
            "price": "5900",
            "priceCurrency": "USD",
            "description": "12-day comprehensive luxury safari across multiple Tanzania parks"
        }
    ]
}
</script>
    @endverbatim
@endsection

@section('extra-css')
<style>
.page-hero-safaris { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg'); }
.filter-section { background: var(--white); padding: 40px 8%; border-bottom: 1px solid #eee; }
.filter-row { display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 16px; }
.filter-row:last-child { margin-bottom: 0; }
.filter-label { font-weight: 600; font-size: 0.82rem; color: var(--text); margin-bottom: 6px; display: flex; align-items: center; gap: 6px; }
.filter-label i { color: var(--gold); font-size: 0.75rem; }
.filter-chips { display: flex; gap: 8px; flex-wrap: wrap; }
.filter-chip-item {
    padding: 8px 18px; border: 1.5px solid #ddd; border-radius: 30px;
    font-size: 0.82rem; color: var(--text-muted); cursor: pointer;
    transition: 0.2s; font-family: 'DM Sans', sans-serif; background: transparent;
    font-weight: 500;
}
.filter-chip-item.active, .filter-chip-item:hover {
    border-color: var(--gold); background: rgba(200,150,62,0.08); color: var(--gold); font-weight: 600;
}
.safaris-section { background: var(--smoke); padding: 70px 8%; }
.safaris-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
.why-book-section { padding: 80px 8%; background: var(--cream); }
.why-book-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-top: 40px; }
.why-book-card {
    text-align: center; padding: 36px 24px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);
    transition: 0.3s;
}
.why-book-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.why-book-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center; margin: 0 auto 18px;
    font-size: 1.4rem; color: var(--gold);
}
.why-book-card h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.15rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px;
}
.why-book-card p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; }
.cta-banner-safaris {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.cta-banner-safaris h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.cta-banner-safaris p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.results-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; flex-wrap: wrap; gap: 12px; }
.results-count { font-size: 0.88rem; color: var(--text-muted); }
.results-count strong { color: var(--text); }
.sort-select { padding: 8px 16px; border: 1.5px solid #ddd; border-radius: 8px; font-size: 0.85rem; font-family: 'DM Sans', sans-serif; color: var(--text); background: var(--white); cursor: pointer; }
@media (max-width: 1024px) {
    .safaris-grid { grid-template-columns: repeat(2, 1fr); }
    .why-book-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .safaris-grid { grid-template-columns: 1fr; }
    .why-book-grid { grid-template-columns: 1fr; }
    .filter-chips { gap: 6px; }
    .filter-chip-item { padding: 6px 14px; font-size: 0.78rem; }
}
</style>
@endsection

@section('content')
<div class="page-hero page-hero-safaris">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">Safaris</span>
        </div>
        <h1 class="page-hero-title">Tanzania Safari Tours</h1>
        <p class="page-hero-sub">Explore the iconic wildlife destinations of Tanzania with expert local guides</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-map-marker-alt"></i> 6 Destinations</div>
            <div class="page-hero-stat"><i class="fas fa-route"></i> 20+ Tour Packages</div>
            <div class="page-hero-stat"><i class="fas fa-star"></i> 4.9 Average Rating</div>
        </div>
    </div>
</div>

<section class="filter-section">
    <div class="filter-row">
        <div style="flex:1; min-width:200px;">
            <div class="filter-label"><i class="fas fa-calendar-alt"></i> Duration</div>
            <div class="filter-chips">
                <button class="filter-chip-item active">All</button>
                <button class="filter-chip-item">1-3 Days</button>
                <button class="filter-chip-item">4-6 Days</button>
                <button class="filter-chip-item">7-10 Days</button>
                <button class="filter-chip-item">10+ Days</button>
            </div>
        </div>
        <div style="flex:1; min-width:200px;">
            <div class="filter-label"><i class="fas fa-gem"></i> Budget</div>
            <div class="filter-chips">
                <button class="filter-chip-item active">All</button>
                <button class="filter-chip-item">Budget</button>
                <button class="filter-chip-item">Mid-range</button>
                <button class="filter-chip-item">Luxury</button>
            </div>
        </div>
    </div>
    <div class="filter-row">
        <div style="flex:1; min-width:200px;">
            <div class="filter-label"><i class="fas fa-users"></i> Travel Type</div>
            <div class="filter-chips">
                <button class="filter-chip-item active">All</button>
                <button class="filter-chip-item">Private</button>
                <button class="filter-chip-item">Group</button>
                <button class="filter-chip-item">Family</button>
                <button class="filter-chip-item">Honeymoon</button>
                <button class="filter-chip-item">Photography</button>
            </div>
        </div>
        <div style="flex:1; min-width:200px;">
            <div class="filter-label"><i class="fas fa-map-marked-alt"></i> Destination</div>
            <div class="filter-chips">
                <button class="filter-chip-item active">All</button>
                <button class="filter-chip-item">Serengeti</button>
                <button class="filter-chip-item">Ngorongoro</button>
                <button class="filter-chip-item">Tarangire</button>
                <button class="filter-chip-item">Lake Manyara</button>
                <button class="filter-chip-item">Zanzibar</button>
            </div>
        </div>
    </div>
    <div class="filter-row">
        <div style="flex:1; min-width:200px;">
            <div class="filter-label"><i class="fas fa-sun"></i> Season</div>
            <div class="filter-chips">
                <button class="filter-chip-item active">All</button>
                <button class="filter-chip-item">Jan-Mar</button>
                <button class="filter-chip-item">Apr-May</button>
                <button class="filter-chip-item">Jun-Oct</button>
                <button class="filter-chip-item">Nov-Dec</button>
            </div>
        </div>
    </div>
</section>

<section class="safaris-section">
    <div class="sec-header">
        <div>
            <span class="sec-label">Our Safari Packages</span>
            <h2 class="sec-title">Explore Tanzania's <em>Wildlife</em></h2>
            <p class="sec-sub">From budget-friendly group adventures to exclusive luxury expeditions, find the perfect safari for your dream Tanzania trip.</p>
        </div>
    </div>
    <div class="results-header">
        <div class="results-count">Showing <strong>20</strong> safari packages</div>
        <select class="sort-select">
            <option>Sort by: Featured</option>
            <option>Price: Low to High</option>
            <option>Price: High to Low</option>
            <option>Duration: Shortest</option>
            <option>Duration: Longest</option>
        </select>
    </div>

    <div class="safaris-grid">

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Luxury Safari in Serengeti" loading="lazy">
                <span class="tour-badge">Best Seller</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 8 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Great Migration Luxury Safari</h3>
                <p class="tour-desc">Follow millions of wildebeest across the Serengeti plains. Private luxury lodges, exclusive game drives and front-row seats to nature's greatest spectacle.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$4,500</strong><em> / person</em></div>
                    <a href="/safaris/great-migration-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Crater Safari" loading="lazy">
                <span class="tour-badge">Budget Friendly</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 4 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.8</span>
                </div>
                <h3 class="tour-name">Ngorongoro Crater Safari</h3>
                <p class="tour-desc">Descend into the world's largest intact volcanic crater, home to over 25,000 animals. An affordable group adventure through one of Africa's Seven Wonders.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$1,200</strong><em> / person</em></div>
                    <a href="/safaris/ngorongoro-crater-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg" alt="Tarangire Elephant Safari" loading="lazy">
                <span class="tour-badge">Wildlife</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.8</span>
                </div>
                <h3 class="tour-name">Tarangire Elephant Safari</h3>
                <p class="tour-desc">Explore Tanzania's elephant capital. Tarangire hosts the largest elephant herds in the country, plus lions, leopards and ancient baobab landscapes.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$1,800</strong><em> / person</em></div>
                    <a href="/safaris/tarangire-elephant-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Serengeti Budget Camping Safari" loading="lazy">
                <span class="tour-badge">Budget</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.7</span>
                </div>
                <h3 class="tour-name">Serengeti Budget Camping Safari</h3>
                <p class="tour-desc">Experience the Serengeti without breaking the bank. Comfortable camping, expert guides and unforgettable wildlife encounters at an unbeatable price.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$1,100</strong><em> / person</em></div>
                    <a href="/safaris/serengeti-budget-camping" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Ngorongoro and Lake Manyara Safari" loading="lazy">
                <span class="tour-badge">Popular</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 4 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro & Manyara</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.8</span>
                </div>
                <h3 class="tour-name">Ngorongoro & Lake Manyara Safari</h3>
                <p class="tour-desc">Two iconic parks in one incredible trip. Descend into Ngorongoro Crater and explore the flamingo-lined shores of Lake Manyara.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$1,400</strong><em> / person</em></div>
                    <a href="/safaris/ngorongoro-manyara-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Luxury Serengeti Fly-In Safari" loading="lazy">
                <span class="tour-badge">Luxury</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 5.0</span>
                </div>
                <h3 class="tour-name">Luxury Serengeti Fly-In Safari</h3>
                <p class="tour-desc">Fly directly into the heart of the Serengeti. Stay in exclusive luxury tented camps with private game drives, bush dinners and champagne sundowners.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$6,200</strong><em> / person</em></div>
                    <a href="/safaris/luxury-serengeti-fly-in" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Kilimanjaro Machame Route Trek" loading="lazy">
                <span class="tour-badge">Adventure</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 7 Days</span>
                    <span><i class="fas fa-mountain"></i> Kilimanjaro</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Kilimanjaro Machame Route</h3>
                <p class="tour-desc">Tackle the iconic Machame Route on Africa's highest peak. Seven days of diverse landscapes, lush rainforests and the ultimate summit achievement.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$2,100</strong><em> / person</em></div>
                    <a href="/kilimanjaro/machame-route" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Tanzania Photography Safari" loading="lazy">
                <span class="tour-badge">Photography</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 8 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Tanzania Photography Safari</h3>
                <p class="tour-desc">Designed for photographers. Extended game drives at golden hour, custom vehicle modifications and expert guidance to capture the perfect shot.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$3,800</strong><em> / person</em></div>
                    <a href="/safaris/photography-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp" alt="Tanzania Family Adventure Safari" loading="lazy">
                <span class="tour-badge">Family</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 10 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Tanzania Family Adventure</h3>
                <p class="tour-desc">A ten-day journey designed for families. Child-friendly itineraries, educational wildlife encounters and safe, comfortable travel across multiple parks.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$2,600</strong><em> / person</em></div>
                    <a href="/safaris/family-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Cultural and Wildlife Safari" loading="lazy">
                <span class="tour-badge">Cultural</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.8</span>
                </div>
                <h3 class="tour-name">Cultural & Wildlife Safari</h3>
                <p class="tour-desc">Meet the Hadzabe bushmen, visit Maasai villages and witness the Big Five. A journey that blends authentic cultural encounters with epic wildlife viewing.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$2,200</strong><em> / person</em></div>
                    <a href="/safaris/cultural-wildlife-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar Luxury Honeymoon Safari" loading="lazy">
                <span class="tour-badge">Honeymoon</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 6 Days</span>
                    <span><i class="fas fa-umbrella-beach"></i> Zanzibar</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Zanzibar Luxury Honeymoon</h3>
                <p class="tour-desc">Combine the thrill of a safari with the romance of Zanzibar's pristine beaches. Luxury resorts, private dinners and unforgettable sunsets over the Indian Ocean.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$2,800</strong><em> / person</em></div>
                    <a href="/zanzibar/honeymoon" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/beautiful-waterfall-streaming-into-river-surrounded-by-greens_dgyhld.jpg" alt="Tanzania Honeymoon Safari and Beach" loading="lazy">
                <span class="tour-badge">Romance</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 7 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti & Zanzibar</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Honeymoon Safari & Beach Escape</h3>
                <p class="tour-desc">Start with a romantic safari in the Serengeti, then fly to Zanzibar for beachside relaxation. The perfect blend of adventure and romance.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$3,500</strong><em> / person</em></div>
                    <a href="/safaris/honeymoon-safari-beach" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp" alt="Kilimanjaro and Safari Combo" loading="lazy">
                <span class="tour-badge">Combo</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 10 Days</span>
                    <span><i class="fas fa-mountain"></i> Kilimanjaro & Serengeti</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Kilimanjaro & Safari Combo</h3>
                <p class="tour-desc">Conquer Africa's highest peak then celebrate with a wildlife safari. The ultimate two-in-one Tanzania adventure for thrill-seekers.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$4,200</strong><em> / person</em></div>
                    <a href="/safaris/kilimanjaro-safari-combo" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766262419/beautiful-zebra-wild.jpg" alt="Budget Tanzania Safari" loading="lazy">
                <span class="tour-badge">Budget</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 4 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.7</span>
                </div>
                <h3 class="tour-name">Budget Tanzania Safari</h3>
                <p class="tour-desc">Discover the Ngorongoro Crater on a budget. Group safari with shared vehicle, camping accommodation and all meals included.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$800</strong><em> / person</em></div>
                    <a href="/safaris/budget-tanzania-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Tanzania Birdwatching Safari" loading="lazy">
                <span class="tour-badge">Nature</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Manyara & Tarangire</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.8</span>
                </div>
                <h3 class="tour-name">Tanzania Birdwatching Safari</h3>
                <p class="tour-desc">Tanzania is a birder's paradise with over 1,100 species. Visit Lake Manyara and Tarangire for flamingos, pelicans, eagles and rare endemic species.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$2,400</strong><em> / person</em></div>
                    <a href="/safaris/birdwatching-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Zanzibar Beach and Safari Holiday" loading="lazy">
                <span class="tour-badge">Beach + Safari</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 9 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti & Zanzibar</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Zanzibar Beach & Safari Holiday</h3>
                <p class="tour-desc">Five days on safari followed by four days of island paradise. Snorkeling, spice tours and relaxation on Zanzibar's white sand beaches.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$3,600</strong><em> / person</em></div>
                    <a href="/safaris/zanzibar-beach-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Tarangire and Serengeti Safari" loading="lazy">
                <span class="tour-badge">Classic</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire & Serengeti</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.8</span>
                </div>
                <h3 class="tour-name">Tarangire & Serengeti Safari</h3>
                <p class="tour-desc">Two of Tanzania's crown jewels in one trip. Massive elephant herds in Tarangire, then the endless plains and Big Five of the Serengeti.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$2,600</strong><em> / person</em></div>
                    <a href="/safaris/tarangire-serengeti-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Great Migration River Crossing Safari" loading="lazy">
                <span class="tour-badge">Migration</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 7 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti & Mara</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
                </div>
                <h3 class="tour-name">Great Migration River Crossing</h3>
                <p class="tour-desc">Witness the dramatic Mara River crossings where thousands of wildebeest brave crocodile-infested waters. The most intense wildlife spectacle on Earth.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$3,200</strong><em> / person</em></div>
                    <a href="/safaris/great-migration-river-crossing" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp" alt="Ultimate Tanzania Grand Safari" loading="lazy">
                <span class="tour-badge">Premium</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 12 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 5.0</span>
                </div>
                <h3 class="tour-name">Ultimate Tanzania Grand Safari</h3>
                <p class="tour-desc">The definitive Tanzania experience. Twelve days covering Serengeti, Ngorongoro, Tarangire, Lake Manyara and Zanzibar. Every detail curated for perfection.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$5,900</strong><em> / person</em></div>
                    <a href="/safaris/ultimate-grand-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Luxury Tanzania and Zanzibar Safari" loading="lazy">
                <span class="tour-badge">Luxury</span>
                <button class="tour-wish" aria-label="Add to wishlist"><i class="far fa-heart"></i></button>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-clock"></i> 11 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park & Zanzibar</span>
                    <span><i class="fas fa-star" style="color:var(--gold)"></i> 5.0</span>
                </div>
                <h3 class="tour-name">Luxury Tanzania & Zanzibar</h3>
                <p class="tour-desc">The ultimate luxury escape. Private fly-in safari across Tanzania's top parks, then unwind in a five-star Zanzibar resort with private butler service.</p>
                <div class="tour-footer">
                    <div class="tour-price"><small>From</small><strong>$7,500</strong><em> / person</em></div>
                    <a href="/safaris/luxury-tanzania-zanzibar" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="why-book-section">
    <div style="text-align:center; margin-bottom:10px;">
        <span class="sec-label" style="justify-content:center;">Why Choose Us</span>
        <h2 class="sec-title" style="text-align:center;">Why Book With <em>LAU Paradise</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">We are a locally owned Tanzania tour operator with deep roots in the communities we serve.</p>
    </div>
    <div class="why-book-grid">
        <div class="why-book-card">
            <div class="why-book-icon"><i class="fas fa-map-marked-alt"></i></div>
            <h4>Unmatched Local Knowledge</h4>
            <p>Our team was born and raised in Tanzania. We know every trail, every watering hole and every hidden gem that most visitors never discover.</p>
        </div>
        <div class="why-book-card">
            <div class="why-book-icon"><i class="fas fa-paint-brush"></i></div>
            <h4>Personalized Experiences</h4>
            <p>No cookie-cutter tours here. Every itinerary is tailored to your interests, pace and travel style for a truly unique adventure.</p>
        </div>
        <div class="why-book-card">
            <div class="why-book-icon"><i class="fas fa-user-tie"></i></div>
            <h4>Professional Guides</h4>
            <p>Our guides are certified, multilingual and passionate about wildlife. With years of experience, they bring the bush to life with every story.</p>
        </div>
        <div class="why-book-card">
            <div class="why-book-icon"><i class="fas fa-leaf"></i></div>
            <h4>Responsible Tourism</h4>
            <p>We are committed to conservation, community support and sustainable travel practices that protect Tanzania's natural heritage for generations.</p>
        </div>
    </div>
</section>

<section class="cta-banner-safaris">
    <h2>Can't Find What You're Looking For?</h2>
    <p>Let us design a custom safari experience tailored exactly to your dreams, budget and travel dates. Our team is ready to craft your perfect Tanzania adventure.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Get In Touch</a>
</section>
@endsection
