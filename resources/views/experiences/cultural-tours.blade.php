@extends('layouts.app')

@section('page-title', 'Tanzania Cultural Tours | Meet Local Communities & Traditions | LAU Paradise Adventure')
@section('meta-description', 'Experience authentic Tanzanian culture through village visits, Maasai experiences, traditional food and local crafts. Connect with the people of Tanzania.')
@section('meta-keywords', 'Tanzania cultural tours, Maasai village visit, Hadzabe Bushmen, Tanzania traditions, cultural safari')
@section('canonical', 'https://www.lauparadiseadventure.com/experiences/cultural-tours')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tanzania Cultural Tours",
    "description": "Experience authentic Tanzanian culture through village visits, Maasai experiences, traditional food and local crafts.",
    "url": "https://www.lauparadiseadventure.com/experiences/cultural-tours",
    "touristType": "Cultural Explorer",
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
    <div class="page-hero-bg" style="position:absolute;inset:0;background-size:cover;background-position:center;background-repeat:no-repeat;background-image:url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046195/hadzabe_qgukhh.jpg');"></div>
    <div style="position:absolute;inset:0;background:linear-gradient(100deg,rgba(26,18,9,0.82) 40%,rgba(26,18,9,0.3) 100%);"></div>
    <div style="position:relative;z-index:2;">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/experiences">Experiences</a>
            <span>/</span>
            <span class="current">Cultural Tours</span>
        </div>
        <h1 class="page-hero-title">Cultural <em>Experiences</em></h1>
        <p class="page-hero-sub">Travel beyond the wildlife. Meet the people, experience the traditions and discover the soul of Tanzania.</p>
        <div class="page-hero-stats">
            <div class="page-hero-stat"><i class="fas fa-users"></i> 6 Cultural Encounters</div>
            <div class="page-hero-stat"><i class="fas fa-home"></i> Authentic Villages</div>
            <div class="page-hero-stat"><i class="fas fa-heart"></i> Community Supported</div>
        </div>
    </div>
</div>

<section style="padding:70px 8%;">
    <div style="max-width:900px;margin:0 auto;">
        <span class="sec-label">Cultural Tours</span>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:16px;">Discover the <em style="color:var(--gold);font-style:italic;">Soul</em> of Tanzania</h2>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;margin-bottom:16px;">Travel beyond the wildlife. Meet the people, experience the traditions and discover the soul of Tanzania. The country is home to over 120 ethnic groups, each with their own unique customs, languages and ways of life. A cultural tour gives you a window into a world that has existed for centuries.</p>
        <p style="font-size:0.92rem;color:var(--text-muted);line-height:1.75;">From the Hadzabe Bushmen of Lake Eyasi to the Maasai warriors of the Ngorongoro highlands, every encounter tells a story of resilience, beauty and connection to the land.</p>
    </div>
</section>

<section style="padding:70px 8%;background:var(--cream);">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.2rem);font-weight:700;color:var(--earth);margin-bottom:30px;">Cultural <em style="color:var(--gold);font-style:italic;">Experiences</em></h2>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-fire"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Hadzabe Bushmen</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">The Hadzabe are one of the last true hunting tribes on Earth, living near Lake Eyasi. Join them on a morning hunt, learn their ancient click language, taste wild honey and witness fire-making traditions passed down over 10,000 years.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-person-walking"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Maasai Culture</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">Visit a traditional Maasai village (boma) and experience their vibrant culture firsthand. Watch the famous adumu jumping dance, learn about their intricate beadwork, understand their cattle-herding lifestyle and share a traditional meal with a Maasai family.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-hammer"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Datoga Tribe</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">The Datoga are semi-nomadic cattle herders and skilled metalworkers living near Lake Eyasi. Watch them forge traditional jewelry and tools, learn about their pastoral way of life and experience one of Tanzania's most traditional communities.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-mug-hot"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Chagga Culture</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">On the lush slopes of Mount Kilimanjaro, the Chagga people have built one of East Africa's most sophisticated agricultural communities. Visit coffee farms, taste freshly roasted Chagga coffee, explore ancient irrigation channels and learn about their unique tradition of underground hideouts.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);margin-bottom:18px;">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-school"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Local Village Visits</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">Step into everyday Tanzanian life with a visit to a local village. Walk through bustling markets, visit schools, meet farmers and artisans, and see how communities thrive in both rural and semi-urban settings. A meaningful way to connect with the people behind the safari experience.</p>
            </div>
        </div>

        <div style="display:flex;gap:18px;padding:24px;background:var(--white);border-radius:var(--radius-md);box-shadow:var(--shadow-sm);">
            <div style="width:56px;height:56px;min-width:56px;border-radius:50%;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.3rem;color:var(--gold);"><i class="fas fa-utensils"></i></div>
            <div>
                <h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--earth);margin-bottom:4px;">Traditional Food Experiences</h4>
                <p style="font-size:0.84rem;color:var(--text-muted);line-height:1.6;">Tanzanian cuisine is a flavorful blend of African, Arab and Indian influences. Visit spice markets in Stone Town, learn to cook traditional dishes like ugali and nyama choma, taste tropical fruits you've never heard of and discover the stories behind every recipe.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding:70px 8%;background:linear-gradient(135deg,var(--earth) 0%,var(--dark) 100%);text-align:center;">
    <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);font-weight:700;color:var(--white);margin-bottom:12px;">Explore Cultural Tours</h2>
    <p style="color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:550px;margin-left:auto;margin-right:auto;">Combine culture with your safari for a richer, deeper understanding of Tanzania. Every tour supports local communities directly.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan Cultural Experience</a>
</section>
@endsection
