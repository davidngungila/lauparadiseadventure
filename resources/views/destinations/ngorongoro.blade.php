@extends('layouts.app')

@section('page-title', 'Ngorongoro Crater Safari | Africa\'s Natural Wonder')
@section('meta-description', 'Explore the Ngorongoro Crater — a UNESCO World Heritage Site and one of Africa\'s greatest natural wonders. Home to the Big Five and Maasai culture.')
@section('meta-keywords', 'Ngorongoro Crater safari, Ngorongoro conservation area, Big Five Tanzania, UNESCO World Heritage, Maasai culture')
@section('canonical', 'https://www.lauparadiseadventure.com/destinations/ngorongoro')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Ngorongoro Crater Safari",
    "description": "Explore the Ngorongoro Crater — a UNESCO World Heritage Site and one of Africa's greatest natural wonders.",
    "touristType": "Wildlife Enthusiast",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "1500",
        "highPrice": "4500",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/destinations">Destinations</a>
            <span>/</span>
            <span class="current">Ngorongoro</span>
        </div>
        <h1 class="page-hero-title">Ngorongoro <em>Crater</em></h1>
        <p class="page-hero-sub">Africa's Natural Wonder</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-ring"></i> 260 km² Crater</div>
            <div class="page-hero-stat"><i class="fas fa-paw"></i> Big Five</div>
            <div class="page-hero-stat"><i class="fas fa-globe-americas"></i> UNESCO Site</div>
        </div>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">The <em>Ngorongoro</em> Crater</h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            The Ngorongoro Crater is the world's largest intact volcanic caldera, a UNESCO World Heritage Site and one of the most extraordinary wildlife sanctuaries on Earth. The 260 km² crater floor hosts approximately 25,000 animals including all of Africa's Big Five. Formed over two million years ago when a massive volcano collapsed, the crater creates a natural enclosure that sustains an incredibly dense and diverse population of wildlife. With its breathtaking scenery, rich Maasai cultural heritage and exceptional game viewing, Ngorongoro is an unmissable highlight of any Tanzania safari.
        </p>
    </div>
</section>

{{-- Highlights --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Highlights</div>
            <h2 class="sec-title">Why <em>Ngorongoro</em> is Special</h2>
        </div>
    </div>

    <div class="detail-highlights" style="max-width: 1000px;">
        <div class="detail-highlight">
            <i class="fas fa-paw"></i>
            <span><strong>Big Five</strong> — Lion, leopard, elephant, rhino and buffalo in one crater</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-ring"></i>
            <span><strong>Crater Landscape</strong> — 260 km² of grasslands, lakes and forests</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-users"></i>
            <span><strong>Maasai Culture</strong> — Encounter semi-nomadic Maasai pastoralists</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-globe-americas"></i>
            <span><strong>UNESCO Heritage</strong> — Protected World Heritage Site since 1979</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-chart-line"></i>
            <span><strong>Wildlife Density</strong> — Highest concentration of animals in Africa</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-camera"></i>
            <span><strong>Stunning Scenery</strong> — Dramatic crater walls and panoramic views</span>
        </div>
    </div>
</section>

{{-- Best Time to Visit --}}
<section style="background: var(--smoke);">
    <div style="max-width: 1000px;">
        <div class="sec-label">Planning</div>
        <h2 class="sec-title">Best Time to <em>Visit</em></h2>
        <p class="sec-sub" style="max-width: 700px;">The Ngorongoro Crater is a year-round destination thanks to its enclosed ecosystem. Each season offers something unique.</p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 40px;">
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-sun" style="color: var(--gold); margin-right: 6px;"></i> Dry Season (June — October)
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Best time for wildlife viewing. Animals gather around the crater's water sources making them easier to spot. Clear skies offer excellent photography conditions.</p>
            </div>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--success);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-leaf" style="color: var(--success); margin-right: 6px;"></i> Wet Season (November — May)
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Lush green landscapes with calving season (Jan-Mar). Fewer tourists and lower rates. Excellent birdwatching with migratory species. Dramatic skies for photography.</p>
            </div>
        </div>

        <div style="margin-top: 30px; background: var(--white); border-radius: 14px; padding: 20px 24px; display: flex; align-items: center; gap: 14px;">
            <i class="fas fa-clock" style="color: var(--gold); font-size: 1.2rem;"></i>
            <div>
                <strong style="color: var(--earth);">Recommended Duration</strong>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 2px;">1 to 2 days in Ngorongoro, often combined with Serengeti for a 5–7 day northern circuit safari.</p>
            </div>
        </div>
    </div>
</section>

{{-- Related Tours --}}
<section style="background: var(--cream);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Safari Tours</div>
            <h2 class="sec-title">Ngorongoro <em>Tours</em></h2>
            <p class="sec-sub">Explore the crater with expert guides on these hand-crafted safari itineraries.</p>
        </div>
        <a href="/safaris" class="btn-outline-dark">View All Safaris <i class="fas fa-arrow-right" style="margin-left: 6px;"></i></a>
    </div>

    <div class="tours-grid">
        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Crater Safari — game drive on the crater floor" loading="lazy">
                <span class="tour-badge">Popular</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 3 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro</span>
                </div>
                <h3 class="tour-name">Ngorongoro Crater Safari</h3>
                <p class="tour-desc">A focused 3-day safari exploring the Ngorongoro Crater in depth. Descend into the caldera for close encounters with the Big Five.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$1,500</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Northern Circuit Safari — Serengeti and Ngorongoro" loading="lazy">
                <span class="tour-badge">Recommended</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 7 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Northern Circuit</span>
                </div>
                <h3 class="tour-name">Northern Circuit Explorer</h3>
                <p class="tour-desc">A comprehensive 7-day safari covering Tarangire, Serengeti and Ngorongoro. The ultimate Tanzania northern circuit experience.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$3,200</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp" alt="Luxury Ngorongoro Lodge — rim accommodation" loading="lazy">
                <span class="tour-badge">Luxury</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro & Serengeti</span>
                </div>
                <h3 class="tour-name">Luxury Crater Lodge Experience</h3>
                <p class="tour-desc">Stay at the iconic Ngorongoro Crater Lodge with rim views. Includes private game drives, Maasai village visit and bush dinner.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$4,500</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris/luxury-safari" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Internal Links --}}
<section style="background: var(--dark); padding: 60px 8%;">
    <div style="text-align: center; max-width: 700px; margin: 0 auto;">
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; color: var(--white); margin-bottom: 14px;">Continue <em style="color: var(--gold-light);">Exploring</em></h2>
        <p style="color: rgba(255,255,255,0.6); margin-bottom: 30px;">Discover more about Tanzania's incredible destinations and safari experiences.</p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap; justify-content: center;">
            <a href="/destinations/serengeti" class="btn-primary"><i class="fas fa-binoculars"></i> Serengeti</a>
            <a href="/destinations/tarangire" class="btn-outline"><i class="fas fa-tree"></i> Tarangire</a>
            <a href="/destinations/lake-manyara" class="btn-outline"><i class="fas fa-feather"></i> Lake Manyara</a>
            <a href="/experiences/cultural-tours" class="btn-outline"><i class="fas fa-users"></i> Cultural Tours</a>
            <a href="/zanzibar" class="btn-outline"><i class="fas fa-umbrella-beach"></i> Zanzibar</a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Plan Your Ngorongoro Crater Safari</h2>
        <p>Let us create a personalized itinerary that includes the crater and beyond.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Safari</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Ngorongoro%20Crater%20safari." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
