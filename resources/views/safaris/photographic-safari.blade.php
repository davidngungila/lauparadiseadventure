@extends('layouts.app')

@section('page-title', 'Photographic Safari Tanzania | Wildlife Photography Tours')
@section('meta-description', "Capture Tanzania's stunning wildlife on a specialized photographic safari. Expert guides, photography-friendly positioning and the best locations for wildlife photography.")
@section('meta-keywords', 'photographic safari Tanzania, wildlife photography tour, photography safari Serengeti, Tanzania photo safari, wildlife camera tour Africa')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/photographic-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766262419/beautiful-zebra-wild.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Photographic Safari Tanzania | Wildlife Photography Tours",
    "description": "Capture Tanzania's stunning wildlife on a specialized photographic safari. Expert guides, photography-friendly positioning and the best locations for wildlife photography.",
    "url": "https://www.lauparadiseadventure.com/safaris/photographic-safari",
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
.photo-content { padding: 70px 8%; }
.photo-intro { max-width: 800px; margin-bottom: 50px; }
.photo-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.photo-intro h2 em { color: var(--gold); font-style: italic; }
.photo-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }
.photo-features { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-bottom: 60px; }
.photo-feature {
    display: flex; gap: 18px; padding: 28px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); transition: 0.3s;
}
.photo-feature:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.photo-feature-icon {
    width: 52px; height: 52px; border-radius: 14px;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    font-size: 1.2rem; color: var(--gold); flex-shrink: 0;
}
.photo-feature-text h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.1rem;
    font-weight: 700; color: var(--earth); margin-bottom: 4px;
}
.photo-feature-text p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.7; }
.photo-tips { background: var(--smoke); padding: 60px 8%; }
.photo-tips-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 40px; }
.photo-tip {
    background: var(--white); padding: 28px; border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm); transition: 0.3s;
}
.photo-tip:hover { box-shadow: var(--shadow-md); }
.photo-tip-num {
    font-family: 'Bebas Neue', sans-serif; font-size: 2.4rem;
    color: var(--gold); line-height: 1; margin-bottom: 10px;
}
.photo-tip h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.1rem;
    font-weight: 700; color: var(--earth); margin-bottom: 6px;
}
.photo-tip p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.7; }
.photo-packages-label { margin-bottom: 30px; }
.photo-packages { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 60px; }
.photo-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-md); transition: 0.3s;
}
.photo-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.photo-card-img { position: relative; height: 240px; overflow: hidden; }
.photo-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.photo-card:hover .photo-card-img img { transform: scale(1.06); }
.photo-card-badge {
    position: absolute; top: 14px; left: 14px;
    background: var(--gold); color: var(--dark);
    padding: 4px 14px; border-radius: 20px;
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
}
.photo-card-body { padding: 24px; }
.photo-card-meta { display: flex; gap: 14px; margin-bottom: 10px; flex-wrap: wrap; }
.photo-card-meta span { font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 5px; }
.photo-card-title {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px; line-height: 1.3;
}
.photo-card-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px; }
.photo-card-footer {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid #f0ebe1; padding-top: 16px;
}
.photo-card-price { font-family: 'Cormorant Garamond', serif; }
.photo-card-price small { font-size: 0.72rem; color: var(--text-muted); font-family: 'DM Sans', sans-serif; }
.photo-card-price strong { font-size: 1.4rem; color: var(--gold); }
.photo-card-price em { font-size: 0.75rem; color: var(--text-muted); font-style: normal; }
.photo-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.photo-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.photo-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .photo-features { grid-template-columns: 1fr; }
    .photo-tips-grid { grid-template-columns: repeat(2, 1fr); }
    .photo-packages { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .photo-tips-grid { grid-template-columns: 1fr; }
    .photo-packages { grid-template-columns: 1fr; }
}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766262419/beautiful-zebra-wild.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Photographic Safari</span>
        </div>
        <h1 class="page-hero-title">Photographic Safari <em>Tanzania</em></h1>
        <p class="page-hero-sub">Capture Tanzania's breathtaking wildlife with specialized photographic safaris designed for photographers of all levels.</p>
    </div>
</div>

<section class="photo-content">
    <div class="photo-intro">
        <span class="sec-label">For Photographers</span>
        <h2>Photography-Focused <em>Safari</em> Adventures</h2>
        <p>Our photographic safaris are designed specifically for travelers who want to capture the beauty of Tanzania's wildlife. From specially modified vehicles with stable platforms to guides who understand composition, light and animal behavior, every detail is optimized for the perfect shot.</p>
        <p>Whether you are a seasoned professional with a full kit or an enthusiast with a smartphone, our photography guides know the best locations, angles and times of day to ensure you come home with stunning images.</p>
    </div>

    <div class="photo-features">
        <div class="photo-feature">
            <div class="photo-feature-icon"><i class="fas fa-camera-retro"></i></div>
            <div class="photo-feature-text">
                <h4>Photography-Friendly Vehicle</h4>
                <p>Modified Land Cruisers with bean bag supports, wide open sides and 360-degree visibility for unobstructed shooting angles.</p>
            </div>
        </div>
        <div class="photo-feature">
            <div class="photo-feature-icon"><i class="fas fa-binoculars"></i></div>
            <div class="photo-feature-text">
                <h4>Expert Photography Guide</h4>
                <p>Guides with professional photography experience who know animal behavior and can position you for the best light and composition.</p>
            </div>
        </div>
        <div class="photo-feature">
            <div class="photo-feature-icon"><i class="fas fa-sun"></i></div>
            <div class="photo-feature-text">
                <h4>Extended Game Drives</h4>
                <p>Early morning and late afternoon drives to capture the golden hour light that makes wildlife photography truly magical.</p>
            </div>
        </div>
        <div class="photo-feature">
            <div class="photo-feature-icon"><i class="fas fa-map-pin"></i></div>
            <div class="photo-feature-text">
                <h4>Prime Photography Locations</h4>
                <p>We know the best spots for dramatic backdrops, predator-prey interactions and sweeping landscape compositions.</p>
            </div>
        </div>
    </div>
</section>

<section class="photo-tips">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Photographer's Notes</span>
        <h2 class="sec-title" style="text-align:center;">Essential Photography <em>Tips</em> for Your Safari</h2>
    </div>
    <div class="photo-tips-grid">
        <div class="photo-tip">
            <div class="photo-tip-num">01</div>
            <h4>Lens Recommendations</h4>
            <p>A 100-400mm telephoto lens is ideal for most wildlife. Pair it with a 24-70mm for landscapes and a wide-angle for dramatic skies.</p>
        </div>
        <div class="photo-tip">
            <div class="photo-tip-num">02</div>
            <h4>Best Time for Light</h4>
            <p>Golden hour (6:00-8:00 AM and 4:30-6:30 PM) provides warm, directional light. Overcast days give soft, even lighting for portraits.</p>
        </div>
        <div class="photo-tip">
            <div class="photo-tip-num">03</div>
            <h4>Stability Matters</h4>
            <p>Use a bean bag rather than a tripod on the vehicle. Brace against the car frame for stability and use a fast shutter speed for action shots.</p>
        </div>
    </div>
</section>

<section style="padding: 70px 8%; background: var(--cream);">
    <div class="photo-packages-label">
        <span class="sec-label">Photography Packages</span>
        <h2 class="sec-title">Photographic Safari <em>Packages</em></h2>
    </div>

    <div class="photo-packages">
        <div class="photo-card">
            <div class="photo-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti Photography Safari" loading="lazy">
                <span class="photo-card-badge">Photography</span>
            </div>
            <div class="photo-card-body">
                <div class="photo-card-meta">
                    <span><i class="fas fa-clock"></i> 7 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    <span><i class="fas fa-camera"></i> Photography</span>
                </div>
                <h3 class="photo-card-title">Serengeti Photography Safari</h3>
                <p class="photo-card-desc">Seven days dedicated to photographing the Serengeti's wildlife. Early drives, extended time in the field and a photography expert guide by your side.</p>
                <div class="photo-card-footer">
                    <div class="photo-card-price">
                        <small>From</small>
                        <strong>$3,500</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/serengeti-photography-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="photo-card">
            <div class="photo-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Photography Safari" loading="lazy">
                <span class="photo-card-badge">Photography</span>
            </div>
            <div class="photo-card-body">
                <div class="photo-card-meta">
                    <span><i class="fas fa-clock"></i> 10 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Serengeti & Ngorongoro</span>
                    <span><i class="fas fa-camera"></i> Photography</span>
                </div>
                <h3 class="photo-card-title">Great Migration Photography Safari</h3>
                <p class="photo-card-desc">Ten days following the Great Migration with a focus on capturing the dramatic river crossings, vast herds and predator interactions on camera.</p>
                <div class="photo-card-footer">
                    <div class="photo-card-price">
                        <small>From</small>
                        <strong>$5,200</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/migration-photography-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="photo-card">
            <div class="photo-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Tarangire Bird & Wildlife Photography" loading="lazy">
                <span class="photo-card-badge">Photography</span>
            </div>
            <div class="photo-card-body">
                <div class="photo-card-meta">
                    <span><i class="fas fa-clock"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire & Manyara</span>
                    <span><i class="fas fa-camera"></i> Photography</span>
                </div>
                <h3 class="photo-card-title">Tarangire Bird & Wildlife Photography</h3>
                <p class="photo-card-desc">Five days in Tarangire and Lake Manyara, renowned for their birdlife and dramatic elephant herds. Perfect for photographers seeking variety and color.</p>
                <div class="photo-card-footer">
                    <div class="photo-card-price">
                        <small>From</small>
                        <strong>$2,800</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/tarangire-photography-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="photo-cta">
    <h2>Plan My <em style="color:var(--gold-light);">Photography</em> Safari</h2>
    <p>Tell us about your camera kit, your photographic goals and the wildlife you most want to capture. We will design the perfect photography safari for you.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-camera"></i> Plan Photography Safari</a>
</section>
@endsection
