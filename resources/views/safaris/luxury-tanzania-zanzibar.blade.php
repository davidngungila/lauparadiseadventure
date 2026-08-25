@extends('layouts.app')

@section('page-title', 'Luxury Tanzania & Zanzibar Safari | Premium Holiday Package')
@section('meta-description', "The ultimate luxury escape. Private fly-in safari across Tanzania's top parks, then unwind in a five-star Zanzibar resort with private butler service.")
@section('meta-keywords', 'luxury Tanzania Zanzibar safari, premium holiday package, luxury safari Zanzibar, fly-in safari, five-star Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/luxury-tanzania-zanzibar')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Luxury Tanzania & Zanzibar Safari | Premium Holiday Package",
    "description": "The ultimate luxury escape. Private fly-in safari across Tanzania's top parks, then unwind in a five-star Zanzibar resort with private butler service.",
    "url": "https://www.lauparadiseadventure.com/safaris/luxury-tanzania-zanzibar",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "7500",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Luxury Tanzania & Zanzibar</span>
        </div>
        <h1 class="page-hero-title">Luxury Tanzania & <em>Zanzibar</em></h1>
        <p class="page-hero-sub">The ultimate luxury escape. Private fly-in safari across Tanzania's top parks, then unwind in a five-star Zanzibar resort with private butler service.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Ultimate Luxury</span>
        <h2>The <em>Pinnacle</em> of Tanzania Luxury</h2>
        <p>This 11-day luxury safari and beach package is the ultimate Tanzanian escape. Fly privately into the Serengeti, Ngorongoro and Tarangire in exclusive luxury camps, then transfer to a five-star Zanzibar beach resort with dedicated butler service.</p>
        <p>From private bush dinners under the stars to champagne sundowners overlooking the plains, every moment is curated to exceed the highest expectations. This is not just a holiday, it's a life experience.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 1-4 - Luxury Fly-In Safari" loading="lazy">
                <span class="luxury-card-badge">Luxury</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1-4</span>
                </div>
                <h3 class="luxury-card-title">Luxury Fly-In Safari</h3>
                <p class="luxury-card-desc">Four days flying between the Serengeti, Ngorongoro and Tarangire in private luxury camps. Private game drives, bush dinners and champagne sundowners at every camp.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 5 - Fly to Zanzibar" loading="lazy">
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5</span>
                </div>
                <h3 class="luxury-card-title">Fly to Zanzibar</h3>
                <p class="luxury-card-desc">Private flight from the Serengeti to Zanzibar. Transfer to your five-star beach resort and settle into paradise with a welcome champagne toast and private butler introduction.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 6-11 - Zanzibar Beach Luxury" loading="lazy">
                <span class="luxury-card-badge">Beach</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 6-11</span>
                </div>
                <h3 class="luxury-card-title">Zanzibar Beach Luxury</h3>
                <p class="luxury-card-desc">Six days of barefoot luxury on Zanzibar's finest beach. Private butler, spa treatments, snorkeling, dhow cruises and sunset cocktails on the white sand beach.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Luxury Package</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Every luxury detail is taken care of for the ultimate experience.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-plane"></i></div>
            <div class="included-text">
                <h4>Flights</h4>
                <p>Private bush flights between all parks and to Zanzibar, including scenic transfers.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Luxury Lodges</h4>
                <p>Five-star luxury lodges in the Serengeti, Ngorongoro and Tarangire.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-umbrella-beach"></i></div>
            <div class="included-text">
                <h4>Beach Resort</h4>
                <p>Five-star Zanzibar beach resort with private butler and premium amenities.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text">
                <h4>Private Guide</h4>
                <p>Dedicated private guide for the entire safari portion of your trip.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-concierge-bell"></i></div>
            <div class="included-text">
                <h4>Butler Service</h4>
                <p>Personal butler at your Zanzibar resort for all daily needs and requests.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Gourmet dining throughout, including bush dinners, beach BBQ and fine dining.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Design My <em style="color:var(--gold-light);">Ultimate Luxury</em> Journey</h2>
    <p>Ready for the most luxurious Tanzania experience possible? Contact our team to design your bespoke luxury safari and beach escape.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Design My Luxury Journey</a>
</section>
@endsection
