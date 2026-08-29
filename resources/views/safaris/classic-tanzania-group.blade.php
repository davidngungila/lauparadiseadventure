@extends('layouts.app')

@section('page-title', 'Classic Tanzania Group Safari | 7-Day Complete Circuit Tour')
@section('meta-description', "A seven-day group journey through Tarangire, Serengeti, Ngorongoro and Lake Manyara. The complete Tanzania circuit with a social twist.")
@section('meta-keywords', 'classic Tanzania safari, 7 day group safari, Tanzania circuit tour, four park safari, social safari Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/classic-tanzania-group')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Classic Tanzania Group Safari",
    "description": "A seven-day group journey through Tarangire, Serengeti, Ngorongoro and Lake Manyara. The complete Tanzania circuit with a social twist.",
    "url": "https://www.lauparadiseadventure.com/safaris/classic-tanzania-group",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2200",
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
.ctg-content{padding:70px 8%;}
.ctg-intro{max-width:800px;margin-bottom:50px;}
.ctg-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.ctg-intro h2 em{color:var(--gold);font-style:italic;}
.ctg-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.ctg-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.ctg-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.ctg-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.ctg-card-img{position:relative;height:240px;overflow:hidden;}
.ctg-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.ctg-card:hover .ctg-card-img img{transform:scale(1.06);}
.ctg-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.ctg-body{padding:24px;}
.ctg-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.ctg-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.ctg-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.ctg-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.ctg-cta{background:linear-gradient(135deg,var(--dark) 0%,var(--earth) 100%);padding:70px 8%;text-align:center;}
.ctg-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.ctg-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.ctg-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.ctg-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Classic Tanzania Group Safari</span>
        </div>
        <h1 class="page-hero-title">Classic Tanzania <em>Group</em> Safari</h1>
        <p class="page-hero-sub">Seven days, four legendary parks, one crew — the full northern circuit with new friends.</p>
    </div>
</div>

<section class="ctg-content">
    <div class="ctg-intro">
        <span class="sec-label">Complete Circuit</span>
        <h2>The Whole Northern <em>Circuit</em>, Together</h2>
        <p>Tanzania's classic route done properly and socially: Tarangire's baobabs and mega-herds, Lake Manyara's forested shoreline, two nights inside the Serengeti and a grand finale descending the Ngorongoro Crater. Four ecosystems, seven days, zero filler.</p>
        <p>Groups stay small — never more than seven per vehicle — so everyone gets a window seat and a say in the day's plan. Between parks you share meals and stories; by trip's end most groups are exchanging contacts before the airport gate.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Seven Days Around the <em>Circuit</em></h2>
    </div>

    <div class="ctg-cards">
        <div class="ctg-card">
            <div class="ctg-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 1 - Tarangire" loading="lazy">
                <span class="ctg-badge">Day 1</span>
            </div>
            <div class="ctg-body">
                <div class="ctg-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                </div>
                <h3 class="ctg-title">Baobabs &amp; Elephants</h3>
                <p class="ctg-desc">Open the circuit in Tarangire, meeting elephant megaherds beneath giant baobabs along the Tarangire River.</p>
            </div>
        </div>

        <div class="ctg-card">
            <div class="ctg-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 2 - Lake Manyara" loading="lazy">
                <span class="ctg-badge">Day 2</span>
            </div>
            <div class="ctg-body">
                <div class="ctg-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Lake Manyara</span>
                </div>
                <h3 class="ctg-title">Tree Lions &amp; Flamingos</h3>
                <p class="ctg-desc">Game drive through Manyara's groundwater forest looking for climbing lions and the pink flocks on the soda lake shore.</p>
            </div>
        </div>

        <div class="ctg-card">
            <div class="ctg-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 3 - Central Serengeti" loading="lazy">
                <span class="ctg-badge">Day 3</span>
            </div>
            <div class="ctg-body">
                <div class="ctg-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Central Serengeti</span>
                </div>
                <h3 class="ctg-title">Into the Endless Plains</h3>
                <p class="ctg-desc">Travel into central Serengeti for your first evening among the endless plains, scouting for big cats as the sun drops.</p>
            </div>
        </div>

        <div class="ctg-card">
            <div class="ctg-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 4 - Central Plains" loading="lazy">
                <span class="ctg-badge">Day 4</span>
            </div>
            <div class="ctg-body">
                <div class="ctg-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Seronera Valley</span>
                </div>
                <h3 class="ctg-title">Seronera Predator Capital</h3>
                <p class="ctg-desc">Full day around the Seronera Valley, the Serengeti's predator capital, tracking lions, leopards and the resident big cats.</p>
            </div>
        </div>

        <div class="ctg-card">
            <div class="ctg-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 5 - Northern Serengeti" loading="lazy">
                <span class="ctg-badge">Day 5</span>
            </div>
            <div class="ctg-body">
                <div class="ctg-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Northern Serengeti</span>
                </div>
                <h3 class="ctg-title">Chasing the Migration</h3>
                <p class="ctg-desc">Head north and west in search of the Great Migration herds, watching for wildebeest and zebra streaming across the plains.</p>
            </div>
        </div>

        <div class="ctg-card">
            <div class="ctg-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 6 - Ngorongoro Crater" loading="lazy">
                <span class="ctg-badge">Day 6</span>
            </div>
            <div class="ctg-body">
                <div class="ctg-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro Crater</span>
                </div>
                <h3 class="ctg-title">Crater Grand Descent</h3>
                <p class="ctg-desc">Descend 600 metres into Ngorongoro Crater for a full day among the Big Five in Africa's densest wildlife amphitheatre.</p>
            </div>
        </div>

        <div class="ctg-card">
            <div class="ctg-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 7 - Return to Arusha" loading="lazy">
                <span class="ctg-badge">Day 7</span>
            </div>
            <div class="ctg-body">
                <div class="ctg-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro - Arusha</span>
                </div>
                <h3 class="ctg-title">Crater Rim &amp; Goodbyes</h3>
                <p class="ctg-desc">Optional crater-rim morning drive before the scenic journey home to Arusha, sharing final stories with your new safari crew.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">The complete circuit, fully covered.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-users"></i></div>
            <div class="included-text"><h4>Shared 4x4</h4><p>Max-seven-seat Land Cruiser, window seat guaranteed.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text"><h4>Expert Guide</h4><p>One guide for the entire seven-day journey.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Six Nights</h4><p>Lodges and tented camps across all three park regions.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Park Fees</h4><p>Every entry fee on the circuit included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>All Meals</h4><p>Full board with picnic lunches on drive days.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text"><h4>Drinking Water</h4><p>Bottled water throughout the week.</p></div>
        </div>
    </div>
</section>

<section class="ctg-cta">
    <h2>Do the Circuit <em style="color:var(--gold-light);">Properly</em></h2>
    <p>Seven days, four parks, friendships included. Reserve your seat on the next departure.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Join the Circuit</a>
</section>
@endsection
