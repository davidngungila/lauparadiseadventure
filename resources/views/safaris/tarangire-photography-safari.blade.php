@extends('layouts.app')

@section('page-title', 'Tarangire Bird & Wildlife Photography | 5-Day Photo Safari')
@section('meta-description', "Five days in Tarangire and Lake Manyara photographing elephants, baobabs and over 500 bird species. Perfect for variety and color.")
@section('meta-keywords', 'Tarangire photography, bird photography Tanzania, elephant photo safari, Lake Manyara birds, 5 day photo tour')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/tarangire-photography-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tarangire Bird & Wildlife Photography",
    "description": "Five days in Tarangire and Lake Manyara, renowned for their birdlife and dramatic elephant herds. Perfect for photographers seeking variety and color.",
    "url": "https://www.lauparadiseadventure.com/safaris/tarangire-photography-safari",
    "touristType": "Photography",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2800",
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
.tps-content{padding:70px 8%;}
.tps-intro{max-width:800px;margin-bottom:50px;}
.tps-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.tps-intro h2 em{color:var(--gold);font-style:italic;}
.tps-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.tps-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.tps-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.tps-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.tps-card-img{position:relative;height:240px;overflow:hidden;}
.tps-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.tps-card:hover .tps-card-img img{transform:scale(1.06);}
.tps-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.tps-body{padding:24px;}
.tps-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.tps-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.tps-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.tps-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.tps-cta{background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;}
.tps-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.tps-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.tps-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.tps-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Tarangire Bird &amp; Wildlife Photography</span>
        </div>
        <h1 class="page-hero-title">Tarangire Bird &amp; Wildlife <em>Photography</em></h1>
        <p class="page-hero-sub">Five days of elephants against baobabs and 500+ bird species — northern Tanzania's most colorful portfolio.</p>
    </div>
</div>

<section class="tps-content">
    <div class="tps-intro">
        <span class="sec-label">Photo Safari</span>
        <h2>Color, Texture &amp; <em>Giants</em></h2>
        <p>Tarangire is a photographer's playground: colossal baobabs silhouetting elephant herds at sunset, 500-plus bird species from yellow-collared lovebirds to massive secretary birds, and predator action along the permanent river. Pair it with Lake Manyara's flamingo shallows and forest kingfishers for five days of relentless shutter work.</p>
        <p>The shorter distances mean longer sessions — we stay with subjects instead of commuting between parks. Expect dedicated golden-hour stops at known baobab vantages and patient waits at hornbill nests and water holes.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Five Days of <em>Framed</em> Color</h2>
    </div>

    <div class="tps-cards">
        <div class="tps-card">
            <div class="tps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 1 - Tarangire River Drive" loading="lazy">
                <span class="tps-badge">Day 1</span>
            </div>
            <div class="tps-body">
                <div class="tps-meta">
                    <span><i class="fas fa-camera"></i> Tarangire River</span>
                </div>
                <h3 class="tps-title">Tarangire Afternoon Drive</h3>
                <p class="tps-desc">Arrive in Tarangire and catch the golden hour along the river, framing elephant herds and baobab silhouettes in the last warm light.</p>
            </div>
        </div>

        <div class="tps-card">
            <div class="tps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046232/long-exposure-river-through-jungle-inlucz.jpg" alt="Day 2 - Full Tarangire Session" loading="lazy">
                <span class="tps-badge">Day 2</span>
            </div>
            <div class="tps-body">
                <div class="tps-meta">
                    <span><i class="fas fa-camera"></i> Tarangire River Circuit</span>
                </div>
                <h3 class="tps-title">River Circuit Day</h3>
                <p class="tps-desc">A full session along the permanent river for mega-herds of elephants, lion-in-baobab chances and lovebird colonies in dawn light.</p>
            </div>
        </div>

        <div class="tps-card">
            <div class="tps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/closeup-shot-elephants-standing-near-lake-sunset_set5ic.jpg" alt="Day 3 - Manyara Flamingos" loading="lazy">
                <span class="tps-badge">Day 3</span>
            </div>
            <div class="tps-body">
                <div class="tps-meta">
                    <span><i class="fas fa-camera"></i> Tarangire - Lake Manyara</span>
                </div>
                <h3 class="tps-title">Morning Light &amp; Manyara</h3>
                <p class="tps-desc">One last Tarangire sunrise session, then transfer to Lake Manyara for flamingo flocks, pelican flyovers and forest kingfishers.</p>
            </div>
        </div>

        <div class="tps-card">
            <div class="tps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 4 - Ngorongoro Crater" loading="lazy">
                <span class="tps-badge">Day 4</span>
            </div>
            <div class="tps-body">
                <div class="tps-meta">
                    <span><i class="fas fa-camera"></i> Ngorongoro Crater</span>
                </div>
                <h3 class="tps-title">Crater Floor Frames</h3>
                <p class="tps-desc">Descend into the Ngorongoro Crater for black rhino, lions on the grassland and flamingo reflections along the soda shallows.</p>
            </div>
        </div>

        <div class="tps-card">
            <div class="tps-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046232/long-exposure-river-through-jungle-inlucz.jpg" alt="Day 5 - Sunset Finale Return" loading="lazy">
                <span class="tps-badge">Day 5</span>
            </div>
            <div class="tps-body">
                <div class="tps-meta">
                    <span><i class="fas fa-camera"></i> Sunset Session - Arusha</span>
                </div>
                <h3 class="tps-title">Sunset Finale &amp; Return</h3>
                <p class="tps-desc">One last evening session shooting elephant silhouettes against the baobab skyline before the drive back to Arusha.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Built for lenses of every size.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-camera"></i></div>
            <div class="included-text"><h4>Photo Vehicle Setup</h4><p>Bean bags, window mounts and generous lens space.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-feather"></i></div>
            <div class="included-text"><h4>Birding Specialist Option</h4><p>Add a bird-focused guide for species-hunting days.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-hotel"></i></div>
            <div class="included-text"><h4>Four Nights</h4><p>Lodges near both parks chosen for light and location.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Park Fees</h4><p>Tarangire and Lake Manyara fees included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-bolt"></i></div>
            <div class="included-text"><h4>In-Vehicle Charging</h4><p>Inverters keep batteries topped up all day.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>All Meals</h4><p>Full board with sunrise breakfasts in the field.</p></div>
        </div>
    </div>
</section>

<section class="tps-cta">
    <h2>Fill Your Cards with <em style="color:var(--gold-light);">Color</em></h2>
    <p>Birders, wildlife shooters and landscape lovers all leave full. Tell us your focus.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Photo Days</a>
</section>
@endsection
