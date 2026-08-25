@extends('layouts.app')

@section('page-title', 'Cultural & Wildlife Safari | Tanzania Cultural Tour')
@section('meta-description', "Meet the Hadzabe bushmen, visit Maasai villages and witness the Big Five. A journey blending authentic cultural encounters with epic wildlife viewing.")
@section('meta-keywords', 'cultural wildlife safari, Tanzania cultural tour, Hadzabe bushmen, Maasai village, cultural safari Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/cultural-wildlife-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Cultural & Wildlife Safari | Tanzania Cultural Tour",
    "description": "Meet the Hadzabe bushmen, visit Maasai villages and witness the Big Five. A journey blending authentic cultural encounters with epic wildlife viewing.",
    "url": "https://www.lauparadiseadventure.com/safaris/cultural-wildlife-safari",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Cultural & Wildlife Safari</span>
        </div>
        <h1 class="page-hero-title">Cultural & <em>Wildlife</em> Safari</h1>
        <p class="page-hero-sub">Meet the Hadzabe bushmen, visit Maasai villages and witness the Big Five. A journey blending authentic cultural encounters with epic wildlife viewing.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Cultural Safari</span>
        <h2>Where Culture Meets <em>Wildlife</em></h2>
        <p>Tanzania is home to over 120 ethnic groups, each with unique traditions and ways of life. This 6-day safari blends authentic cultural encounters with world-class wildlife viewing, creating a journey that goes beyond the typical safari experience.</p>
        <p>Hunt with the Hadzabe bushmen, one of the last hunter-gatherer tribes on Earth. Visit a Maasai boma and learn about their pastoral lifestyle. Then explore the Ngorongoro Crater and Lake Manyara for incredible Big Five sightings.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Day 1-2 - Hadzabe & Datoga" loading="lazy">
                <span class="luxury-card-badge">Cultural</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1-2</span>
                </div>
                <h3 class="luxury-card-title">Hadzabe & Datoga Tribes</h3>
                <p class="luxury-card-desc">Join the Hadzabe bushmen on a traditional hunt and visit the Datoga blacksmiths. Experience ancient ways of life that have remained unchanged for thousands of years.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 3-4 - Maasai Village & Ngorongoro" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 3-4</span>
                </div>
                <h3 class="luxury-card-title">Maasai Village & Ngorongoro</h3>
                <p class="luxury-card-desc">Visit a Maasai boma to learn about their pastoral culture, then descend into the Ngorongoro Crater for a full day game drive among the Big Five.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Day 5-6 - Lake Manyara & Tarangire" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5-6</span>
                </div>
                <h3 class="luxury-card-title">Lake Manyara & Tarangire</h3>
                <p class="luxury-card-desc">Game drives in Lake Manyara and Tarangire National Parks. Spot tree-climbing lions, vast elephant herds and diverse birdlife before returning to Arusha.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Cultural Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Authentic cultural encounters with all the safari essentials.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-users"></i></div>
            <div class="included-text">
                <h4>Cultural Visits</h4>
                <p>Guided visits to Hadzabe, Datoga and Maasai communities with local interpreters.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Safari Vehicle</h4>
                <p>Comfortable 4x4 Land Cruiser with pop-up roof for wildlife viewing.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Accommodation</h4>
                <p>Mid-range lodges and cultural campsites near parks and communities.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining including traditional cultural meals with local communities.</p>
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
                <p>Expert guide with deep knowledge of both wildlife and local cultures.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Plan My <em style="color:var(--gold-light);">Cultural</em> Safari</h2>
    <p>Ready to experience Tanzania's rich cultural heritage alongside incredible wildlife? Contact our team to plan your cultural safari.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Cultural Safari</a>
</section>
@endsection
