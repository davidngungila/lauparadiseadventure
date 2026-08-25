@extends('layouts.app')

@section('page-title', 'Safari and Zanzibar Combos | Tanzania Safari + Beach Holiday')
@section('meta-description', 'Combine the thrill of a Tanzania safari with the relaxation of Zanzibar\'s beaches. Custom safari and beach holiday packages.')
@section('meta-keywords', 'safari and Zanzibar, Tanzania safari beach combo, Serengeti Zanzibar, safari beach holiday, Tanzania combination tour')
@section('canonical', 'https://www.lauparadiseadventure.com/zanzibar/safari-and-zanzibar')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Tanzania Safari & Zanzibar Beach Combo",
    "description": "Combine the thrill of a Tanzania safari with the relaxation of Zanzibar's beaches.",
    "touristType": ["Wildlife Enthusiast", "Beach Traveler"],
    "provider": {
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "offers": {
        "@type": "AggregateOffer",
        "lowPrice": "2800",
        "highPrice": "8000",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock"
    },
    "itinerary": {
        "@type": "ItemList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Safari Experience",
                "description": "Wildlife safari through Tanzania's northern circuit"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Zanzibar Beach Holiday",
                "description": "Relaxation on Zanzibar's pristine beaches"
            }
        ]
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
            <span class="current">Safari + Zanzibar</span>
        </div>
        <h1 class="page-hero-title"><em>Safari</em> + Zanzibar</h1>
        <p class="page-hero-sub">The ultimate Tanzania experience — wildlife adventures followed by beach paradise.</p>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">Why <em>Combine</em> Safari & Zanzibar?</h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Tanzania offers two of Africa's greatest experiences — world-class wildlife safaris and idyllic Indian Ocean beaches. By combining both, you get the perfect balance of adventure and relaxation. After the excitement of tracking the Big Five across the Serengeti or peering into the Ngorongoro Crater, unwind on Zanzibar's white-sand beaches, explore Stone Town's historic alleys and snorkel over vibrant coral reefs. It's the holiday of a lifetime — and it's easier to arrange than you think.
        </p>
    </div>
</section>

{{-- Why Combine --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Benefits</div>
            <h2 class="sec-title">The Perfect <em>Combination</em></h2>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 1000px;">
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-balance-scale"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Adventure + Relaxation</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">The thrill of safari followed by the tranquility of the beach. Two incredible experiences in one trip.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-plane"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Easy Logistics</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Direct flights connect safari areas with Zanzibar. We handle all transfers, connections and timing.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-calendar-check"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Flexible Duration</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Choose how many days for safari and how many for the beach. We customise to your schedule and budget.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-piggy-bank"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Better Value</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Combining both experiences often saves on internal flights and accommodation compared to booking separately.</p>
            </div>
        </div>
    </div>
</section>

{{-- Sample Itineraries --}}
<section style="background: var(--smoke);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Sample Itineraries</div>
            <h2 class="sec-title">Popular <em>Combos</em></h2>
            <p class="sec-sub">Choose from our curated combinations or let us build a custom itinerary for you.</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 1100px;">
        {{-- Combo 1 --}}
        <div style="background: var(--white); border-radius: 20px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06);">
            <div style="height: 220px; overflow: hidden; position: relative;">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046232/long-exposure-river-through-jungle-inlucz.jpg" alt="Northern circuit safari" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
                <span style="position: absolute; top: 14px; left: 14px; background: var(--gold); color: var(--dark); padding: 4px 12px; border-radius: 20px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Most Popular</span>
            </div>
            <div style="padding: 28px;">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--earth); margin-bottom: 10px;">Serengeti Safari + Zanzibar Beach</h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 16px;">5 days of incredible Serengeti wildlife viewing followed by 5 days of pure beach bliss in Zanzibar. The perfect balance of adventure and relaxation.</p>

                <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> 5 days Serengeti safari with Big Five
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> 5 days Zanzibar beach resort
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> Internal flights & transfers
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> All meals during safari
                    </div>
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 16px; border-top: 1px solid #f0ebe1;">
                    <div>
                        <div style="display: flex; gap: 14px; margin-bottom: 6px;">
                            <span style="font-size: 0.75rem; color: var(--text-muted);"><i class="fas fa-calendar" style="color: var(--gold);"></i> 10 Days</span>
                            <span style="font-size: 0.75rem; color: var(--text-muted);"><i class="fas fa-user-friends" style="color: var(--gold);"></i> From 2 guests</span>
                        </div>
                        <div class="tour-price">
                            <small>From</small>
                            <strong>$3,500</strong>
                            <em>/ person</em>
                        </div>
                    </div>
                    <a href="/contact" class="btn-sm">Inquire</a>
                </div>
            </div>
        </div>

        {{-- Combo 2 --}}
        <div style="background: var(--white); border-radius: 20px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.06);">
            <div style="height: 220px; overflow: hidden; position: relative;">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg" alt="Luxury safari and beach combo" loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
                <span style="position: absolute; top: 14px; left: 14px; background: var(--gold); color: var(--dark); padding: 4px 12px; border-radius: 20px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Luxury</span>
            </div>
            <div style="padding: 28px;">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--earth); margin-bottom: 10px;">Luxury Safari & Zanzibar Escape</h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7; margin-bottom: 16px;">5 days of luxury tented camps in the Serengeti and Ngorongoro followed by 6 days at a premium Zanzibar beach resort with private pool villa.</p>

                <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> 5 days luxury tented camp safari
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> 6 days premium Zanzibar resort
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> Hot air balloon safari included
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.83rem; color: var(--text);">
                        <i class="fas fa-check-circle" style="color: var(--gold); width: 16px;"></i> Private transfers throughout
                    </div>
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 16px; border-top: 1px solid #f0ebe1;">
                    <div>
                        <div style="display: flex; gap: 14px; margin-bottom: 6px;">
                            <span style="font-size: 0.75rem; color: var(--text-muted);"><i class="fas fa-calendar" style="color: var(--gold);"></i> 11 Days</span>
                            <span style="font-size: 0.75rem; color: var(--text-muted);"><i class="fas fa-gem" style="color: var(--gold);"></i> Premium</span>
                        </div>
                        <div class="tour-price">
                            <small>From</small>
                            <strong>$7,800</strong>
                            <em>/ person</em>
                        </div>
                    </div>
                    <a href="/contact" class="btn-sm">Inquire</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Logistics --}}
<section style="background: var(--white);">
    <div style="max-width: 900px;">
        <div class="sec-label">Planning</div>
        <h2 class="sec-title">How it <em>Works</em></h2>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
            <div style="background: var(--cream); border-radius: 16px; padding: 24px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-plane-departure" style="color: var(--gold); margin-right: 6px;"></i> Getting There
                </h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">Fly into Kilimanjaro International Airport (JRO) or Arusha (ARK) for your safari. Daily flights connect Arusha/Kilimanjaro with Zanzibar (ZNZ) in about 1 hour.</p>
            </div>
            <div style="background: var(--cream); border-radius: 16px; padding: 24px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-calendar-alt" style="color: var(--gold); margin-right: 6px;"></i> Best Timing
                </h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">June to October is ideal for both safari and Zanzibar. The dry season offers the best wildlife viewing and perfect beach weather. December to March is also excellent.</p>
            </div>
            <div style="background: var(--cream); border-radius: 16px; padding: 24px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-cog" style="color: var(--gold); margin-right: 6px;"></i> We Handle Everything
                </h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">All flights, transfers, accommodations and activities are arranged by us. You just arrive and enjoy — no stress, no planning needed.</p>
            </div>
            <div style="background: var(--cream); border-radius: 16px; padding: 24px; border-left: 4px solid var(--gold);">
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">
                    <i class="fas fa-sliders-h" style="color: var(--gold); margin-right: 6px;"></i> Fully Customisable
                </h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">Adjust the number of days, choose your safari parks, select your Zanzibar resort and add excursions. Every trip is tailored to you.</p>
            </div>
        </div>
    </div>
</section>

{{-- Internal Links --}}
<section style="background: var(--dark); padding: 60px 8%;">
    <div style="text-align: center; max-width: 700px; margin: 0 auto;">
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; color: var(--white); margin-bottom: 14px;">Explore <em style="color: var(--gold-light);">Both</em> Worlds</h2>
        <p style="color: rgba(255,255,255,0.6); margin-bottom: 30px;">Plan each part of your Tanzania journey separately or as a combined package.</p>
        <div style="display: flex; gap: 14px; flex-wrap: wrap; justify-content: center;">
            <a href="/safaris" class="btn-primary"><i class="fas fa-paw"></i> Safari Options</a>
            <a href="/zanzibar/beach-holidays" class="btn-outline"><i class="fas fa-umbrella-beach"></i> Beach Holidays</a>
            <a href="/zanzibar/honeymoon" class="btn-outline"><i class="fas fa-heart"></i> Honeymoon</a>
            <a href="/destinations/serengeti" class="btn-outline"><i class="fas fa-binoculars"></i> Serengeti</a>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Build My Safari + Zanzibar Trip</h2>
        <p>Let us design the perfect combination of wildlife adventure and beach relaxation for you.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Build My Trip</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Safari%20%2B%20Zanzibar%20combo%20trip." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
