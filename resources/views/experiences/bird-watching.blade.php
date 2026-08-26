@extends('layouts.app')

@section('page-title', 'Bird Watching Tanzania | 1000+ Species in the Wild | LAU Paradise Adventure')
@section('meta-description', "Discover Tanzania's incredible birdlife — over 1,000 species from flamingos and pelicans to fish eagles and secretary birds.")
@section('meta-keywords', 'bird watching Tanzania, birding safari, Tanzania birds, flamingos Lake Manyara, bird watching tour')
@section('canonical', 'https://www.lauparadiseadventure.com/experiences/bird-watching')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Bird Watching Tanzania",
    "description": "Discover Tanzania's incredible birdlife — over 1,000 species from flamingos and pelicans to fish eagles and secretary birds.",
    "url": "https://www.lauparadiseadventure.com/experiences/bird-watching",
    "touristType": "Bird Watcher",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    }
}
</script>
    @endverbatim
@endsection

@section('content')
<div class="page-hero" style="position:relative;height:65vh;min-height:500px;display:flex;flex-direction:column;justify-content:flex-end;padding:0 8% 60px;overflow:hidden;">
    <div class="page-hero-bg" style="position:absolute;inset:0;background-size:cover;background-position:center;background-repeat:no-repeat;background-image:url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046169/closeup-shot-beautiful-bird-sitting-pick-up_enaih2.jpg');"></div>
    <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(26,18,9,0.82) 40%,rgba(26,18,9,0.3) 100%);"></div>
    <div style="position:relative;z-index:2;">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/experiences">Experiences</a>
            <span>/</span>
            <span class="current">Bird Watching</span>
        </div>
        <h1 class="page-hero-title">Bird Watching <em>in Tanzania</em></h1>
        <p class="page-hero-sub">Over 1,000 bird species across diverse ecosystems from flamingos to fish eagles.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-dove"></i> 1,000+ Species</div>
            <div class="page-hero-stat"><i class="fas fa-map-marker-alt"></i> Top Birding Sites</div>
            <div class="page-hero-stat"><i class="fas fa-binoculars"></i> Expert Birding Guides</div>
        </div>
    </div>
</div>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <span class="sec-label">Bird Watching</span>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Tanzania's <em style="color:var(--gold);font-style:italic;">Birdlife</em> Paradise</h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Tanzania is a premier birding destination in Africa, with over 1,000 recorded bird species — nearly half of all species found on the continent. From massive flocks of lesser flamingos on soda lakes to the iconic African fish eagle soaring over Rift Valley lakes, Tanzania offers birding experiences that rival the world's best.</p>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;">Whether you're a dedicated lister with hundreds of species already under your belt or a casual nature lover who enjoys a splash of colour, Tanzania's avian diversity will leave you spellbound. The country's varied habitats — from tropical forests and montane grasslands to soda lakes and coastal mangroves — ensure an extraordinary range of species in a compact area.</p>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:30px;">Top <em style="color:var(--gold);font-style:italic;">Birding Destinations</em></h2>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-water"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Lake Manyara National Park</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Famous for its tree-climbing lions and enormous flocks of flamingos. Over 400 species recorded, including pelicans, storks, kingfishers and the crowned eagle. The groundwater forests host numerous forest species rarely seen elsewhere.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marker-alt"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Serengeti National Park</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Over 500 bird species inhabit the Serengeti, including raptors, bustards and secretary birds. During the migration, enormous flocks of queleas and starlings follow the herds. The Kopjes host specialized cliff-dwelling species.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-mountain"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Arusha National Park</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">A compact park perfect for a half-day birding excursion. Home to the stunning turaco, narina trogon and numerous forest birds. Mount Meru's slopes host montane species including the scarlet-tufted malachite sunbird.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-tree"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Tarangire National Park</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Excellent for raptors and dry-country species. The park hosts Kori bustards (the world's heaviest flying bird), yellow-collared lovebirds and numerous vulture species. The baotab woodland attracts species unique to the area.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Best Time for <em style="color:var(--gold);font-style:italic;">Birding</em></h2>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin:30px 0;" class="birding-tips-grid">
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-plane-departure" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Migratory Species (Nov–Apr)</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Over 200 Palearctic migrants arrive from Europe and Asia. This is the best time for rare sightings including African emerald cuckoo, variety of warblers and European swallows.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-feather" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Breeding Season (Jun–Nov)</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Resident species are in breeding plumage with stunning displays. The dry season concentrates birds around water sources making them easier to observe and photograph.</p>
            </div>
            <div style="padding:28px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);text-align:center;">
                <i class="fas fa-sun" style="font-size:1.6rem;color:var(--gold);margin-bottom:12px;"></i>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:6px;">Year-Round Birding</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Tanzania is a year-round birding destination. Resident species like lilac-breasted rollers, superb starlings and yellow-billed hornbills are always present and spectacular.</p>
            </div>
        </div>
        <div style="padding:22px;background:rgba(200,150,62,0.08);border:1px solid var(--gold-pale);border-radius:var(--radius-md);margin-top:10px;">
            <p style="font-size:0.88rem;color:var(--earth);line-height:1.65;"><strong style="color:var(--gold);">Tip:</strong> We recommend combining bird watching with a standard safari. Early morning game drives double as excellent birding sessions, and our guides are trained to spot both mammals and birds.</p>
        </div>
    </div>
</section>

<section style="padding:70px 8%;background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);text-align:center;">
    <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:700;color:var(--white);margin-bottom:12px;">Plan a Birding Safari</h2>
    <p style="color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:550px;margin-left:auto;margin-right:auto;">Whether you're adding birding to an existing safari or planning a dedicated birding trip, we'll design it for maximum species diversity.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Get In Touch</a>
</section>
@endsection
