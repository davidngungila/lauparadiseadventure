@extends('layouts.app')

@section('page-title', 'Lake Manyara National Park | Birdwatcher\'s Paradise Tanzania')
@section('meta-description', 'Visit Lake Manyara — famous for flamingos, tree-climbing lions and stunning birdlife. A compact gem of Tanzania\'s northern safari circuit.')
@section('meta-keywords', 'Lake Manyara National Park, flamingos Tanzania, tree climbing lions, birdwatching Tanzania, Manyara safari')
@section('canonical', 'https://www.lauparadiseadventure.com/destinations/lake-manyara')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Lake Manyara National Park Safari",
    "description": "Visit Lake Manyara — famous for flamingos, tree-climbing lions and stunning birdlife.",
    "touristType": "Nature Enthusiast",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "1100",
        "highPrice": "2800",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/destinations">Destinations</a>
            <span>/</span>
            <span class="current">Lake Manyara</span>
        </div>
        <h1 class="page-hero-title">Lake Manyara <em>National Park</em></h1>
        <p class="page-hero-sub">The Birdwatcher's Paradise</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-feather"></i> 400+ Bird Species</div>
            <div class="page-hero-stat"><i class="fas fa-paw"></i> Tree-Climbing Lions</div>
            <div class="page-hero-stat"><i class="fas fa-water"></i> Flamingo Flocks</div>
        </div>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">Discover <em>Lake Manyara</em></h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Lake Manyara National Park is a compact yet incredibly diverse gem covering 330 km² along the Great Rift Valley floor. Famous for its groundwater forests, alkaline lake that turns pink with thousands of flamingos and the rare spectacle of tree-climbing lions, Manyara packs remarkable variety into a small area. The park stretches from the Rift Valley escarpment to the lakeshore, creating a range of habitats from dense jungle to open grasslands and hot springs. Ernest Hemingway called it "the loveliest [place] I had seen in Africa."
        </p>
    </div>
</section>

{{-- Highlights --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Highlights</div>
            <h2 class="sec-title">Why <em>Lake Manyara</em> is Special</h2>
        </div>
    </div>

    <div class="detail-highlights" style="max-width: 1000px;">
        <div class="detail-highlight">
            <i class="fas fa-dove"></i>
            <span><strong>Flamingo Flocks</strong> — Thousands of flamingos line the alkaline lakeshore</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-cat"></i>
            <span><strong>Tree-Climbing Lions</strong> — Rare behavior seen lounging in acacia branches</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-feather-alt"></i>
            <span><strong>400+ Bird Species</strong> — One of Africa's richest birding destinations</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-leaf"></i>
            <span><strong>Groundwater Forest</strong> — Lush tropical jungle fed by underground springs</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-mountain"></i>
            <span><strong>Rift Valley Setting</strong> — Dramatic escarpment backdrop and scenic views</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-hot-tub"></i>
            <span><strong>Hot Springs</strong> — Geothermal springs on the southern lakeshore</span>
        </div>
    </div>
</section>

{{-- Best Time to Visit --}}
<section style="background: var(--smoke);">
    <div style="max-width: 1000px;">
        <div class="sec-label">Planning</div>
        <h2 class="sec-title">Best Time to <em>Visit</em></h2>
        <p class="sec-sub" style="max-width: 700px;">Lake Manyara is accessible year-round. The dry season offers the best game viewing, while the wet season brings spectacular birdlife.</p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 40px;">
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-sun" style="color: var(--gold); margin-right: 6px;"></i> Dry Season (June — October)
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Best for general wildlife viewing. Animals are easier to spot as vegetation thins. Lions and elephants are frequently seen. The groundwater forest is particularly atmospheric.</p>
            </div>
            <div style="background: var(--white); border-radius: 16px; padding: 28px; border-left: 4px solid var(--info);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-dove" style="color: var(--info); margin-right: 6px;"></i> Wet Season (November — May)
                </h3>
                <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7;">Peak birdwatching season with migratory species. The lake swells and flamingo flocks are enormous. Lush green scenery with fewer visitors. Great photographic opportunities.</p>
            </div>
        </div>

        <div style="margin-top: 30px; background: var(--white); border-radius: 14px; padding: 20px 24px; display: flex; align-items: center; gap: 14px;">
            <i class="fas fa-clock" style="color: var(--gold); font-size: 1.2rem;"></i>
            <div>
                <strong style="color: var(--earth);">Recommended Duration</strong>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 2px;">1 to 2 days, making it an ideal day trip or stop on the way to Ngorongoro and Serengeti.</p>
            </div>
        </div>
    </div>
</section>

{{-- Related Tours --}}
<section style="background: var(--cream);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Safari Tours</div>
            <h2 class="sec-title">Lake Manyara <em>Tours</em></h2>
            <p class="sec-sub">Explore this compact paradise on a day trip or as part of a northern circuit adventure.</p>
        </div>
        <a href="/safaris" class="btn-outline-dark">View All Safaris <i class="fas fa-arrow-right" style="margin-left: 6px;"></i></a>
    </div>

    <div class="tours-grid">
        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Lake Manyara day trip — flamingos and forest" loading="lazy">
                <span class="tour-badge">Day Trip</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 1 Day</span>
                    <span><i class="fas fa-map-marker-alt"></i> Lake Manyara</span>
                </div>
                <h3 class="tour-name">Lake Manyara Day Safari</h3>
                <p class="tour-desc">A full-day safari into Lake Manyara National Park. Explore the groundwater forest, spot flamingos and search for the famous tree-climbing lions.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$280</strong>
                        <em>/ person</em>
                    </div>
                    <a href="/safaris" class="btn-sm">View Details</a>
                </div>
            </div>
        </div>

        <div class="tour-card">
            <div class="tour-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Northern Circuit with Lake Manyara" loading="lazy">
                <span class="tour-badge">Combined</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 5 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Northern Circuit</span>
                </div>
                <h3 class="tour-name">Classic Northern Circuit</h3>
                <p class="tour-desc">Start with Lake Manyara's flamingos, then explore Tarangire, Serengeti and Ngorongoro. The ultimate 5-day northern Tanzania experience.</p>
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
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg" alt="Birdwatching safari at Lake Manyara" loading="lazy">
                <span class="tour-badge">Birding</span>
            </div>
            <div class="tour-body">
                <div class="tour-meta">
                    <span><i class="fas fa-calendar"></i> 3 Days</span>
                    <span><i class="fas fa-map-marker-alt"></i> Manyara & Tarangire</span>
                </div>
                <h3 class="tour-name">Rift Valley Birding Safari</h3>
                <p class="tour-desc">A specialized birding tour through Lake Manyara and Tarangire. Target over 500 species including flamingos, pelicans and raptors.</p>
                <div class="tour-footer">
                    <div class="tour-price">
                        <small>From</small>
                        <strong>$1,500</strong>
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
        <p style="color: rgba(255,255,255,0.6); margin-bottom: 30px;">Pair Lake Manyara with other northern circuit highlights.</p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap; justify-content: center;">
            <a href="/destinations/tarangire" class="btn-primary"><i class="fas fa-tree"></i> Tarangire</a>
            <a href="/destinations/ngorongoro" class="btn-outline"><i class="fas fa-mountain"></i> Ngorongoro</a>
            <a href="/destinations/serengeti" class="btn-outline"><i class="fas fa-binoculars"></i> Serengeti</a>
            <a href="/experiences/bird-watching" class="btn-outline"><i class="fas fa-binoculars"></i> Bird Watching</a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Experience Lake Manyara's Beauty</h2>
        <p>Let us include Lake Manyara in your perfect Tanzania itinerary.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Safari</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Lake%20Manyara%20safari." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
