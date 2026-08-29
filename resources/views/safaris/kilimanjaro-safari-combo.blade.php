@extends('layouts.app')

@section('page-title', 'Kilimanjaro & Safari Combo | Tanzania Adventure Package')
@section('meta-description', "Conquer Africa's highest peak then celebrate with a wildlife safari. The ultimate two-in-one Tanzania adventure for thrill-seekers.")
@section('meta-keywords', 'Kilimanjaro safari combo, Tanzania adventure package, climb Kilimanjaro safari, Kili and safari, combined safari package')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/kilimanjaro-safari-combo')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Kilimanjaro & Safari Combo | Tanzania Adventure Package",
    "description": "Conquer Africa's highest peak then celebrate with a wildlife safari. The ultimate two-in-one Tanzania adventure for thrill-seekers.",
    "url": "https://www.lauparadiseadventure.com/safaris/kilimanjaro-safari-combo",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "4200",
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
.luxury-content { padding: 70px 8%; }
.luxury-intro { max-width: 800px; margin-bottom: 50px; }
.luxury-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.luxury-intro h2 em { color: var(--gold); font-style: italic; }
.luxury-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }
.luxury-packages { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 70px; }
.luxury-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-md); transition: 0.3s; border: 1px solid rgba(200,150,62,0.1);
}
.luxury-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.luxury-card-img { position: relative; height: 240px; overflow: hidden; }
.luxury-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.luxury-card:hover .luxury-card-img img { transform: scale(1.06); }
.luxury-card-badge {
    position: absolute; top: 14px; right: 14px;
    background: var(--gold); color: var(--dark);
    padding: 4px 14px; border-radius: 20px;
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
}
.luxury-card-body { padding: 24px; }
.luxury-card-meta { display: flex; gap: 14px; margin-bottom: 10px; }
.luxury-card-meta span { font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 5px; }
.luxury-card-title {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px; line-height: 1.3;
}
.luxury-card-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px; }
.luxury-card-footer {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid #f0ebe1; padding-top: 16px;
}
.luxury-card-price { font-family: 'Cormorant Garamond', serif; }
.luxury-card-price small { font-size: 0.72rem; color: var(--text-muted); font-family: 'DM Sans', sans-serif; }
.luxury-card-price strong { font-size: 1.4rem; color: var(--gold); }
.luxury-card-price em { font-size: 0.75rem; color: var(--text-muted); font-style: normal; }
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
.luxury-cta {
    background: linear-gradient(135deg, var(--dark) 0%, var(--earth) 100%);
    padding: 70px 8%; text-align: center;
}
.luxury-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.luxury-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 520px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .luxury-packages { grid-template-columns: repeat(2, 1fr); }
    .included-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .luxury-packages { grid-template-columns: 1fr; }
    .included-grid { grid-template-columns: 1fr; }
}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Kilimanjaro & Safari Combo</span>
        </div>
        <h1 class="page-hero-title">Kilimanjaro & <em>Safari</em> Combo</h1>
        <p class="page-hero-sub">Conquer Africa's highest peak then celebrate with a wildlife safari. The ultimate two-in-one Tanzania adventure for thrill-seekers.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Adventure Combo</span>
        <h2>Summit <em>Kilimanjaro</em>, Then Safari the Plains</h2>
        <p>Why choose between climbing and safari when you can do both? This 10-day adventure takes you up the Lemosho Route on Mount Kilimanjaro, then rewards your summit success with a 3-day wildlife safari in the Serengeti and Ngorongoro Crater.</p>
        <p>Experience the thrill of standing on Africa's rooftop at 5,895 metres, then descend to the savanna for Big Five encounters. The ultimate two-in-one Tanzania experience.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp" alt="Day 1 - Rainforest to Mti Mkubwa" loading="lazy">
                <span class="luxury-card-badge">Challenge</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1</span>
                </div>
                <h3 class="luxury-card-title">Rainforest to Mti Mkubwa</h3>
                <p class="luxury-card-desc">Drive to Londorossi Gate and register for the climb, then trek through dense montane rainforest to Mti Mkubwa Camp, with black-and-white colobus monkeys calling in the canopy overhead.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 2 - Shira Plateau Moorland" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 2</span>
                </div>
                <h3 class="luxury-card-title">Into the Moorland</h3>
                <p class="luxury-card-desc">Leave the trees behind and climb onto the Shira Plateau, crossing rolling heath and moorland dotted with giant lobelias and sweeping views over the western rift.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 3 - Lava Tower Acclimatisation" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 3</span>
                </div>
                <h3 class="luxury-card-title">Climb High, Sleep Low</h3>
                <p class="luxury-card-desc">Trek east across the plateau to the towering Lava Tower at 4,600 metres, acclimatising on the high trail before descending to the lush, sheltered Barranco Camp.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp" alt="Day 4 - Barranco Wall" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 4</span>
                </div>
                <h3 class="luxury-card-title">Scaling the Barranco Wall</h3>
                <p class="luxury-card-desc">Tackle the steep Barranco Wall hand over hand in the morning light, then continue over rolling alpine terrain to Karanga Camp in the valley below.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 5 - Barafu High Camp" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5</span>
                </div>
                <h3 class="luxury-card-title">Approach the High Camp</h3>
                <p class="luxury-card-desc">Climb steadily above the cloud line to Barafu Camp at 4,673 metres, rest early in the afternoon and prepare your layers for the midnight summit attempt ahead.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 6 - Uhuru Peak Summit" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 6</span>
                </div>
                <h3 class="luxury-card-title">Conquering Uhuru Peak</h3>
                <p class="luxury-card-desc">Set off by headlamp at midnight, reach Stella Point at sunrise and push on to Uhuru Peak, Africa's rooftop at 5,895 metres, before descending back to Mweka Camp.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp" alt="Day 7 - Descent to Mweka Gate" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 7</span>
                </div>
                <h3 class="luxury-card-title">Descent to the Gate</h3>
                <p class="luxury-card-desc">Descend through the rainforest to Mweka Gate for your certificate of completion, then drive down to the Arusha area for a hot shower and a well-earned rest.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 8 - Serengeti" loading="lazy">
                <span class="luxury-card-badge">Safari</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 8</span>
                </div>
                <h3 class="luxury-card-title">Into the Serengeti</h3>
                <p class="luxury-card-desc">After the intensity of the climb, relax in a luxury lodge while opening your first game drive on the Serengeti plains, tracking lions, elephants and the Great Migration.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 9 - Serengeti Game Drive" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 9</span>
                </div>
                <h3 class="luxury-card-title">Full Serengeti Game Drive</h3>
                <p class="luxury-card-desc">A full day on safari across the endless plains, following the wildebeest herds and searching out cheetahs on the kopjes and elephants beneath the flat-topped acacias.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp" alt="Day 10 - Ngorongoro" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 10</span>
                </div>
                <h3 class="luxury-card-title">Ngorongoro & Departure</h3>
                <p class="luxury-card-desc">Morning descent into the Ngorongoro Crater for a final game drive, then transfer to Arusha for your onward journey. Trip of a lifetime complete.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Kili & Safari</em> Combo</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Everything for the ultimate mountain and wildlife adventure.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-mountain"></i></div>
            <div class="included-text">
                <h4>Kili Climb</h4>
                <p>Full Kilimanjaro climb on Lemosho Route with porters, cook and guides.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Safari Vehicle</h4>
                <p>4x4 Land Cruiser with pop-up roof for your Serengeti and Ngorongoro safari.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Accommodation</h4>
                <p>Mountain camps on Kili and luxury lodges during your safari portion.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining throughout the climb and safari, including mountain meals.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket-alt"></i></div>
            <div class="included-text">
                <h4>Park Fees</h4>
                <p>All Kilimanjaro and national park entry fees are fully covered.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text">
                <h4>Expert Guides</h4>
                <p>Certified Kili mountain guides and expert wildlife safari guides.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-plane-arrival"></i></div>
            <div class="included-text">
                <h4>Transfers</h4>
                <p>All transfers between airports, Kilimanjaro, safari parks and Arusha.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Book My <em style="color:var(--gold-light);">Kili & Safari</em> Combo</h2>
    <p>Ready for the ultimate Tanzania adventure? Contact our team to book your Kilimanjaro and safari combo package.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book My Kili & Safari Combo</a>
</section>
@endsection
