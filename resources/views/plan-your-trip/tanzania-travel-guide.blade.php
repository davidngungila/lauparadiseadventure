@extends('layouts.app')

@section('page-title', 'Tanzania Travel Guide | Complete Safari & Travel Information')
@section('meta-description', 'Your complete guide to traveling in Tanzania. Safari tips, destinations, culture, money, transport and everything you need to know.')
@section('meta-keywords', 'Tanzania travel guide, Tanzania safari information, Tanzania culture, Tanzania money, Tanzania transport, Tanzania health')
@section('canonical', 'https://www.lauparadiseadventure.com/plan-your-trip/tanzania-travel-guide')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Tanzania Travel Guide | Complete Safari & Travel Information",
    "description": "Your complete guide to traveling in Tanzania. Safari tips, destinations, culture, money, transport and everything you need to know.",
    "url": "https://www.lauparadiseadventure.com/plan-your-trip/tanzania-travel-guide",
    "author": {
        "@type": "Organization",
        "name": "LAU Paradise Adventure",
        "url": "https://www.lauparadiseadventure.com"
    },
    "publisher": {
        "@type": "Organization",
        "name": "LAU Paradise Adventure",
        "logo": {
            "@type": "ImageObject",
            "url": "https://www.lauparadiseadventure.com/lau-adventuress-logo.png"
        }
    },
    "datePublished": "2025-01-01",
    "dateModified": "2025-01-01"
}
</script>
@endverbatim
@endsection

@section('extra-css')
<style>
.guide-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg'); }
.guide-content { background: var(--cream); padding: 70px 8%; }
.guide-layout { display: grid; grid-template-columns: 1fr 300px; gap: 50px; align-items: start; }
.guide-main h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 16px; margin-top: 40px; }
.guide-main h3:first-child { margin-top: 0; }
.guide-main p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.8; margin-bottom: 18px; }
.guide-main ul { margin-bottom: 20px; display: flex; flex-direction: column; gap: 8px; }
.guide-main ul li { display: flex; align-items: flex-start; gap: 10px; font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; }
.guide-main ul li i { color: var(--gold); margin-top: 4px; flex-shrink: 0; font-size: 0.75rem; }

.guide-sidebar { position: sticky; top: calc(var(--nav-h) + 20px); }
.sidebar-nav-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 28px; box-shadow: var(--shadow-md);
}
.sidebar-nav-card h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.2rem;
    font-weight: 700; color: var(--earth); margin-bottom: 18px;
}
.sidebar-nav-list { display: flex; flex-direction: column; gap: 4px; }
.sidebar-nav-list a {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 14px; border-radius: var(--radius-sm);
    font-size: 0.85rem; color: var(--text-muted);
    text-decoration: none; transition: 0.2s;
}
.sidebar-nav-list a:hover { background: var(--cream); color: var(--gold); }
.sidebar-nav-list a i { color: var(--gold); font-size: 0.75rem; width: 16px; text-align: center; }

.itinerary-cards { display: flex; flex-direction: column; gap: 16px; margin-top: 20px; }
.itinerary-card {
    display: flex; gap: 20px; padding: 22px;
    background: var(--white); border-radius: var(--radius-md);
    border: 1px solid #eee; transition: 0.2s;
}
.itinerary-card:hover { border-color: var(--gold); box-shadow: 0 4px 16px rgba(200,150,62,0.1); }
.itinerary-card-num {
    width: 50px; height: 50px; border-radius: 12px;
    background: var(--gold); color: var(--dark);
    display: flex; align-items: center; justify-content: center;
    font-family: 'Bebas Neue', sans-serif; font-size: 1.2rem;
    flex-shrink: 0;
}
.itinerary-card h4 { font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; font-weight: 700; color: var(--earth); margin-bottom: 6px; }
.itinerary-card p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin: 0; }
.itinerary-card-tags { display: flex; gap: 6px; margin-top: 10px; flex-wrap: wrap; }
.itinerary-card-tag {
    padding: 3px 10px; background: var(--cream); border-radius: 12px;
    font-size: 0.7rem; color: var(--text-muted); font-weight: 500;
}

.plan-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.plan-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--white); margin-bottom: 12px; }
.plan-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.plan-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 1024px) {
    .guide-layout { grid-template-columns: 1fr; }
    .guide-sidebar { position: static; }
}
</style>
@endsection

@section('content')
<div class="page-hero page-hero-guide">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/plan-your-trip">Plan Your Trip</a>
            <span>/</span>
            <span class="current">Travel Guide</span>
        </div>
        <h1 class="page-hero-title">Tanzania <em>Travel Guide</em></h1>
        <p class="page-hero-sub">Everything you need to know to plan the perfect Tanzania safari, trek or beach holiday.</p>
    </div>
</div>

<section class="guide-content">
    <div class="guide-layout">
        <div class="guide-main">
            <h3>Why Tanzania?</h3>
            <p>Tanzania is one of Africa's most diverse and rewarding travel destinations. Home to the iconic Serengeti, the majestic Mount Kilimanjaro, the tropical paradise of Zanzibar and some of the friendliest people you will ever meet, Tanzania offers experiences that will stay with you for a lifetime.</p>
            <p>Whether you are watching a million wildebeest thunder across the plains, standing on the roof of Africa, or snorkeling in crystal-clear waters, Tanzania delivers extraordinary adventures at every turn.</p>

            <h3>Getting There</h3>
            <p>The main international gateway is Julius Nyerere International Airport (DAR) in Dar es Salaam, with Kilimanjaro International Airport (JRO) being the preferred entry for northern safari circuits and Kilimanjaro treks.</p>
            <ul>
                <li><i class="fas fa-plane"></i> Kilimanjaro International Airport (JRO) — closest to Serengeti, Ngorongoro and Kilimanjaro</li>
                <li><i class="fas fa-plane"></i> Julius Nyerere International Airport (DAR) — main international hub in Dar es Salaam</li>
                <li><i class="fas fa-plane"></i> Abeid Amani Karume International Airport (ZNZ) — for direct Zanzibar flights</li>
                <li><i class="fas fa-stamp"></i> Visa on arrival available at all international airports (USD $50 for most nationalities)</li>
            </ul>

            <h3>Getting Around</h3>
            <p>Tanzania offers several transport options depending on your itinerary. Most safari travelers use private 4x4 vehicles with an expert guide, while domestic flights connect major tourist destinations quickly and affordably.</p>
            <ul>
                <li><i class="fas fa-plane"></i> Domestic flights: Coastal Aviation, Precision Air and Auric Air connect major parks</li>
                <li><i class="fas fa-car"></i> Safari vehicles: Private 4x4 Land Cruisers with pop-up roofs for game viewing</li>
                <li><i class="fas fa-road"></i> Road transfers: Comfortable vehicles for shorter distances between parks</li>
                <li><i class="fas fa-ship"></i> Ferries: Available between Dar es Salaam and Zanzibar</li>
            </ul>

            <h3>Currency</h3>
            <p>The Tanzanian Shilling (TZS) is the local currency. However, US Dollars are widely accepted in the tourism industry, particularly for park fees and safari bookings. Credit cards are accepted at larger hotels and lodges, but carry cash for smaller establishments and tips.</p>
            <ul>
                <li><i class="fas fa-money-bill-wave"></i> US Dollars preferred for park fees, tips and many safari payments</li>
                <li><i class="fas fa-credit-card"></i> Credit cards accepted at major hotels; cash preferred elsewhere</li>
                <li><i class="fas fa-university"></i> ATMs available in major towns; withdraw TZS for local purchases</li>
                <li><i class="fas fa-exchange-alt"></i> Exchange bureaus at airports and in tourist areas</li>
            </ul>

            <h3>Language</h3>
            <p>Swahili is the national language and English is widely spoken in tourist areas, making communication easy for international visitors. Your safari guide will be fluent in English and Swahili, and many also speak additional languages.</p>
            <ul>
                <li><i class="fas fa-comments"></i> Swahili (Kiswahili) — national language, a few phrases go a long way</li>
                <li><i class="fas fa-language"></i> English — widely spoken in tourist areas, hotels and parks</li>
                <li><i class="fas fa-hand-holding-heart"></i> Learning basics: Jambo (hello), Asante (thank you), Hakuna Matata (no worries)</li>
            </ul>

            <h3>Health</h3>
            <p>Taking health precautions before and during your Tanzania trip is essential. Consult your doctor well before travel for the latest vaccination and medication advice.</p>
            <ul>
                <li><i class="fas fa-syringe"></i> Malaria prophylaxis recommended — consult your travel doctor</li>
                <li><i class="fas fa-tint"></i> Drink bottled or purified water only</li>
                <li><i class="fas fa-mountain"></i> Altitude sickness awareness for Kilimanjaro — acclimatize properly</li>
                <li><i class="fas fa-first-aid"></i> Carry a basic first aid kit and personal medications</li>
                <li><i class="fas fa-shield-alt"></i> Travel insurance with medical evacuation cover is strongly recommended</li>
            </ul>

            <h3>Culture</h3>
            <p>Tanzania is a culturally rich country with over 120 ethnic groups. Tanzanians are known for their warmth and hospitality. Showing respect for local customs will enrich your experience.</p>
            <ul>
                <li><i class="fas fa-handshake"></i> Greetings matter — take time to say hello before getting to business</li>
                <li><i class="fas fa-camera"></i> Always ask permission before photographing locals</li>
                <li><i class="fas fa-tshirt"></i> Dress modestly when visiting villages and local communities</li>
                <li><i class="fas fa-heart"></i> Tipping is customary and appreciated for good service</li>
            </ul>

            <h3>Accommodation</h3>
            <p>Tanzania offers a wide range of accommodation options to suit every budget and travel style. From ultra-luxury safari lodges to authentic tented camps and budget-friendly hostels, you will find the perfect place to rest after each day's adventure.</p>
            <ul>
                <li><i class="fas fa-hotel"></i> Luxury safari lodges — five-star comfort in the heart of nature</li>
                <li><i class="fas fa-campground"></i> Tented camps — authentic bush experience with modern comforts</li>
                <li><i class="fas fa-bed"></i> Mid-range hotels and camps — comfortable and affordable</li>
                <li><i class="fas fa-umbrella-beach"></i> Zanzibar resorts — beachfront luxury and boutique hotels</li>
            </ul>

            <h3>Sample Itineraries</h3>
            <p>Not sure where to start? Here are three popular itinerary ideas that showcase the best of Tanzania.</p>

            <div class="itinerary-cards">
                <div class="itinerary-card">
                    <div class="itinerary-card-num">7</div>
                    <div>
                        <h4>Classic Safari — 7 Days</h4>
                        <p>A week exploring Tanzania's most iconic parks. Start in Tarangire, descend into the Ngorongoro Crater, and spend three days in the vast Serengeti witnessing incredible wildlife.</p>
                        <div class="itinerary-card-tags">
                            <span class="itinerary-card-tag">Serengeti</span>
                            <span class="itinerary-card-tag">Ngorongoro</span>
                            <span class="itinerary-card-tag">Tarangire</span>
                        </div>
                    </div>
                </div>
                <div class="itinerary-card">
                    <div class="itinerary-card-num">10</div>
                    <div>
                        <h4>Safari + Zanzibar — 10 Days</h4>
                        <p>The perfect combination of wildlife and beach. Six days on safari through the northern circuit followed by four days relaxing on the pristine beaches and exploring the Stone Town of Zanzibar.</p>
                        <div class="itinerary-card-tags">
                            <span class="itinerary-card-tag">Safari</span>
                            <span class="itinerary-card-tag">Zanzibar</span>
                            <span class="itinerary-card-tag">Beach</span>
                        </div>
                    </div>
                </div>
                <div class="itinerary-card">
                    <div class="itinerary-card-num">14</div>
                    <div>
                        <h4>Ultimate Tanzania — 14 Days</h4>
                        <p>The complete Tanzania experience. Safari across multiple parks, trekking Kilimanjaro or relaxing in Zanzibar, plus cultural experiences with local communities. The trip of a lifetime.</p>
                        <div class="itinerary-card-tags">
                            <span class="itinerary-card-tag">Multi-park Safari</span>
                            <span class="itinerary-card-tag">Kilimanjaro</span>
                            <span class="itinerary-card-tag">Zanzibar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="guide-sidebar">
            <div class="sidebar-nav-card">
                <h4>In This Guide</h4>
                <div class="sidebar-nav-list">
                    <a href="#why-tanzania"><i class="fas fa-chevron-right"></i> Why Tanzania</a>
                    <a href="#getting-there"><i class="fas fa-chevron-right"></i> Getting There</a>
                    <a href="#getting-around"><i class="fas fa-chevron-right"></i> Getting Around</a>
                    <a href="#currency"><i class="fas fa-chevron-right"></i> Currency</a>
                    <a href="#language"><i class="fas fa-chevron-right"></i> Language</a>
                    <a href="#health"><i class="fas fa-chevron-right"></i> Health</a>
                    <a href="#culture"><i class="fas fa-chevron-right"></i> Culture</a>
                    <a href="#accommodation"><i class="fas fa-chevron-right"></i> Accommodation</a>
                    <a href="#itineraries"><i class="fas fa-chevron-right"></i> Sample Itineraries</a>
                </div>
            </div>

            <div class="sidebar-nav-card" style="margin-top: 20px;">
                <h4>Quick Links</h4>
                <div class="sidebar-nav-list">
                    <a href="/plan-your-trip/best-time-to-visit-tanzania"><i class="fas fa-sun"></i> Best Time to Visit</a>
                    <a href="/plan-your-trip/what-to-pack"><i class="fas fa-suitcase"></i> What to Pack</a>
                    <a href="/plan-your-trip/tanzania-visa"><i class="fas fa-passport"></i> Visa & Requirements</a>
                    <a href="/plan-your-trip/travel-tips"><i class="fas fa-shield-alt"></i> Safety & Tips</a>
                    <a href="/faq"><i class="fas fa-question-circle"></i> FAQ</a>
                    <a href="/contact"><i class="fas fa-envelope"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="plan-cta">
    <h2>Ready to Explore Tanzania?</h2>
    <p>Let our local experts design the perfect itinerary for you. Every trip is personalized to your interests and budget.</p>
    <div class="plan-cta-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Get In Touch</a>
        <a href="https://wa.me/255683163219" class="btn-outline" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>
@endsection
