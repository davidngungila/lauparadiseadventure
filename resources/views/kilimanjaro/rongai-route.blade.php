@extends('layouts.app')

@section('page-title', 'Rongai Route Kilimanjaro | 7-Day Northern Slope Trek')
@section('meta-description', 'The quietest Kilimanjaro route on the northern slopes. Remote, dry conditions with excellent wildlife viewing and 80% summit success rate.')
@section('meta-keywords', 'Rongai route Kilimanjaro, northern slope Kilimanjaro, quiet Kilimanjaro route, Rongai trek, Kilimanjaro northern approach, Tanzania mountain trekking')
@section('canonical', 'https://www.lauparadiseadventure.com/kilimanjaro/rongai-route')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Rongai Route Kilimanjaro Trek",
    "description": "7-day Rongai Route trek on the northern slopes of Kilimanjaro. Quiet, remote approach with dry conditions and 80% summit success rate.",
    "url": "https://www.lauparadiseadventure.com/kilimanjaro/rongai-route",
    "touristType": "Adventure Traveler",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2000",
        "priceCurrency": "USD",
        "description": "7-day Rongai Route Kilimanjaro trek including guides, porters, camping equipment and park fees"
    }
}
</script>
    @endverbatim
@endsection

@section('content')

{{-- Detail Hero --}}
<section class="detail-hero">
    <div class="detail-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324379/7-days-umbwe-route-600x300.webp.bv.webp');"></div>
    <div class="detail-hero-content">
        <div class="breadcrumb" style="margin-bottom: 16px;">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/kilimanjaro">Kilimanjaro</a>
            <span>/</span>
            <span class="current">Rongai Route</span>
        </div>
        <div class="detail-hero-tags">
            <span class="detail-hero-tag"><i class="fas fa-mountain"></i> Kilimanjaro</span>
            <span class="detail-hero-tag"><i class="fas fa-wind"></i> The Quiet Route</span>
            <span class="detail-hero-tag" style="background: rgba(200,150,62,0.25); border-color: rgba(200,150,62,0.5); color: #f5d89e;"><i class="fas fa-signal"></i> Moderate-Hard</span>
        </div>
        <h1 class="detail-hero-title">Rongai Route — <em>The Quiet Route</em></h1>
        <p class="detail-hero-sub">Approach Kilimanjaro from the remote northern slopes near the Kenya border. This route offers solitude, dry conditions and possible wildlife sightings — a wilderness experience unlike any other.</p>
        <div class="detail-hero-meta">
            <div class="detail-hero-meta-item"><i class="fas fa-calendar"></i> 7 Days</div>
            <div class="detail-hero-meta-item"><i class="fas fa-mountain"></i> 5,895m Summit</div>
            <div class="detail-hero-meta-item"><i class="fas fa-chart-line"></i> 80% Success Rate</div>
            <div class="detail-hero-meta-item"><i class="fas fa-map-pin"></i> Northern Slopes</div>
        </div>
    </div>
</section>

{{-- Info Bar --}}
<div class="info-bar">
    <div class="info-bar-items">
        <div class="info-bar-item"><i class="fas fa-clock"></i> <strong>7 Days</strong></div>
        <div class="info-bar-item"><i class="fas fa-signal"></i> <strong>Moderate-Hard</strong></div>
        <div class="info-bar-item"><i class="fas fa-mountain"></i> <strong>4,400m Gain</strong></div>
        <div class="info-bar-item"><i class="fas fa-paw"></i> <strong>Wildlife</strong></div>
        <div class="info-bar-item"><i class="fas fa-chart-line"></i> <strong>80% Success</strong></div>
    </div>
    <div class="info-bar-price">
        <div class="info-bar-price-text">
            <small>From</small>
            <strong>$2,000</strong>
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
            <p>The Rongai Route approaches Kilimanjaro from the north, near the Kenya border. It's the quietest of all the standard routes, receiving far fewer trekkers than the popular southern approaches. The drier conditions on this side of the mountain mean you're less likely to encounter rain, and the remote wilderness feels untouched and pristine.</p>
            <p>Over 6-7 days, you'll traverse through lush rainforest, open moorland and alpine desert before reaching the summit. The northern approach is also the best chance for wildlife sightings — you may spot elephants, buffalo and various antelope species along the way. The route merges with the Marangu Route for the final descent, and descends via Horombo Hut and Marangu Gate.</p>

            <div class="detail-highlights">
                <div class="detail-highlight"><i class="fas fa-user-secret"></i> <span>Quietest route on Kilimanjaro</span></div>
                <div class="detail-highlight"><i class="fas fa-sun"></i> <span>Drier conditions (northern side)</span></div>
                <div class="detail-highlight"><i class="fas fa-paw"></i> <span>Wildlife sighting opportunities</span></div>
                <div class="detail-highlight"><i class="fas fa-tree"></i> <span>Remote wilderness experience</span></div>
                <div class="detail-highlight"><i class="fas fa-campground"></i> <span>Untouched northern forests</span></div>
                <div class="detail-highlight"><i class="fas fa-chart-line"></i> <span>80% summit success rate</span></div>
            </div>
        </div>

        <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 30px;">
            <div style="background: rgba(200,150,62,0.08); border: 1px solid rgba(200,150,62,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--gold);">Difficulty: Moderate-Hard</div>
            <div style="background: rgba(200,150,62,0.08); border: 1px solid rgba(200,150,62,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--gold);">Elevation Gain: 4,400m</div>
            <div style="background: rgba(39,174,96,0.08); border: 1px solid rgba(39,174,96,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--success);">Success Rate: 80%</div>
        </div>

        <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 20px;">Day-by-Day Itinerary</h3>

        <div class="itinerary">
            <div class="itinerary-item active">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">1</div>
                        <div>
                            <div class="itinerary-title">Nalemuru Gate to Simba Camp</div>
                            <div class="itinerary-subtitle">2,000m → 2,625m · Rainforest Zone</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Begin at Nalemuru Gate on Kilimanjaro's northern slopes, a remote entry point far from the crowds of the southern approaches. The trail climbs gently through lush rainforest teeming with birdlife and the occasional sighting of elephants or antelope. The forest is dense and atmospheric. Simba Camp (2,625m) is set in a clearing with views north towards the plains.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 2,625m</span>
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
                            <div class="itinerary-title">Simba Camp to Second Cave</div>
                            <div class="itinerary-subtitle">2,625m → 3,480m · Moorland Zone</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Day two climbs out of the rainforest into open moorland with expansive views of the Kenyan plains to the north and the Kibo massif to the south. The trail is well-defined and the terrain is gentle. Second Cave (3,480m) offers one of the most scenic camping spots on the mountain, with clear views of Kibo's glaciated summit.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 3,480m</span>
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
                            <div class="itinerary-title">Second Cave to Kikelelwa Camp</div>
                            <div class="itinerary-subtitle">3,480m → 3,630m · Moorland</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>A shorter trekking day that provides excellent acclimatization. The trail traverses open moorland with giant heathers and groundsels. The pace is deliberately gentle to allow your body to adjust. Kikelelwa Camp (3,630m) is a peaceful spot surrounded by stunning mountain scenery, often visited by eland and other high-altitude wildlife.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 3,630m</span>
                            <span><i class="fas fa-hiking"></i> 3-4 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Moorland</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">4</div>
                        <div>
                            <div class="itinerary-title">Kikelelwa to Mawenzi Tarn</div>
                            <div class="itinerary-subtitle">3,630m → 4,310m · Alpine Desert</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>The trail steepens as you climb towards Mawenzi Tarn (4,310m), nestled in a dramatic cirque beneath Mawenzi Peak — Kilimanjaro's second highest point. The landscape shifts to alpine desert with rocky terrain and sparse vegetation. Mawenzi Tarn is one of the most spectacular campsite locations on the mountain, with the jagged spires of Mawenzi towering above.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,310m</span>
                            <span><i class="fas fa-hiking"></i> 5-6 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Alpine Desert</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">5</div>
                        <div>
                            <div class="itinerary-title">Mawenzi Tarn to Kibo Hut</div>
                            <div class="itinerary-subtitle">4,310m → 4,700m · The Saddle</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Cross the Saddle — the barren alpine desert between Mawenzi and Kibo peaks. The terrain is stark and moon-like, with virtually no vegetation. Kibo Hut (4,700m) is the final camp before the summit attempt. Arrive early, eat well, hydrate and rest for the midnight departure. Temperatures will drop well below freezing overnight.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,700m</span>
                            <span><i class="fas fa-hiking"></i> 4-5 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Alpine Desert</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day" style="background: #E74C3C; color: var(--white);">6</div>
                        <div>
                            <div class="itinerary-title">Kibo Hut to Uhuru Peak to Horombo Hut</div>
                            <div class="itinerary-subtitle">4,700m → 5,895m → 3,720m · Summit Day</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Depart at midnight for the summit push via the Marangu approach. Ascend by headlamp across steep scree to Gilman's Point (5,681m), then along the crater rim to Uhuru Peak (5,895m) — the Roof of Africa. After photos and celebration, descend through Kibo Hut and continue down to Horombo Hut (3,720m) for the night. A long but unforgettable day.</p>
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
                        <div class="itinerary-day">7</div>
                        <div>
                            <div class="itinerary-title">Horombo Hut to Marangu Gate</div>
                            <div class="itinerary-subtitle">3,720m → 1,800m · Descent</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>The final descent retraces the Marangu Route through moorland and rainforest back to Marangu Gate (1,800m). Collect your summit certificate and transfer back to your hotel. The transition from barren summit zone to lush tropical forest is a powerful reminder of Kilimanjaro's five climate zones.</p>
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
                <strong>$2,000</strong>
                <em>per person</em>
            </div>
            <div class="sidebar-features">
                <div class="sidebar-feature"><i class="fas fa-calendar"></i> 7 Days / 6 Nights</div>
                <div class="sidebar-feature"><i class="fas fa-signal"></i> Difficulty: Moderate-Hard</div>
                <div class="sidebar-feature"><i class="fas fa-chart-line"></i> 80% Success Rate</div>
                <div class="sidebar-feature"><i class="fas fa-map-pin"></i> Northern Slopes</div>
                <div class="sidebar-feature"><i class="fas fa-mountain"></i> Max Altitude: 5,895m</div>
                <div class="sidebar-feature"><i class="fas fa-paw"></i> Wildlife Sightings</div>
            </div>
            <a href="/contact" class="btn-primary" style="width: 100%; justify-content: center; margin-bottom: 10px;">Book This Route <i class="fas fa-arrow-right"></i></a>
            <a href="/kilimanjaro" class="btn-outline-dark" style="width: 100%; justify-content: center;">Compare Routes</a>
            <p class="sidebar-note"><i class="fas fa-shield-alt"></i> Free cancellation up to 30 days before departure</p>
        </div>

        <div class="sidebar-contact-card">
            <h4>Seeking Solitude?</h4>
            <p>The Rongai Route is the quietest path up Kilimanjaro. Perfect for those who value wilderness and peace.</p>
            <a href="https://wa.me/255683163219?text=Hello! I'm interested in the Rongai Route on Kilimanjaro." class="wa-btn" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
    </div>
</div>

{{-- CTA Banner --}}
<section style="background: var(--gold); padding: 60px 8%; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
    <div>
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--dark); max-width: 500px; line-height: 1.2;">Trek the <em>Quiet Side</em> of Kilimanjaro</h2>
        <p style="color: var(--earth-mid); font-size: 0.9rem; margin-top: 6px;">Experience the remote northern slopes with fewer crowds.</p>
    </div>
    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
        <a href="/contact" class="btn-dark">Book This Route <i class="fas fa-arrow-right"></i></a>
        <a href="/kilimanjaro" class="btn-outline-dark" style="border-color: var(--dark); color: var(--dark);">Compare Routes</a>
    </div>
</section>

@endsection
