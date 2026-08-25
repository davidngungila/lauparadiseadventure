@extends('layouts.app')

@section('page-title', 'Group Safari Tours Tanzania | Shared Safari Experiences')
@section('meta-description', 'Join fellow travelers on shared group safari adventures across Tanzania. Meet new people, share experiences and explore Serengeti, Ngorongoro and more.')
@section('meta-keywords', 'group safari Tanzania, shared safari tour, group safari Serengeti, affordable Tanzania safari, group adventure Africa')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/group-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Group Safari Tours Tanzania | Shared Safari Experiences",
    "description": "Join fellow travelers on shared group safari adventures across Tanzania. Meet new people, share experiences and explore Serengeti, Ngorongoro and more.",
    "url": "https://www.lauparadiseadventure.com/safaris/group-safari",
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
.group-content { padding: 70px 8%; }
.group-intro { max-width: 800px; margin-bottom: 50px; }
.group-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.group-intro h2 em { color: var(--gold); font-style: italic; }
.group-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }
.group-benefits { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 60px; }
.group-benefit {
    text-align: center; padding: 32px 24px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); transition: 0.3s;
}
.group-benefit:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.group-benefit-icon {
    width: 60px; height: 60px; border-radius: 50%;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center; margin: 0 auto 16px;
    font-size: 1.3rem; color: var(--gold);
}
.group-benefit h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.15rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px;
}
.group-benefit p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.7; }
.group-packages-label { margin-bottom: 30px; }
.group-packages { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 60px; }
.group-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-md); transition: 0.3s;
}
.group-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.group-card-img { position: relative; height: 240px; overflow: hidden; }
.group-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.group-card:hover .group-card-img img { transform: scale(1.06); }
.group-card-badge {
    position: absolute; top: 14px; left: 14px;
    background: var(--gold); color: var(--dark);
    padding: 4px 14px; border-radius: 20px;
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
}
.group-card-body { padding: 24px; }
.group-card-meta { display: flex; gap: 14px; margin-bottom: 10px; flex-wrap: wrap; }
.group-card-meta span { font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 5px; }
.group-card-title {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px; line-height: 1.3;
}
.group-card-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px; }
.group-card-footer {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid #f0ebe1; padding-top: 16px;
}
.group-card-price { font-family: 'Cormorant Garamond', serif; }
.group-card-price small { font-size: 0.72rem; color: var(--text-muted); font-family: 'DM Sans', sans-serif; }
.group-card-price strong { font-size: 1.4rem; color: var(--gold); }
.group-card-price em { font-size: 0.75rem; color: var(--text-muted); font-style: normal; }
.group-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.group-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.group-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .group-benefits { grid-template-columns: repeat(2, 1fr); }
    .group-packages { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .group-benefits { grid-template-columns: 1fr; }
    .group-packages { grid-template-columns: 1fr; }
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
            <span class="current">Group Safaris</span>
        </div>
        <h1 class="page-hero-title">Group Safari <em>Tours</em></h1>
        <p class="page-hero-sub">Join fellow travelers on shared safari adventures. Meet new people, share experiences and explore Tanzania together.</p>
    </div>
</div>

<section class="group-content">
    <div class="group-intro">
        <span class="sec-label">Shared Adventures</span>
        <h2>Explore Tanzania <em>Together</em></h2>
        <p>Our group safari tours bring together like-minded travelers from around the world. Share the thrill of spotting the Big Five, swap stories over bush dinners and create friendships that last a lifetime.</p>
        <p>Group safaris are also a fantastic way to make Tanzania more affordable without compromising on quality. You will share a vehicle with fellow explorers, guided by one of our expert safari leaders, while visiting the same iconic destinations as our private tours.</p>
    </div>

    <div class="group-benefits">
        <div class="group-benefit">
            <div class="group-benefit-icon"><i class="fas fa-users"></i></div>
            <h4>Social & Fun</h4>
            <p>Travel with a small group of like-minded adventurers. Share the excitement, laughter and wonder of an African safari together.</p>
        </div>
        <div class="group-benefit">
            <div class="group-benefit-icon"><i class="fas fa-hand-holding-usd"></i></div>
            <h4>More Affordable</h4>
            <p>Split vehicle costs, guide fees and accommodation expenses with your group for a premium experience at a lower price per person.</p>
        </div>
        <div class="group-benefit">
            <div class="group-benefit-icon"><i class="fas fa-heart"></i></div>
            <h4>Shared Experience</h4>
            <p>Witnessing a lion hunt or a river crossing is even more incredible when you share it with others who feel the same awe.</p>
        </div>
    </div>

    <div class="group-packages-label">
        <span class="sec-label">Group Packages</span>
        <h2 class="sec-title">Group Safari <em>Packages</em></h2>
    </div>

    <div class="group-packages">
        <div class="group-card">
            <div class="group-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Group Safari" loading="lazy">
                <span class="group-card-badge">Group</span>
            </div>
            <div class="group-card-body">
                <div class="group-card-meta">
                    <span><i class="fas fa-clock"></i> 4 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro</span>
                    <span><i class="fas fa-users"></i> Group</span>
                </div>
                <h3 class="group-card-title">Ngorongoro Crater Group Safari</h3>
                <p class="group-card-desc">Join a group of fellow travelers on a four-day adventure to the Ngorongoro Crater. Affordable, fun and unforgettable with shared game drives and bush camps.</p>
                <div class="group-card-footer">
                    <div class="group-card-price">
                        <small>From</small>
                        <strong>$1,200</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/ngorongoro-crater-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="group-card">
            <div class="group-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti Group Safari" loading="lazy">
                <span class="group-card-badge">Group</span>
            </div>
            <div class="group-card-body">
                <div class="group-card-meta">
                    <span><i class="fas fa-clock"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti & Ngorongoro</span>
                    <span><i class="fas fa-users"></i> Group</span>
                </div>
                <h3 class="group-card-title">Serengeti & Ngorongoro Group Safari</h3>
                <p class="group-card-desc">Five days covering two of Tanzania's top parks. Share a Land Cruiser with new friends and enjoy group bush dinners under the stars.</p>
                <div class="group-card-footer">
                    <div class="group-card-price">
                        <small>From</small>
                        <strong>$1,600</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/serengeti-ngorongoro-group" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="group-card">
            <div class="group-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Classic Tanzania Group Safari" loading="lazy">
                <span class="group-card-badge">Group</span>
            </div>
            <div class="group-card-body">
                <div class="group-card-meta">
                    <span><i class="fas fa-clock"></i> 7 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park</span>
                    <span><i class="fas fa-users"></i> Group</span>
                </div>
                <h3 class="group-card-title">Classic Tanzania Group Safari</h3>
                <p class="group-card-desc">A seven-day group journey through Tarangire, Serengeti, Ngorongoro and Lake Manyara. The complete Tanzania circuit with a social twist.</p>
                <div class="group-card-footer">
                    <div class="group-card-price">
                        <small>From</small>
                        <strong>$2,200</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/classic-tanzania-group" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="group-cta">
    <h2>Join a <em style="color:var(--gold-light);">Group</em> Safari</h2>
    <p>Ready to meet fellow adventurers and explore Tanzania together? Check our upcoming group departure dates or ask us about forming a custom group.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Find a Group Safari</a>
</section>
@endsection
