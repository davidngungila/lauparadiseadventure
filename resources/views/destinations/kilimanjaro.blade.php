@extends('layouts.app')

@section('page-title', 'Mount Kilimanjaro Destination | Tanzania\'s Iconic Mountain')
@section('meta-description', 'Discover Mount Kilimanjaro — Africa\'s highest peak at 5,895m. Explore routes, preparation guides and trekking experiences.')
@section('meta-keywords', 'Mount Kilimanjaro, Kilimanjaro trekking, Africa highest peak, Kilimanjaro routes, Machame route, Lemosho route')
@section('canonical', 'https://www.lauparadiseadventure.com/destinations/kilimanjaro')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Mount Kilimanjaro Trekking Experience",
    "description": "Discover Mount Kilimanjaro — Africa's highest peak at 5,895m. Explore routes, preparation guides and trekking experiences.",
    "touristType": "Adventure Trekker",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "1600",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/destinations">Destinations</a>
            <span>/</span>
            <span class="current">Kilimanjaro</span>
        </div>
        <h1 class="page-hero-title">Mount <em>Kilimanjaro</em></h1>
        <p class="page-hero-sub">Roof of Africa</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-mountain"></i> 5,895m Summit</div>
            <div class="page-hero-stat"><i class="fas fa-layer-group"></i> 5 Climate Zones</div>
            <div class="page-hero-stat"><i class="fas fa-hiking"></i> No Technical Climbing</div>
        </div>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">The <em>Kilimanjaro</em> Experience</h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Standing at 5,895 metres, Mount Kilimanjaro is Africa's highest peak and the world's tallest free-standing mountain. Its snow-capped summit rises dramatically from the Tanzanian savannah, creating a breathtaking spectacle. What makes Kilimanjaro unique among the world's great peaks is that no technical climbing equipment or experience is required — anyone with determination and reasonable fitness can reach the top. The trek passes through five distinct climate zones, from tropical rainforest to arctic summit, offering an unparalleled ecological journey in just a few days.
        </p>
    </div>
</section>

{{-- Key Facts --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Key Facts</div>
            <h2 class="sec-title">Why <em>Kilimanjaro</em> is Special</h2>
        </div>
    </div>

    <div class="detail-highlights" style="max-width: 1000px;">
        <div class="detail-highlight">
            <i class="fas fa-mountain"></i>
            <span><strong>5,895m Summit</strong> — Uhuru Peak, the roof of Africa</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-snowflake"></i>
            <span><strong>Glacial Ice Cap</strong> — Iconic snow on the equator</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-layer-group"></i>
            <span><strong>5 Climate Zones</strong> — Rainforest, moorland, alpine desert and arctic</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-hiking"></i>
            <span><strong>No Technical Climbing</strong> — Trekking only, no ropes or gear needed</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-route"></i>
            <span><strong>7 Established Routes</strong> — Options for every experience level</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-users"></i>
            <span><strong>Expert Porters & Guides</strong> — Experienced local climbing teams</span>
        </div>
    </div>
</section>

{{-- Routes Summary --}}
<section style="background: var(--earth);">
    <div style="max-width: 900px; margin: 0 auto;">
        <div class="sec-label" style="color: var(--gold-light);">Routes</div>
        <h2 class="sec-title" style="color: var(--white);">Choose Your <em style="color: var(--gold-light);">Route</em></h2>
        <p style="color: rgba(255,255,255,0.6); margin-top: 12px; font-size: 0.95rem; max-width: 650px;">Kilimanjaro offers seven established routes to the summit, each with its own character and challenge level. Here are the most popular options.</p>

        <div class="routes-grid" style="margin-top: 36px;">
            <div class="route-card">
                <div class="route-icon"><i class="fas fa-star"></i></div>
                <div>
                    <div class="route-name">Machame Route ("Whiskey Route")</div>
                    <div class="route-details">
                        <span><i class="fas fa-calendar"></i> 6–7 Days</span>
                        <span><i class="fas fa-signal"></i> Moderate–Difficult</span>
                        <span><i class="fas fa-chart-line"></i> 85% Success Rate</span>
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
                <div class="route-icon"><i class="fas fa-leaf"></i></div>
                <div>
                    <div class="route-name">Lemosho Route</div>
                    <div class="route-details">
                        <span><i class="fas fa-calendar"></i> 7–8 Days</span>
                        <span><i class="fas fa-signal"></i> Moderate</span>
                        <span><i class="fas fa-chart-line"></i> 90% Success Rate</span>
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
                <div class="route-icon"><i class="fas fa-bed"></i></div>
                <div>
                    <div class="route-name">Marangu Route ("Coca-Cola Route")</div>
                    <div class="route-details">
                        <span><i class="fas fa-calendar"></i> 5–6 Days</span>
                        <span><i class="fas fa-signal"></i> Moderate</span>
                        <span><i class="fas fa-chart-line"></i> 65% Success Rate</span>
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
                <div class="route-icon"><i class="fas fa-map-marked-alt"></i></div>
                <div>
                    <div class="route-name">Northern Circuit Route</div>
                    <div class="route-details">
                        <span><i class="fas fa-calendar"></i> 8–9 Days</span>
                        <span><i class="fas fa-signal"></i> Moderate</span>
                        <span><i class="fas fa-chart-line"></i> 95% Success Rate</span>
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

        <div style="margin-top: 30px; text-align: center;">
            <a href="/kilimanjaro" class="btn-primary"><i class="fas fa-mountain"></i> View All Routes & Full Details</a>
        </div>
    </div>
</section>

{{-- Best Time to Visit --}}
<section style="background: var(--smoke);">
    <div style="max-width: 1000px;">
        <div class="sec-label">Planning</div>
        <h2 class="sec-title">Best Time to <em>Climb</em></h2>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-star" style="color: var(--gold); margin-right: 6px;"></i> Peak Seasons
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;"><strong>January–March</strong> and <strong>June–October</strong> offer the best conditions with clearer skies, lower rainfall and higher summit success rates. Book well in advance for these periods.</p>
            </div>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--info);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-cloud-rain" style="color: var(--info); margin-right: 6px;"></i> Green Season
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;"><strong>April–May</strong> and <strong>November</strong> see heavier rainfall. Trails are quieter and rates lower, but conditions are wetter and visibility reduced. Not recommended for first-time trekkers.</p>
            </div>
        </div>

        <div style="margin-top: 30px; background: var(--white); border-radius: 14px; padding: 20px 24px; display: flex; align-items: center; gap: 14px;">
            <i class="fas fa-clock" style="color: var(--gold); font-size: 1.2rem;"></i>
            <div>
                <strong style="color: var(--earth);">Recommended Duration</strong>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 2px;">7 to 9 days for the best acclimatization and highest summit success rates. Shorter routes are possible but less recommended.</p>
            </div>
        </div>
    </div>
</section>

{{-- Internal Links --}}
<section style="background: var(--dark); padding: 60px 8%;">
    <div style="text-align: center; max-width: 700px; margin: 0 auto;">
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; color: var(--white); margin-bottom: 14px;">Plan Your <em style="color: var(--gold-light);">Kilimanjaro</em> Climb</h2>
        <p style="color: rgba(255,255,255,0.6); margin-bottom: 30px;">Get all the details on routes, pricing and preparation.</p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap; justify-content: center;">
            <a href="/kilimanjaro" class="btn-primary"><i class="fas fa-mountain"></i> All Routes & Pricing</a>
            <a href="/kilimanjaro/machame-route" class="btn-outline"><i class="fas fa-star"></i> Machame Route</a>
            <a href="/kilimanjaro/lemosho-route" class="btn-outline"><i class="fas fa-leaf"></i> Lemosho Route</a>
            <a href="/plan-your-trip/what-to-pack" class="btn-outline"><i class="fas fa-backpack"></i> Packing Guide</a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Ready to Climb Kilimanjaro?</h2>
        <p>Let us plan your summit attempt with the best route, expert guides and full support.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Climb</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20climbing%20Kilimanjaro." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
