@extends('layouts.app')

@section('page-title', 'Ngorongoro Private Crater Safari | Exclusive Ngorongoro Tour')
@section('meta-description', 'Descend into the Ngorongoro Crater on a private safari. Exclusive 4x4 vehicle, personal guide, flexible schedule and the Big Five in one day.')
@section('meta-keywords', 'Ngorongoro private safari, Ngorongoro Crater private tour, exclusive crater safari, private game drive Ngorongoro, Big Five Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/ngorongoro-private-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Ngorongoro Private Crater Safari | Exclusive Ngorongoro Tour",
    "description": "Descend into the Ngorongoro Crater on a private safari. Exclusive 4x4 vehicle, personal guide, flexible schedule and the Big Five in one day.",
    "url": "https://www.lauparadiseadventure.com/safaris/ngorongoro-private-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "1500",
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
.ngc-content { padding: 70px 8%; }
.ngc-intro { max-width: 800px; margin-bottom: 50px; }
.ngc-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.ngc-intro h2 em { color: var(--gold); font-style: italic; }
.ngc-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }
.ngc-highlights { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 60px; }
.ngc-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-md); transition: 0.3s;
}
.ngc-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.ngc-card-img { position: relative; height: 240px; overflow: hidden; }
.ngc-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.ngc-card:hover .ngc-card-img img { transform: scale(1.06); }
.ngc-card-badge {
    position: absolute; top: 14px; left: 14px;
    background: var(--gold); color: var(--dark);
    padding: 4px 14px; border-radius: 20px;
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
}
.ngc-card-body { padding: 24px; }
.ngc-card-meta { display: flex; gap: 14px; margin-bottom: 10px; flex-wrap: wrap; }
.ngc-card-meta span { font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 5px; }
.ngc-card-title {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px; line-height: 1.3;
}
.ngc-card-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px; }
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
.ngc-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.ngc-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.ngc-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 520px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .ngc-highlights { grid-template-columns: repeat(2, 1fr); }
    .included-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .ngc-highlights { grid-template-columns: 1fr; }
    .included-grid { grid-template-columns: 1fr; }
}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Ngorongoro Private Safari</span>
        </div>
        <h1 class="page-hero-title">Ngorongoro Private <em>Crater</em> Safari</h1>
        <p class="page-hero-sub">Descend into the world's largest intact volcanic caldera in your own exclusive vehicle. The Big Five, your schedule, no crowds.</p>
    </div>
</div>

<section class="ngc-content">
    <div class="ngc-intro">
        <span class="sec-label">Private Safari</span>
        <h2>The Ngorongoro Crater, <em>Exclusively</em> Yours</h2>
        <p>The Ngorongoro Crater is one of Africa's most remarkable wildlife destinations — a natural enclosure holding around 25,000 large animals, including black rhino, lion, leopard, elephant and buffalo. On this private safari, you explore it in your own 4x4 with a dedicated expert guide.</p>
        <p>With no other travelers in your vehicle, you control the pace: linger beside a rhino sighting, enjoy a picnic lunch at the hippo pool, or ascend early for first light over the crater floor. This is the most personal way to experience a natural wonder of the world.</p>
    </div>

    <div class="private-packages-label" style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Day by Day in the <em>Crater</em></h2>
    </div>

    <div class="ngc-highlights">
        <div class="ngc-card">
            <div class="ngc-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 1 - Arusha to Ngorongoro" loading="lazy">
                <span class="ngc-card-badge">Private</span>
            </div>
            <div class="ngc-card-body">
                <div class="ngc-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1</span>
                    <span><i class="fas fa-map-marker-alt"></i> Arusha - Ngorongoro</span>
                </div>
                <h3 class="ngc-card-title">Arusha to Ngorongoro Highlands</h3>
                <p class="ngc-card-desc">Meet your private guide after breakfast and travel to the Ngorongoro Conservation Area. Arrive at your lodge on the crater rim in time for sunset views over the caldera.</p>
            </div>
        </div>

        <div class="ngc-card">
            <div class="ngc-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 2 - Full Day Crater Game Drive" loading="lazy">
                <span class="ngc-card-badge">Big Five</span>
            </div>
            <div class="ngc-card-body">
                <div class="ngc-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 2</span>
                    <span><i class="fas fa-map-marker-alt"></i> Crater Floor</span>
                </div>
                <h3 class="ngc-card-title">Full-Day Crater Game Drive</h3>
                <p class="ngc-card-desc">An early descent onto the crater floor for a full day of private game drives. Track the Big Five, visit the hippo pool and enjoy a picnic lunch in the wild — all at your own pace.</p>
            </div>
        </div>

        <div class="ngc-card">
            <div class="ngc-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Day 3 - Maasai Visit and Return" loading="lazy">
                <span class="ngc-card-badge">Culture</span>
            </div>
            <div class="ngc-card-body">
                <div class="ngc-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 3</span>
                    <span><i class="fas fa-map-marker-alt"></i> Maasai Village - Arusha</span>
                </div>
                <h3 class="ngc-card-title">Maasai Culture &amp; Return</h3>
                <p class="ngc-card-desc">Optional morning visit to a Maasai boma on the crater highlands before returning to Arusha or Kilimanjaro Airport for your onward journey.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Private Crater</em> Safari</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Every detail handled so you can focus on the wildlife.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Private Vehicle</h4>
                <p>Exclusive 4x4 Land Cruiser with pop-up roof for the entire trip.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-user-tie"></i></div>
            <div class="included-text">
                <h4>Dedicated Guide</h4>
                <p>Your own expert driver-guide focused solely on your group.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text">
                <h4>Rim Lodge Stay</h4>
                <p>Two nights' accommodation on the spectacular crater rim.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text">
                <h4>Park Fees</h4>
                <p>All Ngorongoro Conservation Area and crater descent fees included.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining plus a picnic lunch on the crater floor.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-tint"></i></div>
            <div class="included-text">
                <h4>Bottled Water</h4>
                <p>Unlimited drinking water throughout your safari.</p>
            </div>
        </div>
    </div>
</section>

<section class="ngc-cta">
    <h2>Book Your <em style="color:var(--gold-light);">Private Crater</em> Safari</h2>
    <p>Tell us your travel dates and group size, and we will tailor this Ngorongoro private safari around you.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Crater Safari</a>
</section>
@endsection
