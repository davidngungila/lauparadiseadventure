@extends('layouts.app')

@section('page-title', 'Tanzania Honeymoon Safari | Romantic Safari & Beach Combos | LAU Paradise Adventure')
@section('meta-description', 'Create magical honeymoon memories in Tanzania. Luxury safari lodges, romantic beach dinners, Zanzibar sunsets and private excursions.')
@section('meta-keywords', 'Tanzania honeymoon, honeymoon safari, romantic safari Tanzania, Zanzibar honeymoon, safari beach combo')
@section('canonical', 'https://www.lauparadiseadventure.com/experiences/honeymoon')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tanzania Honeymoon Safari",
    "description": "Create magical honeymoon memories in Tanzania. Luxury safari lodges, romantic beach dinners, Zanzibar sunsets and private excursions.",
    "url": "https://www.lauparadiseadventure.com/experiences/honeymoon",
    "touristType": "Couple",
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
<div class="page-hero" style="position:relative;height:65vh;min-height:500px;display:flex;flex-direction:column;justify-content:flex-end;padding:0 8% 60px;overflow:hidden;">
    <div class="page-hero-bg" style="position:absolute;inset:0;background-size:cover;background-position:center;background-repeat:no-repeat;background-image:url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg');"></div>
    <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(26,18,9,0.82) 40%,rgba(26,18,9,0.3) 100%);"></div>
    <div style="position:relative;z-index:2;">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/experiences">Experiences</a>
            <span>/</span>
            <span class="current">Honeymoon</span>
        </div>
        <h1 class="page-hero-title">Your Honeymoon, <em>Your Way</em></h1>
        <p class="page-hero-sub">Romance under African skies. Luxury lodges, private beach dinners and unforgettable sunsets over the Indian Ocean.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-heart"></i> Romance & Privacy</div>
            <div class="page-hero-stat"><i class="fas fa-umbrella-beach"></i> Safari + Beach</div>
            <div class="page-hero-stat"><i class="fas fa-star"></i> Luxury Lodges</div>
        </div>
    </div>
</div>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <span class="sec-label">Honeymoon</span>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Why Tanzania for Your <em style="color:var(--gold);font-style:italic;">Honeymoon</em>?</h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Few destinations in the world can rival the romance of a Tanzanian honeymoon. Imagine waking up to the sounds of the African bush, sharing a sundowner cocktail as the sun sets over the Serengeti, then retreating to a luxury lodge with nothing but stars above you.</p>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;">Now add the pristine white sand beaches and turquoise waters of Zanzibar to the mix. Tanzania offers the ultimate honeymoon combination — adventure and relaxation, wildlife and beaches, thrill and tranquility — all in one trip.</p>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">The <em style="color:var(--gold);font-style:italic;">Safari + Beach</em> Combo</h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:30px;">The most popular honeymoon format combines 3–5 days on safari with 4–5 days on the beaches of Zanzibar. Here's how it works.</p>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-binoculars"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Days 1–4: Safari Adventure</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">Begin with 3–4 days on safari in the Serengeti, Ngorongoro or Tarangire. Stay in luxury lodges or tented camps with private plunge pools, outdoor showers and spectacular views. Morning and afternoon game drives with a private guide and vehicle.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-plane"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Day 4: Fly to Zanzibar</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">A short domestic flight takes you from the safari to the beach. Land in Stone Town and transfer to your beachfront resort. The contrast is immediate — from golden savanna to turquoise Indian Ocean.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-umbrella-beach"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Days 5–9: Zanzibar Beach Bliss</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">Spend 4–5 days on Zanzibar's northeast or northern beaches. Snorkel in crystal-clear water, explore Stone Town's historic alleys, visit a spice farm and simply relax on pristine white sand with the Indian Ocean at your feet.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:30px;">Romantic <em style="color:var(--gold);font-style:italic;">Experiences</em></h2>

        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin:30px 0;" class="romance-grid">
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-utensils" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Bush Breakfast</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">A private champagne breakfast set up in the middle of the savanna. Surrounded by wildlife and acacia trees, it's a dining experience unlike any other.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-cocktail" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Sundowner Cocktails</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Watch the sun set over the African plains with a hand-crafted cocktail in hand. Elevated sundowner spots with panoramic views included in every safari day.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-car" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Private Safari Vehicle</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Your own vehicle and guide throughout the safari. Stop when you want, stay as long as you like and enjoy total privacy for those special moments.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-spa" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Couples Spa</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Relax with a couples massage at your lodge or beach resort. African-inspired treatments using local ingredients — perfect after a morning game drive.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-moon" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Beach Dinner</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">A private dinner set on the beach with torches, candles and a personal chef. Fresh seafood, fine wine and the sound of gentle waves under the stars.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-binoculars" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Private Game Drive</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Early morning or late afternoon drives with just the two of you and your guide. The intimacy of a private vehicle makes every sighting more special.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Sample <em style="color:var(--gold);font-style:italic;">Honeymoon Package</em></h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:30px;">Here's a popular 9-day honeymoon itinerary that combines the best of safari and beach.</p>

        <div style="padding:30px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);border-left:4px solid var(--gold);">
            <h3 style="font-family:'Cormorant Garamond',serif;font-size:1.4rem;font-weight:700;color:var(--earth);margin-bottom:6px;">4-Day Safari + 5-Day Zanzibar Honeymoon</h3>
            <p style="font-size:0.85rem;color:var(--gold);font-weight:600;margin-bottom:18px;">From $4,200 per person</p>

            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:20px;" class="honeymoon-pkg-grid">
                <div>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.7;"><strong style="color:var(--earth);">Days 1–2:</strong> Arrive Kilimanjaro, transfer to Tarangire. Luxury lodge with pool. Afternoon and morning game drives.</p>
                </div>
                <div>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.7;"><strong style="color:var(--earth);">Days 3–4:</strong> Ngorongoro Crater full-day drive. Crater rim lodge with fireplace and views. Big Five guaranteed.</p>
                </div>
                <div>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.7;"><strong style="color:var(--earth);">Day 5:</strong> Fly Arusha to Zanzibar. Transfer to beachfront resort on the northeast coast. Sunset welcome dinner.</p>
                </div>
                <div>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.7;"><strong style="color:var(--earth);">Days 6–9:</strong> Beach relaxation, Stone Town tour, spice farm visit, snorkeling trip, private beach dinner. Depart.</p>
                </div>
            </div>

            <p style="font-size:0.8rem;color:var(--text-muted);line-height:1.6;border-top:1px solid #eee;padding-top:14px;"><strong style="color:var(--earth);">Includes:</strong> All accommodation, domestic flights, park fees, private guide and vehicle, meals on safari, airport transfers.</p>
        </div>
    </div>
</section>

<section style="padding:70px 8%;background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);text-align:center;">
    <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:700;color:var(--white);margin-bottom:12px;">Create My Honeymoon</h2>
    <p style="color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:550px;margin-left:auto;margin-right:auto;">Tell us your dream honeymoon. We'll design a personalized itinerary with the perfect blend of safari adventure and beach relaxation.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Honeymoon</a>
</section>
@endsection
