@extends('layouts.app')

@section('page-title', 'Serengeti Budget Camping Safari | Affordable Tanzania Safari')
@section('meta-description', "Experience the Serengeti without breaking the bank. Comfortable camping, expert guides and unforgettable wildlife encounters at an affordable price.")
@section('meta-keywords', 'Serengeti budget camping safari, affordable Tanzania safari, cheap Serengeti safari, budget safari Tanzania, camping safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/serengeti-budget-camping')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Serengeti Budget Camping Safari | Affordable Tanzania Safari",
    "description": "Experience the Serengeti without breaking the bank. Comfortable camping, expert guides and unforgettable wildlife encounters at an affordable price.",
    "url": "https://www.lauparadiseadventure.com/safaris/serengeti-budget-camping",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "1100",
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
            <span class="current">Serengeti Budget Camping</span>
        </div>
        <h1 class="page-hero-title">Serengeti <em>Budget</em> Camping Safari</h1>
        <p class="page-hero-sub">Experience the Serengeti without breaking the bank. Comfortable camping, expert guides and unforgettable wildlife encounters.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Budget Safari</span>
        <h2>Affordable <em>Serengeti</em> Adventure</h2>
        <p>Our 5-day budget camping safari proves that an authentic Serengeti experience doesn't have to cost a fortune. Sleep under the stars in comfortable dome tents, enjoy hearty meals prepared by our camp cook and explore the vast plains with expert guides.</p>
        <p>Watch wildebeest herds stretch to the horizon, spot lions lounging on kopjes and witness sunsets that paint the African sky in shades of gold and crimson. All at a price that makes the dream accessible.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 1 - Arusha to Serengeti" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1</span>
                </div>
                <h3 class="luxury-card-title">Arusha to Serengeti</h3>
                <p class="luxury-card-desc">Early departure from Arusha through the Ngorongoro Conservation Area. Arrive in the Serengeti for your first afternoon game drive as the sun begins to set.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 2-3 - Serengeti Game Drives" loading="lazy">
                <span class="luxury-card-badge">Highlight</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 2-3</span>
                </div>
                <h3 class="luxury-card-title">Serengeti Game Drives</h3>
                <p class="luxury-card-desc">Full day game drives exploring the Serengeti's diverse regions. Track the Big Five, witness predator-prey interactions and marvel at the endless plains.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 4 - Ngorongoro Crater" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 4</span>
                </div>
                <h3 class="luxury-card-title">Ngorongoro Crater</h3>
                <p class="luxury-card-desc">Descend into the Ngorongoro Crater for a half-day game drive. Spot the Big Five in this natural amphitheatre before ascending to camp.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 5 - Return to Arusha" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5</span>
                </div>
                <h3 class="luxury-card-title">Return to Arusha</h3>
                <p class="luxury-card-desc">Morning game drive in the Ngorongoro Crater rim area before the scenic drive back to Arusha. Arrive in the afternoon with memories to last a lifetime.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Budget Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Great safari experiences at an affordable price.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-campground"></i></div>
            <div class="included-text">
                <h4>Camping Equipment</h4>
                <p>Comfortable dome tents, sleeping bags and mats for a cozy bush experience.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Safari Vehicle</h4>
                <p>Shared 4x4 Land Cruiser with pop-up roof for optimal wildlife viewing.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board camping meals prepared by our camp cook, including bush breakfast.</p>
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
                <p>Expert English-speaking guide with deep knowledge of Serengeti wildlife.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Book My <em style="color:var(--gold-light);">Budget</em> Safari</h2>
    <p>Ready for an affordable Serengeti adventure? Contact our team to book your budget camping safari today.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book My Budget Safari</a>
</section>
@endsection
