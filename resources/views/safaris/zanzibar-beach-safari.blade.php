@extends('layouts.app')

@section('page-title', 'Zanzibar Beach & Safari Holiday | Tanzania Beach Safari')
@section('meta-description', "Five days on safari followed by four days of island paradise. Snorkeling, spice tours and relaxation on Zanzibar's white sand beaches.")
@section('meta-keywords', 'Zanzibar beach safari, Tanzania beach holiday, Serengeti and Zanzibar, beach and safari combo, Tanzania beach safari')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/zanzibar-beach-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Zanzibar Beach & Safari Holiday | Tanzania Beach Safari",
    "description": "Five days on safari followed by four days of island paradise. Snorkeling, spice tours and relaxation on Zanzibar's white sand beaches.",
    "url": "https://www.lauparadiseadventure.com/safaris/zanzibar-beach-safari",
    "touristType": "Safari",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "3600",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Zanzibar Beach & Safari</span>
        </div>
        <h1 class="page-hero-title">Zanzibar Beach & <em>Safari</em> Holiday</h1>
        <p class="page-hero-sub">Five days on safari followed by four days of island paradise. Snorkeling, spice tours and relaxation on Zanzibar's white sand beaches.</p>
    </div>
</div>

<section class="luxury-content">
    <div class="luxury-intro">
        <span class="sec-label">Beach & Safari</span>
        <h2>Safari <em>Adventure</em> Meets Island Paradise</h2>
        <p>The perfect combination of wildlife and relaxation. Spend five thrilling days on safari in the Serengeti and Ngorongoro Crater, then fly to Zanzibar for four days of barefoot luxury on pristine white sand beaches.</p>
        <p>Snorkel in crystal-clear waters, explore Stone Town's historic alleys, visit a spice plantation and simply unwind under swaying palm trees. This 9-day holiday gives you the best of both worlds.</p>
    </div>

    <div class="luxury-packages">
        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 1 - Tarangire National Park" loading="lazy">
                <span class="luxury-card-badge">Safari</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 1</span>
                </div>
                <h3 class="luxury-card-title">Tarangire National Park</h3>
                <p class="luxury-card-desc">Begin your safari with an afternoon game drive through Tarangire, meeting the park's great elephant herds beneath towering baobabs.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 2 - Ngorongoro Crater" loading="lazy">
                <span class="luxury-card-badge">Safari</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 2</span>
                </div>
                <h3 class="luxury-card-title">Ngorongoro Crater</h3>
                <p class="luxury-card-desc">Descend into the world's largest intact volcanic crater and track the Big Five, from black rhino to dense lion prides on the crater floor.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 3 - Central Serengeti" loading="lazy">
                <span class="luxury-card-badge">Safari</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 3</span>
                </div>
                <h3 class="luxury-card-title">Central Serengeti</h3>
                <p class="luxury-card-desc">Drive across the endless plains into central Serengeti and begin searching for lion, leopard, elephant and buffalo across the golden savanna.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 4 - Seronera Valley" loading="lazy">
                <span class="luxury-card-badge">Safari</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 4</span>
                </div>
                <h3 class="luxury-card-title">Seronera Valley</h3>
                <p class="luxury-card-desc">A full day in the Seronera Valley, the Serengeti's predator capital, where resident lion prides and leopards stalk the riverine woodlands.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 5 - Serengeti to Zanzibar" loading="lazy">
                <span class="luxury-card-badge">Safari</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 5</span>
                </div>
                <h3 class="luxury-card-title">Serengeti & Fly to Zanzibar</h3>
                <p class="luxury-card-desc">Morning game drive hunting the Great Migration herds, then board a scenic bush flight to Zanzibar and settle into beach resort life.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 6 - Zanzibar Beach Resort" loading="lazy">
                <span class="luxury-card-badge">Beach</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 6</span>
                </div>
                <h3 class="luxury-card-title">Beach Resort</h3>
                <p class="luxury-card-desc">Unwind on Zanzibar's white sand beaches, swim in the warm turquoise Indian Ocean and relax under the swaying palms of your beachfront resort.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 7 - Snorkeling & Dhow Cruise" loading="lazy">
                <span class="luxury-card-badge">Beach</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 7</span>
                </div>
                <h3 class="luxury-card-title">Snorkeling & Dhow Cruise</h3>
                <p class="luxury-card-desc">Snorkel the vibrant coral reefs teeming with tropical fish, then set sail on a traditional dhow for a golden sunset cruise along the coast.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 8 - Stone Town & Spice Tour" loading="lazy">
                <span class="luxury-card-badge">Beach</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 8</span>
                </div>
                <h3 class="luxury-card-title">Stone Town & Spice Tour</h3>
                <p class="luxury-card-desc">Wander Stone Town's narrow historic alleys and visit a spice plantation, tasting cloves, vanilla and exotic fruits grown across the island.</p>
            </div>
        </div>

        <div class="luxury-card">
            <div class="luxury-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Day 9 - Departure" loading="lazy">
                <span class="luxury-card-badge">Beach</span>
            </div>
            <div class="luxury-card-body">
                <div class="luxury-card-meta">
                    <span><i class="fas fa-calendar-day"></i> Day 9</span>
                </div>
                <h3 class="luxury-card-title">Departure</h3>
                <p class="luxury-card-desc">One last morning on the beach before transferring to the airport for your flight home, refreshed from an unforgettable safari and island holiday.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included in Your <em>Beach & Safari</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">The complete safari and beach experience.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text">
                <h4>Safari</h4>
                <p>5-day Serengeti and Ngorongoro safari with 4x4 Land Cruiser and guide.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-umbrella-beach"></i></div>
            <div class="included-text">
                <h4>Beach Resort</h4>
                <p>4 nights at a beachfront resort on Zanzibar's stunning east coast.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-plane"></i></div>
            <div class="included-text">
                <h4>Flights</h4>
                <p>Scenic bush flights between Serengeti and Zanzibar, both ways.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-swimmer"></i></div>
            <div class="included-text">
                <h4>Snorkeling</h4>
                <p>Guided snorkeling trip to Zanzibar's vibrant coral reefs.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-leaf"></i></div>
            <div class="included-text">
                <h4>Spice Tour</h4>
                <p>Guided tour of a Zanzibar spice plantation with tasting.</p>
            </div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text">
                <h4>All Meals</h4>
                <p>Full-board dining throughout safari and beach portions.</p>
            </div>
        </div>
    </div>
</section>

<section class="luxury-cta">
    <h2>Book My <em style="color:var(--gold-light);">Beach & Safari</em></h2>
    <p>Ready for the ultimate beach and safari holiday? Contact our team to plan your Zanzibar adventure.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book My Beach & Safari</a>
</section>
@endsection
