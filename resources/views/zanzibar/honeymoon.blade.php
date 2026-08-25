@extends('layouts.app')

@section('page-title', 'Zanzibar Honeymoon Packages | Romantic Beach Getaways')
@section('meta-description', 'Create your perfect honeymoon in Zanzibar. Luxury beach resorts, romantic dinners, private excursions and unforgettable island experiences.')
@section('meta-keywords', 'Zanzibar honeymoon, romantic Zanzibar, honeymoon package, beach wedding, anniversary trip Zanzibar, romantic getaway Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/zanzibar/honeymoon')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Zanzibar Luxury Honeymoon Escape",
    "description": "Create your perfect honeymoon in Zanzibar with luxury resorts, romantic dinners and private excursions.",
    "touristType": "Honeymooner",
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "Offer",
        "price": "2800",
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
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/zanzibar">Zanzibar</a>
            <span>/</span>
            <span class="current">Honeymoon</span>
        </div>
        <h1 class="page-hero-title">Your Love Story, <em>Written in Zanzibar</em></h1>
        <p class="page-hero-sub">Luxury beach escapes, romantic sunsets and unforgettable moments for two.</p>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">Romance in <em>Zanzibar</em></h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Zanzibar is one of the world's most romantic destinations — a place where turquoise waters lap against powder-white sand, where sunset dhow cruises paint the sky in gold, and where private beach dinners under the stars create memories that last forever. Whether you're newlyweds, celebrating an anniversary or simply escaping together, Zanzibar provides the perfect backdrop for your love story. Our honeymoon packages combine luxury accommodation, exclusive experiences and seamless arrangements so you can focus entirely on each other.
        </p>
    </div>
</section>

{{-- What's Included --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Experiences</div>
            <h2 class="sec-title">Romantic <em>Experiences</em></h2>
            <p class="sec-sub">Every detail curated for an unforgettable honeymoon.</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; max-width: 1100px;">
        <div style="background: var(--cream); border-radius: 16px; padding: 28px; text-align: center;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; color: var(--gold); font-size: 1.3rem;"><i class="fas fa-hotel"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Romantic Accommodation</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Beachfront villas and suites with private terraces, outdoor showers and direct beach access. Wake up to the sound of the ocean.</p>
        </div>
        <div style="background: var(--cream); border-radius: 16px; padding: 28px; text-align: center;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; color: var(--gold); font-size: 1.3rem;"><i class="fas fa-sailboat"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Sunset Dhow Cruise</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Sail together on a traditional wooden dhow as the sun dips below the Indian Ocean horizon. Champagne, canapés and pure romance.</p>
        </div>
        <div style="background: var(--cream); border-radius: 16px; padding: 28px; text-align: center;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; color: var(--gold); font-size: 1.3rem;"><i class="fas fa-spa"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Couples Spa</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Side-by-side massages and wellness treatments using local spices and natural ingredients. The ultimate relaxation for two.</p>
        </div>
        <div style="background: var(--cream); border-radius: 16px; padding: 28px; text-align: center;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; color: var(--gold); font-size: 1.3rem;"><i class="fas fa-utensils"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Beach Dinner</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">A private dinner set up on the sand with torches, lanterns and a personal chef. Fresh seafood, fine wine and starlit sky.</p>
        </div>
        <div style="background: var(--cream); border-radius: 16px; padding: 28px; text-align: center;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; color: var(--gold); font-size: 1.3rem;"><i class="fas fa-car"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Private Transfers</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Airport meet and greet, private speedboat or charter flights to your resort. Seamless and stress-free from arrival to departure.</p>
        </div>
        <div style="background: var(--cream); border-radius: 16px; padding: 28px; text-align: center;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(200,150,62,0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; color: var(--gold); font-size: 1.3rem;"><i class="fas fa-camera"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Excursions</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Choose from snorkelling trips, Prison Island visits, spice tours, Stone Town walks and Jozani Forest exploration together.</p>
        </div>
    </div>
</section>

{{-- Featured Package --}}
<section style="background: var(--smoke);">
    <div style="max-width: 900px; margin: 0 auto;">
        <div class="sec-label">Featured Package</div>
        <h2 class="sec-title">Zanzibar Luxury <em>Honeymoon Escape</em></h2>

        <div style="background: var(--white); border-radius: 20px; overflow: hidden; margin-top: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.06);">
            <div style="display: grid; grid-template-columns: 1fr 1fr;">
                <div style="height: 400px; overflow: hidden;">
                    <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Zanzibar luxury honeymoon — beachfront villa" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 36px;">
                    <span style="display: inline-flex; align-items: center; gap: 6px; background: rgba(200,150,62,0.15); color: var(--gold); padding: 5px 14px; border-radius: 20px; font-size: 0.7rem; letter-spacing: 1.5px; text-transform: uppercase; font-weight: 600; margin-bottom: 14px;"><i class="fas fa-heart"></i> Honeymoon Special</span>
                    <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.6rem; font-weight: 700; color: var(--earth); margin-bottom: 12px;">Zanzibar Luxury Honeymoon Escape</h3>
                    <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 20px;">6 days of pure romance. Stay at a luxury beachfront resort, enjoy private sunset dhow cruises, couples spa treatments, beach dinners and excursions.</p>

                    <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 24px;">
                        <div style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text);">
                            <i class="fas fa-calendar" style="color: var(--gold); width: 18px;"></i> 6 Days / 5 Nights
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text);">
                            <i class="fas fa-hotel" style="color: var(--gold); width: 18px;"></i> Luxury beachfront resort
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text);">
                            <i class="fas fa-sailboat" style="color: var(--gold); width: 18px;"></i> Private sunset dhow cruise
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text);">
                            <i class="fas fa-spa" style="color: var(--gold); width: 18px;"></i> Couples spa treatment
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text);">
                            <i class="fas fa-utensils" style="color: var(--gold); width: 18px;"></i> Private beach dinner
                        </div>
                        <div style="display: flex; align-items: center; gap: 10px; font-size: 0.85rem; color: var(--text);">
                            <i class="fas fa-car" style="color: var(--gold); width: 18px;"></i> All transfers included
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; justify-content: space-between;">
                        <div class="tour-price">
                            <small>From</small>
                            <strong>$2,800</strong>
                            <em>/ couple</em>
                        </div>
                        <a href="/contact" class="btn-primary"><i class="fas fa-paper-plane"></i> Inquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Who It's For --}}
<section style="background: var(--white);">
    <div style="max-width: 900px;">
        <div class="sec-label">For Couples</div>
        <h2 class="sec-title">Perfect <em>For</em></h2>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 16px; margin-top: 24px;">
            <div style="display: flex; align-items: center; gap: 12px; background: var(--cream); padding: 16px 18px; border-radius: 12px;">
                <i class="fas fa-ring" style="color: var(--gold); font-size: 1.1rem;"></i>
                <span style="font-size: 0.88rem; color: var(--text);"><strong>Newlyweds</strong> starting their journey together</span>
            </div>
            <div style="display: flex; align-items: center; gap: 12px; background: var(--cream); padding: 16px 18px; border-radius: 12px;">
                <i class="fas fa-heart" style="color: var(--gold); font-size: 1.1rem;"></i>
                <span style="font-size: 0.88rem; color: var(--text);"><strong>Anniversaries</strong> celebrating milestones in paradise</span>
            </div>
            <div style="display: flex; align-items: center; gap: 12px; background: var(--cream); padding: 16px 18px; border-radius: 12px;">
                <i class="fas fa-glass-cheers" style="color: var(--gold); font-size: 1.1rem;"></i>
                <span style="font-size: 0.88rem; color: var(--text);"><strong>Couples</strong> seeking a romantic escape together</span>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Create My Honeymoon</h2>
        <p>Let us design your dream honeymoon with personalised romantic experiences in Zanzibar.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Create My Honeymoon</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Zanzibar%20honeymoon%20package." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
