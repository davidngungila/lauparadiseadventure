@extends('layouts.app')

@section('page-title', 'Tarangire Elephant Safari | Tanzania Wildlife Safari')
@section('meta-description', "Explore Tanzania's elephant capital with the largest herds in the country, plus lions, leopards and ancient baobab landscapes in Tarangire National Park.")
@section('meta-keywords', 'Tarangire elephant safari, Tanzania wildlife safari, Tarangire National Park, elephant herds safari, Tanzania safari tour')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/tarangire-elephant-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tarangire Elephant Safari | Tanzania Wildlife Safari",
    "description": "Explore Tanzania's elephant capital with the largest herds in the country, plus lions, leopards and ancient baobab landscapes in Tarangire National Park.",
    "url": "https://www.lauparadiseadventure.com/safaris/tarangire-elephant-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "1800",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Tarangire Elephant Safari</span>
        </div>
        <h1 class="page-hero-title">Tarangire <em>Elephant</em> Safari</h1>
        <p class="page-hero-sub">Explore Tanzania's elephant capital with the largest herds in the country, plus lions, leopards and ancient baobab landscapes.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Wildlife Safari</span>
        <h2>Discover Tarangire's <em>Magnificent</em> Elephant Herds</h2>
        <p>Tarangire National Park is home to the largest concentration of elephants in Tanzania, with herds of up to 300 individuals roaming beneath towering baobab trees. This 5-day safari takes you deep into one of Africa's most underrated wildlife destinations.</p>
        <p>Beyond the elephants, Tarangire offers exceptional predator sightings including lions, leopards and African wild dogs. The Tarangire River attracts vast numbers of wildlife during the dry season, creating one of the most concentrated wildlife spectacles in East Africa.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg" alt="Day 1 - Arusha to Tarangire" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1</span>
                </div>
                <h3 class="luxury-card-title">Arusha to Tarangire</h3>
                <p class="luxury-card-desc">Depart Arusha and drive to Tarangire National Park. Afternoon game drive along the Tarangire River, home to vast elephant herds and diverse wildlife.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg" alt="Day 2-3 - Full Day Game Drives" loading="lazy">
                <span class="luxury-card-badge">Highlight</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 2-3</span>
                </div>
                <h3 class="luxury-card-title">Full Day Game Drives</h3>
                <p class="luxury-card-desc">Two full days exploring Tarangire's diverse ecosystems. Visit the Silale Swamp, the Lemiyon area and the iconic baobab-studded landscapes. Track elephants, lions and leopards.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 4 - Lake Manyara" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 4</span>
                </div>
                <h3 class="luxury-card-title">Lake Manyara</h3>
                <p class="luxury-card-desc">Transfer to Lake Manyara National Park for a game drive. Explore the groundwater forests, soda lake shores and the famous tree-climbing lions.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg" alt="Day 5 - Return to Arusha" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5</span>
                </div>
                <h3 class="luxury-card-title">Return to Arusha</h3>
                <p class="luxury-card-desc">Morning at leisure or optional walking safari. Afternoon transfer back to Arusha, arriving in time for your onward travel plans.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Tarangire Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Every detail is taken care of so you can focus on the elephants.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Safari Vehicle</h4>
                <p>Comfortable 4x4 Land Cruiser with pop-up roof and guaranteed window seat.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Accommodation</h4>
                <p>Mid-range lodges and tented camps in prime locations near the park.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining with breakfast, lunch and dinner served daily.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket-alt"></i></div>
            <div class="included-text">
                <h4>Park Fees</h4>
                <p>All national park and conservation area entry fees are fully covered.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text">
                <h4>Professional Guide</h4>
                <p>Expert English-speaking guide with extensive knowledge of Tarangire wildlife.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-plane-arrival"></i></div>
            <div class="included-text">
                <h4>Transfers</h4>
                <p>Round-trip transfers from Arusha to Tarangire National Park.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Plan My <em style="color:var(--gold-light);">Elephant</em> Safari</h2>
    <p>Ready to witness Tanzania's largest elephant herds in their natural habitat? Contact our team to customize your Tarangire adventure.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Tarangire Safari</a>
</section>
@endsection
