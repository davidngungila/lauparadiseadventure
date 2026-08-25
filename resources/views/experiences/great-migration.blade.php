@extends('layouts.app')

@section('page-title', 'Great Migration Tanzania | Witness the Great Wildlife Spectacle | LAU Paradise Adventure')
@section('meta-description', 'Experience the Great Migration — millions of wildebeest and zebras crossing the Serengeti. River crossings, calving season and endless plains.')
@section('meta-keywords', 'Great Migration Tanzania, Serengeti migration, wildebeest migration, Mara River crossing, migration safari')
@section('canonical', 'https://www.lauparadiseadventure.com/experiences/great-migration')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Great Migration Tanzania",
    "description": "Experience the Great Migration — millions of wildebeest and zebras crossing the Serengeti. River crossings, calving season and endless plains.",
    "url": "https://www.lauparadiseadventure.com/experiences/great-migration",
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

@section('content')
<div class="page-hero" style="position:relative;height:65vh;min-height:500px;display:flex;flex-direction:column;justify-content:flex-end;padding:0 8% 60px;overflow:hidden;">
    <div class="page-hero-bg" style="position:absolute;inset:0;background-size:cover;background-position:center;background-repeat:no-repeat;background-image:url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046204/Mara-River-3-1536x1024_qflu8o.webp');"></div>
    <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(26,18,9,0.82) 40%,rgba(26,18,9,0.3) 100%);"></div>
    <div style="position:relative;z-index:2;">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/experiences">Experiences</a>
            <span>/</span>
            <span class="current">Great Migration</span>
        </div>
        <h1 class="page-hero-title">The Great <em>Migration</em></h1>
        <p class="page-hero-sub">Witness over two million wildebeest, zebras and gazelles on the greatest wildlife spectacle on Earth.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-water"></i> River Crossings</div>
            <div class="page-hero-stat"><i class="fas fa-map-marker-alt"></i> Serengeti & Mara</div>
            <div class="page-hero-stat"><i class="fas fa-calendar"></i> Year-Round Event</div>
        </div>
    </div>
</div>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <span class="sec-label">The Great Migration</span>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">What Is the <em style="color:var(--gold);font-style:italic;">Great Migration</em>?</h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">The Great Migration is the largest overland wildlife migration in the world. Every year, approximately 1.5 million wildebeest, 200,000 zebras and thousands of gazelles embark on a circular journey of over 1,800 miles through the Serengeti ecosystem in Tanzania and the Maasai Mara in Kenya.</p>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Driven by ancient instincts and the search for fresh grazing and water, this endless cycle of life and death is one of nature's greatest performances. Predators follow the herds — lions, leopards, cheetahs, hyenas and crocodiles all play their part in this epic drama.</p>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Migration <em style="color:var(--gold);font-style:italic;">Calendar</em></h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:30px;">The migration follows a predictable pattern. Here is what to expect each month of the year.</p>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-baby"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">January – March: Calving Season</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The herds gather in the southern Serengeti and Ndutu region. Over 8,000 wildebeest calves are born daily during peak calving. This is prime time for predator-prey encounters as lions, cheetahs and hyenas hunt the vulnerable newborns.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-shoe-prints"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">April – May: Northwest Movement</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The herds begin their journey northwest through the central Serengeti. This is the green season with lush landscapes, fewer tourists and excellent photographic opportunities as the animals move through the Moru Kopjes.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-water"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">June – July: Grumeti River Crossings</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The herds reach the western Serengeti and face the Grumeti River, home to giant crocodiles. Dramatic crossings occur as thousands of wildebeest plunge into the river. This marks the beginning of the dry season with excellent wildlife concentrations.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-bolt"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">August – October: Mara River Crossings</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The most dramatic phase. The herds cross the Mara River between Tanzania and Kenya, facing massive crocodiles, strong currents and steep banks. Thousands gather at the riverbanks, building courage before the chaotic crossings. This is the pinnacle of the migration.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
            <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-redo"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">November – December: Return South</h4>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The short rains begin and the herds return to the southern Serengeti plains, completing the circle. This period offers excellent birding, fewer crowds and the start of the calving cycle once again.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Best Parks & <em style="color:var(--gold);font-style:italic;">Timing</em></h2>
        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px;margin:30px 0;" class="migration-dest-grid">
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Serengeti National Park</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">The main stage for the migration. The southern and western Serengeti offer the best viewing depending on the time of year. Mobile camps follow the herds.</p>
                </div>
            </div>
            <div style="display:flex;gap:18px;padding:22px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
                <div style="width:52px;height:52px;min-width:52px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.2rem;color:var(--gold);"><i class="fas fa-map-marker-alt"></i></div>
                <div>
                    <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.05rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Ngorongoro Conservation Area</h4>
                    <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;">Witness the calving season in the Ndutu plains at the base of the crater. January to March is the best time for newborn animals and predator action.</p>
                </div>
            </div>
        </div>
        <div style="padding:22px;background:rgba(200,150,62,0.08);border:1px solid var(--gold-pale);border-radius:var(--radius-md);margin-top:10px;">
            <p style="font-size:0.88rem;color:var(--earth);line-height:1.65;"><strong style="color:var(--gold);">Best Time:</strong> June–October for dramatic river crossings. January–March for calving season. We recommend a 7–10 day safari for the full migration experience.</p>
        </div>
    </div>
</section>

<section class="cta-banner-dark" style="background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);padding:70px 8%;text-align:center;">
    <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:700;color:var(--white);margin-bottom:12px;">Plan My Migration Safari</h2>
    <p style="color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:550px;margin-left:auto;margin-right:auto;">The Great Migration waits for no one. Let us plan your perfect migration safari timed to the exact phase you want to witness.</p>
    <a href="/safaris/great-migration-safari" class="btn-primary" style="margin-right:12px;"><i class="fas fa-binoculars"></i> View Migration Safari</a>
    <a href="/contact" class="btn-outline"><i class="fas fa-envelope"></i> Get In Touch</a>
</section>
@endsection
