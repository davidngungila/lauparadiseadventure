@extends('layouts.app')

@section('page-title', 'Tanzania Family Safari Tours | Family-Friendly Safari Packages')
@section('meta-description', 'Discover Tanzania with your family. Child-friendly itineraries, private vehicles, educational wildlife experiences and safe travel for all ages.')
@section('meta-keywords', 'family safari Tanzania, family-friendly safari, Tanzania family holiday, kids safari Africa, family adventure Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/family-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tanzania Family Safari Tours | Family-Friendly Safari Packages",
    "description": "Discover Tanzania with your family. Child-friendly itineraries, private vehicles, educational wildlife experiences and safe travel for all ages.",
    "url": "https://www.lauparadiseadventure.com/safaris/family-safari",
    "touristType": "Safari",
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
.family-content { padding: 70px 8%; }
.family-intro { max-width: 800px; margin-bottom: 50px; }
.family-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.family-intro h2 em { color: var(--gold); font-style: italic; }
.family-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }
.family-features { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-bottom: 60px; }
.family-feature {
    display: flex; gap: 18px; padding: 28px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); transition: 0.3s;
}
.family-feature:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.family-feature-icon {
    width: 52px; height: 52px; border-radius: 14px;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    font-size: 1.2rem; color: var(--gold); flex-shrink: 0;
}
.family-feature-text h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.1rem;
    font-weight: 700; color: var(--earth); margin-bottom: 4px;
}
.family-feature-text p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.7; }
.family-packages-label { margin-bottom: 30px; }
.family-packages { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-bottom: 60px; }
.family-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-md); transition: 0.3s;
}
.family-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.family-card-img { position: relative; height: 240px; overflow: hidden; }
.family-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.family-card:hover .family-card-img img { transform: scale(1.06); }
.family-card-badge {
    position: absolute; top: 14px; left: 14px;
    background: var(--gold); color: var(--dark);
    padding: 4px 14px; border-radius: 20px;
    font-size: 0.68rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;
}
.family-card-body { padding: 24px; }
.family-card-meta { display: flex; gap: 14px; margin-bottom: 10px; flex-wrap: wrap; }
.family-card-meta span { font-size: 0.75rem; color: var(--text-muted); display: flex; align-items: center; gap: 5px; }
.family-card-title {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px; line-height: 1.3;
}
.family-card-desc { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 18px; }
.family-card-footer {
    display: flex; justify-content: space-between; align-items: center;
    border-top: 1px solid #f0ebe1; padding-top: 16px;
}
.family-card-price { font-family: 'Cormorant Garamond', serif; }
.family-card-price small { font-size: 0.72rem; color: var(--text-muted); font-family: 'DM Sans', sans-serif; }
.family-card-price strong { font-size: 1.4rem; color: var(--gold); }
.family-card-price em { font-size: 0.75rem; color: var(--text-muted); font-style: normal; }
.family-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.family-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.family-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .family-features { grid-template-columns: 1fr; }
    .family-packages { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .family-packages { grid-template-columns: 1fr; }
}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Family Safaris</span>
        </div>
        <h1 class="page-hero-title">Tanzania Family <em>Safaris</em></h1>
        <p class="page-hero-sub">Create lifelong memories with your family on a safe, fun and educational safari adventure across Tanzania.</p>
    </div>
</div>

<section class="family-content">
    <div class="family-intro">
        <span class="sec-label">Family Adventures</span>
        <h2>Safari Fun for the <em>Whole Family</em></h2>
        <p>Tanzania is one of the best family safari destinations in the world. Our family-friendly packages are designed to keep children engaged, safe and excited while giving parents the comfort and flexibility they need.</p>
        <p>From interactive wildlife educational programs to child-friendly game drive schedules, every detail is crafted with families in mind. We offer private vehicles so your family can travel together, and our guides are experienced in making safaris fun and memorable for guests of all ages.</p>
    </div>

    <div class="family-features">
        <div class="family-feature">
            <div class="family-feature-icon"><i class="fas fa-child"></i></div>
            <div class="family-feature-text">
                <h4>Child-Friendly Itineraries</h4>
                <p>Activities, game drives and rest stops designed to keep kids happy, curious and energized throughout the trip.</p>
            </div>
        </div>
        <div class="family-feature">
            <div class="family-feature-icon"><i class="fas fa-graduation-cap"></i></div>
            <div class="family-feature-text">
                <h4>Educational Wildlife Experience</h4>
                <p>Guides bring the bush to life with interactive lessons about animals, habitats and conservation that inspire young minds.</p>
            </div>
        </div>
        <div class="family-feature">
            <div class="family-feature-icon"><i class="fas fa-balance-scale"></i></div>
            <div class="family-feature-text">
                <h4>Flexible & Relaxed Pace</h4>
                <p>No rushed schedules. We plan around your family's rhythm with built-in downtime, shorter drives and rest days.</p>
            </div>
        </div>
        <div class="family-feature">
            <div class="family-feature-icon"><i class="fas fa-shield-alt"></i></div>
            <div class="family-feature-text">
                <h4>Safe & Comfortable Travel</h4>
                <p>Child seats, family-friendly lodges with connecting rooms and guides trained in family safety protocols.</p>
            </div>
        </div>
    </div>

    <div class="family-packages-label">
        <span class="sec-label">Family Packages</span>
        <h2 class="sec-title">Family Safari <em>Packages</em></h2>
    </div>

    <div class="family-packages">
        <div class="family-card">
            <div class="family-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Tanzania Family Adventure Safari" loading="lazy">
                <span class="family-card-badge">Best for Families</span>
            </div>
            <div class="family-card-body">
                <div class="family-card-meta">
                    <span><i class="fas fa-clock"></i> 10 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Multi-park</span>
                    <span><i class="fas fa-users"></i> Family</span>
                </div>
                <h3 class="family-card-title">Tanzania Family Adventure</h3>
                <p class="family-card-desc">Ten days exploring Tarangire, Serengeti, Ngorongoro and more with child-friendly activities, private guides and comfortable family lodges throughout.</p>
                <div class="family-card-footer">
                    <div class="family-card-price">
                        <small>From</small>
                        <strong>$2,600</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/family-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="family-card">
            <div class="family-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Family Safari" loading="lazy">
                <span class="family-card-badge">Family</span>
            </div>
            <div class="family-card-body">
                <div class="family-card-meta">
                    <span><i class="fas fa-clock"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro & Manyara</span>
                    <span><i class="fas fa-users"></i> Family</span>
                </div>
                <h3 class="family-card-title">Ngorongoro & Manyara Family Safari</h3>
                <p class="family-card-desc">A shorter family-friendly itinerary covering two of Tanzania's most accessible parks. Lake Manyara's tree-climbing lions and Ngorongoro's crater floor are perfect for kids.</p>
                <div class="family-card-footer">
                    <div class="family-card-price">
                        <small>From</small>
                        <strong>$1,800</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/ngorongoro-manyara-family" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="family-card">
            <div class="family-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Safari & Zanzibar Family Holiday" loading="lazy">
                <span class="family-card-badge">Safari + Beach</span>
            </div>
            <div class="family-card-body">
                <div class="family-card-meta">
                    <span><i class="fas fa-clock"></i> 12 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Safari + Zanzibar</span>
                    <span><i class="fas fa-users"></i> Family</span>
                </div>
                <h3 class="family-card-title">Safari & Zanzibar Family Holiday</h3>
                <p class="family-card-desc">Combine the adventure of a family safari with the relaxation of Zanzibar's beaches. Snorkeling, spice tours and sandcastle days for the kids.</p>
                <div class="family-card-footer">
                    <div class="family-card-price">
                        <small>From</small>
                        <strong>$3,400</strong>
                        <em> / person</em>
                    </div>
                    <a href="/safaris/safari-zanzibar-family" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="family-cta">
    <h2>Plan Your Family's <em style="color:var(--gold-light);">Tanzania</em> Adventure</h2>
    <p>Let us create a safe, exciting and unforgettable family safari experience. We handle every detail so you can focus on making memories together.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Family Safari</a>
</section>
@endsection
