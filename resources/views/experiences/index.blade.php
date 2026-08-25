@extends('layouts.app')

@section('page-title', 'Tanzania Experiences | Wildlife, Culture & Adventure | LAU Paradise Adventure')
@section('meta-description', 'Discover unique Tanzania experiences — wildlife safaris, Great Migration, cultural tours, bird watching, photography tours and honeymoon adventures.')
@section('meta-keywords', 'Tanzania experiences, wildlife safari Tanzania, Great Migration, cultural tours Tanzania, bird watching, photography safari, honeymoon safari')
@section('canonical', 'https://www.lauparadiseadventure.com/experiences')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Tanzania Experiences",
    "description": "Discover unique Tanzania experiences — wildlife safaris, Great Migration, cultural tours, bird watching, photography tours and honeymoon adventures.",
    "url": "https://www.lauparadiseadventure.com/experiences",
    "mainEntity": {
        "@type": "ItemList",
        "itemListElement": [
            {"@type": "TouristTrip", "position": 1, "name": "Wildlife Safari", "url": "https://www.lauparadiseadventure.com/experiences/wildlife-safari"},
            {"@type": "TouristTrip", "position": 2, "name": "Great Migration", "url": "https://www.lauparadiseadventure.com/experiences/great-migration"},
            {"@type": "TouristTrip", "position": 3, "name": "Cultural Tours", "url": "https://www.lauparadiseadventure.com/experiences/cultural-tours"},
            {"@type": "TouristTrip", "position": 4, "name": "Bird Watching", "url": "https://www.lauparadiseadventure.com/experiences/bird-watching"},
            {"@type": "TouristTrip", "position": 5, "name": "Photography Safari", "url": "https://www.lauparadiseadventure.com/experiences/photographic-safari"},
            {"@type": "TouristTrip", "position": 6, "name": "Honeymoon", "url": "https://www.lauparadiseadventure.com/experiences/honeymoon"}
        ]
    },
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    }
}
</script>
    @endverbatim
@endsection

@section('extra-css')
<style>
.experiences-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; }
.experience-card {
    background: var(--white); border-radius: var(--radius-lg);
    overflow: hidden; box-shadow: var(--shadow-sm);
    transition: 0.35s; position: relative;
}
.experience-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.experience-card-img {
    position: relative; height: 240px; overflow: hidden;
}
.experience-card-img img {
    width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s;
}
.experience-card:hover .experience-card-img img { transform: scale(1.06); }
.experience-card-img::after {
    content: ''; position: absolute; bottom: 0; left: 0; right: 0;
    height: 50%; background: linear-gradient(to top, rgba(26,18,9,0.6), transparent);
}
.experience-card-icon {
    position: absolute; bottom: -28px; left: 50%; transform: translateX(-50%);
    width: 56px; height: 56px; border-radius: 50%;
    background: var(--gold); color: var(--dark);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.3rem; z-index: 3; box-shadow: 0 4px 16px rgba(200,150,62,0.4);
    border: 3px solid var(--white);
}
.experience-card-body {
    padding: 42px 26px 28px; text-align: center;
}
.experience-card-body h3 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.3rem;
    font-weight: 700; color: var(--earth); margin-bottom: 10px;
}
.experience-card-body p {
    font-size: 0.84rem; color: var(--text-muted); line-height: 1.65;
    margin-bottom: 18px;
}
.experience-card-body .card-link {
    display: inline-flex; align-items: center; gap: 6px;
    color: var(--gold); font-weight: 600; font-size: 0.85rem;
    text-decoration: none; transition: 0.2s;
}
.experience-card-body .card-link:hover { color: var(--earth-mid); gap: 10px; }
.cta-section-experiences {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.cta-section-experiences h2 {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.cta-section-experiences p {
    color: rgba(255,255,255,0.7); font-size: 0.95rem;
    margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto;
}
@media (max-width: 1024px) { .experiences-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 768px) { .experiences-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')
<div class="page-hero page-hero-experiences">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">Experiences</span>
        </div>
        <h1 class="page-hero-title">Tanzania <em>Experiences</em></h1>
        <p class="page-hero-sub">Travel beyond the wildlife. Experience the soul of Tanzania.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-map-marker-alt"></i> 6 Unique Experiences</div>
            <div class="page-hero-stat"><i class="fas fa-users"></i> Local & Authentic</div>
            <div class="page-hero-stat"><i class="fas fa-star"></i> 4.9 Average Rating</div>
        </div>
    </div>
</div>

<section style="padding: 70px 8%; background: var(--smoke);">
    <div class="sec-header">
        <div>
            <span class="sec-label">Discover Tanzania</span>
            <h2 class="sec-title">Experiences That <em>Inspire</em></h2>
            <p class="sec-sub">From thrilling wildlife encounters to rich cultural immersion, every experience in Tanzania tells a story. Choose yours below.</p>
        </div>
    </div>

    <div class="experiences-grid">
        <div class="experience-card">
            <div class="experience-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Wildlife Safari in Tanzania — Big Five across Serengeti and Ngorongoro" loading="lazy">
                <div class="experience-card-icon"><i class="fas fa-binoculars"></i></div>
            </div>
            <div class="experience-card-body">
                <h3>Wildlife Safari</h3>
                <p>Witness Africa's iconic Big Five and diverse wildlife across Tanzania's legendary national parks.</p>
                <a href="/experiences/wildlife-safari" class="card-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="experience-card">
            <div class="experience-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp" alt="Great Migration — millions of wildebeest crossing the Serengeti" loading="lazy">
                <div class="experience-card-icon"><i class="fas fa-water"></i></div>
            </div>
            <div class="experience-card-body">
                <h3>Great Migration</h3>
                <p>Witness millions of wildebeest and zebras on the greatest wildlife spectacle on Earth.</p>
                <a href="/experiences/great-migration" class="card-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="experience-card">
            <div class="experience-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg" alt="Cultural tours — Maasai village visit and traditional dance" loading="lazy">
                <div class="experience-card-icon"><i class="fas fa-users"></i></div>
            </div>
            <div class="experience-card-body">
                <h3>Cultural Tours</h3>
                <p>Meet local communities, visit Maasai villages and experience authentic Tanzanian culture.</p>
                <a href="/experiences/cultural-tours" class="card-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="experience-card">
            <div class="experience-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Bird watching — flamingos and fish eagles at Lake Manyara" loading="lazy">
                <div class="experience-card-icon"><i class="fas fa-dove"></i></div>
            </div>
            <div class="experience-card-body">
                <h3>Bird Watching</h3>
                <p>Discover 1,000+ bird species across Tanzania's diverse ecosystems from flamingos to fish eagles.</p>
                <a href="/experiences/bird-watching" class="card-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="experience-card">
            <div class="experience-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766262419/beautiful-zebra-wild.jpg" alt="Photography safari — capturing wildlife in golden hour light" loading="lazy">
                <div class="experience-card-icon"><i class="fas fa-camera"></i></div>
            </div>
            <div class="experience-card-body">
                <h3>Photography Safari</h3>
                <p>Capture stunning wildlife and landscapes with expert guides who know the best locations.</p>
                <a href="/experiences/photographic-safari" class="card-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="experience-card">
            <div class="experience-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Honeymoon safari — romantic lodge dinner under the stars" loading="lazy">
                <div class="experience-card-icon"><i class="fas fa-heart"></i></div>
            </div>
            <div class="experience-card-body">
                <h3>Honeymoon</h3>
                <p>Create magical memories with romantic safari lodges, private beach dinners and Zanzibar sunsets.</p>
                <a href="/experiences/honeymoon" class="card-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="cta-section-experiences">
    <h2>Not Sure Which Experience?</h2>
    <p>Let us help you plan the perfect Tanzania adventure. Tell us what excites you most and we'll design an experience just for you.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Get In Touch</a>
</section>
@endsection
