@extends('layouts.app')

@section('page-title', 'Northern Circuit Kilimanjaro | 9-Day Scenic Route')
@section('meta-description', 'The longest and most scenic Kilimanjaro route. The 9-day Northern Circuit offers unparalleled acclimatization with a 90% summit success rate.')
@section('meta-keywords', 'Northern Circuit Kilimanjaro, longest Kilimanjaro route, best acclimatization Kilimanjaro, 9 day Kilimanjaro trek, Northern Circuit route, Tanzania mountain trekking')
@section('canonical', 'https://www.lauparadiseadventure.com/kilimanjaro/northern-circuit')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Northern Circuit Kilimanjaro Trek",
    "description": "9-day Northern Circuit Route trek up Mount Kilimanjaro. The longest and most scenic route with unparalleled acclimatization and a 90% summit success rate.",
    "url": "https://www.lauparadiseadventure.com/kilimanjaro/northern-circuit",
    "touristType": "Adventure Traveler",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2800",
        "priceCurrency": "USD",
        "description": "9-day Northern Circuit Kilimanjaro trek including guides, porters, camping equipment and park fees"
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
            <span class="current">Northern Circuit</span>
        </div>
        <div class="detail-hero-tags">
            <span class="detail-hero-tag"><i class="fas fa-mountain"></i> Kilimanjaro</span>
            <span class="detail-hero-tag"><i class="fas fa-compass"></i> Northern Circuit</span>
            <span class="detail-hero-tag" style="background: rgba(231,76,60,0.25); border-color: rgba(231,76,60,0.5); color: #f5a5a0;"><i class="fas fa-signal"></i> Hard</span>
        </div>
        <h1 class="detail-hero-title">Northern Circuit Route</h1>
        <p class="detail-hero-sub">The longest and most comprehensive Kilimanjaro trek. Circumnavigating the mountain, the Northern Circuit offers the best acclimatization profile, the most diverse scenery and an unparalleled wilderness experience over 9 days.</p>
        <div class="detail-hero-meta">
            <div class="detail-hero-meta-item"><i class="fas fa-calendar"></i> 9 Days</div>
            <div class="detail-hero-meta-item"><i class="fas fa-mountain"></i> 5,895m Summit</div>
            <div class="detail-hero-meta-item"><i class="fas fa-chart-line"></i> 90% Success Rate</div>
            <div class="detail-hero-meta-item"><i class="fas fa-compass"></i> Full Mountain Circumnavigation</div>
        </div>
    </div>
</section>

{{-- Info Bar --}}
<div class="info-bar">
    <div class="info-bar-items">
        <div class="info-bar-item"><i class="fas fa-clock"></i> <strong>9 Days</strong></div>
        <div class="info-bar-item"><i class="fas fa-signal"></i> <strong>Hard</strong></div>
        <div class="info-bar-item"><i class="fas fa-mountain"></i> <strong>4,400m Gain</strong></div>
        <div class="info-bar-item"><i class="fas fa-eye"></i> <strong>Most Scenic</strong></div>
        <div class="info-bar-item"><i class="fas fa-chart-line"></i> <strong>90% Success</strong></div>
    </div>
    <div class="info-bar-price">
        <div class="info-bar-price-text">
            <small>From</small>
            <strong>$2,800</strong>
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
            <p>The Northern Circuit is the longest standard route on Kilimanjaro, circumnavigating the entire mountain over 8-10 days. Starting from the Londorossi Gate on the western slopes, it follows a sweeping counter-clockwise path around the northern side before merging with the Machame Route for the final ascent. This comprehensive approach delivers the best acclimatization profile of any route, resulting in a 90% summit success rate.</p>
            <p>The Northern Circuit passes through five distinct climate zones — tropical rainforest, heath and moorland, alpine desert, glacial zone and back through rainforest. You'll experience landscapes most trekkers never see, including the remote northern forests, the vast Shira Plateau and the dramatic Lava Tower. With far fewer trekkers than southern routes, this is the premium choice for those seeking a genuine wilderness experience with the highest chance of reaching the summit.</p>

            <div class="detail-highlights">
                <div class="detail-highlight"><i class="fas fa-compass"></i> <span>Full mountain circumnavigation</span></div>
                <div class="detail-highlight"><i class="fas fa-chart-line"></i> <span>90% summit success rate</span></div>
                <div class="detail-highlight"><i class="fas fa-eye"></i> <span>Most scenic route overall</span></div>
                <div class="detail-highlight"><i class="fas fa-lungs"></i> <span>Best acclimatization profile</span></div>
                <div class="detail-highlight"><i class="fas fa-user-secret"></i> <span>Fewer crowds on the mountain</span></div>
                <div class="detail-highlight"><i class="fas fa-cloud-sun"></i> <span>Five climate zones traversed</span></div>
            </div>
        </div>

        <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 30px;">
            <div style="background: rgba(231,76,60,0.08); border: 1px solid rgba(231,76,60,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: #E74C3C;">Difficulty: Hard</div>
            <div style="background: rgba(200,150,62,0.08); border: 1px solid rgba(200,150,62,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--gold);">Elevation Gain: 4,400m</div>
            <div style="background: rgba(39,174,96,0.08); border: 1px solid rgba(39,174,96,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--success);">Success Rate: 90%</div>
            <div style="background: rgba(122,104,88,0.08); border: 1px solid rgba(122,104,88,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--text-muted);">Longest Standard Route</div>
        </div>

        <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 20px;">9-Day Itinerary Overview</h3>

        <div class="itinerary">
            <div class="itinerary-item active">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">1</div>
                        <div>
                            <div class="itinerary-title">Londorossi Gate to Forest Camp</div>
                            <div class="itinerary-subtitle">2,100m → 2,750m · Rainforest</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Enter through Londorossi Gate on the western slopes and trek through pristine montane rainforest. Dense canopy shelters colobus monkeys, blue monkeys and tropical birds. The trail is quiet and atmospheric — far removed from the busier southern approaches. Camp in a forest clearing.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 2,750m</span>
                            <span><i class="fas fa-hiking"></i> 3-4 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Rainforest</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">2</div>
                        <div>
                            <div class="itinerary-title">Forest Camp to Shira Camp 1</div>
                            <div class="itinerary-subtitle">2,750m → 3,350m · Moorland</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Emerge from the forest into the moorland zone. Giant heathers, senecios and lobelias dominate the landscape. Views open up across the Shira Plateau and Kibo massif. The sense of space and wilderness is extraordinary.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 3,350m</span>
                            <span><i class="fas fa-hiking"></i> 5-6 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Moorland</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">3</div>
                        <div>
                            <div class="itinerary-title">Shira Camp 1 to Shira Camp 2</div>
                            <div class="itinerary-subtitle">3,350m → 3,850m · Shira Plateau</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Traverse the vast Shira Plateau — one of the highest plateaus on earth. The flat, open terrain provides exceptional 360-degree views and excellent acclimatization walking. Camp 2 offers stunning views of the western breach and Kibo's glaciers.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 3,850m</span>
                            <span><i class="fas fa-hiking"></i> 4-5 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Shira Plateau</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">4</div>
                        <div>
                            <div class="itinerary-title">Shira Camp 2 — Northern Circuit Begins</div>
                            <div class="itinerary-subtitle">3,850m → 3,900m · Northern Traverse</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Today the Northern Circuit diverges from other routes, heading north around the mountain's remote slopes. The terrain is wild and untouched, with virtually no other trekkers in sight. You'll camp at 3,900m with views of the Kenyan plains stretching to the horizon — a landscape no other route reveals.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 3,900m</span>
                            <span><i class="fas fa-hiking"></i> 5-6 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Northern Slopes</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">5</div>
                        <div>
                            <div class="itinerary-title">Northern Traverse to Kibo Hut</div>
                            <div class="itinerary-subtitle">3,900m → 4,700m · Alpine Desert</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Continue the traverse around the northern side, climbing steadily through alpine desert. The landscape is stark and dramatic. As you round the mountain and approach Kibo Hut, the full majesty of the summit comes into view. Camp at 4,700m for the summit push.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,700m</span>
                            <span><i class="fas fa-hiking"></i> 6-7 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Alpine Desert</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">6</div>
                        <div>
                            <div class="itinerary-title">Kibo Hut to Lava Tower to Barranco Camp</div>
                            <div class="itinerary-subtitle">4,700m → 4,630m → 4,550m · Acclimatization</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>An additional acclimatization day that ascends to Lava Tower (4,630m) before descending to Barranco Camp (4,550m). This "climb high, sleep low" profile further boosts your chances of summit success. The extra day is what makes the Northern Circuit's 90% success rate possible.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,630m peak</span>
                            <span><i class="fas fa-hiking"></i> 6-7 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Alpine Desert</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">7</div>
                        <div>
                            <div class="itinerary-title">Barranco to Karanga to Barafu Camp</div>
                            <div class="itinerary-subtitle">4,550m → 4,640m · Barranco Wall & Traverse</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Cross the famous Barranco Wall — a hands-on scramble with spectacular views — then traverse to Karanga Camp and continue to Barafu Camp (4,640m). Rest, eat and hydrate before the midnight summit departure. The final preparations for the climb of a lifetime.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,640m</span>
                            <span><i class="fas fa-hiking"></i> 7-8 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Alpine Desert</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day" style="background: #E74C3C; color: var(--white);">8</div>
                        <div>
                            <div class="itinerary-title">Barafu to Uhuru Peak to Mweka Camp</div>
                            <div class="itinerary-subtitle">4,640m → 5,895m → 3,100m · Summit Day</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Depart at midnight for the summit push. Ascend by headlamp to Stella Point (5,756m) and then to Uhuru Peak (5,895m) — the Roof of Africa. Watch the sunrise paint the glaciers gold. Descend via Barafu to Mweka Camp (3,100m). The culmination of 8 days of extraordinary trekking.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 5,895m</span>
                            <span><i class="fas fa-hiking"></i> 12-16 hours</span>
                            <span><i class="fas fa-flag"></i> Summit Day</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">9</div>
                        <div>
                            <div class="itinerary-title">Mweka Camp to Mweka Gate</div>
                            <div class="itinerary-subtitle">3,100m → 1,640m · Descent</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Descend through the rainforest to Mweka Gate (1,640m). Collect your summit certificate and celebrate with your team. Transfer back to your hotel with memories of a complete circumnavigation of Africa's highest mountain — a feat few trekkers achieve.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 1,640m</span>
                            <span><i class="fas fa-hiking"></i> 4-5 hours</span>
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
                        <li><i class="fas fa-check"></i> All park and camping fees</li>
                        <li><i class="fas fa-check"></i> Three meals per day on the mountain</li>
                        <li><i class="fas fa-check"></i> Camping equipment (tents, sleeping mats)</li>
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
                <strong>$2,800</strong>
                <em>per person</em>
            </div>
            <div class="sidebar-features">
                <div class="sidebar-feature"><i class="fas fa-calendar"></i> 9 Days / 8 Nights</div>
                <div class="sidebar-feature"><i class="fas fa-signal"></i> Difficulty: Hard</div>
                <div class="sidebar-feature"><i class="fas fa-chart-line"></i> 90% Success Rate</div>
                <div class="sidebar-feature"><i class="fas fa-compass"></i> Full Mountain Circuit</div>
                <div class="sidebar-feature"><i class="fas fa-mountain"></i> Max Altitude: 5,895m</div>
                <div class="sidebar-feature"><i class="fas fa-eye"></i> Most Scenic Route</div>
            </div>
            <a href="/contact" class="btn-primary" style="width: 100%; justify-content: center; margin-bottom: 10px;">Book This Route <i class="fas fa-arrow-right"></i></a>
            <a href="/kilimanjaro" class="btn-outline-dark" style="width: 100%; justify-content: center;">Compare Routes</a>
            <p class="sidebar-note"><i class="fas fa-shield-alt"></i> Free cancellation up to 30 days before departure</p>
        </div>

        <div class="sidebar-contact-card">
            <h4>Want the Ultimate Experience?</h4>
            <p>The Northern Circuit is the premium Kilimanjaro trek. Let us plan your 9-day circumnavigation.</p>
            <a href="https://wa.me/255683163219?text=Hello! I'm interested in the Northern Circuit Route on Kilimanjaro." class="wa-btn" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
    </div>
</div>

{{-- CTA Banner --}}
<section style="background: var(--gold); padding: 60px 8%; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
    <div>
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--dark); max-width: 500px; line-height: 1.2;">Circle the Mountain on the <em>Northern Circuit</em></h2>
        <p style="color: var(--earth-mid); font-size: 0.9rem; margin-top: 6px;">The most comprehensive and rewarding Kilimanjaro trek available.</p>
    </div>
    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
        <a href="/contact" class="btn-dark">Book This Route <i class="fas fa-arrow-right"></i></a>
        <a href="/kilimanjaro" class="btn-outline-dark" style="border-color: var(--dark); color: var(--dark);">Compare Routes</a>
    </div>
</section>

@endsection
