@extends('layouts.app')

@section('page-title', 'Tarangire Short Safari | 3-Day Elephant Encounter Tanzania')
@section('meta-description', 'Three days among Tarangire\'s giant elephant herds and ancient baobabs. A short, affordable safari perfect for tight schedules.')
@section('meta-keywords', 'Tarangire short safari, 3 day Tanzania safari, Tarangire elephants, budget safari Tanzania, baobab safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/tarangire-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tarangire Short Elephant Safari",
    "description": "Experience Tanzania's elephant capital with massive herds gathering along the Tarangire River during the dry season.",
    "url": "https://www.lauparadiseadventure.com/safaris/tarangire-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "950",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "validFrom": "2025-01-01"
    }
}
</script>
@endverbatim
@endsection

@section('extra-css')
<style>
.tes-content{padding:70px 8%;}
.tes-intro{max-width:800px;margin-bottom:50px;}
.tes-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.tes-intro h2 em{color:var(--gold);font-style:italic;}
.tes-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.tes-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.tes-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.tes-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.tes-card-img{position:relative;height:240px;overflow:hidden;}
.tes-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.tes-card:hover .tes-card-img img{transform:scale(1.06);}
.tes-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.tes-body{padding:24px;}
.tes-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.tes-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.tes-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.tes-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.tes-cta{background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;}
.tes-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.tes-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.tes-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.tes-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Tarangire Short Safari</span>
        </div>
        <h1 class="page-hero-title">Tarangire Elephant <em>Encounter</em></h1>
        <p class="page-hero-sub">Three days among giants — record elephant herds and ancient baobabs, just two hours from Arusha.</p>
    </div>
</div>

<section class="tes-content">
    <div class="tes-intro">
        <span class="sec-label">Short Escape</span>
        <h2>Maximum Wildlife, <em>Minimum</em> Time</h2>
        <p>Short on time? Tarangire National Park delivers astonishing wildlife density just 120 kilometers from Arusha. In the dry season, thousands of elephants converge on the Tarangire River — herds of up to 300 strong, the largest concentrations in northern Tanzania.</p>
        <p>This compact three-day itinerary fits two full game-drive sessions around a relaxed overnight near the park, proving that a short safari can still be unforgettable. Perfect as a standalone escape or a pre-Kilimanjaro warm-up.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Three Days Among <em>Giants</em></h2>
    </div>

    <div class="tes-cards">
        <div class="tes-card">
            <div class="tes-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg" alt="Day 1 - Arusha to Tarangire" loading="lazy">
                <span class="tes-badge">Day 1</span>
            </div>
            <div class="tes-body">
                <div class="tes-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Arusha - Tarangire</span>
                </div>
                <h3 class="tes-title">Afternoon Arrival Drive</h3>
                <p class="tes-desc">Morning transfer to Tarangire and an afternoon game drive along the river as elephant families come down to drink.</p>
            </div>
        </div>

        <div class="tes-card">
            <div class="tes-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Day 2 - Full Day Tarangire" loading="lazy">
                <span class="tes-badge">Full Day</span>
            </div>
            <div class="tes-body">
                <div class="tes-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire River &amp; Silale Swamp</span>
                </div>
                <h3 class="tes-title">Full Day Among the Herds</h3>
                <p class="tes-desc">Sunrise to sunset exploring the river circuit, Silale Swamp and the great baobab stands — lions often rest in their branches.</p>
            </div>
        </div>

        <div class="tes-card">
            <div class="tes-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 3 - Morning Drive and Return" loading="lazy">
                <span class="tes-badge">Finale</span>
            </div>
            <div class="tes-body">
                <div class="tes-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire - Arusha</span>
                </div>
                <h3 class="tes-title">Final Morning &amp; Return</h3>
                <p class="tes-desc">One last dawn drive through the acacia woodland before returning to Arusha by early afternoon.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Small package, complete experience.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text"><h4>4x4 Vehicle</h4><p>Pop-up roof Land Cruiser with expert driver-guide.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Lodge Stay</h4><p>Two nights near the park gate with pool and savanna views.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>Park Fees</h4><p>All Tarangire entry fees included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>Meals</h4><p>Breakfast, lunch and dinner as per itinerary.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text"><h4>Drinking Water</h4><p>Bottled water throughout the safari.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-binoculars"></i></div>
            <div class="included-text"><h4>Binoculars On Board</h4><p>Shared pair in every vehicle for close-up viewing.</p></div>
        </div>
    </div>
</section>

<section class="tes-cta">
    <h2>Short on Time? <em style="color:var(--gold-light);">Not on Wildlife.</em></h2>
    <p>Add this three-day escape before or after Kilimanjaro, Zanzibar or a business trip to Arusha.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book My Escape</a>
</section>
@endsection
