@extends('layouts.app')

@section('page-title', 'Lemosho Route Kilimanjaro | 8-Day Scenic Route Trek')
@section('meta-description', 'Experience the most scenic route up Kilimanjaro. The 8-day Lemosho route offers outstanding views, fewer crowds and a 90% summit success rate.')
@section('meta-keywords', 'Lemosho route Kilimanjaro, scenic Kilimanjaro route, Kilimanjaro 8 day trek, Lemosho trek, best Kilimanjaro route, Tanzania mountain trekking')
@section('canonical', 'https://www.lauparadiseadventure.com/kilimanjaro/lemosho-route')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Lemosho Route Kilimanjaro Trek",
    "description": "8-day Lemosho Scenic Route trek up Mount Kilimanjaro with outstanding views, fewer crowds and a 90% summit success rate.",
    "url": "https://www.lauparadiseadventure.com/kilimanjaro/lemosho-route",
    "touristType": "Adventure Traveler",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2400",
        "priceCurrency": "USD",
        "description": "8-day Lemosho Route Kilimanjaro trek including guides, porters, camping equipment and park fees"
    }
}
</script>
    @endverbatim
@endsection

@section('content')

{{-- Detail Hero --}}
<section class="detail-hero">
    <div class="detail-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp');"></div>
    <div class="detail-hero-content">
        <div class="breadcrumb" style="margin-bottom: 16px;">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/kilimanjaro">Kilimanjaro</a>
            <span>/</span>
            <span class="current">Lemosho Route</span>
        </div>
        <div class="detail-hero-tags">
            <span class="detail-hero-tag"><i class="fas fa-mountain"></i> Kilimanjaro</span>
            <span class="detail-hero-tag"><i class="fas fa-binoculars"></i> Scenic Route</span>
            <span class="detail-hero-tag" style="background: rgba(231,76,60,0.25); border-color: rgba(231,76,60,0.5); color: #f5a5a0;"><i class="fas fa-signal"></i> Hard</span>
        </div>
        <h1 class="detail-hero-title">Lemosho Route — <em>The Scenic Route</em></h1>
        <p class="detail-hero-sub">Widely considered the most beautiful path up Kilimanjaro, the Lemosho route traverses pristine wilderness, crosses the Shira Plateau and offers the highest summit success rate at 90%.</p>
        <div class="detail-hero-meta">
            <div class="detail-hero-meta-item"><i class="fas fa-calendar"></i> 8 Days</div>
            <div class="detail-hero-meta-item"><i class="fas fa-mountain"></i> 5,895m Summit</div>
            <div class="detail-hero-meta-item"><i class="fas fa-chart-line"></i> 90% Success Rate</div>
            <div class="detail-hero-meta-item"><i class="fas fa-users"></i> Fewer Crowds</div>
        </div>
    </div>
</section>

{{-- Info Bar --}}
<div class="info-bar">
    <div class="info-bar-items">
        <div class="info-bar-item"><i class="fas fa-clock"></i> <strong>8 Days</strong></div>
        <div class="info-bar-item"><i class="fas fa-signal"></i> <strong>Hard</strong></div>
        <div class="info-bar-item"><i class="fas fa-mountain"></i> <strong>4,400m Gain</strong></div>
        <div class="info-bar-item"><i class="fas fa-chart-line"></i> <strong>90% Success</strong></div>
        <div class="info-bar-item"><i class="fas fa-eye"></i> <strong>Best Scenery</strong></div>
    </div>
    <div class="info-bar-price">
        <div class="info-bar-price-text">
            <small>From</small>
            <strong>$2,400</strong>
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
            <p>The Lemosho Route is widely regarded as the most scenic trail on Kilimanjaro. Starting from the western slopes, it passes through untouched rainforest teeming with wildlife before climbing onto the vast Shira Plateau — one of the highest plateaus on earth. The route then joins the Machame Route for the dramatic traverse past Lava Tower and the Barranco Wall.</p>
            <p>With 8 days on the mountain, the Lemosho Route provides outstanding acclimatization, resulting in a remarkable 90% summit success rate — the highest of any Kilimanjaro route. The western approach means fewer crowds in the first few days, giving you a genuine wilderness experience before merging with other routes higher up.</p>

            <div class="detail-highlights">
                <div class="detail-highlight"><i class="fas fa-binoculars"></i> <span>Most scenic Kilimanjaro route</span></div>
                <div class="detail-highlight"><i class="fas fa-user-secret"></i> <span>Fewer crowds early on</span></div>
                <div class="detail-highlight"><i class="fas fa-chart-line"></i> <span>90% summit success rate</span></div>
                <div class="detail-highlight"><i class="fas fa-paw"></i> <span>Wildlife in the rainforest</span></div>
                <div class="detail-highlight"><i class="fas fa-campground"></i> <span>Shira Plateau camping</span></div>
                <div class="detail-highlight"><i class="fas fa-cloud-sun"></i> <span>Excellent acclimatization</span></div>
            </div>
        </div>

        <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 30px;">
            <div style="background: rgba(231,76,60,0.08); border: 1px solid rgba(231,76,60,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: #E74C3C;">Difficulty: Hard</div>
            <div style="background: rgba(200,150,62,0.08); border: 1px solid rgba(200,150,62,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--gold);">Elevation Gain: 4,400m</div>
            <div style="background: rgba(39,174,96,0.08); border: 1px solid rgba(39,174,96,0.2); padding: 8px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 600; color: var(--success);">Success Rate: 90%</div>
        </div>

        <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 20px;">Day-by-Day Itinerary</h3>

        <div class="itinerary">
            <div class="itinerary-item active">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day">1</div>
                        <div>
                            <div class="itinerary-title">Londorossi Gate to Forest Camp</div>
                            <div class="itinerary-subtitle">2,100m → 2,750m · Rainforest Zone</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Begin at Londorossi Gate on the western side of Kilimanjaro. The trail climbs gently through pristine montane rainforest — the least-visited section of the entire mountain. Dense canopy overhead shelters colobus monkeys, blue monkeys and a variety of tropical birds. The forest is rich and atmospheric, with shafts of light breaking through the trees. Camp is reached in 3-4 hours.</p>
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
                            <div class="itinerary-subtitle">2,750m → 3,350m · Moorland Zone</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Today you emerge from the forest into the moorland zone, where the vegetation transforms into giant heathers, senecios and lobelias. The landscape opens dramatically with panoramic views of the Shira Plateau ahead. This is one of the most photogenic sections of the climb, with the terrain feeling vast and prehistoric. Camp is set among the moorland vegetation.</p>
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
                        <p>A relatively gentle traverse across the Shira Plateau — one of the largest high-altitude plateaus in the world. The terrain is flat and open with 360-degree views of the surrounding mountains and the Kibo massif. This is excellent acclimatization walking. You may spot seasonal wildlife such as eland and buffalo. Camp 2 is positioned with stunning views of the western breach.</p>
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
                            <div class="itinerary-title">Shira Camp 2 to Lava Tower to Barranco Camp</div>
                            <div class="itinerary-subtitle">3,850m → 4,630m → 4,550m · Alpine Desert</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>The crucial acclimatization day. You'll climb to the imposing Lava Tower (4,630m), a 300-metre volcanic plug that dominates the landscape. The ascent is gradual but the altitude demands attention. After lunch at the tower, you descend to Barranco Camp (4,550m) through dramatic alpine desert terrain. This "climb high, sleep low" profile is key to the Lemosho route's exceptional success rate.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,630m peak</span>
                            <span><i class="fas fa-hiking"></i> 7-8 hours</span>
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
                            <div class="itinerary-title">Barranco Camp to Karanga Camp</div>
                            <div class="itinerary-subtitle">4,550m → 4,630m · Barranco Wall</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>The day opens with the legendary Barranco Wall — a steep rock scramble requiring some hands-on climbing. It's challenging but non-technical and deeply rewarding. From the top, the views are breathtaking. The trail then traverses along exposed ridgelines before descending to the Karanga Valley and climbing to camp. The landscape is stark, dramatic and unforgettable.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,630m</span>
                            <span><i class="fas fa-hiking"></i> 5-6 hours</span>
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
                            <div class="itinerary-title">Karanga Camp to Barafu Camp</div>
                            <div class="itinerary-subtitle">4,630m → 4,640m · Alpine Desert</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>A short but meaningful day that brings you to Barafu Camp (4,640m) — the launch point for the summit. The trail is rocky and barren, but the views of Mawenzi Peak and the southern glaciers are spectacular. Arrive early, eat a full meal, hydrate thoroughly and rest. Sleep comes early as the summit departure is at midnight.</p>
                        <div class="itinerary-meta">
                            <span><i class="fas fa-mountain"></i> 4,640m</span>
                            <span><i class="fas fa-hiking"></i> 3-4 hours</span>
                            <span><i class="fas fa-map-marker-alt"></i> Alpine Desert</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="itinerary-item">
                <div class="itinerary-header">
                    <div class="itinerary-header-left">
                        <div class="itinerary-day" style="background: #E74C3C; color: var(--white);">7</div>
                        <div>
                            <div class="itinerary-title">Barafu to Uhuru Peak to Mweka Camp</div>
                            <div class="itinerary-subtitle">4,640m → 5,895m → 3,100m · Summit Day</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>Depart at midnight under a canopy of stars, ascending the scree slopes of Kibo by headlamp. The climb is steep and relentless but each step brings you closer to the Roof of Africa. Reach Stella Point (5,756m), then continue to Uhuru Peak (5,895m) — Africa's highest point. Watch the sunrise over the Indian Ocean before descending through Barafu to Mweka Camp.</p>
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
                        <div class="itinerary-day">8</div>
                        <div>
                            <div class="itinerary-title">Mweka Camp to Mweka Gate</div>
                            <div class="itinerary-subtitle">3,100m → 1,640m · Descent</div>
                        </div>
                    </div>
                    <button class="itinerary-toggle"><i class="fas fa-plus"></i></button>
                </div>
                <div class="itinerary-body">
                    <div class="itinerary-content">
                        <p>The descent winds through the rainforest, a lush contrast to the barren summit zone left behind. The trail is well-maintained and the lower altitude brings relief to tired legs. Collect your summit certificate at Mweka Gate and transfer back to your hotel for celebrations.</p>
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
                <strong>$2,400</strong>
                <em>per person</em>
            </div>
            <div class="sidebar-features">
                <div class="sidebar-feature"><i class="fas fa-calendar"></i> 8 Days / 7 Nights</div>
                <div class="sidebar-feature"><i class="fas fa-signal"></i> Difficulty: Hard</div>
                <div class="sidebar-feature"><i class="fas fa-chart-line"></i> 90% Success Rate</div>
                <div class="sidebar-feature"><i class="fas fa-eye"></i> Best Scenery</div>
                <div class="sidebar-feature"><i class="fas fa-mountain"></i> Max Altitude: 5,895m</div>
                <div class="sidebar-feature"><i class="fas fa-users"></i> Group or Private Trek</div>
            </div>
            <a href="/contact" class="btn-primary" style="width: 100%; justify-content: center; margin-bottom: 10px;">Book This Route <i class="fas fa-arrow-right"></i></a>
            <a href="/kilimanjaro" class="btn-outline-dark" style="width: 100%; justify-content: center;">Compare Routes</a>
            <p class="sidebar-note"><i class="fas fa-shield-alt"></i> Free cancellation up to 30 days before departure</p>
        </div>

        <div class="sidebar-contact-card">
            <h4>Need Help Choosing?</h4>
            <p>Our team will help you pick the perfect route based on your fitness level and preferences.</p>
            <a href="https://wa.me/255683163219?text=Hello! I'm interested in the Lemosho Route on Kilimanjaro." class="wa-btn" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
    </div>
</div>

{{-- CTA Banner --}}
<section style="background: var(--gold); padding: 60px 8%; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
    <div>
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--dark); max-width: 500px; line-height: 1.2;">Experience the <em>Scenic Route</em></h2>
        <p style="color: var(--earth-mid); font-size: 0.9rem; margin-top: 6px;">Book your 8-day Lemosho adventure with the highest success rate on Kilimanjaro.</p>
    </div>
    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
        <a href="/contact" class="btn-dark">Book This Route <i class="fas fa-arrow-right"></i></a>
        <a href="/kilimanjaro" class="btn-outline-dark" style="border-color: var(--dark); color: var(--dark);">Compare Routes</a>
    </div>
</section>

@endsection
