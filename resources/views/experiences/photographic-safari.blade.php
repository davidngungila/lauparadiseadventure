@extends('layouts.app')

@section('page-title', 'Photographic Safari Tanzania | Wildlife Photography Tours | LAU Paradise Adventure')
@section('meta-description', 'Capture stunning wildlife and landscapes on a specialized photographic safari. Expert guides, prime locations and photography-friendly vehicles.')
@section('meta-keywords', 'photographic safari Tanzania, wildlife photography tour, Tanzania photo safari, nature photography Africa')
@section('canonical', 'https://www.lauparadiseadventure.com/experiences/photographic-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766262419/beautiful-zebra-wild.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Photographic Safari Tanzania",
    "description": "Capture stunning wildlife and landscapes on a specialized photographic safari. Expert guides, prime locations and photography-friendly vehicles.",
    "url": "https://www.lauparadiseadventure.com/experiences/photographic-safari",
    "touristType": "Photographer",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    }
}
</script>
    @endverbatim
@endsection

@section('content')
<div class="page-hero" style="position:relative;height:65vh;min-height:500px;display:flex;flex-direction:column;justify-content:flex-end;padding:0 8% 60px;overflow:hidden;">
    <div class="page-hero-bg" style="position:absolute;inset:0;background-size:cover;background-position:center;background-repeat:no-repeat;background-image:url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766262419/beautiful-zebra-wild.jpg');"></div>
    <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(26,18,9,0.82) 40%,rgba(26,18,9,0.3) 100%);"></div>
    <div style="position:relative;z-index:2;">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/experiences">Experiences</a>
            <span>/</span>
            <span class="current">Photography</span>
        </div>
        <h1 class="page-hero-title">Photographic <em>Safari</em></h1>
        <p class="page-hero-sub">Capture the wild beauty of Tanzania with expert guides who know exactly where and when to find the perfect shot.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-camera"></i> Pro Vehicles</div>
            <div class="page-hero-stat"><i class="fas fa-sun"></i> Golden Hour Drives</div>
            <div class="page-hero-stat"><i class="fas fa-map-marker-alt"></i> Prime Locations</div>
        </div>
    </div>
</div>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <span class="sec-label">Photographic Safari</span>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Your Shot at <em style="color:var(--gold);font-style:italic;">Africa's Best Frames</em></h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Tanzania offers some of the most dramatic wildlife photography opportunities on the planet. From intimate lion portraits on the Serengeti plains to the chaotic beauty of a Mara River crossing, every moment is a frame waiting to be captured.</p>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;">Our photographic safaris are designed specifically for photographers, with extended game drives timed for the best light, vehicles modified for stability and shooting angles, and guides who understand both wildlife behaviour and composition.</p>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:30px;">What Makes Our Photo Safaris <em style="color:var(--gold);font-style:italic;">Different</em></h2>

        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin:30px 0;" class="photo-features-grid">
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-car"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Photography-Friendly Vehicles</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Pop-up roofs, bean bags for stability, sliding windows for unobstructed views and extra legroom for long lenses. Our vehicles are built for photographers, not just passengers.</p>
                </div>
            </div>
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-user-tie"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Professional Photo Guides</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Our guides are photographers themselves. They understand animal behaviour to predict action, position vehicles for the best light and help with camera settings and composition.</p>
                </div>
            </div>
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-sun"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Extended Golden Hour Drives</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">We depart before dawn and return after sunset. The first and last hours of light produce the most dramatic images — warm tones, long shadows and spectacular skies.</p>
                </div>
            </div>
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marked-alt"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Prime Location Selection</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">We position ourselves in the heart of the action — whether that's the Serengeti plains for migration, Ngorongoro for Big Five or Tarangire for massive elephant herds.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Photography <em style="color:var(--gold);font-style:italic;">Highlights</em></h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:30px;">Tanzania offers a wealth of photographic subjects year-round. Here are the highlights you can expect.</p>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin:30px 0;" class="photo-highlights-grid">
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-paw" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Big Five Portraits</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Close-range encounters with lions, leopards, elephants, rhinos and buffalo. Our guides position you for eye-level shots with natural backgrounds.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-water" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Migration Photography</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Dramatic river crossings, massive herds on the move, predator-prey action. The Great Migration offers Africa's most photogenic wildlife spectacle.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-mountain" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Landscapes & Silhouettes</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Acacia trees against golden skies, Kilimanjaro as a backdrop, baobab sunsets. Tanzania's landscapes are as photographic as its wildlife.</p>
            </div>
        </div>
        <div style="padding:22px;background:rgba(200,150,62,0.08);border:1px solid var(--gold-pale);border-radius:var(--radius-md);margin-top:10px;">
            <p style="font-size:0.88rem;color:var(--earth);line-height:1.65;"><strong style="color:var(--gold);">Recommended Gear:</strong> A 100–400mm telephoto covers most safari situations. Bring a wide-angle for landscapes and a mid-range zoom for environmental portraits. We provide bean bags and charging stations at camp.</p>
        </div>
    </div>
</section>

<section style="padding:70px 8%;background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);text-align:center;">
    <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:700;color:var(--white);margin-bottom:12px;">Plan a Photography Safari</h2>
    <p style="color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:550px;margin-left:auto;margin-right:auto;">Tell us your photography goals and preferred subjects. We'll design a safari that maximizes your time in the best locations with the best light.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan Photography Safari</a>
</section>
@endsection
