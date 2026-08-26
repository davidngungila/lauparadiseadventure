@extends('layouts.app')

@section('page-title', 'Great Migration Photography Safari | 10-Day Mara River Photo Tour')
@section('meta-description', 'Ten days following the Great Migration with a camera: dramatic river crossings, vast herds and predator interactions across Serengeti and Ngorongoro.')
@section('meta-keywords', 'migration photography safari, Mara River crossing photos, wildebeest photography, 10 day photo safari, Serengeti migration tour')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/migration-photography-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Great Migration Photography Safari",
    "description": "Ten days following the Great Migration with a focus on capturing the dramatic river crossings, vast herds and predator interactions on camera.",
    "url": "https://www.lauparadiseadventure.com/safaris/migration-photography-safari",
    "touristType": "Photography",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "5200",
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
.mps-content{padding:70px 8%;}
.mps-intro{max-width:800px;margin-bottom:50px;}
.mps-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.mps-intro h2 em{color:var(--gold);font-style:italic;}
.mps-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.mps-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.mps-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.mps-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.mps-card-img{position:relative;height:240px;overflow:hidden;}
.mps-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.mps-card:hover .mps-card-img img{transform:scale(1.06);}
.mps-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.mps-body{padding:24px;}
.mps-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.mps-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.mps-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.mps-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.mps-cta{background:linear-gradient(135deg,var(--dark) 0%,var(--earth) 100%);padding:70px 8%;text-align:center;}
.mps-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.mps-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.mps-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.mps-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Great Migration Photography Safari</span>
        </div>
        <h1 class="page-hero-title">Great Migration <em>Photography</em> Safari</h1>
        <p class="page-hero-sub">Ten days positioned for the shot of a lifetime: river crossings, predator drama and a million moving animals.</p>
    </div>
</div>

<section class="mps-content">
    <div class="mps-intro">
        <span class="sec-label">Signature Photo Journey</span>
        <h2>Waiting for the <em>Crossing</em></h2>
        <p>The Mara River crossing is wildlife photography's ultimate prize — thousands of wildebeest hurling themselves into crocodile waters in a thunder of dust and spray. It cannot be scheduled, only awaited. This ten-day journey stations you in the northern Serengeti for five full days of crossing season, maximizing your odds with dawn-to-dusk river vigils.</p>
        <p>The route bookends the drama: two days photographing Ngorongoro's compressed Big Five, then the long build through the central plains as the herds gather, before the main event and a relaxed finale among the predators that follow the migration.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Ten Days Built Around <em>River Crossings</em></h2>
    </div>

    <div class="mps-cards">
        <div class="mps-card">
            <div class="mps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Days 1-2 - Ngorongoro Crater" loading="lazy">
                <span class="mps-badge">Days 1-2</span>
            </div>
            <div class="mps-body">
                <div class="mps-meta">
                    <span><i class="fas fa-camera"></i> Ngorongoro Crater</span>
                </div>
                <h3 class="mps-title">Warm-Up on the Crater Floor</h3>
                <p class="mps-desc">Two days dialing in technique among rhino, black-maned lions and flamingo light on the soda lake.</p>
            </div>
        </div>

        <div class="mps-card">
            <div class="mps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Days 3-7 - Northern Serengeti River Vigils" loading="lazy">
                <span class="mps-badge">Main Event</span>
            </div>
            <div class="mps-body">
                <div class="mps-meta">
                    <span><i class="fas fa-camera"></i> Northern Serengeti - Mara River</span>
                </div>
                <h3 class="mps-title">Five Days at the River</h3>
                <p class="mps-desc">Full-day vigils at Kogatende's crossing points. When the herds mass, you are already in position — no rushing from camp.</p>
            </div>
        </div>

        <div class="mps-card">
            <div class="mps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Days 8-10 - Predators and Return" loading="lazy">
                <span class="mps-badge">Finale</span>
            </div>
            <div class="mps-body">
                <div class="mps-meta">
                    <span><i class="fas fa-camera"></i> Central Plains - Arusha</span>
                </div>
                <h3 class="mps-title">Predators &amp; Farewell Frames</h3>
                <p class="mps-desc">Follow lion prides and hyena clans shadowing the herds south, then return to Arusha via optional Olduvai stop.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Positioned for the shot, every single day.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-camera"></i></div>
            <div class="included-text"><h4>Photo Vehicle Setup</h4><p>Bean bags, gimbal mounts and open seating for angles.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-binoculars"></i></div>
            <div class="included-text"><h4>Crossing Spotters</h4><p>Radio network tracks herd movement between all our vehicles.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>River Camp Nights</h4><p>Nine nights including five near the Kogatende crossing points.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-bolt"></i></div>
            <div class="included-text"><h4>In-Vehicle Charging</h4><p>Inverters and spare battery packs on board.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Park Fees</h4><p>Serengeti and Ngorongoro fees included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>Field Meals</h4><p>Picnic breakfasts and lunches for full river days.</p></div>
        </div>
    </div>
</section>

<section class="mps-cta">
    <h2>Crossing Season Is <em style="color:var(--gold-light);">Limited</em></h2>
    <p>July to October only, and prime camps sell out early. Reserve your place by the river now.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Reserve My Spot</a>
</section>
@endsection
