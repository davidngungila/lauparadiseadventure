@extends('layouts.app')

@section('page-title', 'Serengeti Safari Tours Tanzania | Great Migration & Wildlife')
@section('meta-description', 'Explore Serengeti National Park with expert local guides. Experience the Great Migration, Big Five and unforgettable wildlife safaris in Tanzania.')
@section('meta-keywords', 'Serengeti safari, Great Migration, Serengeti National Park, Big Five safari Tanzania, Serengeti tours')
@section('canonical', 'https://www.lauparadiseadventure.com/destinations/serengeti')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Serengeti Safari Experience",
    "description": "Explore Serengeti National Park with expert local guides. Experience the Great Migration, Big Five and unforgettable wildlife safaris in Tanzania.",
    "touristType": "Wildlife Enthusiast",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "1800",
        "highPrice": "5500",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
    },
    "itinerary": {
        "@type": "ItemList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Serengeti Classic Safari",
                "url": "https://www.lauparadiseadventure.com/safaris/serengeti-classic-safari"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Great Migration Safari",
                "url": "https://www.lauparadiseadventure.com/safaris/great-migration-safari"
            }
        ]
    }
}
</script>
    @endverbatim
@endsection

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/destinations">Destinations</a>
            <span>/</span>
            <span class="current">Serengeti</span>
        </div>
        <h1 class="page-hero-title">Serengeti <em>National Park</em></h1>
        <p class="page-hero-sub">The Endless Plains</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-map-marked-alt"></i> 14,750 km²</div>
            <div class="page-hero-stat"><i class="fas fa-paw"></i> Big Five</div>
            <div class="page-hero-stat"><i class="fas fa-calendar"></i> Year-round safari</div>
        </div>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">The <em>Serengeti</em></h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            The Serengeti is Tanzania's most iconic national park, covering 14,750 km² of vast savannah, grasslands and rivers. It is home to the Great Migration — the largest terrestrial mammal movement on Earth — and offers some of the best wildlife viewing in the world. Every year, over two million wildebeest, zebras and gazelles traverse the plains in search of fresh grazing, creating one of nature's most awe-inspiring spectacles. From predator-prey interactions to sweeping golden horizons, the Serengeti delivers an unparalleled safari experience.
        </p>
    </div>
</section>

{{-- Highlights --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Highlights</div>
            <h2 class="sec-title">Why the <em>Serengeti</em> is Special</h2>
        </div>
    </div>

    <div class="detail-highlights" style="max-width: 1000px;">
        <div class="detail-highlight">
            <i class="fas fa-route"></i>
            <span><strong>Great Migration</strong> — Millions of wildebeest and zebras on the move</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-paw"></i>
            <span><strong>Big Five</strong> — Lion, leopard, elephant, rhino and buffalo</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-fire"></i>
            <span><strong>Predator Action</strong> — High concentrations of lions, cheetahs and hyenas</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-cloud"></i>
            <span><strong>Hot Air Balloon Safari</strong> — Soar over the plains at dawn</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-camera"></i>
            <span><strong>Photographic Paradise</strong> — Golden light and endless vistas</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-hotel"></i>
            <span><strong>Luxury Camps</strong> — World-class lodges and mobile camps</span>
        </div>
    </div>
</section>

{{-- Best Time to Visit --}}
<section style="background: var(--smoke);">
    <div style="max-width: 1000px;">
        <div class="sec-label">Planning</div>
        <h2 class="sec-title">Best Time to <em>Visit</em></h2>
        <p class="sec-sub" style="max-width: 700px;">The Serengeti is a year-round destination, but the experience changes with the seasons. Here's what to expect each quarter.</p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 40px;">
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-baby" style="color: var(--gold); margin-right: 6px;"></i> January — March
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Calving season in the southern Serengeti. Over 500,000 wildebeest calves are born, attracting large predator concentrations. Excellent for dramatic wildlife encounters.</p>
            </div>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--success);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-leaf" style="color: var(--success); margin-right: 6px;"></i> April — May
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Green season brings lush landscapes and fewer tourists. Lower lodge rates make this an excellent value period. Birdwatching is outstanding with migratory species present.</p>
            </div>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-sun" style="color: var(--gold); margin-right: 6px;"></i> June — October
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Peak safari season. The Great Migration moves through the northern Serengeti and Mara River crossings occur July–September. Prime wildlife viewing with dry conditions.</p>
            </div>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--info);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-cloud-rain" style="color: var(--info); margin-right: 6px;"></i> November — December
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Short rains bring refreshed greenery and excellent wildlife viewing with fewer crowds. Great photographic opportunities with dramatic skies and soft light.</p>
            </div>
        </div>

        <div style="margin-top: 30px; background: var(--white); border-radius: 14px; padding: 20px 24px; display: flex; align-items: center; gap: 14px;">
            <i class="fas fa-clock" style="color: var(--gold); font-size: 1.2rem;"></i>
            <div>
                <strong style="color: var(--earth);">Recommended Duration</strong>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 2px;">4 to 7 days ideal for a comprehensive Serengeti safari experience.</p>
            </div>
        </div>
    </div>
</section>

{{-- Related Tours --}}
<section style="background: var(--cream);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Safari Tours</div>
            <h2 class="sec-title">Serengeti <em>Tours</em></h2>
            <p class="sec-sub">Hand-picked safaris that showcase the best of the Serengeti throughout the year.</p>
        </div>
        <a href="/safaris" class="btn-outline-dark">View All Safaris <i class="fas fa-arrow-right" style="margin-left: 6px;"></i></a>
    </div>

    <div class="tours-grid">
        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti Classic Safari — game drive across the plains" loading="lazy">
                <span class="tour-badge">Best Seller</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                </div>
                <h3 class="tour-name">Serengeti Classic Safari</h3>
                <p class="tour-desc">A 5-day journey through the heart of the Serengeti. Experience big cat encounters, vast herds and unforgettable sunsets on the savannah.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$2,400</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris/serengeti-classic-safari" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Safari — wildebeest river crossing" loading="lazy">
                <span class="tour-badge">Iconic</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 7 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti & Mara</span>
                </div>
                <h3 class="tour-name">Great Migration Safari</h3>
                <p class="tour-desc">Follow the Great Migration across the Serengeti. Witness dramatic river crossings and the raw power of nature on this 7-day expedition.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$3,800</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris/great-migration-safari" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp" alt="Luxury Serengeti Safari — premium tented camp" loading="lazy">
                <span class="tour-badge">Luxury</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                </div>
                <h3 class="tour-name">Luxury Serengeti Escape</h3>
                <p class="tour-desc">An exclusive luxury safari featuring private game drives, hot air balloon flights and stays at the Serengeti's finest premium lodges.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$5,500</strong>
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
            <a href="/experiences/great-migration" class="btn-primary"><i class="fas fa-route"></i> Great Migration</a>
            <a href="/safaris/luxury-safari" class="btn-outline"><i class="fas fa-gem"></i> Luxury Safaris</a>
            <a href="/experiences/photographic-safari" class="btn-outline"><i class="fas fa-camera"></i> Photographic Safaris</a>
            <a href="/destinations/ngorongoro" class="btn-outline"><i class="fas fa-mountain"></i> Ngorongoro</a>
            <a href="/destinations/tarangire" class="btn-outline"><i class="fas fa-tree"></i> Tarangire</a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Ready for Your Serengeti Adventure?</h2>
        <p>Let us create a personalized Serengeti safari itinerary that matches your interests and budget.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Safari</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Serengeti%20safari." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
