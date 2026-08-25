@extends('layouts.app')

@section('page-title', 'Tarangire National Park Safari | Land of Giants')
@section('meta-description', 'Discover Tarangire National Park — home to Tanzania\'s largest elephant population and ancient baobab trees. Excellent wildlife viewing and birdlife.')
@section('meta-keywords', 'Tarangire National Park, Tarangire safari, elephants Tanzania, baobab trees, birdwatching Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/destinations/tarangire')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tarangire National Park Safari",
    "description": "Discover Tarangire National Park — home to Tanzania's largest elephant population and ancient baobab trees.",
    "touristType": "Wildlife Enthusiast",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "1200",
        "highPrice": "3500",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
    }
}
</script>
    @endverbatim
@endsection

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/destinations">Destinations</a>
            <span>/</span>
            <span class="current">Tarangire</span>
        </div>
        <h1 class="page-hero-title">Tarangire <em>National Park</em></h1>
        <p class="page-hero-sub">Land of Giants</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-elephant"></i> Largest Elephant Population</div>
            <div class="page-hero-stat"><i class="fas fa-tree"></i> Ancient Baobabs</div>
            <div class="page-hero-stat"><i class="fas fa-feather"></i> 550+ Bird Species</div>
        </div>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">The <em>Tarangire</em> Experience</h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Tarangire National Park is one of Tanzania's most underrated treasures, covering 2,850 km² of diverse landscapes dominated by ancient baobab trees and the life-giving Tarangire River. During the dry season, the park becomes a magnet for wildlife as animals converge on the remaining water sources, creating one of the highest concentrations of elephants in Africa. With over 550 bird species, massive elephant herds and a wild, untouched atmosphere, Tarangire offers an authentic safari experience far from the crowds.
        </p>
    </div>
</section>

{{-- Highlights --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Highlights</div>
            <h2 class="sec-title">Why <em>Tarangire</em> is Special</h2>
        </div>
    </div>

    <div class="detail-highlights" style="max-width: 1000px;">
        <div class="detail-highlight">
            <i class="fas fa-paw"></i>
            <span><strong>Elephant Herds</strong> — Tanzania's largest population, up to 300 in a single herd</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-tree"></i>
            <span><strong>Baobab Trees</strong> — Ancient giants dotting the landscape, some over 1,000 years old</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-feather-alt"></i>
            <span><strong>550+ Bird Species</strong> — A birdwatcher's paradise with rare species year-round</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-binoculars"></i>
            <span><strong>Wildlife Diversity</strong> — Lions, leopards, giraffes, zebras and wildebeest</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-user-secret"></i>
            <span><strong>Less Crowded</strong> — An intimate safari away from the tourist trail</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-tint"></i>
            <span><strong>Tarangire River</strong> — The park's lifeblood attracting massive wildlife gatherings</span>
        </div>
    </div>
</section>

{{-- Best Time to Visit --}}
<section style="background: var(--smoke);">
    <div style="max-width: 1000px;">
        <div class="sec-label">Planning</div>
        <h2 class="sec-title">Best Time to <em>Visit</em></h2>
        <p class="sec-sub" style="max-width: 700px;">Tarangire is spectacular year-round, but the dry season brings the most dramatic wildlife concentrations.</p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 40px;">
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-sun" style="color: var(--gold); margin-right: 6px;"></i> Dry Season (June — October)
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Peak time for elephant sightings. Thousands of animals gather along the Tarangire River. Easy wildlife viewing as vegetation thins and animals concentrate near water.</p>
            </div>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--success);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-leaf" style="color: var(--success); margin-right: 6px;"></i> Wet Season (November — May)
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Lush green scenery with calving season. Excellent birdwatching with migratory species. Fewer tourists and lower prices. The swamp areas come alive with wildlife.</p>
            </div>
        </div>

        <div style="margin-top: 30px; background: var(--white); border-radius: 14px; padding: 20px 24px; display: flex; align-items: center; gap: 14px;">
            <i class="fas fa-clock" style="color: var(--gold); font-size: 1.2rem;"></i>
            <div>
                <strong style="color: var(--earth);">Recommended Duration</strong>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 2px;">2 to 3 days in Tarangire, often combined with Lake Manyara and Ngorongoro on a northern circuit safari.</p>
            </div>
        </div>
    </div>
</section>

{{-- Related Tours --}}
<section style="background: var(--cream);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Safari Tours</div>
            <h2 class="sec-title">Tarangire <em>Tours</em></h2>
            <p class="sec-sub">Experience the giants of Tarangire on these expertly guided safaris.</p>
        </div>
        <a href="/safaris" class="btn-outline-dark">View All Safaris <i class="fas fa-arrow-right" style="margin-left: 6px;"></i></a>
    </div>

    <div class="tours-grid">
        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Tarangire Safari — elephant herds near baobab" loading="lazy">
                <span class="tour-badge">Short Safari</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 2 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                </div>
                <h3 class="tour-name">Tarangire Weekend Escape</h3>
                <p class="tour-desc">A focused 2-day safari to Tarangire. Witness massive elephant herds, ancient baobabs and exceptional birdlife in this hidden gem.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$1,200</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Northern Circuit — Tarangire, Manyara, Ngorongoro" loading="lazy">
                <span class="tour-badge">Best Value</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Northern Circuit</span>
                </div>
                <h3 class="tour-name">Northern Tanzania Circuit</h3>
                <p class="tour-desc">Explore Tarangire, Lake Manyara and Ngorongoro on this classic 5-day northern circuit safari. The perfect introduction to Tanzania wildlife.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$2,400</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Birdwatching safari in Tarangire" loading="lazy">
                <span class="tour-badge">Birding</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 4 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire & Manyara</span>
                </div>
                <h3 class="tour-name">Tanzania Birdwatching Safari</h3>
                <p class="tour-desc">A specialized birding safari covering Tarangire and Lake Manyara. Over 600 species possible including rare endemics and migratory visitors.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$1,900</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/experiences/bird-watching" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Internal Links --}}
<section style="background: var(--dark); padding: 60px 8%;">
    <div style="text-align: center; max-width: 700px; margin: 0 auto;">
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; color: var(--white); margin-bottom: 14px;">Continue <em style="color: var(--gold-light);">Exploring</em></h2>
        <p style="color: rgba(255,255,255,0.6); margin-bottom: 30px;">Discover more of Tanzania's wildlife and landscapes.</p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap; justify-content: center;">
            <a href="/destinations/lake-manyara" class="btn-primary"><i class="fas fa-feather"></i> Lake Manyara</a>
            <a href="/destinations/serengeti" class="btn-outline"><i class="fas fa-binoculars"></i> Serengeti</a>
            <a href="/destinations/ngorongoro" class="btn-outline"><i class="fas fa-mountain"></i> Ngorongoro</a>
            <a href="/experiences/bird-watching" class="btn-outline"><i class="fas fa-binoculars"></i> Bird Watching</a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Discover Tarangire's Giants</h2>
        <p>Let us plan a safari that showcases the best of Tarangire National Park.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Safari</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Tarangire%20safari." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
