@extends('layouts.app')

@section('page-title', 'Zanzibar Destination | Beaches, Culture & Island Life')
@section('meta-description', 'Discover Zanzibar — pristine beaches, historic Stone Town, spice tours and unforgettable island experiences. The perfect complement to a Tanzania safari.')
@section('meta-keywords', 'Zanzibar beaches, Stone Town Zanzibar, spice tours Zanzibar, Zanzibar holidays, Indian Ocean beach')
@section('canonical', 'https://www.lauparadiseadventure.com/destinations/zanzibar')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Zanzibar Island Experience",
    "description": "Discover Zanzibar — pristine beaches, historic Stone Town, spice tours and unforgettable island experiences.",
    "touristType": "Beach & Culture Traveler",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "800",
        "highPrice": "3500",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
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
            <a href="/destinations">Destinations</a>
            <span>/</span>
            <span class="current">Zanzibar</span>
        </div>
        <h1 class="page-hero-title">Zanzibar</h1>
        <p class="page-hero-sub">Where Adventure Meets Paradise</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-umbrella-beach"></i> White Sand Beaches</div>
            <div class="page-hero-stat"><i class="fas fa-landmark"></i> Stone Town UNESCO</div>
            <div class="page-hero-stat"><i class="fas fa-anchor"></i> Indian Ocean</div>
        </div>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">Discover <em>Zanzibar</em></h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Zanzibar is a stunning archipelago in the Indian Ocean, just off the coast of Tanzania. Known as the "Spice Island," it offers pristine white-sand beaches lapped by turquoise waters, the historic UNESCO World Heritage Site of Stone Town, vibrant coral reefs and a rich Swahili cultural heritage. Whether you're seeking a romantic beach escape, underwater adventures, cultural exploration or the perfect complement to a wildlife safari, Zanzibar delivers an unforgettable island experience.
        </p>
    </div>
</section>

{{-- Experience Sections --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Experiences</div>
            <h2 class="sec-title">What <em>Zanzibar</em> Offers</h2>
            <p class="sec-sub">From relaxation to adventure, Zanzibar has something for every type of traveller.</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 1100px;">
        <a href="/zanzibar/beach-holidays" style="display: block; background: var(--cream); border-radius: 16px; padding: 32px; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 30px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="width: 50px; height: 50px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.2rem; margin-bottom: 16px;"><i class="fas fa-umbrella-beach"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Beach Holidays</h3>
            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Relax on powdery white sand beaches with crystal-clear turquoise waters. From the lively shores of Nungwi to the tranquil haven of Matemwe, Zanzibar's coastline is paradise found.</p>
        </a>

        <a href="/zanzibar/honeymoon" style="display: block; background: var(--cream); border-radius: 16px; padding: 32px; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 30px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="width: 50px; height: 50px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.2rem; margin-bottom: 16px;"><i class="fas fa-heart"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Honeymoon</h3>
            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Create your perfect love story on Zanzibar's romantic beaches. Luxury resorts, private sunset cruises, intimate beach dinners and couple's spa experiences await.</p>
        </a>

        <a href="/zanzibar/stone-town" style="display: block; background: var(--cream); border-radius: 16px; padding: 32px; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 30px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="width: 50px; height: 50px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.2rem; margin-bottom: 16px;"><i class="fas fa-landmark"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Stone Town Heritage</h3>
            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Wander the labyrinthine alleys of Stone Town, a UNESCO World Heritage Site. Discover spice markets, historic architecture, vibrant bazaars and the soul of Swahili culture.</p>
        </a>

        <a href="/zanzibar/safari-and-zanzibar" style="display: block; background: var(--cream); border-radius: 16px; padding: 32px; transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 30px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='';this.style.boxShadow=''">
            <div style="width: 50px; height: 50px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.2rem; margin-bottom: 16px;"><i class="fas fa-paw"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 700; color: var(--earth); margin-bottom: 8px;">Safari + Zanzibar</h3>
            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">The ultimate Tanzania combination. Experience the thrill of a wildlife safari followed by the relaxation of Zanzibar's beaches. Seamlessly arranged for the perfect holiday.</p>
        </a>
    </div>
</section>

{{-- Activities Grid --}}
<section style="background: var(--smoke);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Island Activities</div>
            <h2 class="sec-title">Things to <em>Do</em></h2>
            <p class="sec-sub">Adventure, relaxation and discovery — Zanzibar offers it all.</p>
        </div>
    </div>

    <div class="activities-grid">
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Snorkeling in Zanzibar's turquoise waters" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-water"></i></div>
                <h3 class="activity-name">Snorkeling</h3>
                <p class="activity-count">Discover vibrant coral reefs</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Scuba diving in Zanzibar's Indian Ocean" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-swimmer"></i></div>
                <h3 class="activity-name">Scuba Diving</h3>
                <p class="activity-count">Explore underwater worlds</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar spice plantation tour" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-seedling"></i></div>
                <h3 class="activity-name">Spice Tours</h3>
                <p class="activity-count">Taste the Spice Island</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Prison Island Zanzibar giant tortoises" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-turtle"></i></div>
                <h3 class="activity-name">Prison Island</h3>
                <p class="activity-count">Giant tortoises & history</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Jozani Forest red colobus monkeys" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-tree"></i></div>
                <h3 class="activity-name">Jozani Forest</h3>
                <p class="activity-count">Rare red colobus monkeys</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Kitesurfing in Zanzibar's lagoon" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-wind"></i></div>
                <h3 class="activity-name">Kitesurfing</h3>
                <p class="activity-count">Ride the Indian Ocean waves</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Sunset dhow cruise in Zanzibar" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-sailboat"></i></div>
                <h3 class="activity-name">Sunset Dhow Cruise</h3>
                <p class="activity-count">Sail into the sunset</p>
            </div>
        </div>
        <div class="activity-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Deep sea fishing off Zanzibar" loading="lazy">
            <div class="activity-overlay">
                <div class="activity-icon"><i class="fas fa-fish"></i></div>
                <h3 class="activity-name">Deep Sea Fishing</h3>
                <p class="activity-count">Marlin, tuna & sailfish</p>
            </div>
        </div>
    </div>
</section>

{{-- Internal Links --}}
<section style="background: var(--dark); padding: 60px 8%;">
    <div style="text-align: center; max-width: 700px; margin: 0 auto;">
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; color: var(--white); margin-bottom: 14px;">Plan Your <em style="color: var(--gold-light);">Zanzibar</em> Escape</h2>
        <p style="color: rgba(255,255,255,0.6); margin-bottom: 30px;">Combine it with a safari for the ultimate Tanzania experience.</p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap; justify-content: center;">
            <a href="/zanzibar/beach-holidays" class="btn-primary"><i class="fas fa-umbrella-beach"></i> Beach Holidays</a>
            <a href="/zanzibar/honeymoon" class="btn-outline"><i class="fas fa-heart"></i> Honeymoon</a>
            <a href="/zanzibar/stone-town" class="btn-outline"><i class="fas fa-landmark"></i> Stone Town</a>
            <a href="/zanzibar/safari-and-zanzibar" class="btn-outline"><i class="fas fa-paw"></i> Safari + Zanzibar</a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Your Zanzibar Paradise Awaits</h2>
        <p>Let us craft your perfect island escape — beach, culture and adventure combined.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Zanzibar Trip</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Zanzibar%20holiday." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
