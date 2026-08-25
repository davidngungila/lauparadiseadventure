@extends('layouts.app')

@section('page-title', 'Stone Town Zanzibar | Historic Walking Tours & Culture')
@section('meta-description', 'Explore Stone Town — a UNESCO World Heritage Site. Historic architecture, spice markets, cultural experiences and the heart of Zanzibar\'s heritage.')
@section('meta-keywords', 'Stone Town Zanzibar, Stone Town tour, UNESCO Zanzibar, Swahili culture, Stone Town walking tour, Zanzibar history')
@section('canonical', 'https://www.lauparadiseadventure.com/zanzibar/stone-town')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046173/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree-umbrella-chair-blue-sky_ezrdjs.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TouristTrip",
    "name": "Stone Town Zanzibar | Historic Walking Tours & Culture",
    "description": "Explore Stone Town — a UNESCO World Heritage Site. Historic architecture, spice markets, cultural experiences and the heart of Zanzibar's heritage.",
    "url": "https://www.lauparadiseadventure.com/zanzibar/stone-town",
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
            <span class="current">Stone Town</span>
        </div>
        <h1 class="page-hero-title"><em>Stone</em> Town</h1>
        <p class="page-hero-sub">The cultural heart and historic soul of Zanzibar.</p>
    </div>
</section>

{{-- Overview --}}
<section style="background: var(--cream);">
    <div style="max-width: 900px;">
        <div class="sec-label">Overview</div>
        <h2 class="sec-title">A Living <em>Heritage</em></h2>
        <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.85; margin-top: 18px;">
            Stone Town is the historic capital of the Zanzibar archipelago and a UNESCO World Heritage Site. A labyrinth of narrow alleyways, ornate wooden doors, bustling bazaars and aromatic spice markets, it is one of the best-preserved Swahili coastal trading towns in East Africa. The town's architecture reflects a rich fusion of Arab, Persian, Indian and European influences, shaped by centuries of trade in spices, ivory and slaves. Today, Stone Town is a vibrant cultural hub where history, art, cuisine and daily life intertwine in a uniquely captivating atmosphere.
        </p>
    </div>
</section>

{{-- Highlights --}}
<section style="background: var(--white);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Highlights</div>
            <h2 class="sec-title">What to <em>See</em></h2>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 1000px;">
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-door-open"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Carved Wooden Doors</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Over 500 ornate doors reflecting the town's multicultural history. Each tells a story of the merchant family who built it.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-landmark"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">House of Wonders</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">The imposing former sultan's palace, the tallest building in Stone Town. A symbol of Zanzibar's royal heritage and coastal architecture.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-store"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Darajani Market</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">The bustling central market where locals trade fish, spices, fruit and everything in between. An immersive sensory experience.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-seedling"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Spice Markets</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Aromatic stalls filled with cloves, cinnamon, vanilla, cardamom and pepper. The scent of the Spice Island is everywhere.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-utensils"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Forodhani Gardens</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">The waterfront gardens come alive at sunset with the famous night market. Fresh seafood, Zanzibar pizza and tropical juices.</p>
            </div>
        </div>
        <div style="display: flex; align-items: flex-start; gap: 16px; background: var(--cream); border-radius: 16px; padding: 24px;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; flex-shrink: 0;"><i class="fas fa-mosque"></i></div>
            <div>
                <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 4px;">Cathedral & Mosques</h3>
                <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6;">Christ Church Cathedral and the Old Fort stand as reminders of the town's complex colonial and religious history.</p>
            </div>
        </div>
    </div>
</section>

{{-- Tours --}}
<section style="background: var(--smoke);">
    <div class="sec-header">
        <div>
            <div class="sec-label">Tours</div>
            <h2 class="sec-title">Stone Town <em>Experiences</em></h2>
            <p class="sec-sub">Guided walking tours and cultural experiences to bring Stone Town's history to life.</p>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; max-width: 1100px;">
        <div style="background: var(--white); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-walking"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Walking Tour</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">3-hour guided stroll through the alleys. Visit the cathedral, palace museum, old fort, House of Wonders and local markets.</p>
            <span style="font-size: 0.78rem; color: var(--gold); font-weight: 600;">From $40 per person</span>
        </div>
        <div style="background: var(--white); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-seedling"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Spice Tour</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">Visit a spice farm on the island's interior. Learn to identify, taste and use local spices. Includes cooking demonstration and traditional lunch.</p>
            <span style="font-size: 0.78rem; color: var(--gold); font-weight: 600;">From $55 per person</span>
        </div>
        <div style="background: var(--white); border-radius: 16px; padding: 28px;">
            <div style="width: 44px; height: 44px; border-radius: 10px; background: var(--gold); display: flex; align-items: center; justify-content: center; color: var(--dark); font-size: 1.1rem; margin-bottom: 14px;"><i class="fas fa-utensils"></i></div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px;">Food Tour</h3>
            <p style="font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 12px;">Taste your way through Stone Town. Sample Zanzibar pizza, octopus curry, pilau rice, tropical fruits and local street food specialties.</p>
            <span style="font-size: 0.78rem; color: var(--gold); font-weight: 600;">From $65 per person</span>
        </div>
    </div>
</section>

{{-- Practical Info --}}
<section style="background: var(--white);">
    <div style="max-width: 900px;">
        <div class="sec-label">Good to Know</div>
        <h2 class="sec-title">Practical <em>Information</em></h2>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 24px;">
            <div style="display: flex; align-items: center; gap: 12px; background: var(--cream); padding: 16px 18px; border-radius: 12px;">
                <i class="fas fa-walking" style="color: var(--gold); font-size: 1rem;"></i>
                <div>
                    <strong style="font-size: 0.85rem; color: var(--text);">Walkable</strong>
                    <p style="font-size: 0.78rem; color: var(--text-muted);">Stone Town is best explored on foot — cars cannot access most alleys.</p>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 12px; background: var(--cream); padding: 16px 18px; border-radius: 12px;">
                <i class="fas fa-mosque" style="color: var(--gold); font-size: 1rem;"></i>
                <div>
                    <strong style="font-size: 0.85rem; color: var(--text);">Respectful Dress</strong>
                    <p style="font-size: 0.78rem; color: var(--text-muted);">Modest clothing recommended when visiting religious sites.</p>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 12px; background: var(--cream); padding: 16px 18px; border-radius: 12px;">
                <i class="fas fa-camera" style="color: var(--gold); font-size: 1rem;"></i>
                <div>
                    <strong style="font-size: 0.85rem; color: var(--text);">Photography</strong>
                    <p style="font-size: 0.78rem; color: var(--text-muted);">Always ask permission before photographing locals. Some areas may charge a small fee.</p>
                </div>
            </div>
            <div style="display: flex; align-items: center; gap: 12px; background: var(--cream); padding: 16px 18px; border-radius: 12px;">
                <i class="fas fa-coins" style="color: var(--gold); font-size: 1rem;"></i>
                <div>
                    <strong style="font-size: 0.85rem; color: var(--text);">Bargaining</strong>
                    <p style="font-size: 0.78rem; color: var(--text-muted);">Haggling is expected in markets and with street vendors. Start at about half the asking price.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="book-banner">
    <div>
        <h2>Explore Stone Town with Us</h2>
        <p>Let us include a Stone Town experience in your Zanzibar holiday itinerary.</p>
    </div>
    <div class="book-banner-actions">
        <a href="/contact" class="btn-dark"><i class="fas fa-paper-plane"></i> Plan My Zanzibar Trip</a>
        <a href="https://wa.me/255683163219?text=Hello!%20I%27m%20interested%20in%20a%20Stone%20Town%20tour." class="btn-outline-dark" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection
