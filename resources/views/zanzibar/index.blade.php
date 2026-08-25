@extends('layouts.app')

@section('page-title', 'Zanzibar Holidays & Tours | Beaches, Honeymoon & Culture')
@section('meta-description', 'Discover Zanzibar\'s beaches, Stone Town, culture and island adventures. Plan a luxury honeymoon or combine Zanzibar with a Tanzania safari.')
@section('meta-keywords', 'Zanzibar holidays, Zanzibar beaches, Stone Town tours, Zanzibar honeymoon, safari and Zanzibar, Tanzania beach holiday')
@section('canonical', 'https://www.lauparadiseadventure.com/zanzibar')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristDestination",
    "name": "Zanzibar",
    "description": "Discover Zanzibar's beaches, Stone Town, culture and island adventures.",
    "url": "https://www.lauparadiseadventure.com/zanzibar",
    "touristType": ["Beach Traveler", "Cultural Tourist", "Honeymooner"],
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": -6.1659,
        "longitude": 39.2026
    },
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    }
}
</script>
    @endverbatim
@endsection

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">Zanzibar</span>
        </div>
        <h1 class="page-hero-title">Escape to <em>Zanzibar</em></h1>
        <p class="page-hero-sub">Discover turquoise waters, white-sand beaches, historic Stone Town and unforgettable island experiences.</p>
    </div>
</section>

{{-- Experience Cards --}}
<section style="background: var(--cream);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Explore Zanzibar</div>
            <h2 class="sec-title">Your Zanzibar <em>Experience</em></h2>
            <p class="sec-sub">Whether you seek relaxation, romance, culture or adventure, Zanzibar has it all.</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 1100px;">
        {{-- Beach Holidays --}}
        <a href="/zanzibar/beach-holidays" style="display: block; background: var(--white); border-radius: 20px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 16px 40px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="height: 220px; overflow: hidden;">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar beach holiday — white sand and turquoise water" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 28px;">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Zanzibar Beach Holidays</h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Relax on Zanzibar's pristine white-sand beaches. Luxury resorts, boutique hotels and beachside bungalows along the Indian Ocean. From lively Nungwi to tranquil Matemwe.</p>
                <div style="margin-top: 16px; display: flex; align-items: center; gap: 8px; color: var(--gold); font-weight: 600; font-size: 0.88rem;">
                    Explore Beach Holidays <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </a>

        {{-- Honeymoon --}}
        <a href="/zanzibar/honeymoon" style="display: block; background: var(--white); border-radius: 20px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 16px 40px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="height: 220px; overflow: hidden;">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar honeymoon — romantic sunset dinner on the beach" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 28px;">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Honeymoon in Zanzibar</h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Create your perfect love story. Luxury beach resorts, romantic dinners under the stars, private sunset cruises and couple's spa experiences. The ultimate romantic escape.</p>
                <div style="margin-top: 16px; display: flex; align-items: center; gap: 8px; color: var(--gold); font-weight: 600; font-size: 0.88rem;">
                    Plan Your Honeymoon <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </a>

        {{-- Stone Town --}}
        <a href="/zanzibar/stone-town" style="display: block; background: var(--white); border-radius: 20px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 16px 40px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="height: 220px; overflow: hidden;">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Stone Town Zanzibar — historic architecture and alleys" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 28px;">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Stone Town Heritage</h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Wander through Stone Town's labyrinthine alleys. A UNESCO World Heritage Site with Swahili culture, spice markets, historic architecture and vibrant bazaars.</p>
                <div style="margin-top: 16px; display: flex; align-items: center; gap: 8px; color: var(--gold); font-weight: 600; font-size: 0.88rem;">
                    Discover Stone Town <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </a>

        {{-- Safari + Zanzibar --}}
        <a href="/zanzibar/safari-and-zanzibar" style="display: block; background: var(--white); border-radius: 20px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 16px 40px rgba(0,0,0,0.12)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="height: 220px; overflow: hidden;">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Safari and Zanzibar combo — wildlife followed by beach" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 28px;">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Safari + Zanzibar Combo</h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">The ultimate Tanzania combination. Experience thrilling wildlife safaris followed by Zanzibar's beach paradise. Seamlessly arranged for the perfect holiday.</p>
                <div style="margin-top: 16px; display: flex; align-items: center; gap: 8px; color: var(--gold); font-weight: 600; font-size: 0.88rem;">
                    Build Your Combo <i class="fas fa-arrow-right"></i>
                </div>
            </div>
        </a>
    </div>
</section>

{{-- Activities Grid --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Island Activities</div>
            <h2 class="sec-title">Things to <em>Do</em></h2>
            <p class="sec-sub">Adventure and relaxation — Zanzibar has something for everyone.</p>
        </div>
    </div>

    <div class="activities-grid">
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Snorkeling in Zanzibar" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-water"></i></div>
                <h3 class="activity-name">Snorkeling</h3>
                <p class="activity-count">Discover vibrant coral reefs</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Scuba diving Zanzibar" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-swimmer"></i></div>
                <h3 class="activity-name">Scuba Diving</h3>
                <p class="activity-count">Explore underwater worlds</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Spice tour Zanzibar" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-seedling"></i></div>
                <h3 class="activity-name">Spice Tours</h3>
                <p class="activity-count">Taste the Spice Island</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Prison Island visit" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-turtle"></i></div>
                <h3 class="activity-name">Prison Island</h3>
                <p class="activity-count">Giant tortoises & history</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Jozani Forest monkeys" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-tree"></i></div>
                <h3 class="activity-name">Jozani Forest</h3>
                <p class="activity-count">Rare red colobus monkeys</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Kitesurfing Zanzibar" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-wind"></i></div>
                <h3 class="activity-name">Kitesurfing</h3>
                <p class="activity-count">Ride the Indian Ocean</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Sunset dhow cruise" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-sailboat"></i></div>
                <h3 class="activity-name">Sunset Dhow</h3>
                <p class="activity-count">Sail into the sunset</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Deep sea fishing" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-fish"></i></div>
                <h3 class="activity-name">Deep Sea Fishing</h3>
                <p class="activity-count">Marlin, tuna & sailfish</p>
            </div>
        </div>
    </div>
</section>

{{-- Featured Packages --}}
<section style="background: var(--smoke);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Packages</div>
            <h2 class="sec-title">Featured <em>Zanzibar</em> Packages</h2>
            <p class="sec-sub">Curated holiday packages designed to showcase the best of Zanzibar.</p>
        </div>
        <a href="/contact" class="btn-outline-dark">Customize a Package <i class="fas fa-arrow-right" style="margin-left: 6px;"></i></a>
    </div>

    <div class="tours-grid">
        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar Beach Getaway package" loading="lazy">
                <span class="tour-badge">Relaxation</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Zanzibar</span>
                </div>
                <h3 class="tour-name">Zanzibar Beach Getaway</h3>
                <p class="tour-desc">5 days of pure beach bliss. Stay at a handpicked beachfront resort, enjoy snorkelling, a spice tour and a sunset dhow cruise.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$1,200</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/contact" class="btn-sm">Inquire</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar Honeymoon Escape package" loading="lazy">
                <span class="tour-badge">Romance</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Zanzibar</span>
                </div>
                <h3 class="tour-name">Zanzibar Luxury Honeymoon Escape</h3>
                <p class="tour-desc">6 days of romantic luxury. Private beach villa, couples spa, sunset dhow cruise, private dinner on the beach and Stone Town tour.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$2,800</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/zanzibar/honeymoon" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Safari and Zanzibar combo package" loading="lazy">
                <span class="tour-badge">Best Value</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 10 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Safari + Zanzibar</span>
                </div>
                <h3 class="tour-name">Tanzania Safari & Zanzibar Escape</h3>
                <p class="tour-desc">The ultimate combination. 5 days of wildlife safari through the northern circuit followed by 5 days of Zanzibar beach paradise.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$3,500</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/zanzibar/safari-and-zanzibar" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Plan My Zanzibar Holiday</h2>
        <p>Let us create your perfect island escape — from beach relaxation to cultural discovery.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Zanzibar Holiday</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Zanzibar%20holiday." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
