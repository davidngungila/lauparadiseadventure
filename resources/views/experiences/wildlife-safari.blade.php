@extends('layouts.app')

@section('page-title', 'Wildlife Safari Tanzania | Big Five Safari Tours | LAU Paradise Adventure')
@section('meta-description', 'Experience world-class wildlife safaris in Tanzania. Spot lions, elephants, rhinos, leopards and buffalo across Serengeti, Ngorongoro and Tarangire.')
@section('meta-keywords', 'wildlife safari Tanzania, Big Five safari, Serengeti safari, Ngorongoro safari, Tarangire elephants')
@section('canonical', 'https://www.lauparadiseadventure.com/experiences/wildlife-safari')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Wildlife Safari Tanzania",
    "description": "Experience world-class wildlife safaris in Tanzania. Spot lions, elephants, rhinos, leopards and buffalo across Serengeti, Ngorongoro and Tarangire.",
    "url": "https://www.lauparadiseadventure.com/experiences/wildlife-safari",
    "touristType": "Wildlife Enthusiast",
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
.cta-banner-dark {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.cta-banner-dark h2 {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 700; color: var(--white); margin-bottom: 12px;
}
.cta-banner-dark p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
</style>
@endsection

@section('content')
<div class="page-hero page-hero-wildlife">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/experiences">Experiences</a>
            <span>/</span>
            <span class="current">Wildlife Safari</span>
        </div>
        <h1 class="page-hero-title">Wildlife <em>Safari</em></h1>
        <p class="page-hero-sub">Encounter Africa's most iconic animals in their natural habitat across Tanzania's legendary national parks</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-paw"></i> Big Five</div>
            <div class="page-hero-stat"><i class="fas fa-map-marker-alt"></i> 4 Major Parks</div>
            <div class="page-hero-stat"><i class="fas fa-binoculars"></i> Expert Guides</div>
        </div>
    </div>
</div>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <span class="sec-label">Wildlife Safari</span>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Tanzania's <em style="color:var(--gold);font-style:italic;">Wildlife</em> at Its Best</h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Tanzania is one of Africa's premier wildlife destinations, home to over 4 million wild animals across its national parks and conservation areas. From the endless plains of the Serengeti to the lush caldera of Ngorongoro, every game drive promises unforgettable encounters with the continent's most majestic creatures.</p>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">With over 30% of its land designated as protected areas, Tanzania offers some of the best wildlife viewing on the planet. Whether you're a first-time visitor or a seasoned safari enthusiast, the diversity and abundance of wildlife here will leave you breathless.</p>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">The <em style="color:var(--gold);font-style:italic;">Big Five</em></h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Tanzania is one of the few places in Africa where you can spot all of the Big Five in a single trip. These iconic animals are the highlight of any safari experience.</p>
        <div style="display:grid;grid-template-columns:repeat(5,1fr);gap:20px;margin:30px 0;" class="big-five-responsive">
            <div style="text-align:center;padding:28px 16px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.3s;">
                <div style="width:60px;height:60px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.4rem;color:var(--gold);"><i class="fas fa-paw"></i></div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Lion</h4>
                <p style="font-size:0.78rem;color:var(--text-muted);line-height:1.5;">The Serengeti is home to one of Africa's largest lion populations, with prides often spotted on rocky kopjes.</p>
            </div>
            <div style="text-align:center;padding:28px 16px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:60px;height:60px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.4rem;color:var(--gold);"><i class="fas fa-paw"></i></div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Leopard</h4>
                <p style="font-size:0.78rem;color:var(--text-muted);line-height:1.5;">Elusive and solitary, leopards are frequently seen lounging in acacia trees throughout the Serengeti.</p>
            </div>
            <div style="text-align:center;padding:28px 16px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:60px;height:60px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.4rem;color:var(--gold);"><i class="fas fa-paw"></i></div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Elephant</h4>
                <p style="font-size:0.78rem;color:var(--text-muted);line-height:1.5;">Tarangire hosts the largest elephant herds in Tanzania, with over 3,000 individuals roaming the savanna.</p>
            </div>
            <div style="text-align:center;padding:28px 16px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:60px;height:60px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.4rem;color:var(--gold);"><i class="fas fa-paw"></i></div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Rhino</h4>
                <p style="font-size:0.78rem;color:var(--text-muted);line-height:1.5;">Ngorongoro Crater is one of the best places to see endangered black rhinos in their natural habitat.</p>
            </div>
            <div style="text-align:center;padding:28px 16px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:60px;height:60px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.4rem;color:var(--gold);"><i class="fas fa-paw"></i></div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Buffalo</h4>
                <p style="font-size:0.78rem;color:var(--text-muted);line-height:1.5;">Massive herds of Cape buffalo graze across the Serengeti and Ngorongoro, often near water sources.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Best <em style="color:var(--gold);font-style:italic;">Destinations</em> for Wildlife</h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Each park in Tanzania offers a unique wildlife experience. Here are the top destinations for your wildlife safari.</p>
        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin:30px 0;" class="dest-responsive">
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Serengeti National Park</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The Serengeti is the ultimate predator destination. Home to lions, leopards, cheetahs and hyenas, its vast plains host the largest concentration of wildlife in Africa. The Great Migration passes through annually.</p>
                </div>
            </div>
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Ngorongoro Crater</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The world's largest intact volcanic crater offers unmatched wildlife density. Over 25,000 animals roam this natural amphitheatre, including the rare black rhino and the famous "Big Five."</p>
                </div>
            </div>
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Tarangire National Park</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Tarangire is Tanzania's elephant paradise, hosting the largest elephant population in the country. During the dry season, massive herds gather along the Tarangire River alongside lions, leopards and wild dogs.</p>
                </div>
            </div>
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Lake Manyara National Park</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">A compact park that packs a punch with tree-climbing lions, huge flocks of flamingos, elephants, giraffes and over 400 bird species. Perfect for a half-day or full-day wildlife experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Best Time & <em style="color:var(--gold);font-style:italic;">Safari Duration</em></h2>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin:30px 0;" class="tips-responsive">
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-sun" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Dry Season (Jun–Oct)</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The best time for wildlife viewing. Animals gather around water sources making them easier to spot. Clear skies and cool temperatures ideal for game drives.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-cloud-rain" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Green Season (Nov–May)</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Lush landscapes, fewer crowds and excellent birding. Calving season in Serengeti (Jan–Mar) offers dramatic predator-prey encounters and newborn animals.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-calendar-check" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Recommended Duration</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">A minimum of 3 days is recommended for a basic safari. For a comprehensive experience covering multiple parks, 5–7 days is ideal.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Recommended <em style="color:var(--gold);font-style:italic;">Wildlife Safaris</em></h2>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:30px;" class="tours-responsive">
            <div class="tour-card">
                <div class="tour-img">
                    <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Serengeti Big Five Safari" loading="lazy">
                    <span class="tour-badge">Best Seller</span>
                </div>
                <div class="tour-body">
                    <div class="tour-meta">
                        <span><i class="fas fa-clock"></i> 5 Days</span>
                        <span><i class="fas fa-map-marker-alt"></i> Serengeti</span>
                    </div>
                    <h3 class="tour-name">Serengeti Big Five Safari</h3>
                    <p class="tour-desc">Five days of premium wildlife viewing through the Serengeti plains with expert guides and luxury lodge accommodation.</p>
                    <div class="tour-footer">
                        <div class="tour-price"><small>From</small> <strong>$2,800</strong> <em>/ person</em></div>
                        <a href="/safaris/serengeti-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-img">
                    <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324377/7-Days-Mount-Kilimanjaro-Climb-Lemosho-Route-2.webp.bv.webp" alt="Ngorongoro Crater Safari" loading="lazy">
                    <span class="tour-badge">Budget Friendly</span>
                </div>
                <div class="tour-body">
                    <div class="tour-meta">
                        <span><i class="fas fa-clock"></i> 4 Days</span>
                        <span><i class="fas fa-map-marker-alt"></i> Ngorongoro</span>
                    </div>
                    <h3 class="tour-name">Ngorongoro Crater Safari</h3>
                    <p class="tour-desc">Descend into the world's largest intact volcanic crater, home to over 25,000 animals including the rare black rhino.</p>
                    <div class="tour-footer">
                        <div class="tour-price"><small>From</small> <strong>$1,200</strong> <em>/ person</em></div>
                        <a href="/safaris/ngorongoro-crater-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-img">
                    <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046232/long-exposure-river-through-jungle-inlucz.jpg" alt="Tarangire Elephant Safari" loading="lazy">
                    <span class="tour-badge">Wildlife</span>
                </div>
                <div class="tour-body">
                    <div class="tour-meta">
                        <span><i class="fas fa-clock"></i> 3 Days</span>
                        <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                    </div>
                    <h3 class="tour-name">Tarangire Elephant Safari</h3>
                    <p class="tour-desc">Experience Tanzania's elephant capital with massive herds gathering along the Tarangire River during the dry season.</p>
                    <div class="tour-footer">
                        <div class="tour-price"><small>From</small> <strong>$950</strong> <em>/ person</em></div>
                        <a href="/safaris/tarangire-safari" class="btn-sm">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner-dark">
    <h2>Ready for Your Wildlife Safari?</h2>
    <p>Let us design the perfect wildlife experience tailored to your interests and budget. From Big Five encounters to predator-prey drama, your adventure awaits.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan My Safari</a>
</section>
@endsection
