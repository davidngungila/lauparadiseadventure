@extends('layouts.app')

@section('page-title', 'Serengeti Big Five Safari | 5-Day Premium Wildlife Tour')
@section('meta-description', 'Five days of premium wildlife viewing through the Serengeti plains tracking lion, leopard, elephant, buffalo and rhino with expert guides.')
@section('meta-keywords', 'Serengeti Big Five safari, Serengeti wildlife tour, big cat safari Tanzania, 5 day Serengeti safari, premium Serengeti tour')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/serengeti-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Serengeti Big Five Safari",
    "description": "Five days of premium wildlife viewing through the Serengeti plains with expert guides and luxury lodge accommodation.",
    "url": "https://www.lauparadiseadventure.com/safaris/serengeti-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2800",
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
.sbf-content{padding:70px 8%;}
.sbf-intro{max-width:800px;margin-bottom:50px;}
.sbf-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.sbf-intro h2 em{color:var(--gold);font-style:italic;}
.sbf-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.sbf-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.sbf-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.sbf-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.sbf-card-img{position:relative;height:240px;overflow:hidden;}
.sbf-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.sbf-card:hover .sbf-card-img img{transform:scale(1.06);}
.sbf-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.sbf-body{padding:24px;}
.sbf-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.sbf-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.sbf-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.sbf-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.sbf-cta{background:linear-gradient(135deg,var(--dark) 0%,var(--earth) 100%);padding:70px 8%;text-align:center;}
.sbf-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.sbf-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.sbf-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.sbf-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Serengeti Big Five Safari</span>
        </div>
        <h1 class="page-hero-title">Serengeti Big Five <em>Safari</em></h1>
        <p class="page-hero-sub">Five days tracking lion, leopard, elephant, buffalo and rhino across the endless Serengeti plains.</p>
    </div>
</div>

<section class="sbf-content">
    <div class="sbf-intro">
        <span class="sec-label">Best Seller</span>
        <h2>The Quest for the <em>Big Five</em></h2>
        <p>The Serengeti hosts one of Africa's densest populations of the legendary Big Five. This five-day premium itinerary dedicates full days to serious wildlife viewing in the predator-rich Seronera valley and the lesser-visited eastern plains, staying in comfortable lodges inside the park.</p>
        <p>Your expert guide reads the bush like a book — following fresh tracks, radio chatter and vulture activity to put you in the right place for lion kills, leopard sightings and massive elephant herds. Early departures and extended drives maximize your hours in the field.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Five Days of <em>World-Class</em> Game Viewing</h2>
    </div>

    <div class="sbf-cards">
        <div class="sbf-card">
            <div class="sbf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Day 1 - Tarangire Arrival" loading="lazy">
                <span class="sbf-badge">Day 1</span>
            </div>
            <div class="sbf-body">
                <div class="sbf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire National Park</span>
                </div>
                <h3 class="sbf-title">Tarangire Arrival</h3>
                <p class="sbf-desc">Afternoon game drive through Tarangire's baobab country where elephant herds and buffalo gather at the river, before heading toward the Serengeti.</p>
            </div>
        </div>

        <div class="sbf-card">
            <div class="sbf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 2 - Central Serengeti Big Cats" loading="lazy">
                <span class="sbf-badge">Day 2</span>
            </div>
            <div class="sbf-body">
                <div class="sbf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Central Serengeti</span>
                </div>
                <h3 class="sbf-title">Central Plains Big Cats</h3>
                <p class="sbf-desc">A full day tracking leopard in the sausage trees and lion on the granitic kopjes of the central Serengeti's predator-rich core.</p>
            </div>
        </div>

        <div class="sbf-card">
            <div class="sbf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Day 3 - Seronera Valley" loading="lazy">
                <span class="sbf-badge">Day 3</span>
            </div>
            <div class="sbf-body">
                <div class="sbf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Seronera Valley</span>
                </div>
                <h3 class="sbf-title">Seronera Mornings</h3>
                <p class="sbf-desc">Sunrise departures around Seronera's riverine forest, seeking lion prides and cheetah atop the termite mounds before the day heats up.</p>
            </div>
        </div>

        <div class="sbf-card">
            <div class="sbf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Day 4 - Northern Serengeti Finale" loading="lazy">
                <span class="sbf-badge">Day 4</span>
            </div>
            <div class="sbf-body">
                <div class="sbf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Northern Serengeti</span>
                </div>
                <h3 class="sbf-title">Northern Finale Drives</h3>
                <p class="sbf-desc">Extended drives north through rolling hills and riverine country, following fresh tracks and vulture activity toward the quieter frontiers.</p>
            </div>
        </div>

        <div class="sbf-card">
            <div class="sbf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 5 - Ngorongoro Crater and Return" loading="lazy">
                <span class="sbf-badge">Day 5</span>
            </div>
            <div class="sbf-body">
                <div class="sbf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro Crater - Arusha</span>
                </div>
                <h3 class="sbf-title">Crater &amp; Return</h3>
                <p class="sbf-desc">Descend into the Ngorongoro Crater for black rhino on the forested rim and lion on the grassland floor, then return to Arusha.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Premium game time, seamless logistics.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text"><h4>4x4 Safari Vehicle</h4><p>Land Cruiser with pop-up roof and guaranteed window seat.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text"><h4>Expert Guide</h4><p>Big Five specialist driver-guide for all five days.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>In-Park Lodges</h4><p>Four nights in quality lodges or tented camps inside the park.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>Park Fees</h4><p>All Serengeti entry and conservation fees included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>All Meals</h4><p>Full-board dining with picnic lunches on drive days.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text"><h4>Drinking Water</h4><p>Unlimited bottled water throughout.</p></div>
        </div>
    </div>
</section>

<section class="sbf-cta">
    <h2>Ready to Meet the <em style="color:var(--gold-light);">Big Five?</em></h2>
    <p>Tell us your dates and we will match you with the best season for every member of the famous five.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Safari</a>
</section>
@endsection
