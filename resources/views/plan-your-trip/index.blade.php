@extends('layouts.app')

@section('page-title', 'Plan Your Tanzania Trip | Travel Guide, Tips & Resources')
@section('meta-description', 'Everything you need to plan your Tanzania adventure — best time to visit, packing guides, visa information, safety tips and travel advice.')
@section('meta-keywords', 'Tanzania travel guide, plan Tanzania trip, Tanzania safari tips, packing list Tanzania, Tanzania visa, best time visit Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/plan-your-trip')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Plan Your Tanzania Trip | Travel Guide, Tips & Resources",
    "description": "Everything you need to plan your Tanzania adventure — best time to visit, packing guides, visa information, safety tips and travel advice.",
    "url": "https://www.lauparadiseadventure.com/plan-your-trip",
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
.plan-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp'); }
.resources-section { background: var(--cream); padding: 80px 8%; }
.resources-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 40px; }
.resource-card {
    background: var(--white); border-radius: var(--radius-lg); overflow: hidden;
    box-shadow: var(--shadow-sm); transition: transform 0.3s, box-shadow 0.3s; text-decoration: none;
}
.resource-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.resource-card-img { height: 200px; overflow: hidden; position: relative; }
.resource-card-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s; }
.resource-card:hover .resource-card-img img { transform: scale(1.08); }
.resource-card-icon {
    position: absolute; top: 14px; right: 14px;
    width: 44px; height: 44px; border-radius: 50%;
    background: var(--gold); display: flex;
    align-items: center; justify-content: center;
    font-size: 1rem; color: var(--dark);
}
.resource-card-body { padding: 22px; }
.resource-card h3 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.25rem;
    font-weight: 700; color: var(--earth); margin-bottom: 8px;
}
.resource-card p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 14px; }
.resource-card-link { font-size: 0.82rem; font-weight: 600; color: var(--gold); display: inline-flex; align-items: center; gap: 6px; }
.resource-card-link i { transition: transform 0.2s; }
.resource-card:hover .resource-card-link i { transform: translateX(4px); }

.faq-preview { background: var(--smoke); padding: 80px 8%; }
.faq-preview-list { display: flex; flex-direction: column; gap: 12px; margin-top: 40px; max-width: 800px; }
.faq-preview-item {
    display: flex; align-items: center; justify-content: space-between;
    padding: 18px 24px; background: var(--white); border-radius: var(--radius-md);
    border: 1px solid #eee; transition: 0.2s; text-decoration: none;
}
.faq-preview-item:hover { border-color: var(--gold); box-shadow: 0 4px 16px rgba(200,150,62,0.1); }
.faq-preview-q { font-weight: 600; font-size: 0.92rem; color: var(--text); }
.faq-preview-item i { color: var(--gold); font-size: 0.85rem; }

.plan-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.plan-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--white); margin-bottom: 12px; }
.plan-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.plan-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 1024px) { .resources-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 768px) { .resources-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')
<div class="page-hero page-hero-plan">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">Plan Your Trip</span>
        </div>
        <h1 class="page-hero-title">Plan Your Trip to <em>Tanzania</em></h1>
        <p class="page-hero-sub">Everything you need to know before you go — from the best time to visit to packing tips and visa requirements.</p>
    </div>
</div>

<section class="resources-section">
    <div class="sec-header">
        <div>
            <span class="sec-label">Travel Resources</span>
            <h2 class="sec-title">Plan Your Tanzania <em>Adventure</em></h2>
            <p class="sec-sub">Browse our comprehensive travel guides to make the most of your Tanzania experience.</p>
        </div>
    </div>

    <div class="resources-grid">
        <a href="/plan-your-trip/best-time-to-visit-tanzania" class="resource-card">
            <div class="resource-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg" alt="Best time to visit Tanzania for safari and beach holidays" loading="lazy">
                <div class="resource-card-icon"><i class="fas fa-sun"></i></div>
            </div>
            <div class="resource-card-body">
                <h3>Best Time to Visit Tanzania</h3>
                <p>Month-by-month guide to weather, wildlife, crowds and prices. Find the perfect time for your safari, Kilimanjaro trek or Zanzibar holiday.</p>
                <span class="resource-card-link">Read Guide <i class="fas fa-arrow-right"></i></span>
            </div>
        </a>

        <a href="/plan-your-trip/tanzania-travel-guide" class="resource-card">
            <div class="resource-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Complete Tanzania travel guide with safari tips and destination info" loading="lazy">
                <div class="resource-card-icon"><i class="fas fa-book-open"></i></div>
            </div>
            <div class="resource-card-body">
                <h3>Tanzania Travel Guide</h3>
                <p>Your complete guide to traveling in Tanzania — destinations, culture, money, transport and everything you need to know.</p>
                <span class="resource-card-link">Read Guide <i class="fas fa-arrow-right"></i></span>
            </div>
        </a>

        <a href="/plan-your-trip/what-to-pack" class="resource-card">
            <div class="resource-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg" alt="Tanzania safari and Kilimanjaro packing checklist" loading="lazy">
                <div class="resource-card-icon"><i class="fas fa-suitcase"></i></div>
            </div>
            <div class="resource-card-body">
                <h3>What to Pack</h3>
                <p>Essential packing lists for Tanzania safaris and Kilimanjaro treks. Clothing, gear, health items and documents.</p>
                <span class="resource-card-link">Read Guide <i class="fas fa-arrow-right"></i></span>
            </div>
        </a>

        <a href="/plan-your-trip/tanzania-visa" class="resource-card">
            <div class="resource-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg" alt="Tanzania visa requirements and travel documents" loading="lazy">
                <div class="resource-card-icon"><i class="fas fa-passport"></i></div>
            </div>
            <div class="resource-card-body">
                <h3>Visa & Requirements</h3>
                <p>Visa on arrival, e-visa, passport validity, vaccinations and all travel documents you need for Tanzania.</p>
                <span class="resource-card-link">Read Guide <i class="fas fa-arrow-right"></i></span>
            </div>
        </a>

        <a href="/plan-your-trip/travel-tips" class="resource-card">
            <div class="resource-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324498/long-range-shot-elephants-walking-grassy-field-near-trees_inlucz.jpg" alt="Tanzania safety tips and travel advice" loading="lazy">
                <div class="resource-card-icon"><i class="fas fa-shield-alt"></i></div>
            </div>
            <div class="resource-card-body">
                <h3>Safety & Tips</h3>
                <p>Essential safety advice, cultural etiquette, money tips and practical guidance for a smooth Tanzania trip.</p>
                <span class="resource-card-link">Read Guide <i class="fas fa-arrow-right"></i></span>
            </div>
        </a>

        <a href="/faq" class="resource-card">
            <div class="resource-card-img">
                <img src="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046228/tower-giraffes-gathered-around-bushes-open-woodlan_fsgqe3.jpg" alt="Frequently asked questions about Tanzania travel" loading="lazy">
                <div class="resource-card-icon"><i class="fas fa-question-circle"></i></div>
            </div>
            <div class="resource-card-body">
                <h3>FAQ</h3>
                <p>Get answers to the most common questions about Tanzania safaris, Kilimanjaro, Zanzibar and travel planning.</p>
                <span class="resource-card-link">View FAQ <i class="fas fa-arrow-right"></i></span>
            </div>
        </a>
    </div>
</section>

<section class="faq-preview">
    <div style="text-align: center;">
        <span class="sec-label" style="justify-content: center;">Quick Answers</span>
        <h2 class="sec-title" style="text-align: center;">Common <em>Questions</em></h2>
        <p class="sec-sub" style="text-align: center; margin: 12px auto 0;">Quick answers to the most asked questions from our travelers.</p>
    </div>

    <div class="faq-preview-list">
        <a href="/faq#safety" class="faq-preview-item">
            <span class="faq-preview-q">Is Tanzania safe for tourists?</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="/faq#best-time" class="faq-preview-item">
            <span class="faq-preview-q">What is the best time to visit Tanzania?</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="/faq#cost" class="faq-preview-item">
            <span class="faq-preview-q">How much does a Tanzania safari cost?</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="/faq#visa" class="faq-preview-item">
            <span class="faq-preview-q">Do I need a visa for Tanzania?</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="/faq#kilimanjaro" class="faq-preview-item">
            <span class="faq-preview-q">Which Kilimanjaro route is best?</span>
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
</section>

<section class="plan-cta">
    <h2>Need Help Planning?</h2>
    <p>Our Tanzania travel experts are ready to help you plan the perfect trip. Tell us your dream and we'll make it happen.</p>
    <div class="plan-cta-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Contact Us</a>
        <a href="https://wa.me/255683163219" class="btn-outline" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>
@endsection
