@extends('layouts.app')

@section('page-title', 'Tanzania Destinations | Safari Parks & Attractions')
@section('meta-description', 'Explore Tanzania\'s iconic destinations — Serengeti, Ngorongoro, Tarangire, Lake Manyara, Kilimanjaro and Zanzibar. Plan your perfect Tanzania adventure.')
@section('meta-keywords', 'Tanzania destinations, Serengeti, Ngorongoro, Tarangire, Lake Manyara, Kilimanjaro, Zanzibar, safari parks Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/destinations')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Tanzania Destinations",
    "description": "Explore Tanzania's top destinations including Serengeti, Ngorongoro, Tarangire, Lake Manyara, Kilimanjaro and Zanzibar.",
    "url": "https://www.lauparadiseadventure.com/destinations",
    "mainEntity": {
        "@type": "ItemList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Serengeti National Park", "url": "https://www.lauparadiseadventure.com/destinations/serengeti"},
            {"@type": "ListItem", "position": 2, "name": "Ngorongoro Crater", "url": "https://www.lauparadiseadventure.com/destinations/ngorongoro"},
            {"@type": "ListItem", "position": 3, "name": "Tarangire National Park", "url": "https://www.lauparadiseadventure.com/destinations/tarangire"},
            {"@type": "ListItem", "position": 4, "name": "Lake Manyara", "url": "https://www.lauparadiseadventure.com/destinations/lake-manyara"},
            {"@type": "ListItem", "position": 5, "name": "Mount Kilimanjaro", "url": "https://www.lauparadiseadventure.com/destinations/kilimanjaro"},
            {"@type": "ListItem", "position": 6, "name": "Zanzibar", "url": "https://www.lauparadiseadventure.com/destinations/zanzibar"}
        ]
    }
}
</script>
@endverbatim
@endsection

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">Destinations</span>
        </div>
        <h1 class="page-hero-title">Tanzania <em>Destinations</em></h1>
        <p class="page-hero-sub">From ancient craters to turquoise shores, Tanzania's diversity is unmatched.</p>
    </div>
</section>

{{-- Destinations Grid --}}
<section id="destinations">
    <div class="sec-header">
        <div>
            <div class="sec-label">Explore Tanzania</div>
            <h2 class="sec-title">Our <em>Destinations</em></h2>
            <p class="sec-sub">Tanzania is home to some of Africa's most legendary landscapes and wildlife spectacles. Choose your destination and start planning.</p>
        </div>
    </div>

    <div class="dest-grid">
        {{-- Serengeti --}}
        <a href="/destinations/serengeti" class="dest-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046143/9-Days-Safari-vacation-Tanzania-Wildebeest-migration-1536x962_m0drtg.webp" alt="Serengeti National Park — vast savannah plains with wildlife" loading="lazy">
            <div class="dest-overlay">
                <span class="dest-tag">Safari</span>
                <h3 class="dest-name">Serengeti</h3>
                <div class="dest-info">
                    <span><i class="fas fa-paw"></i> The Endless Plains</span>
                    <span><i class="fas fa-binoculars"></i> Great Migration</span>
                </div>
            </div>
        </a>

        {{-- Ngorongoro --}}
        <a href="/destinations/ngorongoro" class="dest-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Ngorongoro Crater — aerial view of the caldera" loading="lazy">
            <div class="dest-overlay">
                <span class="dest-tag">UNESCO Site</span>
                <h3 class="dest-name">Ngorongoro</h3>
                <div class="dest-info">
                    <span><i class="fas fa-mountain"></i> Africa's Natural Wonder</span>
                </div>
            </div>
        </a>

        {{-- Tarangire --}}
        <a href="/destinations/tarangire" class="dest-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Tarangire National Park elephants near baobab trees" loading="lazy">
            <div class="dest-overlay">
                <span class="dest-tag">Wildlife</span>
                <h3 class="dest-name">Tarangire</h3>
                <div class="dest-info">
                    <span><i class="fas fa-tree"></i> Land of Giants</span>
                </div>
            </div>
        </a>

        {{-- Lake Manyara --}}
        <a href="/destinations/lake-manyara" class="dest-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Lake Manyara National Park flamingos along the lake" loading="lazy">
            <div class="dest-overlay">
                <span class="dest-tag">Birdlife</span>
                <h3 class="dest-name">Lake Manyara</h3>
                <div class="dest-info">
                    <span><i class="fas fa-feather"></i> Birdwatcher's Paradise</span>
                </div>
            </div>
        </a>

        {{-- Kilimanjaro --}}
        <a href="/kilimanjaro" class="dest-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Mount Kilimanjaro snow-capped peak at sunset" loading="lazy">
            <div class="dest-overlay">
                <span class="dest-tag">Trekking</span>
                <h3 class="dest-name">Mount Kilimanjaro</h3>
                <div class="dest-info">
                    <span><i class="fas fa-mountain"></i> Roof of Africa</span>
                </div>
            </div>
        </a>

        {{-- Zanzibar --}}
        <a href="/zanzibar" class="dest-card">
            <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar white sand beach and turquoise Indian Ocean" loading="lazy">
            <div class="dest-overlay">
                <span class="dest-tag">Beach</span>
                <h3 class="dest-name">Zanzibar</h3>
                <div class="dest-info">
                    <span><i class="fas fa-umbrella-beach"></i> Where Adventure Meets Paradise</span>
                </div>
            </div>
        </a>
    </div>
</section>

{{-- CTA Banner --}}
<section class="book-banner">
    <div>
        <h2>Not Sure Where to Start?</h2>
        <p>Let us build the perfect Tanzania itinerary based on your interests, budget and travel dates.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-envelope"></i> Get in Touch</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27d%20like%20help%20choosing%20a%20Tanzania%20destination." class="btn-outline" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
