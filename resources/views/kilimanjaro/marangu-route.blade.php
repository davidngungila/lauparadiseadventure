@extends('layouts.app')

@section('page-title', 'Marangu Route Kilimanjaro | 6-Day Coca-Cola Route Trek')
@section('meta-description', 'The classic Coca-Cola Route up Kilimanjaro. The only route with hut accommodation, 5-6 days, suitable for beginners with guided support.')
@section('meta-keywords', 'Marangu route Kilimanjaro, Coca-Cola route, Kilimanjaro hut accommodation, Kilimanjaro beginner route, Marangu trek, Tanzania mountain trekking')
@section('canonical', 'https://www.lauparadiseadventure.com/kilimanjaro/marangu-route')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Marangu Route Kilimanjaro Trek",
    "description": "6-day Marangu Coca-Cola Route trek up Mount Kilimanjaro with hut accommodation. Suitable for first-time trekkers.",
    "url": "https://www.lauparadiseadventure.com/kilimanjaro/marangu-route",
    "touristType": "Adventure Traveler",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "1800",
        "priceCurrency": "USD",
        "description": "6-day Marangu Route Kilimanjaro trek including guides, hut accommodation and park fees"
    }
}
</script>
    @endverbatim
@endsection

@section('content')

{{-- Detail Hero --}}
<section class="detail-hero">
    <div class="detail-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg');"></div>
    <div class="detail-hero-content">
        <div class="breadcrumb" style="margin-bottom: 16px;">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/kilimanjaro">Kilimanjaro</a>
            <span>/</span>
            <span class="current">Marangu Route</span>
        </div>
        <div class="detail-hero-tags">
            <span class="detail-hero-tag"><i class="fas fa-mountain"></i> Kilimanjaro</span>
            <span class="detail-hero-tag"><i class="fas fa-coffee"></i> Coca-Cola Route</span>
            <span class="detail-hero-tag" style="background: rgba(39,174,96,0.25); border-color: rgba(39,174,96,0.5); color: #a0e8c0;"><i class="fas fa-signal"></i> Moderate</span>
        </div>
        <h1 class="detail-hero-title">Marangu Route — <em>The Coca-Cola Route</em></h1>
        <p class="detail-hero-sub">The oldest and most established route up Kilimanjaro, and the only one with comfortable hut accommodation along the way. Ideal for first-time trekkers and those who prefer a less strenuous path.</p>
        <div class="detail-hero-meta">
            <div class="detail-hero-meta-item"><i class="fas fa-calendar"></i> 6 Days</div>
            <div class="detail-hero-meta-item"><i class="fas fa-mountain"></i> 5,895m Summit</div>
            <div class="detail-hero-meta-item"><i class="fas fa-bed"></i> Hut Accommodation</div>
            <div class="detail-hero-meta-item"><i class="fas fa-signal"></i> Moderate Difficulty</div>
        </div>
    </div>
</section>

{{-- Info Bar --}}
<div class="info-bar">
    <div class="info-bar-items">
        <div class="info-bar-item"><i class="fas fa-clock"></i> <strong>6 Days</strong></div>
        <div class="info-bar-item"><i class="fas fa-signal"></i> <strong>Moderate</strong></div>
        <div class="info-bar-item"><i class="fas fa-mountain"></i> <strong>4,095m Gain</strong></div>
        <div class="info-bar-item"><i class="fas fa-bed"></i> <strong>Huts</strong></div>
        <div class="info-bar-item"><i class="fas fa-chart-line"></i> <strong>65% Success</strong></div>
    </div>
    <div class="info-bar-price">
        <div class="info-bar-price-text">
            <small>From</small>
            <strong>$1,800</strong>
        </div>
        <a href="/contact" class="btn-primary" style="padding: 10px 24px; font-size: 0.82rem;">Book This Route</a>
    </div>
</div>

{{-- Main Content --}}
<div class="detail-layout">

    {{-- Main --}}
    <div class="detail-main">

        <div class="detail-overview">
            <h3>Route Overview</h3>
            <p>The Marangu Route, affectionately known as the "Coca-Cola Route," is the oldest and most established trail up Mount Kilimanjaro. It's the only route on the mountain that offers hut accommodation instead of camping, making it the most comfortable option. Named after the Coca-Cola company that originally funded the huts, this route follows the same path up and down, which means less scenery diversity but a more straightforward experience.</p>
            <p>At 5-6 days, the Marangu is the shortest standard route. While its lower elevation gain per day makes it seem easier, the reduced acclimatization time means a lower summit success rate of approximately 65%. We recommend the 6-day option for the best chance of reaching the top. This route is ideal for first-time trekkers and those who prefer hut shelter over tent camping.</p>

            <div class="detail-highlights">
                <div class="detail-highlight"><i class="fas fa-bed"></i> <span>Hut accommodation (unique feature)</span></div>
                <div class="detail-highlight"><i class="fas fa-star"></i> <span>Most popular first-time route</span></div>
                <div class="detail-highlight"><i class="fas fa-coffee"></i> <span>Named after Coca-Cola huts</span></div>
                <div class="detail-highlight"><i class="fas fa-mug-hot"></i> <span>Hot drinks available at huts</span></div>
                <div class="detail-highlight"><i class="fas fa-tree"></i> <span>Same path up and down</span></div>
                <div class="detail-highlight"><i class="fas fa-tag"></i> <span>Most affordable route</span></div>
            </div>
        </div>

        <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 30px;">
            <div style="background: rgba(39,174,96,0.08); border: 1px solid rgba(39,174,96,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--success);">Difficulty: Moderate</div>
            <div style="background: rgba(200,150,62,0.08); border: 1px solid rgba(200,150,62,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--gold);">Elevation Gain: 4,095m</div>
            <div style="background: rgba(122,104,88,0.08); border: 1px solid rgba(122,104,88,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--text-muted);">Success Rate: 65%</div>
        </div>

        <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 20px;">Day-by-Day Itinerary</h3>

        <div class="itinerary">
            <div class="itinerary-item active">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">1</div>
                        <div>
                            <div class="itinerary-title">Marangu Gate to Mandara Hut</div>
                            <div class="itinerary-subtitle">1,800m → 2,700m · Rainforest Zone</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Starting at Marangu Gate (1,800m), the trail climbs through dense tropical rainforest rich with birdlife, colobus monkeys and vibrant vegetation. The well-maintained path is gradual and well-shaded, making it an enjoyable start to the trek. Arrive at Mandara Hut (2,700m) in 3-4 hours, where you'll spend the night in one of the mountain huts with bunk beds and basic facilities.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 2,700m</span>
                            <span><i class="fas fa-hiking"></i> 3-4 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Rainforest</span>
                            <span><i class="fas fa-bed"></i> Mandara Hut</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">2</div>
                        <div>
                            <div class="itinerary-title">Mandara Hut to Horombo Hut</div>
                            <div class="itinerary-subtitle">2,700m → 3,720m · Moorland Zone</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Day two takes you from the rainforest through the moorland zone. The vegetation changes dramatically — from lush canopy to open heath with giant heathers and wildflowers. On clear days, you'll have your first views of Kibo Summit. Horombo Hut (3,720m) is the largest of the mountain huts and serves as a base for both ascending and descending trekkers.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 3,720m</span>
                            <span><i class="fas fa-hiking"></i> 5-6 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Moorland</span>
                            <span><i class="fas fa-bed"></i> Horombo Hut</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">3</div>
                        <div>
                            <div class="itinerary-title">Horombo Hut — Acclimatization Day</div>
                            <div class="itinerary-subtitle">3,720m · Rest and Short Hike</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>A dedicated acclimatization day at Horombo Hut. You'll take a short hike to approximately 4,000m before returning to sleep at 3,720m — the critical "climb high, sleep low" strategy. This day dramatically improves your chances of a successful summit. Spend the afternoon resting, hydrating and preparing mentally for the ascent ahead.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,000m (day hike)</span>
                            <span><i class="fas fa-hiking"></i> 2-3 hours (optional)</span>
                            <span><i class="fas fa-bed"></i> Horombo Hut</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">4</div>
                        <div>
                            <div class="itinerary-title">Horombo Hut to Kibo Hut</div>
                            <div class="itinerary-subtitle">3,720m → 4,700m · Alpine Desert</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Today you cross the "Saddle" — a vast alpine desert between Mawenzi and Kibo peaks. The terrain is barren and otherworldly, with virtually no vegetation. Kibo Hut (4,700m) is your launch point for the summit. Arrive early, eat well and rest for the midnight departure. Temperatures drop significantly and wind can be strong.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,700m</span>
                            <span><i class="fas fa-hiking"></i> 5-6 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Alpine Desert</span>
                            <span><i class="fas fa-bed"></i> Kibo Hut</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day" style="background: #E74C3C; color: var(--white);">5</div>
                        <div>
                            <div class="itinerary-title">Kibo Hut to Uhuru Peak to Horombo Hut</div>
                            <div class="itinerary-subtitle">4,700m → 5,895m → 3,720m · Summit Day</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Depart at midnight for the summit push. The trail ascends steeply across scree and rock to Gilman's Point (5,681m) on the crater rim, then continues to Uhuru Peak (5,895m). The Marangu descent follows the same path, passing Kibo Hut and continuing all the way down to Horombo Hut (3,720m) — a long day of 12-16 hours. The descent is hard on the knees so trekking poles are essential.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 5,895m</span>
                            <span><i class="fas fa-hiking"></i> 12-16 hours</span>
                            <span><i class="fas fa-flag"></i> Summit Day</span>
                            <span><i class="fas fa-bed"></i> Horombo Hut</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">6</div>
                        <div>
                            <div class="itinerary-title">Horombo Hut to Marangu Gate</div>
                            <div class="itinerary-subtitle">3,720m → 1,800m · Descent</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>The final descent retraces your steps through the moorland and back into the rainforest. The lower altitude brings immediate relief and the lush vegetation feels like a different world after the barren summit zone. Collect your certificate at Marangu Gate and transfer back to your hotel. The same-path-down approach means you see the route in reverse — a satisfying conclusion to your Kilimanjaro adventure.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 1,800m</span>
                            <span><i class="fas fa-hiking"></i> 5-6 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Rainforest</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- What's Included --}}
        <div style="margin-top: 40px;">
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 20px;">What's Included</h3>
            <div class="includes-excludes-grid">
                <div class="includes-col">
                    <h4><i class="fas fa-check-circle"></i> Included</h4>
                    <ul class="includes-list">
                        <li><i class="fas fa-check"></i> Professional English-speaking mountain guide</li>
                        <li><i class="fas fa-check"></i> Registered and licensed guides and porters</li>
                        <li><i class="fas fa-check"></i> All park and hut fees</li>
                        <li><i class="fas fa-check"></i> Three meals per day on the mountain</li>
                        <li><i class="fas fa-check"></i> Hut accommodation (bunk beds)</li>
                        <li><i class="fas fa-check"></i> Drinking water on all trekking days</li>
                        <li><i class="fas fa-check"></i> Transfers from Moshi/Arusha to trailhead and back</li>
                        <li><i class="fas fa-check"></i> Crew wages, food and insurance</li>
                        <li><i class="fas fa-check"></i> Summit certificate</li>
                    </ul>
                </div>
                <div class="excludes-col">
                    <h4><i class="fas fa-times-circle"></i> Not Included</h4>
                    <ul class="excludes-list">
                        <li><i class="fas fa-times"></i> International and domestic flights</li>
                        <li><i class="fas fa-times"></i> Tanzania visa fees</li>
                        <li><i class="fas fa-times"></i> Travel and rescue insurance</li>
                        <li><i class="fas fa-times"></i> Personal trekking gear</li>
                        <li><i class="fas fa-times"></i> Tips for guides and porters</li>
                        <li><i class="fas fa-times"></i> Alcoholic and soft drinks</li>
                        <li><i class="fas fa-times"></i> Hotel accommodation in Moshi/Arusha</li>
                        <li><i class="fas fa-times"></i> Sleeping bag (can be rented)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="detail-sidebar">
        <div class="sidebar-booking-card">
            <div class="sidebar-price-tag">
                <small>Starting From</small>
                <strong>$1,800</strong>
                <em>per person</em>
            </div>
            <div class="sidebar-features">
                <div class="sidebar-feature"><i class="fas fa-calendar"></i> 6 Days / 5 Nights</div>
                <div class="sidebar-feature"><i class="fas fa-signal"></i> Difficulty: Moderate</div>
                <div class="sidebar-feature"><i class="fas fa-chart-line"></i> 65% Success Rate</div>
                <div class="sidebar-feature"><i class="fas fa-bed"></i> Hut Accommodation</div>
                <div class="sidebar-feature"><i class="fas fa-mountain"></i> Max Altitude: 5,895m</div>
                <div class="sidebar-feature"><i class="fas fa-coins"></i> Most Affordable Route</div>
            </div>
            <a href="/contact" class="btn-primary" style="width: 100%; justify-content: center; margin-bottom: 10px;">Book This Route <i class="fas fa-arrow-right"></i></a>
            <a href="/kilimanjaro" class="btn-outline-dark" style="width: 100%; justify-content: center;">Compare Routes</a>
            <p class="sidebar-note"><i class="fas fa-shield-alt"></i> Free cancellation up to 30 days before departure</p>
        </div>

        <div class="sidebar-contact-card">
            <h4>First Time Climbing?</h4>
            <p>The Marangu Route is perfect for first-time trekkers. Let us help you prepare for your adventure.</p>
            <a href="https://wa.me/255683163219?text=Hello! I'm interested in the Marangu Route on Kilimanjaro." class="wa-btn" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
    </div>
</div>

{{-- CTA Banner --}}
<section style="background: var(--gold); padding: 60px 8%; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
    <div>
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--dark); max-width: 500px; line-height: 1.2;">Start Your Kilimanjaro Journey on the <em>Coca-Cola Route</em></h2>
        <p style="color: var(--earth-mid); font-size: 0.9rem; margin-top: 6px;">The most comfortable path to the summit of Africa.</p>
    </div>
    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
        <a href="/contact" class="btn-dark">Book This Route <i class="fas fa-arrow-right"></i></a>
        <a href="/kilimanjaro" class="btn-outline-dark" style="border-color: var(--dark); color: var(--dark);">Compare Routes</a>
    </div>
</section>

@endsection
