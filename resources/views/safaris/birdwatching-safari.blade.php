@extends('layouts.app')

@section('page-title', 'Tanzania Birdwatching Safari | Birding Tour Tanzania')
@section('meta-description', "Tanzania is a birder's paradise with over 1,100 species. Visit Lake Manyara and Tarangire for flamingos, pelicans, eagles and rare endemic species.")
@section('meta-keywords', 'Tanzania birdwatching safari, birding tour Tanzania, birding safari, flamingo safari, bird watching Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/birdwatching-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tanzania Birdwatching Safari | Birding Tour Tanzania",
    "description": "Tanzania is a birder's paradise with over 1,100 species. Visit Lake Manyara and Tarangire for flamingos, pelicans, eagles and rare endemic species.",
    "url": "https://www.lauparadiseadventure.com/safaris/birdwatching-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2400",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Birdwatching Safari</span>
        </div>
        <h1 class="page-hero-title">Tanzania <em>Birdwatching</em> Safari</h1>
        <p class="page-hero-sub">Tanzania is a birder's paradise with over 1,100 species. Visit Lake Manyara and Tarangire for flamingos, pelicans, eagles and rare endemic species.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Nature Safari</span>
        <h2>A <em>Birder's</em> Paradise Awaits</h2>
        <p>Tanzania boasts over 1,100 bird species, making it one of Africa's premier birding destinations. This 6-day birdwatching safari focuses on two of the country's richest birding areas: Lake Manyara and Tarangire National Parks.</p>
        <p>Spot vast flocks of flamingos on the soda lake, watch fish eagles hunt along the Tarangire River and track rare endemic species like the Ashy Starling and Rufous-tailed Weaver. Led by an expert birding guide with comprehensive field knowledge.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Day 1-2 - Lake Manyara" loading="lazy">
                <span class="luxury-card-badge">Birding</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1-2</span>
                </div>
                <h3 class="luxury-card-title">Lake Manyara</h3>
                <p class="luxury-card-desc">Two days birding at Lake Manyara. Explore the groundwater forests, soda lake shores and lakeside habitats. Flamingos, pelicans, storks and hornbills abound.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Day 3-4 - Tarangire" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 3-4</span>
                </div>
                <h3 class="luxury-card-title">Tarangire</h3>
                <p class="luxury-card-desc">Two days in Tarangire National Park. The Tarangire River attracts diverse birdlife including raptors, waterbirds and the endemic Asphy Starling and Rufous-tailed Weaver.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Day 5-6 - Extended Birding" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5-6</span>
                </div>
                <h3 class="luxury-card-title">Extended Birding</h3>
                <p class="luxury-card-desc">Final days exploring additional habitats and hotspots. Checklist review and species tally. Return to Arusha with a comprehensive birding record.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Birdwatching Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Everything a birder needs for the perfect safari.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-binoculars"></i></div>
            <div class="included-text">
                <h4>Birding Guide</h4>
                <p>Expert ornithologist guide with extensive knowledge of Tanzanian bird species.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Safari Vehicle</h4>
                <p>4x4 Land Cruiser with pop-up roof for optimal birding and wildlife viewing.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Accommodation</h4>
                <p>Lodges and camps strategically located near prime birding habitats.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining with early breakfast for dawn birding sessions.</p>
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
            <div class="included-icon"><i class="fas fa-book"></i></div>
            <div class="included-text">
                <h4>Bird Checklist</h4>
                <p>Comprehensive Tanzania bird checklist to track your sightings.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Book My <em style="color:var(--gold-light);">Birdwatching</em> Safari</h2>
    <p>Ready to explore Tanzania's incredible avian diversity? Contact our team to book your birdwatching safari.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book My Birdwatching Safari</a>
</section>
@endsection
