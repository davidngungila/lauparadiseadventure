@extends('layouts.app')

@section('page-title', 'Ngorongoro Crater Safari | 4-Day Budget Group Safari Tanzania')
@section('meta-description', 'Descend into the Ngorongoro Crater on a 4-day group safari. Over 25,000 animals, Big Five sightings and an affordable small-group adventure.')
@section('meta-keywords', 'Ngorongoro Crater safari, budget Ngorongoro tour, crater group safari, affordable Tanzania safari, Ngorongoro day trip')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/ngorongoro-crater-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Ngorongoro Crater Safari",
    "description": "Descend into the world's largest intact volcanic crater, home to over 25,000 animals including the rare black rhino.",
    "url": "https://www.lauparadiseadventure.com/safaris/ngorongoro-crater-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "1200",
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
.ncs-content{padding:70px 8%;}
.ncs-intro{max-width:800px;margin-bottom:50px;}
.ncs-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.ncs-intro h2 em{color:var(--gold);font-style:italic;}
.ncs-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.ncs-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.ncs-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.ncs-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.ncs-card-img{position:relative;height:240px;overflow:hidden;}
.ncs-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.ncs-card:hover .ncs-card-img img{transform:scale(1.06);}
.ncs-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.ncs-body{padding:24px;}
.ncs-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.ncs-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.ncs-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.ncs-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.ncs-cta{background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;}
.ncs-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.ncs-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.ncs-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.ncs-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Ngorongoro Crater Safari</span>
        </div>
        <h1 class="page-hero-title">Ngorongoro Crater <em>Safari</em></h1>
        <p class="page-hero-sub">Four days exploring the world's largest intact volcanic caldera — over 25,000 animals in one natural amphitheater.</p>
    </div>
</div>

<section class="ncs-content">
    <div class="ncs-intro">
        <span class="sec-label">Budget Friendly</span>
        <h2>Africa's Eden, Within <em>Reach</em></h2>
        <p>The Ngorongoro Crater is one of Africa's Seven Natural Wonders — a collapsed volcano harboring around 25,000 large mammals, including black rhino, lions, elephants and flamingo-covered soda lakes. This affordable group itinerary gives you two crater descents plus time on the forested rim.</p>
        <p>Traveling in a shared 4x4 keeps costs low without cutting corners on wildlife time. Expect rhino at the Gorigor Swamp, hippos at the pools and possibly a kill scene near the Lerai Forest — all with a guide who knows where the action is.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Day by Day on the <em>Crater</em> Safari</h2>
    </div>

    <div class="ncs-cards">
        <div class="ncs-card">
            <div class="ncs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 1 - Arusha to Ngorongoro" loading="lazy">
                <span class="ncs-badge">Day 1</span>
            </div>
            <div class="ncs-body">
                <div class="ncs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Arusha - Ngorongoro Rim</span>
                </div>
                <h3 class="ncs-title">To the Crater Highlands</h3>
                <p class="ncs-desc">Meet your group in Arusha and climb through Maasai country to the Ngorongoro rim. Sunset views over the caldera from your lodge.</p>
            </div>
        </div>

        <div class="ncs-card">
            <div class="ncs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 2 - Full Day Crater Game Drive" loading="lazy">
                <span class="ncs-badge">Day 2</span>
            </div>
            <div class="ncs-body">
                <div class="ncs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Crater Floor</span>
                </div>
                <h3 class="ncs-title">First Crater Descent</h3>
                <p class="ncs-desc">A full day on the crater floor: rhino at the swamp, lion prides, hippo pools and a picnic lunch beside the Lerai Forest.</p>
            </div>
        </div>

        <div class="ncs-card">
            <div class="ncs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 3 - Crater Highlands" loading="lazy">
                <span class="ncs-badge">Day 3</span>
            </div>
            <div class="ncs-body">
                <div class="ncs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Crater Highlands</span>
                </div>
                <h3 class="ncs-title">Highlands &amp; Maasai</h3>
                <p class="ncs-desc">Optional second crater descent or a Maasai boma visit across the highlands, meeting the semi-nomadic herders and their livestock.</p>
            </div>
        </div>

        <div class="ncs-card">
            <div class="ncs-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 4 - Return to Arusha" loading="lazy">
                <span class="ncs-badge">Day 4</span>
            </div>
            <div class="ncs-body">
                <div class="ncs-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro - Arusha</span>
                </div>
                <h3 class="ncs-title">Departure Day</h3>
                <p class="ncs-desc">A final crater-rim game drive before the scenic drive back to Arusha, with drop-off at your hotel or the airport.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Great value, zero hidden costs.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text"><h4>Shared 4x4</h4><p>Safari Land Cruiser with pop-up roof, maximum seven guests.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text"><h4>Expert Guide</h4><p>Professional driver-guide with deep crater knowledge.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Rim Accommodation</h4><p>Three nights' lodging on the crater rim or nearby highlands.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Fees</h4><p>Park entry and crater descent fees included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>Meals</h4><p>Full board plus picnic lunch on game-drive days.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text"><h4>Drinking Water</h4><p>Bottled water throughout the trip.</p></div>
        </div>
    </div>
</section>

<section class="ncs-cta">
    <h2>Join the Next <em style="color:var(--gold-light);">Crater</em> Departure</h2>
    <p>Dates are flexible for private groups of four or more. Tell us when you want to travel.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book This Safari</a>
</section>
@endsection
