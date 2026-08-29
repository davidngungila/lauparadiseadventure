@extends('layouts.app')

@section('page-title', 'Safari & Zanzibar Family Holiday | 12-Day Tanzania Combo')
@section('meta-description', 'Combine a family safari with Zanzibar beaches. Snorkeling, spice tours and sandcastle days for the kids after wildlife adventures.')
@section('meta-keywords', 'family safari and Zanzibar, Tanzania family holiday, safari beach combo family, Zanzibar with kids, 12 day family Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/safaris/safari-zanzibar-family')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Safari & Zanzibar Family Holiday",
    "description": "Combine the adventure of a family safari with the relaxation of Zanzibar's beaches. Snorkeling, spice tours and sandcastle days for the kids.",
    "url": "https://www.lauparadiseadventure.com/safaris/safari-zanzibar-family",
    "touristType": "Family",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "3400",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "validFrom": "2025-01-01"
    }
}
</script>
@endverbatim
@endsection

@section('extra-css')
<style>
.szf-content{padding:70px 8%;}
.szf-intro{max-width:800px;margin-bottom:50px;}
.szf-intro h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3vw,2.4rem);font-weight:700;color:var(--earth);margin-bottom:16px;line-height:1.2;}
.szf-intro h2 em{color:var(--gold);font-style:italic;}
.szf-intro p{color:var(--text-muted);font-size:0.95rem;line-height:1.8;margin-bottom:14px;}
.szf-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;margin-bottom:60px;}
.szf-card{background:var(--white);border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);transition:0.3s;}
.szf-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);}
.szf-card-img{position:relative;height:240px;overflow:hidden;}
.szf-card-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.5s;}
.szf-card:hover .szf-card-img img{transform:scale(1.06);}
.szf-badge{position:absolute;top:14px;left:14px;background:var(--gold);color:var(--dark);padding:4px 14px;border-radius:20px;font-size:0.68rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;}
.szf-body{padding:24px;}
.szf-meta{display:flex;gap:14px;margin-bottom:10px;flex-wrap:wrap;}
.szf-meta span{font-size:0.75rem;color:var(--text-muted);display:flex;align-items:center;gap:5px;}
.szf-title{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:700;color:var(--earth);margin-bottom:8px;line-height:1.3;}
.szf-desc{font-size:0.83rem;color:var(--text-muted);line-height:1.6;}
.included-section{background:var(--smoke);padding:70px 8%;}
.included-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:20px;margin-top:40px;}
.included-item{display:flex;align-items:center;gap:14px;background:var(--white);padding:20px;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);transition:0.2s;}
.included-item:hover{box-shadow:var(--shadow-md);transform:translateY(-2px);}
.included-icon{width:48px;height:48px;border-radius:12px;background:rgba(200,150,62,0.1);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--gold);flex-shrink:0;}
.included-text h4{font-weight:600;font-size:0.9rem;color:var(--text);margin-bottom:2px;}
.included-text p{font-size:0.78rem;color:var(--text-muted);line-height:1.5;}
.szf-cta{background:linear-gradient(135deg,var(--dark) 0%,var(--earth) 100%);padding:70px 8%;text-align:center;}
.szf-cta h2{font-family:'Cormorant Garamond',serif;font-size:clamp(1.8rem,3.5vw,2.6rem);font-weight:700;color:var(--white);margin-bottom:12px;}
.szf-cta p{color:rgba(255,255,255,0.7);font-size:0.95rem;margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;}
@media(max-width:1024px){.szf-cards{grid-template-columns:repeat(2,1fr);}.included-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){.szf-cards{grid-template-columns:1fr;}.included-grid{grid-template-columns:1fr;}}
</style>
@endsection

@section('content')
<div class="page-hero" style="height:450px;">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/safaris">Safaris</a>
            <span>/</span>
            <span class="current">Safari &amp; Zanzibar Family Holiday</span>
        </div>
        <h1 class="page-hero-title">Safari &amp; Zanzibar <em>Family</em> Holiday</h1>
        <p class="page-hero-sub">Lions first, then the ocean — twelve days of adventure and beach bliss built for families.</p>
    </div>
</div>

<section class="szf-content">
    <div class="szf-intro">
        <span class="sec-label">Safari + Beach</span>
        <h2>The Perfect Family <em>Balance</em></h2>
        <p>Start with the thrill of the wild: elephants in Tarangire, flamingos on Lake Manyara and the Big Five on the Ngorongoro Crater floor. Then trade dust for sand with five restorative days on Zanzibar's calm north coast — shallow swimming beaches, snorkeling reefs and ice cream in Stone Town.</p>
        <p>The pace is engineered for children: no drive exceeds three hours, every lodge has a pool, and beach days follow game days so nobody burns out. A short hopper flight connects bush to beach, turning travel time into an aerial safari over Mount Kilimanjaro and the spice islands.</p>
    </div>

    <div style="margin-bottom:30px;">
        <span class="sec-label">Your Itinerary</span>
        <h2 class="sec-title">Twelve Days of <em>Adventure</em> &amp; Bliss</h2>
    </div>

    <div class="szf-cards">
        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 1 - Tarangire Elephants" loading="lazy">
                <span class="szf-badge">Day 1</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                </div>
                <h3 class="szf-title">Meet the Elephants</h3>
                <p class="szf-desc">Pickup in Arusha and a gentle drive to Tarangire for your first family game drive among herds of elephants and baboons.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 2 - Tarangire Game Drive" loading="lazy">
                <span class="szf-badge">Day 2</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Tarangire</span>
                </div>
                <h3 class="szf-title">Baobabs &amp; Big Game</h3>
                <p class="szf-desc">A full Tarangire day under the baobabs, watching elephants at the river and prides of lions resting in the grass.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 3 - Lake Manyara" loading="lazy">
                <span class="szf-badge">Day 3</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Lake Manyara</span>
                </div>
                <h3 class="szf-title">Flamingos &amp; Tree Lions</h3>
                <p class="szf-desc">Drive to Lake Manyara for pink flamingos at the shoreline, grunting hippos and its famous tree-climbing lions.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 4 - Ngorongoro Rim" loading="lazy">
                <span class="szf-badge">Day 4</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro Rim</span>
                </div>
                <h3 class="szf-title">Up to the Crater</h3>
                <p class="szf-desc">A short scenic transfer to a rim lodge with a pool, ending with sunset views across the colossal crater.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 5 - Ngorongoro Crater Floor" loading="lazy">
                <span class="szf-badge">Day 5</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Ngorongoro Crater</span>
                </div>
                <h3 class="szf-title">Big Five Below</h3>
                <p class="szf-desc">Descend to the crater floor for a full day ticking off lions, elephants, buffalo and rhino with a kid-savvy guide.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 6 - Maasai Village and Transfer" loading="lazy">
                <span class="szf-badge">Day 6</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Arusha - Sea</span>
                </div>
                <h3 class="szf-title">Maasai Morning</h3>
                <p class="szf-desc">Visit a Maasai boma for song and beadwork, then drive back to Arusha for your flight to the islands.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 7 - Fly to Zanzibar" loading="lazy">
                <span class="szf-badge">Day 7</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-plane"></i> Fly to Zanzibar</span>
                </div>
                <h3 class="szf-title">Aerial Safari to the Beach</h3>
                <p class="szf-desc">A short hopper flight over Kilimanjaro to Zanzibar, then settle into a family beachfront resort for sunset.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 8 - Zanzibar Beach" loading="lazy">
                <span class="szf-badge">Day 8</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-umbrella-beach"></i> Nungwi Beach</span>
                </div>
                <h3 class="szf-title">Sandcastle Day</h3>
                <p class="szf-desc">A lazy day of shallow swimming, sandcastles and beach-front ice cream on the calm north-coast shore.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 9 - Snorkeling Reef" loading="lazy">
                <span class="szf-badge">Day 9</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-ship"></i> Mnemba Atoll</span>
                </div>
                <h3 class="szf-title">First Snorkel</h3>
                <p class="szf-desc">A boat trip to the reef with gentle snorkeling over coral gardens, turtles and rainbow fish — a marine safari.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046154/Angata-Tarangire-2-1-1536x863_amthnm.jpg" alt="Day 10 - Spice Tour and Stone Town" loading="lazy">
                <span class="szf-badge">Day 10</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Stone Town</span>
                </div>
                <h3 class="szf-title">Spices &amp; Old Town</h3>
                <p class="szf-desc">Smell your way through a clove and vanilla farm, then wander Stone Town's alleys in search of famous Zanzibar doors.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Day 11 - Dhow Sunset Cruise" loading="lazy">
                <span class="szf-badge">Day 11</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-sailboat"></i> Zanzibar Coast</span>
                </div>
                <h3 class="szf-title">Dhow Sunset Sail</h3>
                <p class="szf-desc">One last beach morning, then a traditional dhow cruise at sunset with a breeze and a horizon of gold.</p>
            </div>
        </div>

        <div class="szf-card">
            <div class="szf-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Day 12 - Departure" loading="lazy">
                <span class="szf-badge">Day 12</span>
            </div>
            <div class="szf-body">
                <div class="szf-meta">
                    <span><i class="fas fa-map-marker-alt"></i> Airport</span>
                </div>
                <h3 class="szf-title">Zanzibar Goodbye</h3>
                <p class="szf-desc">A relaxed morning on the beach before your transfer to the airport and flight home, full of memories.</p>
            </div>
        </div>
    </div>
</section>

<section class="included-section">
    <div style="text-align:center;">
        <span class="sec-label" style="justify-content:center;">Everything You Need</span>
        <h2 class="sec-title" style="text-align:center;">What's Included</h2>
        <p class="sec-sub" style="text-align:center; margin:12px auto 0;">Two holidays in one, seamlessly connected.</p>
    </div>
    <div class="included-grid">
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-car"></i></div>
            <div class="included-text"><h4>Private Safari 4x4</h4><p>Your family's own vehicle and guide for six days.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-plane"></i></div>
            <div class="included-text"><h4>Bush-to-Beach Flight</h4><p>Hopper flight from Arusha to Zanzibar included.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-bed"></i></div>
            <div class="included-text"><h4>Family Stays</h4><p>Safari lodges with pools plus a beachfront family resort.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-ticket"></i></div>
            <div class="included-text"><h4>All Fees</h4><p>Park fees plus Zanzibar activities as listed.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-utensils"></i></div>
            <div class="included-text"><h4>Meals</h4><p>Full board on safari, half board at the beach.</p></div>
        </div>
        <div class="included-item">
            <div class="included-icon"><i class="fas fa-child"></i></div>
            <div class="included-text"><h4>Kid Perks</h4><p>Child rates, kids' activity packs and flexible pacing.</p></div>
        </div>
    </div>
</section>

<section class="szf-cta">
    <h2>Lions Then <em style="color:var(--gold-light);">Ocean Breezes</em></h2>
    <p>The holiday your kids will still talk about at graduation. Let us plan it around school breaks.</p>
    <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Plan Our Holiday</a>
</section>
@endsection
