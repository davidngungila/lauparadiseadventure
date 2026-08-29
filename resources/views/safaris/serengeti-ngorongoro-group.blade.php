@extends('layouts.app')

@section('page-title', 'Serengeti & Ngorongoro Group Safari | 5-Day Shared Adventure')
@section('meta-description', 'Five days covering two of Tanzania\'s top parks with fellow travelers. Shared Land Cruiser, group bush dinners under the stars.')
@section('meta-keywords', 'group safari Tanzania, Serengeti group tour, Ngorongoro group safari, join a safari group, affordable Serengeti trip')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/serengeti-ngorongoro-group')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Serengeti & Ngorongoro Group Safari",
    "description": "Five days covering two of Tanzania's top parks. Share a Land Cruiser with new friends and enjoy group bush dinners under the stars.",
    "url": "https://www.lauparadiseadventure.com/safaris/serengeti-ngorongoro-group",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "1600",
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
.sng-content{padding:70px 8%;}
.sng-intro{max-width:800px;margin-bottom:50px;}
.sng-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.sng-intro h2 em{color:var(--gold);font-style:italic;}
.sng-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.sng-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.sng-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.sng-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.sng-card-img{position:relative;height:240px;overflow:hidden;}
.sng-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.sng-card:hover .sng-card-img img{transform:scale(1.06);}
.sng-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.sng-body{padding:24px;}
.sng-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.sng-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.sng-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.sng-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.sng-cta{background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;}
.sng-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.sng-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.sng-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.sng-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
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
            <span class="current">Serengeti &amp; Ngorongoro Group Safari</span>
        </div>
        <h1 class="page-hero-title">Serengeti &amp; Ngorongoro <em>Group</em> Safari</h1>
        <p class="page-hero-sub">Twin icons, one group, shared costs — five days through Tanzania's two greatest parks.</p>
    </div>
</div>

<section class="sng-content">
    <div class="sng-intro">
        <span class="sec-label">Group Adventure</span>
        <h2>Share the Ride, <em>Split</em> the Cost</h2>
        <p>Tanzania's two headline parks in one sociable itinerary. Join up to six travelers per Land Cruiser and watch the per-person price drop while the sightings stack up: the Serengeti's endless plains and predator action, then the Ngorongoro Crater's natural amphitheater of 25,000 animals.</p>
        <p>Evenings are half the fun — swapping sighting stories over group dinners, some served as bush meals under an outrageous canopy of stars. Departures run weekly year-round; solo travelers are especially welcome.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Five Shared <em>Days</em></h2>
    </div>

    <div class="sng-cards">
        <div class="sng-card">
            <div class="sng-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Day 1 - Tarangire Group Drive" loading="lazy">
                <span class="sng-badge">Day 1</span>
            </div>
            <div class="sng-body">
                <div class="sng-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                </div>
                <h3 class="sng-title">First Group Game Drive</h3>
                <p class="sng-desc">Meet your fellow travelers in Arusha and set off on a Tarangire game drive among elephants and baobabs to start the trip.</p>
            </div>
        </div>

        <div class="sng-card">
            <div class="sng-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Day 2 - Central Serengeti" loading="lazy">
                <span class="sng-badge">Day 2</span>
            </div>
            <div class="sng-body">
                <div class="sng-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Central Serengeti</span>
                </div>
                <h3 class="sng-title">Into the Serengeti</h3>
                <p class="sng-desc">Drive in via the Ngorongoro highlands and reach the Seronera valley for your first Serengeti evening among the big cats.</p>
            </div>
        </div>

        <div class="sng-card">
            <div class="sng-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 3 - Herds and Bush Dinner" loading="lazy">
                <span class="sng-badge">Day 3</span>
            </div>
            <div class="sng-body">
                <div class="sng-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti - Ngorongoro Rim</span>
                </div>
                <h3 class="sng-title">Herds, Then the Rim</h3>
                <p class="sng-desc">A full Serengeti day among the herds, then descend to a crater-rim lodge for a group bush dinner under the stars.</p>
            </div>
        </div>

        <div class="sng-card">
            <div class="sng-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 4 - Ngorongoro Crater" loading="lazy">
                <span class="sng-badge">Day 4</span>
            </div>
            <div class="sng-body">
                <div class="sng-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro Crater</span>
                </div>
                <h3 class="sng-title">Crater Floor Spectacular</h3>
                <p class="sng-desc">A full-day descent to the crater floor to hunt rhino, lions and flamingo lakes inside the vast natural amphitheater.</p>
            </div>
        </div>

        <div class="sng-card">
            <div class="sng-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 5 - Return to Arusha" loading="lazy">
                <span class="sng-badge">Day 5</span>
            </div>
            <div class="sng-body">
                <div class="sng-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Arusha</span>
                </div>
                <h3 class="sng-title">Farewell &amp; Return</h3>
                <p class="sng-desc">A final morning on the crater rim before the group drives back to Arusha, swapping contact details for the journey home.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Small groups, big value.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-users"></i></div>
            <div class="included-text"><h4>Shared 4x4</h4><p>Guaranteed window seat in a max-seven-seat cruiser.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text"><h4>Expert Guide</h4><p>One professional guide for the whole group journey.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Lodges &amp; Camps</h4><p>Four nights in twin-share comfort, single option available.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Park Fees</h4><p>Serengeti and Ngorongoro entry fees included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-fire"></i></div>
            <div class="included-text"><h4>Bush Dinner</h4><p>One memorable group dinner under the stars.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text"><h4>Drinking Water</h4><p>Bottled water throughout.</p></div>
        </div>
    </div>
</section>

<section class="sng-cta">
    <h2>Join a <em style="color:var(--gold-light);">Departure</em> This Month</h2>
    <p>Weekly departures, solo-friendly, instant friends. Check the next scheduled date.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Ask for Dates</a>
</section>
@endsection
