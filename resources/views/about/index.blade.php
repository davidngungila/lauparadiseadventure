@extends('layouts.app')

@section('page-title', 'About LAU Paradise Adventure | Tanzania Tour Operator')
@section('meta-description', 'Learn about LAU Paradise Adventure — a locally owned Tanzania travel company dedicated to creating authentic safari, mountain and beach experiences.')
@section('meta-keywords', 'about LAU Paradise Adventure, Tanzania tour operator, Tanzania travel company, Moshi Tanzania, local safari company')
@section('canonical', 'https://www.lauparadiseadventure.com/about')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046472/team6.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TravelAgency",
    "name": "LAU Paradise Adventure",
    "alternateName": "LAU Paradise",
    "url": "https://www.lauparadiseadventure.com",
    "logo": "https://www.lauparadiseadventure.com/lau-adventuress-logo.png",
    "description": "LAU Paradise Adventure is a Tanzania-based travel company dedicated to creating memorable safari, mountain and beach experiences.",
    "foundingDate": "2020",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Moshi",
        "addressLocality": "Moshi",
        "addressCountry": "TZ"
    },
    "telephone": "+255683163219",
    "email": "info@lauparadiseadventure.com",
    "sameAs": [
        "https://www.facebook.com/",
        "https://www.instagram.com/",
        "https://www.tiktok.com/",
        "https://www.youtube.com/"
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "reviewCount": "500"
    }
}
</script>
    @endverbatim
@endsection

@section('extra-css')
<style>
.about-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046472/team6.jpg'); }
.about-mission { background: var(--cream); padding: 80px 8%; }
.about-mission-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.about-mission-text h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 16px; }
.about-mission-text p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.8; margin-bottom: 18px; }
.about-mission-img { position: relative; }
.about-mission-img-main { width: 100%; height: 400px; object-fit: cover; border-radius: 20px; }
.about-mission-img-float {
    position: absolute; bottom: -20px; right: -20px;
    width: 180px; height: 140px; object-fit: cover;
    border-radius: 14px; border: 4px solid var(--cream);
}

.values-section { background: var(--smoke); padding: 80px 8%; }
.values-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 40px; }
.value-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 30px; text-align: center;
    box-shadow: var(--shadow-sm); transition: transform 0.3s, box-shadow 0.3s;
}
.value-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.value-card-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    margin: 0 auto 18px; font-size: 1.4rem; color: var(--gold);
}
.value-card h4 { font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 8px; }
.value-card p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; }

.why-section { background: var(--cream); padding: 80px 8%; }
.why-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-top: 40px; }
.why-card {
    display: flex; gap: 20px; padding: 28px;
    background: var(--white); border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm); transition: transform 0.3s;
}
.why-card:hover { transform: translateY(-3px); }
.why-card-icon {
    width: 56px; height: 56px; border-radius: 14px;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    font-size: 1.3rem; color: var(--gold); flex-shrink: 0;
}
.why-card h4 { font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px; }
.why-card p { font-size: 0.85rem; color: var(--text-muted); line-height: 1.6; }

.stats-section-about { background: var(--dark); padding: 60px 8%; }
.stats-grid-about { display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; }
.stat-about { text-align: center; }
.stat-about-icon { width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; font-size: 1.2rem; color: var(--gold); }
.stat-about-num { font-family: 'Bebas Neue', sans-serif; font-size: 3rem; color: var(--gold-light); line-height: 1; margin-bottom: 6px; }
.stat-about-label { font-size: 0.8rem; color: rgba(255,255,255,0.6); letter-spacing: 1px; text-transform: uppercase; }

.team-section-about { background: var(--smoke); padding: 80px 8%; }
.team-grid-about { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 40px; }
.team-card-about {
    background: var(--white); border-radius: var(--radius-lg);
    overflow: hidden; box-shadow: var(--shadow-sm);
    transition: transform 0.3s, box-shadow 0.3s;
}
.team-card-about:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.team-card-about-img { height: 280px; overflow: hidden; }
.team-card-about-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.team-card-about:hover .team-card-about-img img { transform: scale(1.06); }
.team-card-about-body { padding: 22px; text-align: center; }
.team-card-about-name { font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 4px; }
.team-card-about-role { font-size: 0.78rem; color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-weight: 600; }
.team-card-about-bio { font-size: 0.82rem; color: var(--text-muted); line-height: 1.6; margin-top: 10px; }

.about-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.about-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--white); margin-bottom: 12px; }
.about-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.about-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 1024px) {
    .about-mission-layout { grid-template-columns: 1fr; gap: 40px; }
    .values-grid { grid-template-columns: repeat(2, 1fr); }
    .why-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .values-grid { grid-template-columns: 1fr; }
    .stats-grid-about { grid-template-columns: repeat(2, 1fr); gap: 30px; }
    .team-grid-about { grid-template-columns: 1fr; }
}
</style>
@endsection

@section('content')
<div class="page-hero page-hero-about">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046472/team6.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">About</span>
        </div>
        <h1 class="page-hero-title">About <em>LAU Paradise Adventure</em></h1>
        <p class="page-hero-sub">A proudly locally owned Tanzania travel company creating authentic safari, mountain and beach experiences.</p>
    </div>
</div>

<section class="about-mission">
    <div class="about-mission-layout">
        <div class="about-mission-text">
            <span class="sec-label">Who We Are</span>
            <h2 class="sec-title">Your Tanzania <em>Adventure</em> Partners</h2>
            <h3>Our Story</h3>
            <p>LAU Paradise Adventure is a Tanzania-based travel company dedicated to creating memorable safari, mountain and beach experiences. Based in Moshi, Tanzania, we are proudly 100% locally owned and operated.</p>
            <p>We started with a simple belief: that the best way to experience Tanzania is through the eyes of locals who grew up surrounded by its wildlife, culture and natural beauty. Every member of our team is passionate about sharing the magic of this incredible country with travelers from around the world.</p>
            <h3>Our Mission</h3>
            <p>To connect travelers with the beauty, wildlife, culture and adventure of Tanzania through personalized and responsible travel experiences. We believe that travel should be transformative — for our guests and for the communities and environments we visit.</p>
        </div>
        <div class="about-mission-img">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046472/team6.jpg" alt="LAU Paradise Adventure team in Tanzania" class="about-mission-img-main" loading="lazy">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Safari experience in Tanzania" class="about-mission-img-float" loading="lazy">
        </div>
    </div>
</section>

<section class="values-section">
    <div class="sec-header" style="justify-content: center;">
        <div style="text-align: center;">
            <span class="sec-label" style="justify-content: center;">Our Values</span>
            <h2 class="sec-title" style="text-align: center;">What We <em>Stand For</em></h2>
            <p class="sec-sub" style="text-align: center; margin: 12px auto 0;">The principles that guide every trip we create and every experience we deliver.</p>
        </div>
    </div>
    <div class="values-grid">
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-shield-alt"></i></div>
            <h4>Safety</h4>
            <p>Your safety is our top priority on every adventure. Our guides are trained in first aid and our vehicles are maintained to the highest standards.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-award"></i></div>
            <h4>Excellence</h4>
            <p>We deliver exceptional service and unforgettable experiences. Every detail matters, from your first inquiry to your final farewell.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-heart"></i></div>
            <h4>Authenticity</h4>
            <p>Genuine Tanzania experiences with local knowledge. We share the real Tanzania — its people, traditions and hidden gems.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-leaf"></i></div>
            <h4>Sustainability</h4>
            <p>Responsible tourism supporting communities and conservation. We protect the natural heritage we are so lucky to share with you.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <h4>Hospitality</h4>
            <p>Warm, personal service from first inquiry to farewell. We treat every guest like family because that is the Tanzanian way.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-paint-brush"></i></div>
            <h4>Personalization</h4>
            <p>Every trip designed around you. No cookie-cutter tours — we craft unique itineraries based on your interests and dreams.</p>
        </div>
    </div>
</section>

<section class="why-section">
    <div class="sec-header">
        <div>
            <span class="sec-label">Why Choose Us</span>
            <h2 class="sec-title">Why Travel With <em>LAU Paradise</em></h2>
            <p class="sec-sub">We are more than a tour operator — we are your local partners in creating the trip of a lifetime.</p>
        </div>
    </div>
    <div class="why-grid">
        <div class="why-card">
            <div class="why-card-icon"><i class="fas fa-map-marked-alt"></i></div>
            <div>
                <h4>Local Knowledge</h4>
                <p>Based in Tanzania with deep destination expertise. We know every trail, every watering hole and every hidden gem that most visitors never discover.</p>
            </div>
        </div>
        <div class="why-card">
            <div class="why-card-icon"><i class="fas fa-paint-brush"></i></div>
            <div>
                <h4>Personalized Journeys</h4>
                <p>Trips designed around your interests and budget. Every itinerary is crafted specifically for you — no two trips are ever the same.</p>
            </div>
        </div>
        <div class="why-card">
            <div class="why-card-icon"><i class="fas fa-user-tie"></i></div>
            <div>
                <h4>Professional Guides</h4>
                <p>Experienced, licensed guides dedicated to your experience. Passionate about wildlife and trained to make every moment memorable.</p>
            </div>
        </div>
        <div class="why-card">
            <div class="why-card-icon"><i class="fas fa-leaf"></i></div>
            <div>
                <h4>Responsible Tourism</h4>
                <p>Supporting local communities and wildlife conservation. Every trip contributes to protecting Tanzania's natural heritage.</p>
            </div>
        </div>
    </div>
</section>

<section class="stats-section-about">
    <div class="stats-grid-about">
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-smile"></i></div>
            <div class="stat-about-num">500+</div>
            <div class="stat-about-label">Happy Travelers</div>
        </div>
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-route"></i></div>
            <div class="stat-about-num">50+</div>
            <div class="stat-about-label">Tour Packages</div>
        </div>
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-star"></i></div>
            <div class="stat-about-num">5.0</div>
            <div class="stat-about-label">Average Rating</div>
        </div>
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-flag"></i></div>
            <div class="stat-about-num">100%</div>
            <div class="stat-about-label">Locally Owned</div>
        </div>
    </div>
</section>

<section class="team-section-about">
    <div class="sec-header" style="justify-content: center;">
        <div style="text-align: center;">
            <span class="sec-label" style="justify-content: center;">Our Team</span>
            <h2 class="sec-title" style="text-align: center;">Meet the <em>Team</em></h2>
            <p class="sec-sub" style="text-align: center; margin: 12px auto 0;">The passionate people behind every LAU Paradise Adventure experience.</p>
        </div>
    </div>
    <div class="team-grid-about">
        <div class="team-card-about">
            <div class="team-card-about-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046472/team6.jpg" alt="Founder of LAU Paradise Adventure" loading="lazy">
            </div>
            <div class="team-card-about-body">
                <h3 class="team-card-about-name">LAU Paradise Founder</h3>
                <span class="team-card-about-role">Founder & CEO</span>
                <p class="team-card-about-bio">Born and raised in Moshi, Tanzania. Passionate about sharing the beauty of Tanzania with the world through authentic and responsible travel experiences.</p>
            </div>
        </div>
        <div class="team-card-about">
            <div class="team-card-about-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Safari Operations Manager" loading="lazy">
            </div>
            <div class="team-card-about-body">
                <h3 class="team-card-about-name">Safari Operations</h3>
                <span class="team-card-about-role">Operations Manager</span>
                <p class="team-card-about-bio">Oversees every safari detail from vehicle maintenance to guide training. Ensuring every trip runs smoothly and every guest has an exceptional experience.</p>
            </div>
        </div>
        <div class="team-card-about">
            <div class="team-card-about-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Kilimanjaro Trek Manager" loading="lazy">
            </div>
            <div class="team-card-about-body">
                <h3 class="team-card-about-name">Kilimanjaro Team</h3>
                <span class="team-card-about-role">Trek Operations</span>
                <p class="team-card-about-bio">Experienced mountain crew with decades of combined Kilimanjaro experience. Safety-focused and dedicated to helping every trekker reach the summit.</p>
            </div>
        </div>
    </div>
</section>

<section class="about-cta">
    <h2>Ready to Start Your Adventure?</h2>
    <p>Let us create an unforgettable Tanzania experience designed just for you. Get in touch today.</p>
    <div class="about-cta-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Contact Us</a>
        <a href="/safaris" class="btn-outline"><i class="fas fa-binoculars"></i> View Safaris</a>
    </div>
</section>
@endsection
