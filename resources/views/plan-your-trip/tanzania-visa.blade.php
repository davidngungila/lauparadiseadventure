@extends('layouts.app')

@section('page-title', 'Tanzania Visa Requirements | Travel Visa Guide')
@section('meta-description', 'Everything you need to know about Tanzania visa requirements. Visa on arrival, e-visa, passport requirements and travel documents.')
@section('meta-keywords', 'Tanzania visa, Tanzania visa requirements, visa on arrival Tanzania, e-visa Tanzania, Tanzania travel documents')
@section('canonical', 'https://www.lauparadiseadventure.com/plan-your-trip/tanzania-visa')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Tanzania Visa Requirements | Travel Visa Guide",
    "description": "Everything you need to know about Tanzania visa requirements. Visa on arrival, e-visa, passport requirements and travel documents.",
    "url": "https://www.lauparadiseadventure.com/plan-your-trip/tanzania-visa",
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
.visa-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg'); }
.visa-content { background: var(--cream); padding: 70px 8%; }
.visa-layout { display: grid; grid-template-columns: 1fr 340px; gap: 50px; align-items: start; }
.visa-main h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 16px; margin-top: 36px; }
.visa-main h3:first-child { margin-top: 0; }
.visa-main p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.8; margin-bottom: 18px; }
.visa-main ul { margin-bottom: 20px; display: flex; flex-direction: column; gap: 10px; }
.visa-main ul li { display: flex; align-items: flex-start; gap: 12px; font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; }
.visa-main ul li i { color: var(--gold); margin-top: 4px; flex-shrink: 0; font-size: 0.8rem; }

.visa-info-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 28px; box-shadow: var(--shadow-md); border-left: 4px solid var(--gold);
    margin-top: 30px;
}
.visa-info-card h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.15rem;
    font-weight: 700; color: var(--earth); margin-bottom: 14px;
    display: flex; align-items: center; gap: 8px;
}
.visa-info-card h4 i { color: var(--gold); }
.visa-info-list { display: flex; flex-direction: column; gap: 12px; }
.visa-info-item { display: flex; align-items: center; gap: 12px; }
.visa-info-item i { color: var(--gold); font-size: 0.9rem; width: 20px; text-align: center; flex-shrink: 0; }
.visa-info-item span { font-size: 0.88rem; color: var(--text); }

.visa-sidebar { position: sticky; top: calc(var(--nav-h) + 20px); }
.visa-sidebar-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 28px; box-shadow: var(--shadow-md);
}
.visa-sidebar-card h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.2rem;
    font-weight: 700; color: var(--earth); margin-bottom: 18px;
}
.visa-sidebar-card ul { display: flex; flex-direction: column; gap: 4px; }
.visa-sidebar-card li {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 14px; border-radius: var(--radius-sm);
    font-size: 0.85rem; color: var(--text-muted);
    text-decoration: none; list-style: none; transition: 0.2s;
}
.visa-sidebar-card li:hover { background: var(--cream); color: var(--gold); }
.visa-sidebar-card li i { color: var(--gold); font-size: 0.75rem; width: 16px; text-align: center; }

.visa-types-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 20px; margin-bottom: 30px; }
.visa-type-card {
    background: var(--white); border-radius: var(--radius-md);
    padding: 24px; text-align: center; box-shadow: var(--shadow-sm);
    border: 1px solid #eee; transition: 0.2s;
}
.visa-type-card:hover { border-color: var(--gold); }
.visa-type-card i { font-size: 2rem; color: var(--gold); margin-bottom: 12px; }
.visa-type-card h5 { font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 700; color: var(--earth); margin-bottom: 6px; }
.visa-type-card p { font-size: 0.8rem; color: var(--text-muted); line-height: 1.5; }

.plan-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.plan-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--white); margin-bottom: 12px; }
.plan-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.plan-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 1024px) {
    .visa-layout { grid-template-columns: 1fr; }
    .visa-sidebar { position: static; }
}
@media (max-width: 768px) { .visa-types-grid { grid-template-columns: 1fr; } }
</style>
@endsection

@section('content')
<div class="page-hero page-hero-visa">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766324502/tourist-carrying-luggage-_2_yqtggh.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/plan-your-trip">Plan Your Trip</a>
            <span>/</span>
            <span class="current">Visa & Requirements</span>
        </div>
        <h1 class="page-hero-title">Tanzania Visa & <em>Travel Requirements</em></h1>
        <p class="page-hero-sub">Everything you need to know about visas, passports, vaccinations and required documents for your Tanzania trip.</p>
    </div>
</div>

<section class="visa-content">
    <div class="visa-layout">
        <div class="visa-main">
            <h3>Visa Types</h3>
            <div class="visa-types-grid">
                <div class="visa-type-card">
                    <i class="fas fa-passport"></i>
                    <h5>Tourist Visa</h5>
                    <p>For safari, trekking and holiday travel. Single entry, valid for 90 days. USD $50 for most nationalities.</p>
                </div>
                <div class="visa-type-card">
                    <i class="fas fa-briefcase"></i>
                    <h5>Business Visa</h5>
                    <p>For business activities and professional visits. Requires a letter of invitation from a Tanzanian company.</p>
                </div>
                <div class="visa-type-card">
                    <i class="fas fa-plane-arrival"></i>
                    <h5>Transit Visa</h5>
                    <p>For passing through Tanzania to another destination. Valid for 7 days. USD $30 for most nationalities.</p>
                </div>
            </div>

            <h3>Visa on Arrival</h3>
            <p>Citizens of most countries can obtain a visa upon arrival at any international airport or land border crossing in Tanzania. The standard tourist visa costs USD $50 and allows a single entry stay of up to 90 days.</p>
            <ul>
                <li><i class="fas fa-check-circle"></i> Available at all international airports (JRO, DAR, ZNZ) and major land borders</li>
                <li><i class="fas fa-check-circle"></i> Cost: USD $50 for most nationalities (USD $100 for US citizens)</li>
                <li><i class="fas fa-check-circle"></i> Payment in US Dollars cash is preferred; some locations accept credit cards</li>
                <li><i class="fas fa-check-circle"></i> You will need a passport photo and proof of onward travel</li>
                <li><i class="fas fa-check-circle"></i> Processing time: typically 15-30 minutes at the airport</li>
            </ul>

            <h3>E-Visa (Online Application)</h3>
            <p>To save time at the airport, you can apply for your Tanzania e-visa online before travel. The e-visa system is managed by the Tanzania Immigration Services Department.</p>
            <ul>
                <li><i class="fas fa-globe"></i> Apply online at: visas.immigration.go.tz</li>
                <li><i class="fas fa-clock"></i> Apply at least 2 weeks before your travel date</li>
                <li><i class="fas fa-file-upload"></i> Upload passport photo, passport scan and hotel booking</li>
                <li><i class="fas fa-envelope"></i> E-visa approval sent via email — print a copy to carry</li>
                <li><i class="fas fa-money-bill-wave"></i> Payment made online via credit or debit card</li>
            </ul>

            <h3>Passport Requirements</h3>
            <p>Your passport must meet specific requirements for entry into Tanzania. Ensure these conditions are met well before your travel date.</p>
            <ul>
                <li><i class="fas fa-calendar-check"></i> Valid for at least 6 months beyond your date of entry into Tanzania</li>
                <li><i class="fas fa-file-alt"></i> At least 2 blank pages available for visa stamps</li>
                <li><i class="fas fa-copy"></i> Carry photocopies of your passport separately from the original</li>
                <li><i class="fas fa-database"></i> Keep digital scans of your passport stored securely online</li>
            </ul>

            <h3>Vaccinations & Health</h3>
            <p>Health requirements vary depending on your travel history and activities. Consult your travel health clinic at least 6-8 weeks before departure.</p>
            <ul>
                <li><i class="fas fa-syringe"></i> Yellow Fever: Certificate required if arriving from a country with risk of yellow fever transmission</li>
                <li><i class="fas fa-syringe"></i> Recommended vaccinations: Hepatitis A, Typhoid, Tetanus, Rabies (for Kilimanjaro)</li>
                <li><i class="fas fa-pills"></i> Malaria prophylaxis strongly recommended — consult your doctor</li>
                <li><i class="fas fa-tint"></i> Drink only bottled or purified water</li>
            </ul>

            <h3>Travel Insurance</h3>
            <p>While not a legal requirement, comprehensive travel insurance is strongly recommended for all Tanzania travelers. Ensure your policy covers the specific activities you plan to undertake.</p>
            <ul>
                <li><i class="fas fa-shield-alt"></i> Must cover emergency medical treatment and hospital stays</li>
                <li><i class="fas fa-helicopter"></i> Medical evacuation cover is essential (especially for Kilimanjaro)</li>
                <li><i class="fas fa-mountain"></i> Adventure activities coverage for safari and trekking</li>
                <li><i class="fas fa-plane"></i> Trip cancellation and interruption coverage</li>
                <li><i class="fas fa-suitcase"></i> Baggage and personal belongings coverage</li>
            </ul>

            <h3>COVID-19 Requirements</h3>
            <p>Tanzania currently has no COVID-19 specific entry requirements. However, regulations may change. Always check the latest entry requirements from official sources before your trip.</p>
            <ul>
                <li><i class="fas fa-check-circle"></i> No negative PCR test required for entry (as of current regulations)</li>
                <li><i class="fas fa-check-circle"></i> No vaccination certificate required for entry</li>
                <li><i class="fas fa-info-circle"></i> Check the latest requirements before departure at the Tanzania Immigration website</li>
            </ul>

            <div class="visa-info-card">
                <h4><i class="fas fa-info-circle"></i> Important Note</h4>
                <div class="visa-info-list">
                    <div class="visa-info-item">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Requirements can change at any time. Always verify the latest entry requirements with the Tanzania Immigration Services Department or your nearest Tanzanian embassy before traveling.</span>
                    </div>
                    <div class="visa-info-item">
                        <i class="fas fa-info-circle"></i>
                        <span>For the most current information, visit: immigration.go.tz</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="visa-sidebar">
            <div class="visa-sidebar-card">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/plan-your-trip/best-time-to-visit-tanzania"><i class="fas fa-sun"></i> Best Time to Visit</a></li>
                    <li><a href="/plan-your-trip/tanzania-travel-guide"><i class="fas fa-book-open"></i> Travel Guide</a></li>
                    <li><a href="/plan-your-trip/what-to-pack"><i class="fas fa-suitcase"></i> What to Pack</a></li>
                    <li><a href="/plan-your-trip/travel-tips"><i class="fas fa-shield-alt"></i> Safety & Tips</a></li>
                    <li><a href="/faq"><i class="fas fa-question-circle"></i> FAQ</a></li>
                    <li><a href="/contact"><i class="fas fa-envelope"></i> Contact Us</a></li>
                </ul>
            </div>

            <div class="visa-sidebar-card" style="margin-top: 20px;">
                <h4>Required Documents for Safari</h4>
                <ul>
                    <li><i class="fas fa-passport"></i> Valid passport (6+ months validity)</li>
                    <li><i class="fas fa-stamp"></i> Tanzania visa (on arrival or e-visa)</li>
                    <li><i class="fas fa-file-contract"></i> Safari booking confirmation</li>
                    <li><i class="fas fa-shield-alt"></i> Travel insurance documents</li>
                    <li><i class="fas fa-syringe"></i> Yellow fever certificate (if applicable)</li>
                    <li><i class="fas fa-print"></i> E-visa approval letter (if applicable)</li>
                </ul>
            </div>

            <div class="visa-sidebar-card" style="margin-top: 20px;">
                <h4>Need Help?</h4>
                <ul>
                    <li><a href="https://wa.me/255683163219" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Us</a></li>
                    <li><a href="/contact"><i class="fas fa-envelope"></i> Email Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="plan-cta">
    <h2>Have Visa Questions?</h2>
    <p>Our team can guide you through the visa process and ensure you have all the documents needed for a smooth arrival in Tanzania.</p>
    <div class="plan-cta-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Get In Touch</a>
        <a href="https://wa.me/255683163219" class="btn-outline" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>
@endsection
