@extends('layouts.app')

@section('page-title', 'About LAU Paradise Adventure | Tanzania Tour Operator')
@section('meta-description', 'Meet the team behind LAU Paradise Adventure — a locally owned Moshi-based Tanzania travel company crafting authentic safari, Kilimanjaro and Zanzibar experiences since 2020.')
@section('meta-keywords', 'about LAU Paradise Adventure, Tanzania tour operator, Tanzania travel company, Moshi Tanzania, local safari company')
@section('canonical', 'https://www.lauparadiseadventure.com/about')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp')

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
.about-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp'); }
.about-mission { background: var(--cream); padding: 80px 8%; }
.about-mission-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.about-mission-text h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 16px; margin-top: 26px; }
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
.team-avatar {
    height: 280px; display: flex; flex-direction: column;
    align-items: center; justify-content: center; gap: 18px;
    background: linear-gradient(160deg, #3D2B1F 0%, #1A1A1A 100%);
}
.team-avatar-circle {
    width: 110px; height: 110px; border-radius: 50%;
    background: linear-gradient(135deg, var(--gold) 0%, #A87A28 100%);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Cormorant Garamond', serif; font-weight: 700;
    font-size: 2.6rem; color: var(--dark);
    box-shadow: 0 10px 30px rgba(200,150,62,0.35);
}
.team-avatar-caption { color: rgba(255,255,255,0.45); font-size: 0.7rem; letter-spacing: 2px; text-transform: uppercase; }
.team-card-about-body { padding: 22px; text-align: center; }
.team-card-about-name { font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 4px; }
.team-card-about-role { font-size: 0.78rem; color: var(--gold); text-transform: uppercase; letter-spacing: 1px; font-weight: 600; }
.team-card-about-bio { font-size: 0.82rem; color: var(--text-muted); line-height: 1.6; margin-top: 10px; }

.testimonials-section-about { background: var(--cream); padding: 80px 8%; }
.testimonials-grid-about { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 40px; }
.testimonial-card-about {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 32px 28px; box-shadow: var(--shadow-sm);
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex; flex-direction: column; position: relative;
}
.testimonial-card-about:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.testimonial-quote-mark { font-family: 'Cormorant Garamond', serif; font-size: 4rem; color: var(--gold); opacity: 0.25; line-height: 1; position: absolute; top: 18px; right: 24px; }
.testimonial-stars { color: var(--gold); font-size: 0.85rem; letter-spacing: 3px; margin-bottom: 14px; }
.testimonial-text { font-size: 0.9rem; color: var(--text-muted); line-height: 1.8; font-style: italic; margin-bottom: 20px; flex-grow: 1; }
.testimonial-author { display: flex; align-items: center; gap: 12px; border-top: 1px solid #f0ebe1; padding-top: 16px; }
.testimonial-author-initial {
    width: 44px; height: 44px; border-radius: 50%; flex-shrink: 0;
    background: rgba(200,150,62,0.15); color: var(--gold);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Cormorant Garamond', serif; font-weight: 700; font-size: 1.1rem;
}
.testimonial-author-info strong { display: block; font-size: 0.88rem; color: var(--text); }
.testimonial-author-info span { font-size: 0.75rem; color: var(--text-muted); }

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
    .testimonials-grid-about { grid-template-columns: 1fr; max-width: 640px; margin-left: auto; margin-right: auto; }
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">About</span>
        </div>
        <h1 class="page-hero-title">About <em>LAU Paradise Adventure</em></h1>
        <p class="page-hero-sub">Born in Moshi. Built by Tanzanians. Trusted by travelers from every corner of the world.</p>
    </div>
</div>

<section class="about-mission">
    <div class="about-mission-layout">
        <div class="about-mission-text">
            <span class="sec-label">Who We Are</span>
            <h2 class="sec-title">Your Tanzania <em>Adventure</em> Partners</h2>
            <h3>Our Story</h3>
            <p>LAU Paradise Adventure began in Moshi, in the shadow of Mount Kilimanjaro, with one Land Cruiser, two chairs under a mango tree and a conviction that travelers deserved more than cookie-cutter tours. Founded in 2020 by a team born and raised on these slopes, we set out to prove that a fully local company could deliver world-class journeys.</p>
            <p>Today our fleet crosses the Serengeti plains year-round, our mountain crews have guided thousands of steps toward Uhuru Peak, and our guests sleep everywhere from luxury tented camps to family-run homestays. What has never changed is how we work: every itinerary is designed by someone who grew up with these horizons, and every trip still feels personal because it is.</p>
            <h3>Our Mission</h3>
            <p>To connect travelers with the beauty, wildlife, culture and adventure of Tanzania through personalized and responsible travel experiences. We believe travel should be transformative — for our guests, and equally for the communities and wild places that host them. When you travel with us, local families guide you, local suppliers feed you and local conservation benefits from your visit.</p>
            <h3>Our Vision</h3>
            <p>A future where tourism in Tanzania lifts the people and landscapes that make it extraordinary — where every visitor leaves as an ambassador for the country we are proud to call home.</p>
        </div>
        <div class="about-mission-img">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Travelers on safari with LAU Paradise Adventure in Tanzania" class="about-mission-img-main" loading="lazy">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Cultural experience with the Hadzabe community" class="about-mission-img-float" loading="lazy">
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
            <p>Your safety leads every decision we make. Wilderness-trained guides, first-aid certification on every departure and vehicles maintained far beyond requirement.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-award"></i></div>
            <h4>Excellence</h4>
            <p>We sweat details others overlook — the temperature of your towel after a crater walk, the timing of a sundowner, the seat with the best morning light.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-heart"></i></div>
            <h4>Authenticity</h4>
            <p>Genuine Tanzania, shared firsthand. No staged encounters — just real people, real places and the stories only locals can tell.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-leaf"></i></div>
            <h4>Sustainability</h4>
            <p>Responsible travel that gives back: fair wages, locally sourced supply chains and support for the parks and communities that host every journey.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <h4>Hospitality</h4>
            <p>In Tanzania, a guest is family. From your first WhatsApp message to your final farewell at the airport, you feel it in everything we do.</p>
        </div>
        <div class="value-card">
            <div class="value-card-icon"><i class="fas fa-paint-brush"></i></div>
            <h4>Personalization</h4>
            <p>No two travelers dream alike, so no two itineraries match. Every journey is drawn around your interests, pace and budget.</p>
        </div>
    </div>
</section>

<section class="stats-section-about">
    <div class="stats-grid-about">
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-smile"></i></div>
            <div class="stat-about-num">800+</div>
            <div class="stat-about-label">Happy Travelers</div>
        </div>
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-route"></i></div>
            <div class="stat-about-num">60+</div>
            <div class="stat-about-label">Tour Packages</div>
        </div>
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-star"></i></div>
            <div class="stat-about-num">5.0</div>
            <div class="stat-about-label">Average Rating</div>
        </div>
        <div class="stat-about">
            <div class="stat-about-icon"><i class="fas fa-calendar-check"></i></div>
            <div class="stat-about-num">6+</div>
            <div class="stat-about-label">Years of Experience</div>
        </div>
    </div>
</section>

<section class="team-section-about">
    <div class="sec-header" style="justify-content: center;">
        <div style="text-align: center;">
            <span class="sec-label" style="justify-content: center;">Our Team</span>
            <h2 class="sec-title" style="text-align: center;">Meet the <em>Team</em></h2>
            <p class="sec-sub" style="text-align: center; margin: 12px auto 0;">The passionate people behind every LAU Paradise Adventure experience. Swap the monogram tiles for photos whenever you are ready.</p>
        </div>
    </div>
    <div class="team-grid-about">
        <div class="team-card-about">
            <div class="team-avatar">
                <div class="team-avatar-circle">EL</div>
                <span class="team-avatar-caption">Founder &amp; CEO</span>
            </div>
            <div class="team-card-about-body">
                <h3 class="team-card-about-name">Emmanuel Lyimo</h3>
                <span class="team-card-about-role">Founder &amp; CEO</span>
                <p class="team-card-about-bio">Born on the slopes of Kilimanjaro, Emmanuel started LAU Paradise with one Land Cruiser and a dream. He still personally scouts every camp and meets most guests at the airport.</p>
            </div>
        </div>
        <div class="team-card-about">
            <div class="team-avatar">
                <div class="team-avatar-circle">GM</div>
                <span class="team-avatar-caption">Operations</span>
            </div>
            <div class="team-card-about-body">
                <h3 class="team-card-about-name">Grace Mwakalinga</h3>
                <span class="team-card-about-role">Safari Operations Manager</span>
                <p class="team-card-about-bio">Grace choreographs every itinerary behind the scenes — vehicle readiness, camp confirmations, park permits — so your only job is to enjoy the view.</p>
            </div>
        </div>
        <div class="team-card-about">
            <div class="team-avatar">
                <div class="team-avatar-circle">JM</div>
                <span class="team-avatar-caption">Mountain Crew</span>
            </div>
            <div class="team-card-about-body">
                <h3 class="team-card-about-name">Joseph Mosha</h3>
                <span class="team-card-about-role">Head Mountain Guide</span>
                <p class="team-card-about-bio">With over 200 summits of Kilimanjaro, Joseph leads our mountain crew and trains every porter and assistant guide in safety and summit ethics.</p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-section-about">
    <div class="sec-header" style="justify-content: center;">
        <div style="text-align: center;">
            <span class="sec-label" style="justify-content: center;">Guest Stories</span>
            <h2 class="sec-title" style="text-align: center;">What Our <em>Travelers Say</em></h2>
            <p class="sec-sub" style="text-align: center; margin: 12px auto 0;">Real words from guests who explored Tanzania with us.</p>
        </div>
    </div>
    <div class="testimonials-grid-about">
        <div class="testimonial-card-about">
            <span class="testimonial-quote-mark">&rdquo;</span>
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"We saw the Big Five in three days, but what we remember most is how Emmanuel's team treated us — like family visiting Tanzania rather than tourists passing through. Flawless from airport pickup to farewell."</p>
            <div class="testimonial-author">
                <div class="testimonial-author-initial">SB</div>
                <div class="testimonial-author-info">
                    <strong>Sarah &amp; Tom Bennett</strong>
                    <span>United Kingdom &middot; Great Migration Safari</span>
                </div>
            </div>
        </div>
        <div class="testimonial-card-about">
            <span class="testimonial-quote-mark">&rdquo;</span>
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"Summiting Kilimanjaro with Joseph's crew was the greatest achievement of my life. Their pacing, encouragement and safety focus made all the difference at 5,000 meters. Asante sana!"</p>
            <div class="testimonial-author">
                <div class="testimonial-author-initial">MW</div>
                <div class="testimonial-author-info">
                    <strong>Markus Weber</strong>
                    <span>Germany &middot; Lemosho Route Climb</span>
                </div>
            </div>
        </div>
        <div class="testimonial-card-about">
            <span class="testimonial-quote-mark">&rdquo;</span>
            <div class="testimonial-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="testimonial-text">"Safari first, then Zanzibar — twelve perfect days. Grace reorganized a flight delay within minutes and we lost barely an hour. That is the kind of backup you hope for and rarely get."</p>
            <div class="testimonial-author">
                <div class="testimonial-author-initial">EC</div>
                <div class="testimonial-author-info">
                    <strong>Emily Carter</strong>
                    <span>USA &middot; Safari &amp; Zanzibar Holiday</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-cta">
    <h2>Ready to Start Your Adventure?</h2>
    <p>Join 800-plus travelers who trusted us with their dream trip. Let us design yours next.</p>
    <div class="about-cta-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Contact Us</a>
        <a href="/safaris" class="btn-outline"><i class="fas fa-binoculars"></i> View Safaris</a>
    </div>
</section>
@endsection
