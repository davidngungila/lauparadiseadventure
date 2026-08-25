@extends('layouts.app')

@section('page-title', 'Serengeti Private Safari | Exclusive Serengeti Explorer Tour')
@section('meta-description', 'Explore the vast Serengeti on a private 6-day safari. Your own guide and vehicle, from the central plains to the remote northern circuits.')
@section('meta-keywords', 'Serengeti private safari, exclusive Serengeti tour, private game drive Serengeti, luxury private safari Tanzania, Serengeti explorer')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/serengeti-private-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Serengeti Private Safari | Exclusive Serengeti Explorer Tour",
    "description": "Explore the vast Serengeti on a private 6-day safari. Your own guide and vehicle, from the central plains to the remote northern circuits.",
    "url": "https://www.lauparadiseadventure.com/safaris/serengeti-private-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "3200",
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
.spc-content { padding: 70px 8%; }
.spc-intro { max-width: 800px; margin-bottom: 50px; }
.spc-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.spc-intro h2 em { color: var(--gold); font-style: italic; }
.spc-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }
.spc-highlights { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 60px; }
.spc-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-md); transition: 0.3s;
}
.spc-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.spc-card-img { position: relative; height: 240px; overflow: hidden; }
.spc-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.spc-card:hover .spc-card-img img { transform: scale(1.06); }
.spc-card-badge {
    position: absolute; top: 14px; left: 14px;
    background: var(--gold); color: var(--dark);
    padding: 4px 14px; border-radius: 20px;
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
}
.spc-card-body { padding: 24px; }
.spc-card-meta { display: flex; gap: 14px; margin-bottom: 10px; flex-wrap: wrap; }
.spc-card-meta span { font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 5px; }
.spc-card-title {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px; line-height: 1.3;
}
.spc-card-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px; }
.included-section { background: var(--smoke); padding: 70px 8%; }
.included-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 40px; }
.included-item {
    display: flex; align-items: center; gap: 14px;
    background: var(--white); padding: 20px; border-radius: var(--radius-md);
    box-shadow: var(--shadow-sm); transition: 0.2s;
}
.included-item:hover { box-shadow: var(--shadow-md); transform: translateY(-2px); }
.included-icon {
    width: 48px; height: 48px; border-radius: 12px;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    font-size: 1.1rem; color: var(--gold); flex-shrink: 0;
}
.included-text h4 { font-weight: 600; font-size: 0.9rem; color: var(--text); margin-bottom: 2px; }
.included-text p { font-size: 0.78rem; color: var(--text-muted); line-height: 1.5; }
.spc-cta {
    background: linear-gradient(135deg, var(--dark) 0%, var(--earth) 100%);
    padding: 70px 8%; text-align: center;
}
.spc-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.spc-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 520px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .spc-highlights { grid-template-columns: repeat(2, 1fr); }
    .included-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .spc-highlights { grid-template-columns: 1fr; }
    .included-grid { grid-template-columns: 1fr; }
}
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
            <span class="current">Serengeti Private Safari</span>
        </div>
        <h1 class="page-hero-title">Serengeti Private <em>Explorer</em> Safari</h1>
        <p class="page-hero-sub">Six days across the endless plains in your own vehicle. From central Seronera to the remote north — the Serengeti's secrets, exclusively yours.</p>
    </div>
</div>

<section class="spc-content">
    <div class="spc-intro">
        <span class="sec-label">Private Safari</span>
        <h2>Six Days of <em>Unlimited</em> Exploration</h2>
        <p>The Serengeti is Tanzania's greatest wilderness — nearly 15,000 square kilometers of savanna, riverine forest and granite kopjes teeming with wildlife. On this private safari you explore it with your own expert guide and exclusive 4x4, following the animals rather than a fixed route.</p>
        <p>From the predator-rich Seronera valley to the dramatic Mara River crossings in the north, every day is shaped around your interests. Want to skip the crowds? Your guide knows the quiet corners. Chasing a specific sighting? You have the flexibility to stay as long as the action lasts.</p>
    </div>

    <div class="private-packages-label" style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Six Days in the <em>Serengeti</em></h2>
    </div>

    <div class="spc-highlights">
        <div class="spc-card">
            <div class="spc-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Days 1-2 - Central Serengeti" loading="lazy">
                <span class="spc-card-badge">Private</span>
            </div>
            <div class="spc-card-body">
                <div class="spc-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Days 1-2</span>
                    <span><i class="fas fa-map-marker-alt"></i> Central Serengeti</span>
                </div>
                <h3 class="spc-card-title">Seronera &amp; Central Plains</h3>
                <p class="spc-card-desc">Travel from Arusha through Ngorongoro highlands into central Serengeti. Full days tracking big cats around Seronera — lion, leopard and cheetah country.</p>
            </div>
        </div>

        <div class="spc-card">
            <div class="spc-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Days 3-4 - Northern Serengeti" loading="lazy">
                <span class="spc-card-badge">Migration</span>
            </div>
            <div class="spc-card-body">
                <div class="spc-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Days 3-4</span>
                    <span><i class="fas fa-map-marker-alt"></i> Northern Serengeti</span>
                </div>
                <h3 class="spc-card-title">Northern Serengeti &amp; Mara River</h3>
                <p class="spc-card-desc">Journey to the remote north toward the Mara River, where the Great Migration herds gather (seasonal). Dramatic crossings and fewer vehicles in this wild frontier.</p>
            </div>
        </div>

        <div class="spc-card">
            <div class="spc-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Days 5-6 - Return via Ngorongoro" loading="lazy">
                <span class="spc-card-badge">Finale</span>
            </div>
            <div class="spc-card-body">
                <div class="spc-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Days 5-6</span>
                    <span><i class="fas fa-map-marker-alt"></i> Return to Arusha</span>
                </div>
                <h3 class="spc-card-title">Final Drives &amp; Return</h3>
                <p class="spc-card-desc">A final morning game drive and leisurely return south with an optional stop at Olduvai Gorge or a Maasai village before arriving back in Arusha.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Private</em> Serengeti Safari</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Six days of seamless, exclusive adventure.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Private Vehicle</h4>
                <p>Exclusive 4x4 Land Cruiser with pop-up roof for all six days.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text">
                <h4>Dedicated Guide</h4>
                <p>Your own expert driver-guide who knows the Serengeti intimately.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Camps &amp; Lodges</h4>
                <p>Five nights in handpicked tented camps and lodges inside the park.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text">
                <h4>Park Fees</h4>
                <p>All Serengeti park fees and conservation contributions included.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining plus picnic lunches during long game drives.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text">
                <h4>Bottled Water</h4>
                <p>Unlimited drinking water throughout your journey.</p>
            </div>
        </div>
    </div>
</section>

<section class="spc-cta">
    <h2>Design My <em style="color:var(--gold-light);">Private Serengeti</em> Journey</h2>
    <p>Tell us when you want to travel and what you dream of seeing. We will build your exclusive Serengeti itinerary.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Private Safari</a>
</section>
@endsection
