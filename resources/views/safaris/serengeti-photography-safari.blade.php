@extends('layouts.app')

@section('page-title', 'Serengeti Photography Safari | 7-Day Wildlife Photo Tour')
@section('meta-description', "Seven days dedicated to photographing the Serengeti's wildlife. Early drives, extended field time and a photography expert guide.")
@section('meta-keywords', 'Serengeti photography safari, wildlife photography Tanzania, photo safari Africa, big cat photography, Serengeti photo tour')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/serengeti-photography-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Serengeti Photography Safari",
    "description": "Seven days dedicated to photographing the Serengeti's wildlife with early drives, extended time in the field and a photography expert guide.",
    "url": "https://www.lauparadiseadventure.com/safaris/serengeti-photography-safari",
    "touristType": "Photography",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "3500",
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
.sps-content{padding:70px 8%;}
.sps-intro{max-width:800px;margin-bottom:50px;}
.sps-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.sps-intro h2 em{color:var(--gold);font-style:italic;}
.sps-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.sps-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.sps-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.sps-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.sps-card-img{position:relative;height:240px;overflow:hidden;}
.sps-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.sps-card:hover .sps-card-img img{transform:scale(1.06);}
.sps-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.sps-body{padding:24px;}
.sps-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.sps-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.sps-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.sps-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.sps-cta{background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;}
.sps-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.sps-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.sps-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.sps-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Serengeti Photography Safari</span>
        </div>
        <h1 class="page-hero-title">Serengeti <em>Photography</em> Safari</h1>
        <p class="page-hero-sub">Seven golden hours a day in the world's greatest wildlife theater — built by photographers, for photographers.</p>
    </div>
</div>

<section class="sps-content">
    <div class="sps-intro">
            <span class="sec-label">Photo Workshop</span>
            <h2>Chase the Light, Not the <em>Clock</em></h2>
            <p>Ordinary safaris rush between sightings. This one lingers. Days start before dawn to catch predators in first light and end after sunset silhouettes against acacia skies. Your vehicle carries bean bags, charging stations and room for long lenses — and your guide doubles as a spotter trained for photographic positioning.</p>
            <p>We prioritize time over tick-lists: an hour at a leopard's tree while she rearranges her kill beats twenty minutes with ten species. Evenings bring optional image review sessions where you can refine technique for the next day's shoot.</p>
        </div>

        <div style="margin-bottom:30px;">
            <span class="sec-label">Your Itinerary</span>
            <h2 class="sec-title">Seven Days of <em>Framed</em> Moments</h2>
        </div>

        <div class="sps-cards">
            <div class="sps-card">
                <div class="sps-card-img">
                    <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Days 1-2 - Arrival and Seronera" loading="lazy">
                    <span class="sps-badge">Days 1-2</span>
                </div>
                <div class="sps-body">
                    <div class="sps-meta">
                        <span><i class="fas fa-camera"></i> Central Serengeti</span>
                    </div>
                    <h3 class="sps-title">Seronera Golden Hours</h3>
                    <p class="sps-desc">Arrive for an afternoon session, then two full days of dawn-and-dusk shoots around Seronera's leopard trees and lion kopjes.</p>
                </div>
            </div>

            <div class="sps-card">
                <div class="sps-card-img">
                    <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Days 3-5 - Cheetah Plains" loading="lazy">
                    <span class="sps-badge">Days 3-5</span>
                </div>
                <div class="sps-body">
                    <div class="sps-meta">
                        <span><i class="fas fa-camera"></i> Eastern Plains &amp; Kopjes</span>
                    </div>
                    <h3 class="sps-title">Cheetah Country</h3>
                    <p class="sps-desc">Three days in the east where cheetah hunt on open termite-mound vantages — clean backgrounds and action sequences.</p>
                </div>
            </div>

            <div class="sps-card">
                <div class="sps-card-img">
                    <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Days 6-7 - Retima Pools and Farewell" loading="lazy">
                    <span class="sps-badge">Finale</span>
                </div>
                <div class="sps-body">
                    <div class="sps-meta">
                        <span><i class="fas fa-camera"></i> Retima Hippo Pool - Return</span>
                    </div>
                    <h3 class="sps-title">Hippos, Birds &amp; Farewell Frames</h3>
                    <p class="sps-desc">Final sessions at Retima pools for hippo conflict shots and weaver colonies before returning to Arusha.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">A mobile base camp for image-makers.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-camera"></i></div>
            <div class="included-text"><h4>Photo Vehicle Setup</h4><p>Bean bags, lens rests and one row per two shooters.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-bolt"></i></div>
            <div class="included-text"><h4>In-Vehicle Charging</h4><p>240V inverters keep batteries full all day.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text"><h4>Photo-Trained Guide</h4><p>Positioning, angles and patience built into every drive.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Six Nights In-Park</h4><p>Lodges positioned for earliest gate access.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Park Fees</h4><p>Serengeti fees fully covered.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-laptop"></i></div>
            <div class="included-text"><h4>Evening Reviews</h4><p>Optional edit-and-feedback sessions each night.</p></div>
        </div>
    </div>
</section>

<section class="sps-cta">
    <h2>Build Your <em style="color:var(--gold-light);">Portfolio</em> in the Serengeti</h2>
    <p>Tell us your gear list and goals — we will match the season and camps to your shot list.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Photo Safari</a>
</section>
@endsection
