@extends('layouts.app')

@section('page-title', 'Private Safari Tanzania | Exclusive Safari Tours')
@section('meta-description', 'Explore Tanzania on your own private safari. Exclusive vehicles, personalized itineraries, flexible schedules and dedicated professional guides.')
@section('meta-keywords', 'private safari Tanzania, exclusive safari tour, private game drive, personalized safari, private guide Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/private-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Private Safari Tanzania | Exclusive Safari Tours",
    "description": "Explore Tanzania on your own private safari. Exclusive vehicles, personalized itineraries, flexible schedules and dedicated professional guides.",
    "url": "https://www.lauparadiseadventure.com/safaris/private-safari",
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
.private-content { padding: 70px 8%; }
.private-intro { max-width: 800px; margin-bottom: 50px; }
.private-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.private-intro h2 em { color: var(--gold); font-style: italic; }
.private-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }
.private-benefits { display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px; margin-bottom: 60px; }
.private-benefit-card {
    display: flex; gap: 20px; padding: 28px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); transition: 0.3s;
    border: 1px solid rgba(200,150,62,0.08);
}
.private-benefit-card:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.private-benefit-icon {
    width: 56px; height: 56px; border-radius: 14px;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    font-size: 1.3rem; color: var(--gold); flex-shrink: 0;
}
.private-benefit-text h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.15rem;
    font-weight: 700; color: var(--earth); margin-bottom: 6px;
}
.private-benefit-text p { font-size: 0.85rem; color: var(--text-muted); line-height: 1.7; }
.private-packages-label { margin-bottom: 30px; }
.private-packages { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 60px; }
.private-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-md); transition: 0.3s;
}
.private-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.private-card-img { position: relative; height: 240px; overflow: hidden; }
.private-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.private-card:hover .private-card-img img { transform: scale(1.06); }
.private-card-badge {
    position: absolute; top: 14px; left: 14px;
    background: var(--gold); color: var(--dark);
    padding: 4px 14px; border-radius: 20px;
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
}
.private-card-body { padding: 24px; }
.private-card-meta { display: flex; gap: 14px; margin-bottom: 10px; flex-wrap: wrap; }
.private-card-meta span { font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 5px; }
.private-card-title {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px; line-height: 1.3;
}
.private-card-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px; }
.private-card-footer {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid #f0ebe1; padding-top: 16px;
}
.private-card-price { font-family: 'Cormorant Garamond', serif; }
.private-card-price small { font-size: 0.72rem; color: var(--text-muted); font-family: 'DM Sans', sans-serif; }
.private-card-price strong { font-size: 1.4rem; color: var(--gold); }
.private-card-price em { font-size: 0.75rem; color: var(--text-muted); font-style: normal; }
.private-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.private-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.private-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 520px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .private-benefits { grid-template-columns: 1fr; }
    .private-packages { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .private-packages { grid-template-columns: 1fr; }
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
            <span class="current">Private Safaris</span>
        </div>
        <h1 class="page-hero-title">Private Tanzania <em>Safaris</em></h1>
        <p class="page-hero-sub">Your own vehicle, your own guide, your own schedule. Experience Tanzania on your terms with a completely private safari.</p>
    </div>
</div>

<section class="private-content">
    <div class="private-intro">
        <span class="sec-label">Exclusive Travel</span>
        <h2>The <em>Private</em> Safari Experience</h2>
        <p>A private safari means every detail is shaped around you. No sharing vehicles with strangers, no rigid schedules and no compromises. Travel at your own pace with a dedicated professional guide who focuses solely on your group.</p>
        <p>Whether you want to spend extra time watching a leopard in a tree, take a detour to a local Maasai village, or start your game drive before dawn, a private safari gives you the freedom to create your own adventure. It is the most personal and immersive way to experience Tanzania's wildlife.</p>
    </div>

    <div class="private-benefits">
        <div class="private-benefit-card">
            <div class="private-benefit-icon"><i class="fas fa-car"></i></div>
            <div class="private-benefit-text">
                <h4>Exclusive Vehicle</h4>
                <p>Your own private 4x4 Land Cruiser with a pop-up roof. No strangers, no competition for the best window seat. Just your group and the wild.</p>
            </div>
        </div>
        <div class="private-benefit-card">
            <div class="private-benefit-icon"><i class="fas fa-clock"></i></div>
            <div class="private-benefit-text">
                <h4>Flexible Schedule</h4>
                <p>Start when you want, stay as long as you like. No fixed departure times or group constraints. Your safari, your rhythm.</p>
            </div>
        </div>
        <div class="private-benefit-card">
            <div class="private-benefit-icon"><i class="fas fa-sliders-h"></i></div>
            <div class="private-benefit-text">
                <h4>Personalized Experience</h4>
                <p>Every itinerary is customized to your interests, whether that is birdwatching, big cats, photography or cultural encounters.</p>
            </div>
        </div>
        <div class="private-benefit-card">
            <div class="private-benefit-icon"><i class="fas fa-user-check"></i></div>
            <div class="private-benefit-text">
                <h4>Dedicated Guide</h4>
                <p>Your own expert guide shares deep knowledge of the bush, ensuring you never miss a sighting and always feel safe and informed.</p>
            </div>
        </div>
    </div>

    <div class="private-packages-label">
        <span class="sec-label">Private Packages</span>
        <h2 class="sec-title">Our Private <em>Safari</em> Packages</h2>
    </div>

    <div class="private-packages">
        <div class="private-card">
            <div class="private-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Private Safari" loading="lazy">
                <span class="private-card-badge">Private</span>
            </div>
            <div class="private-card-body">
                <div class="private-card-meta">
                    <span><i class="fas fa-clock"></i> 8 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-lock"></i> Exclusive</span>
                </div>
                <h3 class="private-card-title">Great Migration Private Safari</h3>
                <p class="private-card-desc">Follow the Great Migration with your own private guide and vehicle. Luxury camps, exclusive game drives and uninterrupted time with the herds.</p>
                <div class="private-card-footer">
                    <div class="private-card-price">
                        <small>From</small>
                        <strong>$4,500</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/great-migration-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="private-card">
            <div class="private-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Private Crater Safari" loading="lazy">
                <span class="private-card-badge">Private</span>
            </div>
            <div class="private-card-body">
                <div class="private-card-meta">
                    <span><i class="fas fa-clock"></i> 4 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro</span>
                    <span><i class="fas fa-lock"></i> Exclusive</span>
                </div>
                <h3 class="private-card-title">Ngorongoro Private Crater Safari</h3>
                <p class="private-card-desc">Descend into the Ngorongoro Crater in your own vehicle. Spend the day exploring at your own pace with a guide who knows every corner of this wildlife haven.</p>
                <div class="private-card-footer">
                    <div class="private-card-price">
                        <small>From</small>
                        <strong>$1,500</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/ngorongoro-private-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="private-card">
            <div class="private-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti Private Explorer Safari" loading="lazy">
                <span class="private-card-badge">Private</span>
            </div>
            <div class="private-card-body">
                <div class="private-card-meta">
                    <span><i class="fas fa-clock"></i> 6 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-lock"></i> Exclusive</span>
                </div>
                <h3 class="private-card-title">Serengeti Private Explorer Safari</h3>
                <p class="private-card-desc">Six days exploring the vast Serengeti with your own guide. From the central plains to the remote northern circuit, discover the park's best-kept secrets.</p>
                <div class="private-card-footer">
                    <div class="private-card-price">
                        <small>From</small>
                        <strong>$3,200</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/serengeti-private-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="private-cta">
    <h2>Ready for Your Own <em style="color:var(--gold-light);">Private</em> Safari?</h2>
    <p>Contact us to design a private safari experience that matches your interests, pace and travel style. No group, no crowds, just you and the wild.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Private Safari</a>
</section>
@endsection
