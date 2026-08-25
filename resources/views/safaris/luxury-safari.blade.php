@extends('layouts.app')

@section('page-title', 'Luxury Tanzania Safari Tours | Premium Safari Packages')
@section('meta-description', "Experience Tanzania's finest luxury safaris. Private lodges, exclusive game drives, premium dining and personalized service across Serengeti, Ngorongoro and beyond.")
@section('meta-keywords', 'luxury safari Tanzania, premium safari Tanzania, luxury Serengeti safari, exclusive safari tour, luxury safari lodge')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/luxury-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Luxury Tanzania Safari Tours | Premium Safari Packages",
    "description": "Experience Tanzania's finest luxury safaris. Private lodges, exclusive game drives, premium dining and personalized service across Serengeti, Ngorongoro and beyond.",
    "url": "https://www.lauparadiseadventure.com/safaris/luxury-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "4500",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Luxury Safaris</span>
        </div>
        <h1 class="page-hero-title">Luxury Tanzania <em>Safaris</em></h1>
        <p class="page-hero-sub">Experience the pinnacle of African safari travel with exclusive lodges, private game drives and unparalleled service.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Exclusive Experiences</span>
        <h2>Indulge in Tanzania's Most <em>Exclusive</em> Safari Experiences</h2>
        <p>Stay in world-class luxury lodges and tented camps, enjoy private game drives with expert guides, and experience exceptional dining under the African stars. Our luxury safari packages are designed for discerning travelers who demand the finest.</p>
        <p>From the sweeping plains of the Serengeti to the ancient walls of the Ngorongoro Crater, every moment is crafted to exceed your expectations. Premium vehicles, hand-picked accommodations and dedicated concierge service ensure a seamless journey through Tanzania's most iconic landscapes.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Luxury Safari" loading="lazy">
                <span class="luxury-card-badge">Most Popular</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-clock"></i> 8 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-gem"></i> Luxury</span>
                </div>
                <h3 class="luxury-card-title">Great Migration Luxury Safari</h3>
                <p class="luxury-card-desc">Follow the Great Migration across the Serengeti from exclusive luxury camps. Private vehicles, personal guide and front-row seats to the world's greatest wildlife spectacle.</p>
                <div class="luxury-card-footer">
                    <div class="luxury-card-price">
                        <small>From</small>
                        <strong>$4,500</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/great-migration-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp" alt="Ultimate Tanzania Grand Safari" loading="lazy">
                <span class="luxury-card-badge">Premium</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-clock"></i> 12 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park</span>
                    <span><i class="fas fa-gem"></i> Luxury</span>
                </div>
                <h3 class="luxury-card-title">Ultimate Tanzania Grand Safari</h3>
                <p class="luxury-card-desc">The definitive luxury safari covering Serengeti, Ngorongoro, Tarangire, Lake Manyara and Zanzibar. Twelve days of curated perfection across Tanzania's crown jewels.</p>
                <div class="luxury-card-footer">
                    <div class="luxury-card-price">
                        <small>From</small>
                        <strong>$5,900</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/ultimate-grand-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti Luxury Fly-In Safari" loading="lazy">
                <span class="luxury-card-badge">Exclusive</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-clock"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-gem"></i> Luxury</span>
                </div>
                <h3 class="luxury-card-title">Serengeti Luxury Fly-In Safari</h3>
                <p class="luxury-card-desc">Bypass the long drives with scenic flights directly into the Serengeti. Spend your days on private game drives and your evenings in the most exclusive tented camps.</p>
                <div class="luxury-card-footer">
                    <div class="luxury-card-price">
                        <small>From</small>
                        <strong>$4,200</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/serengeti-fly-in-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Luxury Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Every detail is taken care of so you can focus on the experience.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Luxury Accommodation</h4>
                <p>Five-star lodges, luxury tented camps and boutique retreats in prime locations.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Private Safari Vehicle</h4>
                <p>Exclusive 4x4 Land Cruiser with pop-up roof, guaranteed window seat.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text">
                <h4>Professional Guide</h4>
                <p>Expert English-speaking guide with deep knowledge of wildlife and habitats.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining with gourmet breakfast, lunch and dinner daily.</p>
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
            <div class="included-icon"><i class="fas fa-plane-arrival"></i></div>
            <div class="included-text">
                <h4>Airport Transfers</h4>
                <p>Private luxury vehicle transfers from Kilimanjaro or Arusha airports.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hot-air-balloon"></i></div>
            <div class="included-text">
                <h4>Hot Air Balloon Safari</h4>
                <p>Optional sunrise balloon flight over the Serengeti (on select packages).</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tshirt"></i></div>
            <div class="included-text">
                <h4>Laundry Service</h4>
                <p>Complimentary daily laundry service at your luxury lodge or camp.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Design My <em style="color:var(--gold-light);">Luxury</em> Journey</h2>
    <p>Ready for an extraordinary safari experience? Contact our team to design a bespoke luxury itinerary tailored entirely to your preferences and travel dates.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Design My Luxury Journey</a>
</section>
@endsection
