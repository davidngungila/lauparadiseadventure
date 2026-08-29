@extends('layouts.app')

@section('page-title', 'Ngorongoro & Manyara Family Safari | 5-Day Kid-Friendly Tanzania Tour')
@section('meta-description', "A shorter family-friendly itinerary covering Lake Manyara's tree-climbing lions and Ngorongoro's crater floor. Perfect for kids.")
@section('meta-keywords', 'family safari Tanzania, Ngorongoro family tour, Lake Manyara kids safari, child friendly safari, family Tanzania holiday')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/ngorongoro-manyara-family')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Ngorongoro & Manyara Family Safari",
    "description": "A shorter family-friendly itinerary covering two of Tanzania's most accessible parks. Lake Manyara's tree-climbing lions and Ngorongoro's crater floor are perfect for kids.",
    "url": "https://www.lauparadiseadventure.com/safaris/ngorongoro-manyara-family",
    "touristType": "Family",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "1800",
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
.nmf-content{padding:70px 8%;}
.nmf-intro{max-width:800px;margin-bottom:50px;}
.nmf-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.nmf-intro h2 em{color:var(--gold);font-style:italic;}
.nmf-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.nmf-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.nmf-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.nmf-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.nmf-card-img{position:relative;height:240px;overflow:hidden;}
.nmf-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.nmf-card:hover .nmf-card-img img{transform:scale(1.06);}
.nmf-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.nmf-body{padding:24px;}
.nmf-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.nmf-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.nmf-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.nmf-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.nmf-cta{background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;}
.nmf-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.nmf-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.nmf-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.nmf-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
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
            <span class="current">Ngorongoro &amp; Manyara Family Safari</span>
        </div>
        <h1 class="page-hero-title">Ngorongoro &amp; Manyara <em>Family</em> Safari</h1>
        <p class="page-hero-sub">Two accessible parks, short drives and guaranteed wow moments — safari magic sized for young explorers.</p>
    </div>
</div>

<section class="nmf-content">
    <div class="nmf-intro">
        <span class="sec-label">Family Adventure</span>
        <h2>A First Safari <em>Kids</em> Never Forget</h2>
        <p>Traveling with children calls for shorter drives, flexible days and drama that lands fast. This five-day itinerary pairs Lake Manyara — famous for its tree-climbing lions, troops of baboons and flamingo-fringed shoreline — with the Ngorongoro Crater, where 25,000 animals live inside a single collapsed volcano.</p>
        <p>Both parks sit within easy reach of each other, meaning less time in the car and more time spotting wildlife. Family rooms, kid-friendly meals and a guide who keeps junior spotters engaged come standard. Children under five stay free; ages 5-11 travel at half price.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Five Days Built for <em>Families</em></h2>
    </div>

    <div class="nmf-cards">
        <div class="nmf-card">
            <div class="nmf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046232/long-exposure-river-through-jungle-inlucz.jpg" alt="Day 1 - Tarangire" loading="lazy">
                <span class="nmf-badge">Day 1</span>
            </div>
            <div class="nmf-body">
                <div class="nmf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                </div>
                <h3 class="nmf-title">Elephants &amp; Baobabs</h3>
                <p class="nmf-desc">Morning pickup from Arusha and a drive to Tarangire, where elephants gather at the river among giant baobabs on the relaxed first game drive.</p>
            </div>
        </div>

        <div class="nmf-card">
            <div class="nmf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 2 - To the Crater Rim" loading="lazy">
                <span class="nmf-badge">Day 2</span>
            </div>
            <div class="nmf-body">
                <div class="nmf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro Rim</span>
                </div>
                <h3 class="nmf-title">Up to the Caldera Edge</h3>
                <p class="nmf-desc">A relaxed morning transfer to a rim lodge with pool time, then sunset over the crater — a geography lesson no classroom matches.</p>
            </div>
        </div>

        <div class="nmf-card">
            <div class="nmf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 3 - Ngorongoro Crater" loading="lazy">
                <span class="nmf-badge">Day 3</span>
            </div>
            <div class="nmf-body">
                <div class="nmf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro Crater</span>
                </div>
                <h3 class="nmf-title">Big Five Below</h3>
                <p class="nmf-desc">Descend to the crater floor to hunt the Big Five with a kid-friendly guide, from lions on the grassland to rhinos near the soda lake.</p>
            </div>
        </div>

        <div class="nmf-card">
            <div class="nmf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046232/long-exposure-river-through-jungle-inlucz.jpg" alt="Day 4 - Lake Manyara" loading="lazy">
                <span class="nmf-badge">Day 4</span>
            </div>
            <div class="nmf-body">
                <div class="nmf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Lake Manyara</span>
                </div>
                <h3 class="nmf-title">Tree-Climbing Lions</h3>
                <p class="nmf-desc">A full Manyara day full of baboon troops, hippos and flamingos — plus the famous lions lounging in the acacia trees.</p>
            </div>
        </div>

        <div class="nmf-card">
            <div class="nmf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Day 5 - Maasai Village and Return" loading="lazy">
                <span class="nmf-badge">Day 5</span>
            </div>
            <div class="nmf-body">
                <div class="nmf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Arusha</span>
                </div>
                <h3 class="nmf-title">Maasai Boma &amp; Farewell</h3>
                <p class="nmf-desc">Visit a Maasai boma for a welcome song and beadwork before the easy afternoon drive back to Arusha.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Designed around families, not just adults.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text"><h4>Private Vehicle</h4><p>Your family's own 4x4 with flexible pacing.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-child"></i></div>
            <div class="included-text"><h4>Kid-Friendly Guide</h4><p>Guides who make game drives fun for all ages.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-bed"></i></div>
            <div class="included-text"><h4>Family Rooms</h4><p>Four nights in family rooms or adjoining tents.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Fees</h4><p>Park fees included; children under 5 enter free.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>All Meals</h4><p>Full board with kid-pleasing menu options.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-users"></i></div>
            <div class="included-text"><h4>Child Rates</h4><p>Ages 5-11 at 50%, under 5 free sharing with parents.</p></div>
        </div>
    </div>
</section>

<section class="nmf-cta">
    <h2>Give Them the <em style="color:var(--gold-light);">Wild</em> Early</h2>
    <p>Tell us your children's ages and we will tailor game-drive lengths, meals and activities around them.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan Our Family Safari</a>
</section>
@endsection
