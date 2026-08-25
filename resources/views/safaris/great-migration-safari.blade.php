@extends('layouts.app')

@section('page-title', 'Great Migration Safari Tanzania | Serengeti Migration Tours')
@section('meta-description', "Experience the Great Migration across Serengeti's endless plains. Witness millions of wildebeest, dramatic river crossings and the cycle of life in Tanzania.")
@section('meta-keywords', 'Great Migration safari, Serengeti migration, wildebeest migration Tanzania, river crossing safari, Serengeti Great Migration tour')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/great-migration-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Great Migration Safari Tanzania",
    "description": "Experience the Great Migration across Serengeti's endless plains. Witness millions of wildebeest, dramatic river crossings and the cycle of life in Tanzania.",
    "url": "https://www.lauparadiseadventure.com/safaris/great-migration-safari",
    "touristType": "Tourist",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "touristDestination": {
        "@type": "TouristDestination",
        "name": "Serengeti National Park",
        "description": "Home of the Great Migration",
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -2.333,
            "longitude": 34.833
        }
    },
    "offers": {
        "@type": "Offer",
        "name": "Great Migration Luxury Safari",
        "price": "4500",
        "priceCurrency": "USD",
        "description": "8-day luxury safari through Serengeti witnessing the Great Migration"
    }
}
</script>
    @endverbatim
@endsection

@section('extra-css')
<style>
.migration-content { padding: 70px 8%; }
.migration-intro { max-width: 850px; margin-bottom: 60px; }
.migration-intro h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.4rem);
    font-weight: 700; color: var(--earth); margin-bottom: 16px; line-height: 1.2;
}
.migration-intro h2 em { color: var(--gold); font-style: italic; }
.migration-intro p { color: var(--text-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 14px; }

.migration-calendar { background: var(--smoke); padding: 70px 8%; }
.calendar-timeline { position: relative; margin-top: 40px; padding-left: 40px; }
.calendar-timeline::before {
    content: ''; position: absolute; left: 15px; top: 0; bottom: 0;
    width: 3px; background: linear-gradient(to bottom, var(--gold), var(--earth-light));
    border-radius: 2px;
}
.calendar-month {
    position: relative; margin-bottom: 36px;
    padding: 24px 28px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);
    border: 1px solid rgba(200,150,62,0.1); transition: 0.3s;
}
.calendar-month:hover { box-shadow: var(--shadow-md); border-color: rgba(200,150,62,0.3); }
.calendar-month::before {
    content: ''; position: absolute; left: -33px; top: 28px;
    width: 14px; height: 14px; border-radius: 50%;
    background: var(--gold); border: 3px solid var(--smoke);
}
.calendar-month-label {
    display: inline-block; background: rgba(200,150,62,0.12);
    border: 1px solid rgba(200,150,62,0.3); border-radius: 20px;
    padding: 3px 14px; font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 1.5px; color: var(--gold);
    margin-bottom: 10px;
}
.calendar-month h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.2rem;
    font-weight: 700; color: var(--earth); margin-bottom: 6px;
}
.calendar-month p { font-size: 0.88rem; color: var(--text-muted); line-height: 1.7; }
.calendar-month .highlight {
    display: inline-block; background: rgba(200,150,62,0.1);
    padding: 2px 10px; border-radius: 10px; font-weight: 600; color: var(--gold); font-size: 0.82rem;
}

.parks-section { padding: 70px 8%; }
.parks-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 40px; }
.park-card {
    display: flex; gap: 24px; padding: 30px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm); transition: 0.3s;
}
.park-card:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.park-card-img {
    width: 180px; height: 180px; border-radius: var(--radius-md);
    object-fit: cover; flex-shrink: 0;
}
.park-card-text h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.2rem;
    font-weight: 700; color: var(--earth); margin-bottom: 6px;
}
.park-card-text p { font-size: 0.85rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 10px; }
.park-card-tag {
    display: inline-block; background: rgba(200,150,62,0.12);
    padding: 3px 12px; border-radius: 14px;
    font-size: 0.72rem; font-weight: 600; color: var(--gold); text-transform: uppercase; letter-spacing: 1px;
}

.best-time { background: var(--earth); padding: 70px 8%; }
.best-time .sec-title { color: var(--white); }
.best-time .sec-sub { color: rgba(255,255,255,0.6); }
.best-time-content { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 40px; }
.best-time-card {
    padding: 28px; background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius-lg);
}
.best-time-card h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.15rem;
    font-weight: 700; color: var(--white); margin-bottom: 6px; display: flex; align-items: center; gap: 8px;
}
.best-time-card h4 i { color: var(--gold); }
.best-time-card p { font-size: 0.88rem; color: rgba(255,255,255,0.6); line-height: 1.7; }
.best-time-card .months {
    display: inline-block; margin-top: 10px; background: rgba(200,150,62,0.2);
    padding: 3px 12px; border-radius: 14px; font-size: 0.75rem;
    font-weight: 600; color: var(--gold-light); letter-spacing: 0.5px;
}

.duration-section { padding: 70px 8%; background: var(--cream); }
.duration-options { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 40px; }
.duration-card {
    text-align: center; padding: 32px 24px; background: var(--white);
    border-radius: var(--radius-lg); box-shadow: var(--shadow-sm);
    border: 2px solid transparent; transition: 0.3s;
}
.duration-card:hover { border-color: var(--gold); box-shadow: var(--shadow-md); }
.duration-card.recommended { border-color: var(--gold); }
.duration-card .tag {
    display: inline-block; background: var(--gold); color: var(--dark);
    padding: 3px 12px; border-radius: 14px; font-size: 0.68rem;
    font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;
}
.duration-card h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px;
}
.duration-card p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; }

.package-section { padding: 70px 8%; }
.package-highlight {
    display: grid; grid-template-columns: 1fr 1fr; gap: 50px;
    background: var(--white); border-radius: var(--radius-xl);
    overflow: hidden; box-shadow: var(--shadow-lg);
}
.package-img { height: 100%; min-height: 400px; }
.package-img img { width: 100%; height: 100%; object-fit: cover; }
.package-body { padding: 40px; display: flex; flex-direction: column; justify-content: center; }
.package-body .meta { display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 14px; }
.package-body .meta span {
    font-size: 0.78rem; color: var(--text-muted);
    display: flex; align-items: center; gap: 5px;
}
.package-body .meta span i { color: var(--gold); }
.package-body h3 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.8rem;
    font-weight: 700; color: var(--earth); margin-bottom: 12px; line-height: 1.2;
}
.package-body p { font-size: 0.9rem; color: var(--text-muted); line-height: 1.8; margin-bottom: 20px; }
.package-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 24px; }
.package-highlights span {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cream); padding: 6px 14px; border-radius: 20px;
    font-size: 0.8rem; color: var(--text); font-weight: 500;
}
.package-highlights span i { color: var(--gold); font-size: 0.75rem; }
.package-price-row { display: flex; align-items: center; gap: 20px; flex-wrap: wrap; }
.package-price-label { font-size: 0.78rem; color: var(--text-muted); }
.package-price-amount {
    font-family: 'Cormorant Garamond', serif; font-size: 2rem;
    font-weight: 700; color: var(--gold);
}
.package-price-per { font-size: 0.82rem; color: var(--text-muted); }

.migration-cta {
    background: linear-gradient(135deg, var(--dark) 0%, var(--earth) 100%);
    padding: 70px 8%; text-align: center;
}
.migration-cta h2 {
    font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.migration-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
@media (max-width: 1024px) {
    .parks-grid { grid-template-columns: 1fr; }
    .best-time-content { grid-template-columns: 1fr; }
    .duration-options { grid-template-columns: 1fr; }
    .package-highlight { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .park-card { flex-direction: column; }
    .park-card-img { width: 100%; height: 200px; }
    .calendar-timeline { padding-left: 30px; }
}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Great Migration</span>
        </div>
        <h1 class="page-hero-title">Great Migration <em>Safari</em></h1>
        <p class="page-hero-sub">Witness the world's greatest wildlife spectacle as millions of wildebeest, zebras and gazelles journey across the Serengeti plains.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-paw"></i> 1.5 Million Wildebeest</div>
            <div class="page-hero-stat"><i class="fas fa-calendar"></i> Year-Round Event</div>
            <div class="page-hero-stat"><i class="fas fa-map-marker-alt"></i> Serengeti & Beyond</div>
        </div>
    </div>
</div>

<section class="migration-content">
    <div class="migration-intro">
        <span class="sec-label">The Great Migration</span>
        <h2>What is the Great <em>Migration</em>?</h2>
        <p>The Great Migration is the largest overland wildlife migration on Earth. Every year, over 1.5 million wildebeest, joined by hundreds of thousands of zebras and Thomson's gazelles, make a continuous circular journey across the Serengeti ecosystem in Tanzania and the Maasai Mara in Kenya.</p>
        <p>Driven by ancient instincts and the search for fresh grazing, this eternal cycle covers nearly 1,800 miles and is one of nature's most dramatic and emotionally powerful events. From the mass calving season on the southern plains to the harrowing river crossings of the Mara River, the migration offers constantly changing wildlife encounters throughout the year.</p>
        <p>No two safaris during the migration are ever the same. The herds are always on the move, and the landscape shifts with them, creating a dynamic and ever-evolving safari experience.</p>
    </div>
</section>

<section class="migration-calendar">
    <div style="text-align:center; margin-bottom:10px;">
        <span class="sec-label" style="justify-content:center;">Year-Round Spectacle</span>
        <h2 class="sec-title" style="text-align:center;">Migration <em>Calendar</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">The migration is a year-round event, but each phase offers a unique experience.</p>
    </div>

    <div class="calendar-timeline">
        <div class="calendar-month">
            <span class="calendar-month-label">January - March</span>
            <h4>Calving Season on the Southern Plains</h4>
            <p>The migration congregates on the short-grass plains of the southern Serengeti and Ndutu region. This is calving season, where over 8,000 wildebeest calves are born each day. The open plains attract predators, making this one of the best times for dramatic predator-prey interactions.</p>
            <span class="highlight">Best for: Predator encounters, newborn animals, Ndutu area</span>
        </div>

        <div class="calendar-month">
            <span class="calendar-month-label">April - May</span>
            <h4>Northward Movement Begins</h4>
            <p>As the rains come, the herds begin their journey north and west through the Serengeti. They pass through the central Seronera region and into the western corridor, following the Grumeti River. This is a quieter period with fewer tourists and dramatic stormy skies.</p>
            <span class="highlight">Best for: Fewer crowds, lush landscapes, Grumeti River area</span>
        </div>

        <div class="calendar-month">
            <span class="calendar-month-label">June - October</span>
            <h4>River Crossings & Mara River Drama</h4>
            <p>The most dramatic phase of the migration. The herds reach the northern Serengeti and attempt to cross the Mara River, where crocodiles and strong currents make every crossing a life-or-death struggle. July to September is peak crossing season and the most sought-after safari experience.</p>
            <span class="highlight">Best for: River crossings, Mara River, peak wildlife density</span>
        </div>

        <div class="calendar-month">
            <span class="calendar-month-label">November - December</span>
            <h4>Return to the Southern Plains</h4>
            <p>The short rains trigger the herds to begin their return journey south. They pass through the eastern Serengeti and eventually settle back on the southern plains, completing the great circular journey. This is an excellent time for wide-angle shots of the vast herds spread across the landscape.</p>
            <span class="highlight">Best for: Return journey, fewer tourists, eastern Serengeti</span>
        </div>
    </div>
</section>

<section class="parks-section">
    <div style="text-align:center; margin-bottom:10px;">
        <span class="sec-label" style="justify-content:center;">Prime Locations</span>
        <h2 class="sec-title" style="text-align:center;">Best Parks for the <em>Migration</em></h2>
    </div>
    <div class="parks-grid">
        <div class="park-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti National Park" class="park-card-img">
            <div class="park-card-text">
                <span class="park-card-tag">Tanzania's Icon</span>
                <h4>Serengeti National Park</h4>
                <p>The heart of the Great Migration. The Serengeti's 14,750 square kilometers of savanna, kopjes and river valleys host the herds for most of the year. The park is divided into three key areas: the southern plains, central Seronera and northern Mara region.</p>
                <p><strong>Migration months:</strong> Year-round, with different areas active at different times.</p>
            </div>
        </div>
        <div class="park-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Conservation Area" class="park-card-img">
            <div class="park-card-text">
                <span class="park-card-tag">UNESCO World Heritage</span>
                <h4>Ngorongoro Conservation Area</h4>
                <p>Adjacent to the Serengeti, the Ngorongoro Conservation Area forms part of the broader migration ecosystem. The southern Serengeti plains extend into Ngorongoro, where calving season takes place on the Ndutu side.</p>
                <p><strong>Migration months:</strong> December to March (calving season on Ndutu plains).</p>
            </div>
        </div>
    </div>
</section>

<section class="best-time">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Timing Your Visit</span>
        <h2 class="sec-title" style="text-align:center;">Best Time to <em>Visit</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">The migration is always happening, but the experience varies by month and location.</p>
    </div>
    <div class="best-time-content">
        <div class="best-time-card">
            <h4><i class="fas fa-trophy"></i> Peak Migration Season</h4>
            <p>The most popular time for a migration safari. The dramatic Mara River crossings between July and September draw photographers and wildlife enthusiasts from around the world. Expect larger crowds but unmatched spectacle.</p>
            <span class="months">July - October</span>
        </div>
        <div class="best-time-card">
            <h4><i class="fas fa-baby"></i> Calving Season</h4>
            <p>Witness the miracle of thousands of wildebeest calves taking their first steps. The predator activity is intense as lions, cheetahs and hyenas take advantage of vulnerable newborns on the open plains.</p>
            <span class="months">January - March</span>
        </div>
        <div class="best-time-card">
            <h4><i class="fas fa-cloud-sun"></i> Green Season</h4>
            <p>The quieter months offer lush landscapes, dramatic skies and excellent birdwatching. Fewer tourists mean more intimate experiences and lower prices without missing the migration action.</p>
            <span class="months">April - May, November</span>
        </div>
        <div class="best-time-card">
            <h4><i class="fas fa-star"></i> Best Overall</h4>
            <p>For the full migration experience, June to October offers the widest variety of wildlife activity. However, the best time truly depends on what aspect of the migration interests you most.</p>
            <span class="months">June - October (overall best)</span>
        </div>
    </div>
</section>

<section class="duration-section">
    <div style="text-align:center; margin-bottom:10px;">
        <span class="sec-label" style="justify-content:center;">Plan Your Trip</span>
        <h2 class="sec-title" style="text-align:center;">Recommended <em>Duration</em></h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">How long should you spend on a Great Migration safari?</p>
    </div>
    <div class="duration-options">
        <div class="duration-card">
            <h4>Short Safari</h4>
            <p>A focused 4-5 day safari in one area of the Serengeti during peak migration months. Ideal for travelers on a tight schedule who want to witness the herds and experience a condensed but thrilling safari.</p>
        </div>
        <div class="duration-card recommended">
            <span class="tag">Recommended</span>
            <h4>Complete Migration</h4>
            <p>An 8-day safari covering multiple regions of the Serengeti plus Ngorongoro. This gives you the best chance of seeing different phases of the migration and diverse wildlife across varied landscapes.</p>
        </div>
        <div class="duration-card">
            <h4>Grand Expedition</h4>
            <p>A 10-12 day journey that combines the Great Migration with other Tanzania highlights including Tarangire, Lake Manyara and even Zanzibar. The ultimate Tanzania experience for those with time to explore.</p>
        </div>
    </div>
</section>

<section class="package-section">
    <div style="text-align:center; margin-bottom:40px;">
        <span class="sec-label" style="justify-content:center;">Featured Package</span>
        <h2 class="sec-title" style="text-align:center;">Our Signature <em>Migration</em> Safari</h2>
    </div>

    <div class="package-highlight">
        <div class="package-img">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration Luxury Safari" loading="lazy">
        </div>
        <div class="package-body">
            <div class="meta">
                <span><i class="fas fa-clock"></i> 8 Days / 7 Nights</span>
                <span><i class="fas fa-map-marker-alt"></i> Serengeti & Ngorongoro</span>
                <span><i class="fas fa-gem"></i> Luxury</span>
                <span><i class="fas fa-star" style="color:var(--gold)"></i> 4.9</span>
            </div>
            <h3>Great Migration Luxury Safari</h3>
            <p>Eight days following the Great Migration through the Serengeti's most spectacular regions. Stay in exclusive luxury camps positioned in prime migration zones, enjoy private game drives with an expert guide and witness nature's greatest spectacle from the comfort of premium lodges.</p>
            <p>Your journey includes the southern plains during calving season, the central Seronera region for big cat sightings and the northern Mara area for potential river crossings. Every day brings a new chapter of the migration story.</p>
            <div class="package-highlights">
                <span><i class="fas fa-check"></i> Luxury tented camps</span>
                <span><i class="fas fa-check"></i> Private 4x4 vehicle</span>
                <span><i class="fas fa-check"></i> Expert guide</span>
                <span><i class="fas fa-check"></i> All meals included</span>
                <span><i class="fas fa-check"></i> Park fees covered</span>
                <span><i class="fas fa-check"></i> Bush dinner experience</span>
            </div>
            <div class="package-price-row">
                <div>
                    <div class="package-price-label">Starting from</div>
                    <div class="package-price-amount">$4,500 <span class="package-price-per">/ person</span></div>
                </div>
                <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Book This Safari</a>
            </div>
        </div>
    </div>
</section>

<section class="migration-cta">
    <h2>Plan My <em style="color:var(--gold-light);">Migration</em> Safari</h2>
    <p>Ready to witness the Great Migration? Tell us your preferred dates and we will position you at the right place at the right time for the ultimate safari experience.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Migration Safari</a>
</section>
@endsection
