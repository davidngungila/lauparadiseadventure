@extends('layouts.app')

@section('page-title', 'Ultimate Tanzania Grand Safari | 12-Day Complete Tanzania Tour')
@section('meta-description', 'Twelve days covering Serengeti, Ngorongoro, Tarangire, Lake Manyara and Zanzibar. The definitive curated Tanzania experience.')
@section('meta-keywords', 'Tanzania grand safari, 12 day Tanzania tour, complete Tanzania safari, safari and Zanzibar combo, multi-park Tanzania safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/ultimate-grand-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Ultimate Tanzania Grand Safari",
    "description": "Twelve days covering Serengeti, Ngorongoro, Tarangire, Lake Manyara and Zanzibar. Every detail curated for perfection.",
    "url": "https://www.lauparadiseadventure.com/safaris/ultimate-grand-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "5900",
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
.ugs-content{padding:70px 8%;}
.ugs-intro{max-width:800px;margin-bottom:50px;}
.ugs-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.ugs-intro h2 em{color:var(--gold);font-style:italic;}
.ugs-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.ugs-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.ugs-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.ugs-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.ugs-card-img{position:relative;height:240px;overflow:hidden;}
.ugs-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.ugs-card:hover .ugs-card-img img{transform:scale(1.06);}
.ugs-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.ugs-body{padding:24px;}
.ugs-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.ugs-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.ugs-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.ugs-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.ugs-cta{background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;}
.ugs-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.ugs-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.ugs-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.ugs-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Ultimate Grand Safari</span>
        </div>
        <h1 class="page-hero-title">Ultimate Tanzania <em>Grand</em> Safari</h1>
        <p class="page-hero-sub">Twelve days, five crown jewels: Tarangire, Manyara, Ngorongoro, Serengeti and Zanzibar — curated to perfection.</p>
    </div>
</div>

<section class="ugs-content">
    <div class="ugs-intro">
        <span class="sec-label">Premium Journey</span>
        <h2>All of Tanzania, <em>One</em> Journey</h2>
        <p>This is the definitive Tanzania itinerary. Twelve days sweep you from Tarangire's baobab country through Lake Manyara's groundwater forest, down into the Ngorongoro Crater and deep into the Serengeti — before a short flight delivers you to the white sands of Zanzibar.</p>
        <p>No compromise, no rush. Northern Tanzania's four great parks each get dedicated time, followed by three restorative days of Indian Ocean beach, snorkeling and Stone Town culture. One seamless journey designed by people who know every camp, guide and tide.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Twelve Curated <em>Days</em></h2>
    </div>

    <div class="ugs-cards">
        <div class="ugs-card">
            <div class="ugs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Days 1-4 - Tarangire, Manyara, Ngorongoro" loading="lazy">
                <span class="ugs-badge">Days 1-4</span>
            </div>
            <div class="ugs-body">
                <div class="ugs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire - Manyara - Ngorongoro</span>
                </div>
                <h3 class="ugs-title">Parks &amp; the Crater</h3>
                <p class="ugs-desc">Baobabs and elephant herds in Tarangire, tree-climbing lions in Manyara, then two crater-rim nights with a full-day descent into Ngorongoro.</p>
            </div>
        </div>

        <div class="ugs-card">
            <div class="ugs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Days 5-9 - Serengeti" loading="lazy">
                <span class="ugs-badge">Days 5-9</span>
            </div>
            <div class="ugs-body">
                <div class="ugs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                </div>
                <h3 class="ugs-title">Deep Serengeti Immersion</h3>
                <p class="ugs-desc">Five days across central and northern Serengeti following the migration, with optional balloon safari at dawn.</p>
            </div>
        </div>

        <div class="ugs-card">
            <div class="ugs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Days 10-12 - Zanzibar" loading="lazy">
                <span class="ugs-badge">Beach Finale</span>
            </div>
            <div class="ugs-body">
                <div class="ugs-meta">
                    <span><i class="fas fa-plane"></i> Fly to Zanzibar</span>
                </div>
                <h3 class="ugs-title">Zanzibar Island Bliss</h3>
                <p class="ugs-desc">Fly to the spice island for beach days, snorkeling reefs, a Stone Town wander and sunset dhow cruises.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Every detail handled, door to door.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text"><h4>Private 4x4</h4><p>Your own Land Cruiser and guide for all safari days.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-plane"></i></div>
            <div class="included-text"><h4>Serengeti-Zanzibar Flight</h4><p>Scenic bush flight connecting bush to beach.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Premium Stays</h4><p>Eleven nights in curated lodges, camps and beach resorts.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Fees</h4><p>Every park, conservation and crater fee included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>Most Meals</h4><p>Full board on safari, breakfast at the beach resort.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ship"></i></div>
            <div class="included-text"><h4>Zanzibar Activities</h4><p>Spice tour and snorkeling excursion included.</p></div>
        </div>
    </div>
</section>

<section class="ugs-cta">
    <h2>Tanzania, <em style="color:var(--gold-light);">Complete</em></h2>
    <p>This flagship itinerary books out months ahead. Reserve your dates early.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Reserve My Journey</a>
</section>
@endsection
