@extends('layouts.app')

@section('page-title', 'Honeymoon Safari & Beach Escape | Tanzania Romantic Safari')
@section('meta-description', "Start with a romantic safari in the Serengeti, then fly to Zanzibar for beachside relaxation. The perfect blend of adventure and romance.")
@section('meta-keywords', 'honeymoon safari Tanzania, romantic safari, Zanzibar beach escape, Tanzania honeymoon, luxury romantic safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/honeymoon-safari-beach')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/beautiful-waterfall-streaming-into-river-surrounded-by-greens_dgyhld.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Honeymoon Safari & Beach Escape | Tanzania Romantic Safari",
    "description": "Start with a romantic safari in the Serengeti, then fly to Zanzibar for beachside relaxation. The perfect blend of adventure and romance.",
    "url": "https://www.lauparadiseadventure.com/safaris/honeymoon-safari-beach",
    "touristType": "Safari",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/beautiful-waterfall-streaming-into-river-surrounded-by-greens_dgyhld.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Honeymoon Safari & Beach</span>
        </div>
        <h1 class="page-hero-title">Honeymoon Safari & <em>Beach</em> Escape</h1>
        <p class="page-hero-sub">Start with a romantic safari in the Serengeti, then fly to Zanzibar for beachside relaxation. The perfect blend of adventure and romance.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Romance Safari</span>
        <h2>Romance in the <em>Wild</em> and by the Sea</h2>
        <p>Celebrate your love with the ultimate romantic getaway. Spend three nights in a luxury Serengeti lodge watching wildlife from your private deck, then fly to Zanzibar for four nights of barefoot luxury on pristine white sand beaches.</p>
        <p>Enjoy private bush dinners under the stars, couples spa treatments and sunset dhow cruises. Every moment is designed to create unforgettable memories together.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/beautiful-waterfall-streaming-into-river-surrounded-by-greens_dgyhld.jpg" alt="Day 1-3 - Serengeti Romance" loading="lazy">
                <span class="luxury-card-badge">Romance</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1-3</span>
                </div>
                <h3 class="luxury-card-title">Serengeti Romance</h3>
                <p class="luxury-card-desc">Three nights in a luxury Serengeti lodge. Private game drives, champagne sundowners and a romantic bush dinner under the African stars.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/beautiful-waterfall-streaming-into-river-surrounded-by-greens_dgyhld.jpg" alt="Day 4 - Fly to Zanzibar" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 4</span>
                </div>
                <h3 class="luxury-card-title">Fly to Zanzibar</h3>
                <p class="luxury-card-desc">Scenic flight from the Serengeti to Zanzibar. Transfer to your beach resort and settle into paradise with a welcome champagne toast.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/beautiful-waterfall-streaming-into-river-surrounded-by-greens_dgyhld.jpg" alt="Day 5-7 - Zanzibar Beach" loading="lazy">
                <span class="luxury-card-badge">Beach</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5-7</span>
                </div>
                <h3 class="luxury-card-title">Zanzibar Beach</h3>
                <p class="luxury-card-desc">Three days of pure beach bliss. Snorkel in crystal-clear waters, explore Stone Town's historic alleys and enjoy couples spa treatments at sunset.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Honeymoon Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Every romantic detail is taken care of for your special trip.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Luxury Lodge</h4>
                <p>Serengeti luxury lodge with private deck and Zanzibar beach resort.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-plane"></i></div>
            <div class="included-text">
                <h4>Flights</h4>
                <p>Scenic bush flights between Serengeti and Zanzibar, both ways.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text">
                <h4>Private Guide</h4>
                <p>Dedicated private guide for your Serengeti game drives.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Gourmet dining including romantic bush dinner and beach barbecue.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-heart"></i></div>
            <div class="included-text">
                <h4>Romantic Dinner</h4>
                <p>Private candlelit dinner under the stars in the Serengeti.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-spa"></i></div>
            <div class="included-text">
                <h4>Spa Treatments</h4>
                <p>Couples massage and spa session at your Zanzibar beach resort.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Plan My <em style="color:var(--gold-light);">Honeymoon</em> Safari</h2>
    <p>Ready for the ultimate romantic adventure? Contact our team to design your dream honeymoon safari and beach escape.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Honeymoon Safari</a>
</section>
@endsection
