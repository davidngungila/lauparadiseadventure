@extends('layouts.app')

@section('page-title', 'Serengeti Classic Safari | 5-Day Heart of the Serengeti')
@section('meta-description', 'A 5-day journey through the heart of the Serengeti. Big cat encounters, vast herds and unforgettable sunsets on the savannah.')
@section('meta-keywords', 'Serengeti classic safari, 5 day Serengeti tour, Tanzania safari package, Serengeti plains safari, big cat safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/serengeti-classic-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Serengeti Classic Safari",
    "description": "A 5-day journey through the heart of the Serengeti with big cat encounters, vast herds and unforgettable savannah sunsets.",
    "url": "https://www.lauparadiseadventure.com/safaris/serengeti-classic-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2400",
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
.scs-content{padding:70px 8%;}
.scs-intro{max-width:800px;margin-bottom:50px;}
.scs-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.scs-intro h2 em{color:var(--gold);font-style:italic;}
.scs-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.scs-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.scs-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.scs-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.scs-card-img{position:relative;height:240px;overflow:hidden;}
.scs-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.scs-card:hover .scs-card-img img{transform:scale(1.06);}
.scs-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.scs-body{padding:24px;}
.scs-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.scs-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.scs-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.scs-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.scs-cta{background:linear-gradient(135deg,var(--dark) 0%,var(--earth) 100%);padding:70px 8%;text-align:center;}
.scs-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.scs-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.scs-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.scs-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Serengeti Classic Safari</span>
        </div>
        <h1 class="page-hero-title">Serengeti Classic <em>Safari</em></h1>
        <p class="page-hero-sub">Five days in the endless plains — big cats, vast herds and sunsets that never end.</p>
    </div>
</div>

<section class="scs-content">
    <div class="scs-intro">
        <span class="sec-label">Classic Safari</span>
        <h2>The Serengeti, <em>Properly</em> Done</h2>
        <p>Some places live up to the legend. The Serengeti exceeds it. This classic five-day itinerary balances deep exploration of the central Seronera region with an optional crater finale, staying in handpicked lodges that put you inside the ecosystem rather than on its edge.</p>
        <p>Morning and afternoon drives follow the rhythm of the plains: predators at dawn, resting prides at midday, and the great herds moving like weather systems across the horizon. Sundowner stops are timed to the light, because here even the evenings are wildlife theater.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Five Days in the <em>Heart</em> of the Serengeti</h2>
    </div>

    <div class="scs-cards">
        <div class="scs-card">
            <div class="scs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Days 1-2 - Into the Serengeti" loading="lazy">
                <span class="scs-badge">Days 1-2</span>
            </div>
            <div class="scs-body">
                <div class="scs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Central Serengeti</span>
                </div>
                <h3 class="scs-title">Arrival &amp; Seronera Days</h3>
                <p class="scs-desc">Travel via the Ngorongoro highlands into the Seronera valley for two days of lion, leopard and elephant viewing.</p>
            </div>
        </div>

        <div class="scs-card">
            <div class="scs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 3 - Following the Herds" loading="lazy">
                <span class="scs-badge">Migration</span>
            </div>
            <div class="scs-body">
                <div class="scs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Migration Corridor</span>
                </div>
                <h3 class="scs-title">Following the Great Herds</h3>
                <p class="scs-desc">A flexible day positioned where the migration is — your guide tracks the herds' location for prime viewing.</p>
            </div>
        </div>

        <div class="scs-card">
            <div class="scs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Days 4-5 - Ngorongoro Crater and Return" loading="lazy">
                <span class="scs-badge">Crater</span>
            </div>
            <div class="scs-body">
                <div class="scs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro - Arusha</span>
                </div>
                <h3 class="scs-title">Crater Finale &amp; Return</h3>
                <p class="scs-desc">Descend into Ngorongoro for a final density-of-wildlife spectacular before returning to Arusha.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">The full classic experience.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text"><h4>4x4 Safari Vehicle</h4><p>Pop-up roof Land Cruiser throughout.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text"><h4>Expert Guide</h4><p>Professional driver-guide with migration-tracking skills.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Lodges &amp; Camps</h4><p>Four nights in quality in-park accommodation.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Park Fees</h4><p>Serengeti and Ngorongoro fees included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>All Meals</h4><p>Full board plus picnic lunches.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text"><h4>Drinking Water</h4><p>Bottled water every day.</p></div>
        </div>
    </div>
</section>

<section class="scs-cta">
    <h2>Experience the <em style="color:var(--gold-light);">Classic</em> Serengeti</h2>
    <p>The trip people dream about when they dream of Africa. Tell us your dates.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Start Planning</a>
</section>
@endsection
