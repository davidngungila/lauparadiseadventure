@extends('layouts.app')

@section('page-title', 'Zanzibar Beach Holidays | White Sand Beaches Tanzania')
@section('meta-description', 'Relax on Zanzibar\'s pristine white-sand beaches. Luxury resorts, boutique hotels and beachside bungalows on the Indian Ocean.')
@section('meta-keywords', 'Zanzibar beaches, Nungwi beach, Paje beach, Kendwa beach, Zanzibar beach resort, Indian Ocean beach holiday')
@section('canonical', 'https://www.lauparadiseadventure.com/zanzibar/beach-holidays')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Zanzibar Beach Holidays | White Sand Beaches Tanzania",
    "description": "Relax on Zanzibar's pristine white-sand beaches. Luxury resorts, boutique hotels and beachside bungalows on the Indian Ocean.",
    "url": "https://www.lauparadiseadventure.com/zanzibar/beach-holidays",
    "touristType": "Beach Holiday",
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

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/zanzibar">Zanzibar</a>
            <span>/</span>
            <span class="current">Beach Holidays</span>
        </div>
        <h1 class="page-hero-title">Zanzibar <em>Beach Holidays</em></h1>
        <p class="page-hero-sub">Where powdery white sand meets crystal-clear turquoise waters.</p>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">Beach <em>Paradise</em></h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Zanzibar is home to some of the world's most beautiful beaches — stretches of pristine white sand framed by swaying palm trees and lapped by warm, turquoise Indian Ocean waters. Whether you're looking for lively beach scenes with water sports and restaurants, or secluded coves where the only footprints are your own, Zanzibar's coastline offers the perfect escape. Choose from luxury resorts, boutique hotels, eco-lodges and intimate beachside bungalows — each offering a unique way to experience this island paradise.
        </p>
    </div>
</section>

{{-- Beach Destinations --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Beach Spots</div>
            <h2 class="sec-title">Top <em>Beaches</em></h2>
            <p class="sec-sub">Each beach has its own character and charm.</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; max-width: 1100px;">
        <div style="background: var(--cream); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-sun"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Nungwi</h3>
            <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">The island's most popular beach. Vibrant nightlife, restaurants, water sports and stunning sunsets. Great for those who want energy and excitement.</p>
            <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Nightlife</span>
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Water Sports</span>
            </div>
        </div>

        <div style="background: var(--cream); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-heart"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Kendwa</h3>
            <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">Zanzibar's most romantic beach. Calm waters, luxury resorts and full-moon parties. The perfect blend of relaxation and entertainment.</p>
            <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Romance</span>
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Luxury</span>
            </div>
        </div>

        <div style="background: var(--cream); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-wind"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Paje</h3>
            <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">The kitesurfing capital of Zanzibar. Shallow turquoise lagoon perfect for kitesurfing and water sports. Trendy beach bars and a laid-back vibe.</p>
            <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Kitesurfing</span>
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Trendy</span>
            </div>
        </div>

        <div style="background: var(--cream); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-anchor"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Jambiani</h3>
            <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">A tranquil fishing village with an untouched feel. Wide empty beaches, traditional dhow builders and local culture. Perfect for escaping the crowds.</p>
            <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Peaceful</span>
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Authentic</span>
            </div>
        </div>

        <div style="background: var(--cream); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-mountain"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Matemwe</h3>
            <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">The exclusive east coast. Fringed by a coral reef and home to luxury boutique resorts. The closest beach to Mnemba Atoll — one of Africa's best dive sites.</p>
            <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Exclusive</span>
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Diving</span>
            </div>
        </div>

        <div style="background: var(--cream); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-binoculars"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Bwejuu</h3>
            <p style="font-size: 0.85rem; color: var(--text-muted); line-height: 1.7;">A quiet gem with a long stretch of white sand. Ideal for long beach walks, kayaking and experiencing local village life away from tourist crowds.</p>
            <div style="margin-top: 10px; display: flex; gap: 8px; flex-wrap: wrap;">
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Secluded</span>
                <span style="font-size: 0.72rem; background: rgba(200,150,62,0.15); color: var(--earth-mid); padding: 3px 10px; border-radius: 12px;">Local</span>
            </div>
        </div>
    </div>
</section>

{{-- Accommodation Types --}}
<section style="background: var(--smoke);">
    <div style="max-width: 900px;">
        <div class="sec-label">Where to Stay</div>
        <h2 class="sec-title">Accommodation <em>Types</em></h2>
        <p class="sec-sub" style="max-width: 700px;">From ultra-luxury resorts to charming boutique hideaways, Zanzibar offers a range of accommodation to suit every style and budget.</p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 30px;">
            <div style="background: var(--white); border-radius: 14px; padding: 22px; display: flex; align-items: flex-start; gap: 14px;">
                <i class="fas fa-gem" style="color: var(--gold); font-size: 1.1rem; margin-top: 2px;"></i>
                <div>
                    <strong style="color: var(--earth); font-size: 0.92rem;">Luxury Resorts</strong>
                    <p style="font-size: 0.83rem; color: var(--text-muted); margin-top: 3px; line-height: 1.6;">World-class amenities, private beaches, infinity pools and spa facilities. Perfect for honeymoons and special occasions.</p>
                </div>
            </div>
            <div style="background: var(--white); border-radius: 14px; padding: 22px; display: flex; align-items: flex-start; gap: 14px;">
                <i class="fas fa-home" style="color: var(--gold); font-size: 1.1rem; margin-top: 2px;"></i>
                <div>
                    <strong style="color: var(--earth); font-size: 0.92rem;">Boutique Hotels</strong>
                    <p style="font-size: 0.83rem; color: var(--text-muted); margin-top: 3px; line-height: 1.6;">Charming, intimate properties with personalised service and unique character. Often beachfront with local design touches.</p>
                </div>
            </div>
            <div style="background: var(--white); border-radius: 14px; padding: 22px; display: flex; align-items: flex-start; gap: 14px;">
                <i class="fas fa-campground" style="color: var(--gold); font-size: 1.1rem; margin-top: 2px;"></i>
                <div>
                    <strong style="color: var(--earth); font-size: 0.92rem;">Beach Bungalows</strong>
                    <p style="font-size: 0.83rem; color: var(--text-muted); margin-top: 3px; line-height: 1.6;">Rustic-chic accommodation right on the sand. Eco-friendly and immersive — fall asleep to the sound of the waves.</p>
                </div>
            </div>
            <div style="background: var(--white); border-radius: 14px; padding: 22px; display: flex; align-items: flex-start; gap: 14px;">
                <i class="fas fa-hotel" style="color: var(--gold); font-size: 1.1rem; margin-top: 2px;"></i>
                <div>
                    <strong style="color: var(--earth); font-size: 0.92rem;">All-Inclusive Resorts</strong>
                    <p style="font-size: 0.83rem; color: var(--text-muted); margin-top: 3px; line-height: 1.6;">Hassle-free holidays with meals, drinks and activities included. Great value for families and couples who want everything taken care of.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Activities --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Beach Activities</div>
            <h2 class="sec-title">What to <em>Do</em></h2>
        </div>
    </div>

    <div class="detail-highlights" style="max-width: 1000px;">
        <div class="detail-highlight">
            <i class="fas fa-swimmer"></i>
            <span><strong>Snorkeling</strong> — Explore coral reefs teeming with tropical fish</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-wind"></i>
            <span><strong>Kitesurfing</strong> — Ride the wind in Zanzibar's warm lagoons</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-sailboat"></i>
            <span><strong>Sunset Dhow Cruise</strong> — Traditional sail into the Indian Ocean sunset</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-fish"></i>
            <span><strong>Deep Sea Fishing</strong> — Marlin, tuna and sailfish off the coast</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-spa"></i>
            <span><strong>Beach Spa</strong> — Relaxing treatments with ocean views</span>
        </div>
        <div class="detail-highlight">
            <i class="fas fa-utensils"></i>
            <span><strong>Seafood Dinners</strong> — Fresh catch grilled on the beach at sunset</span>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Your Beach Paradise Awaits</h2>
        <p>Let us find the perfect beach holiday package for you — from romantic escapes to family adventures.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Beach Holiday</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Zanzibar%20beach%20holiday." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
