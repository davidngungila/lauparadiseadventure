@extends('layouts.app')

@section('page-title', 'Great Migration River Crossing Safari | Serengeti Migration')
@section('meta-description', "Witness the dramatic Mara River crossings where thousands of wildebeest brave crocodile-infested waters. The most intense wildlife spectacle on Earth.")
@section('meta-keywords', 'Great Migration river crossing, Serengeti migration, wildebeest migration safari, Mara River crossing, migration safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/great-migration-river-crossing')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Great Migration River Crossing Safari | Serengeti Migration",
    "description": "Witness the dramatic Mara River crossings where thousands of wildebeest brave crocodile-infested waters. The most intense wildlife spectacle on Earth.",
    "url": "https://www.lauparadiseadventure.com/safaris/great-migration-river-crossing",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Great Migration River Crossing</span>
        </div>
        <h1 class="page-hero-title">Great Migration <em>River Crossing</em></h1>
        <p class="page-hero-sub">Witness the dramatic Mara River crossings where thousands of wildebeest brave crocodile-infested waters. The most intense wildlife spectacle on Earth.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Migration Safari</span>
        <h2>Witness the <em>Greatest</em> Wildlife Spectacle</h2>
        <p>Every year, over 1.5 million wildebeest, zebras and gazelles cross from the Serengeti to the Maasai Mara in a relentless cycle of survival. This 7-day safari is timed to place you at the legendary Mara River crossing points during peak action.</p>
        <p>Watch in awe as herds gather on the riverbanks, plunge into the crocodile-infested waters and emerge on the other side. Strategic positioning by our experienced guides ensures you witness the most dramatic moments of this extraordinary natural event.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 1-2 - Northern Serengeti" loading="lazy">
                <span class="luxury-card-badge">Migration</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1-2</span>
                </div>
                <h3 class="luxury-card-title">Northern Serengeti</h3>
                <p class="luxury-card-desc">Arrive in the northern Serengeti where the migration herds are massing. Full day game drives tracking the wildebeest columns as they move toward the Mara River.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 3-5 - Mara River Crossings" loading="lazy">
                <span class="luxury-card-badge">Highlight</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 3-5</span>
                </div>
                <h3 class="luxury-card-title">Mara River Crossings</h3>
                <p class="luxury-card-desc">Three days positioned at the best river crossing points. Witness the heart-stopping moments as wildebeest brave crocodiles and strong currents to reach the Mara side.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 6-7 - Maasai Mara & Departure" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 6-7</span>
                </div>
                <h3 class="luxury-card-title">Maasai Mara & Departure</h3>
                <p class="luxury-card-desc">Cross into Kenya's Maasai Mara to follow the migration herds. Final game drives among the wildebeest before departure from the Mara airstrip.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Migration Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Strategic positioning for the best migration sightings.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-campground"></i></div>
            <div class="included-text">
                <h4>Luxury Camp</h4>
                <p>Mobile luxury tented camp positioned at prime migration crossing points.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Private Vehicle</h4>
                <p>Exclusive 4x4 Land Cruiser for optimal positioning during river crossings.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Gourmet full-board dining at your luxury mobile camp.</p>
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
                <h4>Expert Guide</h4>
                <p>Migration specialist guide with years of experience tracking river crossings.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-crosshairs"></i></div>
            <div class="included-text">
                <h4>Strategic Positioning</h4>
                <p>Camp relocated to follow the migration for optimal crossing sightings.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Book My <em style="color:var(--gold-light);">Migration</em> Safari</h2>
    <p>Ready to witness the greatest wildlife spectacle on Earth? Contact our team to book your Great Migration river crossing safari.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book My Migration Safari</a>
</section>
@endsection
