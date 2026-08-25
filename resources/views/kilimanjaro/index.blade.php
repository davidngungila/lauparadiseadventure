@extends('layouts.app')

@section('page-title', 'Mount Kilimanjaro Trekking Tours | Tanzania')
@section('meta-description', 'Climb Mount Kilimanjaro with experienced guides. Explore Machame, Lemosho, Marangu, Rongai and Northern Circuit routes with LAU Paradise Adventure.')
@section('meta-keywords', 'Kilimanjaro trekking, climb Kilimanjaro, Machame route, Lemosho route, Marangu route, Rongai route, Northern Circuit Kilimanjaro, Tanzania mountain trekking')
@section('canonical', 'https://www.lauparadiseadventure.com/kilimanjaro')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Kilimanjaro Trekking Tours with LAU Paradise Adventure",
    "description": "Climb Mount Kilimanjaro via multiple routes including Machame, Lemosho, Marangu, Rongai and Northern Circuit with experienced local guides.",
    "url": "https://www.lauparadiseadventure.com/kilimanjaro",
    "touristType": "Adventure Traveler",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": [
        {
            "@type": "Offer",
            "name": "Machame Route",
            "price": "2100",
            "priceCurrency": "USD",
            "description": "7-day Machame Whiskey Route trek"
        },
        {
            "@type": "Offer",
            "name": "Lemosho Route",
            "price": "2400",
            "priceCurrency": "USD",
            "description": "8-day Lemosho Scenic Route trek"
        },
        {
            "@type": "Offer",
            "name": "Marangu Route",
            "price": "1800",
            "priceCurrency": "USD",
            "description": "6-day Marangu Coca-Cola Route trek"
        },
        {
            "@type": "Offer",
            "name": "Rongai Route",
            "price": "2000",
            "priceCurrency": "USD",
            "description": "7-day Rongai Quiet Route trek"
        },
        {
            "@type": "Offer",
            "name": "Northern Circuit",
            "price": "2800",
            "priceCurrency": "USD",
            "description": "9-day Northern Circuit Route trek"
        }
    ],
    "itinerary": {
        "@type": "ItemList",
        "name": "Kilimanjaro Summit",
        "numberOfItems": 1,
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Uhuru Peak",
                "description": "5,895 metres - the Roof of Africa"
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">Kilimanjaro</span>
        </div>
        <h1 class="page-hero-title">Conquer <em>Mount Kilimanjaro</em></h1>
        <p class="page-hero-sub">Stand on the Roof of Africa and experience one of the world's greatest adventure journeys. At 5,895 metres, Kilimanjaro is Africa's highest peak.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-mountain"></i> 5,895m Summit</div>
            <div class="page-hero-stat"><i class="fas fa-route"></i> 5 Routes</div>
            <div class="page-hero-stat"><i class="fas fa-users"></i> Expert Guides</div>
        </div>
    </div>
</section>

{{-- Introduction --}}
<section style="background: var(--cream); padding: 90px 8%;">
    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
        <span class="sec-label" style="justify-content: center;">Tanzania's Iconic Peak</span>
        <h2 class="sec-title" style="text-align: center;">Africa's Tallest <em>Free-Standing</em> Mountain</h2>
        <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.8; margin-top: 20px;">
            Mount Kilimanjaro, the world's tallest free-standing mountain, offers an unforgettable trekking experience through five distinct climate zones — from tropical rainforest to arctic summit. No technical climbing skills required, just determination and the right guide team.
        </p>
    </div>
</section>

{{-- Route Comparison Table --}}
<section class="route-table-section">
    <div style="text-align: center;">
        <span class="sec-label" style="justify-content: center;">Choose Your Path</span>
        <h2 class="sec-title">Route <em>Comparison</em> Guide</h2>
        <p class="sec-sub" style="margin: 12px auto 0;">Compare all five Kilimanjaro routes to find the perfect trek for your fitness level and preferences.</p>
    </div>

    <div class="route-table-wrap">
        <table class="route-table">
            <thead>
                <tr>
                    <th>Route</th>
                    <th>Days</th>
                    <th>Difficulty</th>
                    <th>Scenery</th>
                    <th>Success Rate</th>
                    <th>Popularity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="/kilimanjaro/machame-route" style="color: var(--gold); text-decoration: none; font-weight: 700;">Machame</a></td>
                    <td>6–7</td>
                    <td>
                        <div class="difficulty-dots">
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot"></span>
                        </div>
                    </td>
                    <td>Excellent</td>
                    <td><strong>85%</strong></td>
                    <td><span class="popularity-badge popular">Very High</span></td>
                </tr>
                <tr>
                    <td><a href="/kilimanjaro/lemosho-route" style="color: var(--gold); text-decoration: none; font-weight: 700;">Lemosho</a></td>
                    <td>7–9</td>
                    <td>
                        <div class="difficulty-dots">
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot"></span>
                            <span class="difficulty-dot"></span>
                        </div>
                    </td>
                    <td>Excellent</td>
                    <td><strong>90%</strong></td>
                    <td><span class="popularity-badge popular">High</span></td>
                </tr>
                <tr>
                    <td><a href="/kilimanjaro/marangu-route" style="color: var(--gold); text-decoration: none; font-weight: 700;">Marangu</a></td>
                    <td>5–6</td>
                    <td>
                        <div class="difficulty-dots">
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot"></span>
                            <span class="difficulty-dot"></span>
                            <span class="difficulty-dot"></span>
                        </div>
                    </td>
                    <td>Good</td>
                    <td><strong>65%</strong></td>
                    <td><span class="popularity-badge popular">High</span></td>
                </tr>
                <tr>
                    <td><a href="/kilimanjaro/rongai-route" style="color: var(--gold); text-decoration: none; font-weight: 700;">Rongai</a></td>
                    <td>6–7</td>
                    <td>
                        <div class="difficulty-dots">
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot"></span>
                            <span class="difficulty-dot"></span>
                        </div>
                    </td>
                    <td>Excellent</td>
                    <td><strong>80%</strong></td>
                    <td><span class="popularity-badge moderate">Medium</span></td>
                </tr>
                <tr>
                    <td><a href="/kilimanjaro/northern-circuit" style="color: var(--gold); text-decoration: none; font-weight: 700;">Northern Circuit</a></td>
                    <td>8–10</td>
                    <td>
                        <div class="difficulty-dots">
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot active"></span>
                            <span class="difficulty-dot"></span>
                        </div>
                    </td>
                    <td>Excellent</td>
                    <td><strong>90%</strong></td>
                    <td><span class="popularity-badge quiet">Lower</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

{{-- Individual Route Cards --}}
<section style="background: var(--dark); padding: 90px 8%; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -20px; left: -10px; font-family: 'Bebas Neue', sans-serif; font-size: clamp(80px, 15vw, 160px); color: rgba(255,255,255,0.04); letter-spacing: 8px; white-space: nowrap; pointer-events: none;">ROUTES</div>

    <div style="text-align: center; margin-bottom: 50px;">
        <span class="sec-label" style="justify-content: center;">Trekking Routes</span>
        <h2 class="sec-title" style="color: var(--white);">Choose Your <em>Route</em> Up Kilimanjaro</h2>
        <p class="sec-sub" style="margin: 12px auto 0; color: rgba(255,255,255,0.6);">Each route offers a unique perspective of the mountain with different landscapes, difficulty levels and experiences.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; max-width: 1200px; margin: 0 auto;">

        {{-- Machame --}}
        <div class="route-card" style="flex-direction: column; padding: 28px;">
            <div class="route-icon"><i class="fas fa-mountain"></i></div>
            <div style="margin-top: 14px;">
                <div class="route-name" style="font-size: 1.2rem; margin-bottom: 6px;">Machame Route</div>
                <div style="font-size: 0.8rem; color: var(--gold); margin-bottom: 12px;">"The Whiskey Route"</div>
                <div class="route-details" style="flex-wrap: wrap;">
                    <span><i class="fas fa-calendar"></i> 7 Days</span>
                    <span><i class="fas fa-chart-line"></i> 85% Success</span>
                </div>
                <div class="diff-bar" style="margin-top: 10px;">
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot"></span>
                </div>
                <div style="font-size: 0.75rem; color: rgba(255,255,255,0.5); margin-top: 6px;">Difficulty 4/5</div>
            </div>
            <a href="/kilimanjaro/machame-route" style="display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; color: var(--gold); font-size: 0.85rem; font-weight: 600;">View Route <i class="fas fa-arrow-right"></i></a>
        </div>

        {{-- Lemosho --}}
        <div class="route-card" style="flex-direction: column; padding: 28px;">
            <div class="route-icon"><i class="fas fa-binoculars"></i></div>
            <div style="margin-top: 14px;">
                <div class="route-name" style="font-size: 1.2rem; margin-bottom: 6px;">Lemosho Route</div>
                <div style="font-size: 0.8rem; color: var(--gold); margin-bottom: 12px;">"The Scenic Route"</div>
                <div class="route-details" style="flex-wrap: wrap;">
                    <span><i class="fas fa-calendar"></i> 8 Days</span>
                    <span><i class="fas fa-chart-line"></i> 90% Success</span>
                </div>
                <div class="diff-bar" style="margin-top: 10px;">
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot"></span>
                    <span class="diff-dot"></span>
                </div>
                <div style="font-size: 0.75rem; color: rgba(255,255,255,0.5); margin-top: 6px;">Difficulty 3/5</div>
            </div>
            <a href="/kilimanjaro/lemosho-route" style="display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; color: var(--gold); font-size: 0.85rem; font-weight: 600;">View Route <i class="fas fa-arrow-right"></i></a>
        </div>

        {{-- Marangu --}}
        <div class="route-card" style="flex-direction: column; padding: 28px;">
            <div class="route-icon"><i class="fas fa-campground"></i></div>
            <div style="margin-top: 14px;">
                <div class="route-name" style="font-size: 1.2rem; margin-bottom: 6px;">Marangu Route</div>
                <div style="font-size: 0.8rem; color: var(--gold); margin-bottom: 12px;">"The Coca-Cola Route"</div>
                <div class="route-details" style="flex-wrap: wrap;">
                    <span><i class="fas fa-calendar"></i> 6 Days</span>
                    <span><i class="fas fa-chart-line"></i> 65% Success</span>
                </div>
                <div class="diff-bar" style="margin-top: 10px;">
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot"></span>
                    <span class="diff-dot"></span>
                    <span class="diff-dot"></span>
                </div>
                <div style="font-size: 0.75rem; color: rgba(255,255,255,0.5); margin-top: 6px;">Difficulty 2/5</div>
            </div>
            <a href="/kilimanjaro/marangu-route" style="display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; color: var(--gold); font-size: 0.85rem; font-weight: 600;">View Route <i class="fas fa-arrow-right"></i></a>
        </div>

        {{-- Rongai --}}
        <div class="route-card" style="flex-direction: column; padding: 28px;">
            <div class="route-icon"><i class="fas fa-wind"></i></div>
            <div style="margin-top: 14px;">
                <div class="route-name" style="font-size: 1.2rem; margin-bottom: 6px;">Rongai Route</div>
                <div style="font-size: 0.8rem; color: var(--gold); margin-bottom: 12px;">"The Quiet Route"</div>
                <div class="route-details" style="flex-wrap: wrap;">
                    <span><i class="fas fa-calendar"></i> 7 Days</span>
                    <span><i class="fas fa-chart-line"></i> 80% Success</span>
                </div>
                <div class="diff-bar" style="margin-top: 10px;">
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot filled"></span>
                    <span class="diff-dot"></span>
                    <span class="diff-dot"></span>
                </div>
                <div style="font-size: 0.75rem; color: rgba(255,255,255,0.5); margin-top: 6px;">Difficulty 3/5</div>
            </div>
            <a href="/kilimanjaro/rongai-route" style="display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; color: var(--gold); font-size: 0.85rem; font-weight: 600;">View Route <i class="fas fa-arrow-right"></i></a>
        </div>

    </div>
</section>

{{-- How to Prepare --}}
<section style="background: var(--smoke); padding: 90px 8%;">
    <div style="text-align: center; margin-bottom: 50px;">
        <span class="sec-label" style="justify-content: center;">Before You Go</span>
        <h2 class="sec-title">How to Prepare for <em>Kilimanjaro</em></h2>
        <p class="sec-sub" style="margin: 12px auto 0;">Proper preparation is the key to a successful summit. Here's what you need to know before your trek.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; max-width: 1100px; margin: 0 auto;">

        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-sm); text-align: center; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(200,150,62,0.12); display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; font-size: 1.4rem; color: var(--gold);"><i class="fas fa-heartbeat"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--earth); margin-bottom: 10px;">Fitness & Training</h3>
            <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.7;">Start training at least 3 months before your climb. Focus on cardio, leg strength and hiking with a loaded backpack to build endurance.</p>
        </div>

        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-sm); text-align: center; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(200,150,62,0.12); display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; font-size: 1.4rem; color: var(--gold);"><i class="fas fa-backpack"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--earth); margin-bottom: 10px;">What to Pack</h3>
            <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.7;">Essential gear and clothing for all five climate zones. Layering system, waterproof outer shell, quality boots and sleeping bag rated to -10°C.</p>
        </div>

        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-sm); text-align: center; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(200,150,62,0.12); display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; font-size: 1.4rem; color: var(--gold);"><i class="fas fa-lungs"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--earth); margin-bottom: 10px;">Altitude Awareness</h3>
            <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.7;">Understanding acclimatization is critical. Learn to recognise altitude sickness symptoms and how proper route pacing reduces risk significantly.</p>
        </div>

        <div style="background: var(--white); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-sm); text-align: center; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='';this.style.boxShadow='var(--shadow-sm)'">
            <div style="width: 64px; height: 64px; border-radius: 50%; background: rgba(200,150,62,0.12); display: flex; align-items: center; justify-content: center; margin: 0 auto 18px; font-size: 1.4rem; color: var(--gold);"><i class="fas fa-calendar-check"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--earth); margin-bottom: 10px;">Best Time to Visit</h3>
            <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.7;">January to March and June to October offer the best conditions. Dry weather, clear skies and the most comfortable trekking temperatures.</p>
        </div>

    </div>
</section>

{{-- CTA Banner --}}
<section style="background: var(--gold); padding: 60px 8%; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
    <div>
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--dark); max-width: 500px; line-height: 1.2;">Ready to Conquer <em>Kilimanjaro</em>?</h2>
        <p style="color: var(--earth-mid); font-size: 0.9rem; margin-top: 6px;">Let our experienced team plan your perfect climb.</p>
    </div>
    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
        <a href="/contact" class="btn-dark">Plan My Climb <i class="fas fa-arrow-right"></i></a>
        <a href="/kilimanjaro/machame-route" class="btn-outline-dark" style="border-color: var(--dark); color: var(--dark);">Kilimanjaro Preparation Guide</a>
    </div>
</section>

{{-- Why Climb With Us --}}
<section style="background: var(--earth); padding: 90px 8%; position: relative; overflow: hidden;">
    <div style="position: absolute; top: -20px; left: -10px; font-family: 'Bebas Neue', sans-serif; font-size: clamp(80px, 15vw, 160px); color: rgba(255,255,255,0.04); letter-spacing: 8px; white-space: nowrap; pointer-events: none;">WHY US</div>

    <div style="text-align: center; margin-bottom: 50px;">
        <span class="sec-label" style="justify-content: center;">Why Choose Us</span>
        <h2 class="sec-title" style="color: var(--white);">Why Climb with <em>LAU Paradise</em></h2>
        <p class="sec-sub" style="margin: 12px auto 0; color: rgba(255,255,255,0.6);">We don't just guide you up the mountain — we ensure a safe, ethical and life-changing experience.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 24px; max-width: 1100px; margin: 0 auto;">

        <div style="text-align: center; padding: 24px;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 1.2rem; color: var(--gold);"><i class="fas fa-user-tie"></i></div>
            <h4 style="color: var(--white); font-weight: 600; margin-bottom: 6px;">Experienced Guides</h4>
            <p style="color: rgba(255,255,255,0.55); font-size: 0.82rem; line-height: 1.6;">Licensed, certified mountain guides with 10+ years of Kilimanjaro experience and wilderness first aid training.</p>
        </div>

        <div style="text-align: center; padding: 24px;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 1.2rem; color: var(--gold);"><i class="fas fa-shield-alt"></i></div>
            <h4 style="color: var(--white); font-weight: 600; margin-bottom: 6px;">Safety Protocols</h4>
            <p style="color: rgba(255,255,255,0.55); font-size: 0.82rem; line-height: 1.6;">Comprehensive safety equipment, pulse oximeters on every trek and emergency evacuation plans for every camp.</p>
        </div>

        <div style="text-align: center; padding: 24px;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 1.2rem; color: var(--gold);"><i class="fas fa-chart-line"></i></div>
            <h4 style="color: var(--white); font-weight: 600; margin-bottom: 6px;">High Success Rates</h4>
            <p style="color: rgba(255,255,255,0.55); font-size: 0.82rem; line-height: 1.6;">Our guided treks achieve summit success rates above industry average through proper acclimatization and pacing.</p>
        </div>

        <div style="text-align: center; padding: 24px;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 1.2rem; color: var(--gold);"><i class="fas fa-cogs"></i></div>
            <h4 style="color: var(--white); font-weight: 600; margin-bottom: 6px;">Quality Equipment</h4>
            <p style="color: rgba(255,255,255,0.55); font-size: 0.82rem; line-height: 1.6;">Top-quality camping gear, dining equipment and sleeping systems maintained to the highest standards.</p>
        </div>

        <div style="text-align: center; padding: 24px;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 1.2rem; color: var(--gold);"><i class="fas fa-hand-holding-heart"></i></div>
            <h4 style="color: var(--white); font-weight: 600; margin-bottom: 6px;">Ethical Porter Treatment</h4>
            <p style="color: rgba(255,255,255,0.55); font-size: 0.82rem; line-height: 1.6;">Fair wages, proper insurance, adequate equipment and load limits for every porter on our team.</p>
        </div>

    </div>
</section>

@endsection
