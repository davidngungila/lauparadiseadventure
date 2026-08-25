@extends('layouts.app')

@section('page-title', 'Frequently Asked Questions | Tanzania Safari & Travel FAQ')
@section('meta-description', 'Get answers to common questions about Tanzania safaris, Kilimanjaro trekking, Zanzibar holidays, costs, visas and travel planning.')
@section('meta-keywords', 'Tanzania safari FAQ, Kilimanjaro questions, Tanzania travel questions, safari cost, visa Tanzania, Kilimanjaro difficulty')
@section('canonical', 'https://www.lauparadiseadventure.com/faq')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046389/tanzania-travel-guide-cover.webp_cvuww3.webp')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Is Tanzania safe for tourists?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, Tanzania is one of the safest countries in Africa for tourists. The northern safari circuit is well-established and well-policed. Follow your guide's advice and use common sense."
            }
        },
        {
            "@type": "Question",
            "name": "What is the best time to visit Tanzania?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Tanzania is a year-round destination. June to October is best for safaris (dry season), January to March and June to October for Kilimanjaro, and June to October or December to February for Zanzibar."
            }
        },
        {
            "@type": "Question",
            "name": "How much does a Tanzania safari cost?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Budget safaris start from $150-200 per day, mid-range from $250-400 per day, and luxury from $500-1000+ per day. Total cost depends on duration, accommodation style and activities."
            }
        },
        {
            "@type": "Question",
            "name": "How many days should I spend on safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Minimum 3-4 days, ideally 5-7 days for a comprehensive experience covering multiple parks like Serengeti, Ngorongoro and Tarangire."
            }
        },
        {
            "@type": "Question",
            "name": "Which Kilimanjaro route is best?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Machame is best for most trekkers (best balance of scenery and difficulty), Lemosho has the highest success rate and best scenery, Marangu is suitable for budget and beginners, and Rongai offers a quiet experience."
            }
        },
        {
            "@type": "Question",
            "name": "Do I need a visa for Tanzania?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most nationalities can get a visa on arrival ($50 USD) or apply for an e-visa online before travel. Check the Tanzania Immigration website for specific requirements for your nationality."
            }
        },
        {
            "@type": "Question",
            "name": "Can I combine safari and Zanzibar?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! This is one of the most popular combinations. We recommend 4-7 days safari followed by 4-6 days in Zanzibar for the perfect balance of adventure and relaxation."
            }
        },
        {
            "@type": "Question",
            "name": "What should I pack for safari?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Pack neutral-colored clothing (khaki, olive, tan), layers for changing temperatures, a wide-brimmed hat, sunglasses, comfortable walking shoes, binoculars, camera and sun protection. See our detailed packing list for more."
            }
        },
        {
            "@type": "Question",
            "name": "Do you offer private safaris?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes! All our safaris can be arranged as private tours with your own vehicle, guide and flexible schedule. Private safaris give you the freedom to set your own pace and focus on what interests you most."
            }
        },
        {
            "@type": "Question",
            "name": "Can I customize my itinerary?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely. We specialize in personalized itineraries designed around your interests, budget and travel dates. Contact us with your preferences and we will create a custom plan."
            }
        },
        {
            "@type": "Question",
            "name": "Do you offer airport transfers?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we arrange airport pickup and drop-off at Kilimanjaro International Airport (JRO) as part of our safari and trekking packages. Transfers at other airports can also be arranged."
            }
        },
        {
            "@type": "Question",
            "name": "Can I book a honeymoon package?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we have romantic safari and Zanzibar honeymoon packages featuring luxury lodges, private dinners and special touches. Visit our Honeymoon page or contact us for details."
            }
        },
        {
            "@type": "Question",
            "name": "What payment methods do you accept?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We accept bank transfer, credit card and PayPal. A deposit is required to confirm your booking, with the balance due 30 days before your travel date."
            }
        },
        {
            "@type": "Question",
            "name": "Is Kilimanjaro difficult?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No technical climbing is required, but good fitness helps. The main challenge is altitude, not technical difficulty. With proper acclimatization, a good fitness level and an experienced guide, most fit people can summit successfully."
            }
        },
        {
            "@type": "Question",
            "name": "What is included in safari prices?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our safari prices include accommodation, meals, game drives, park fees, professional English-speaking guide, 4x4 safari vehicle and airport transfers. International flights, visa fees, travel insurance and personal expenses are not included."
            }
        }
    ]
}
</script>
    @endverbatim
@endsection

@section('extra-css')
<style>
.faq-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046389/tanzania-travel-guide-cover.webp_cvuww3.webp'); }
.faq-full { background: var(--cream); padding: 70px 8%; }
.faq-full-list { display: flex; flex-direction: column; gap: 12px; max-width: 850px; margin: 0 auto; }
.faq-full-item { border: 1px solid #eee; border-radius: var(--radius-md); overflow: hidden; transition: border-color 0.2s, box-shadow 0.2s; }
.faq-full-item.active { border-color: var(--gold); box-shadow: 0 4px 16px rgba(200,150,62,0.1); }
.faq-full-question {
    display: flex; align-items: center; justify-content: space-between;
    padding: 20px 24px; background: var(--white); cursor: pointer;
    transition: background 0.2s; gap: 14px;
}
.faq-full-question:hover { background: var(--cream); }
.faq-full-question-text { font-weight: 600; font-size: 0.95rem; color: var(--text); }
.faq-full-question-icon {
    width: 30px; height: 30px; border-radius: 50%;
    background: var(--cream); display: flex; align-items: center; justify-content: center;
    color: var(--gold); font-size: 1rem; flex-shrink: 0; transition: 0.3s;
}
.faq-full-item.active .faq-full-question-icon { background: var(--gold); color: var(--dark); transform: rotate(45deg); }
.faq-full-answer { max-height: 0; overflow: hidden; transition: max-height 0.4s ease, padding 0.4s ease; }
.faq-full-item.active .faq-full-answer { max-height: 500px; }
.faq-full-answer-content { padding: 0 24px 22px; color: var(--text-muted); font-size: 0.9rem; line-height: 1.8; }

.faq-contact { background: var(--smoke); padding: 60px 8%; text-align: center; }
.faq-contact h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; font-weight: 700; color: var(--earth); margin-bottom: 10px; }
.faq-contact p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 24px; max-width: 550px; margin: 0 auto; }
.faq-contact-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 768px) { .faq-full-question { padding: 16px 18px; } .faq-full-question-text { font-size: 0.88rem; } }
</style>
@endsection

@section('content')
<div class="page-hero page-hero-faq">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046389/tanzania-travel-guide-cover.webp_cvuww3.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">FAQ</span>
        </div>
        <h1 class="page-hero-title">Frequently Asked <em>Questions</em></h1>
        <p class="page-hero-sub">Everything you need to know about planning your Tanzania adventure.</p>
    </div>
</div>

<section class="faq-full">
    <div class="sec-header" style="justify-content: center;">
        <div style="text-align: center;">
            <span class="sec-label" style="justify-content: center;">Got Questions?</span>
            <h2 class="sec-title" style="text-align: center;">Tanzania Safari & Travel <em>FAQ</em></h2>
            <p class="sec-sub" style="text-align: center; margin: 12px auto 0;">Find answers to the most common questions from our travelers.</p>
        </div>
    </div>

    <div class="faq-full-list">
        <div class="faq-full-item active" id="safety">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Is Tanzania safe for tourists?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Yes, Tanzania is one of the safest countries in Africa for tourists. The northern safari circuit is well-established and well-policed, with a strong tourism infrastructure. Violent crime against tourists is rare. Follow your guide's advice, use common sense, keep valuables secure, and avoid walking alone at night in unfamiliar areas. Your safari guide will keep you safe during all wildlife encounters.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="best-time">
            <div class="faq-full-question">
                <span class="faq-full-question-text">What is the best time to visit Tanzania?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Tanzania is a year-round destination. June to October (dry season) is best for safaris with the best wildlife viewing. January to March and June to October are ideal for Kilimanjaro trekking. June to October and December to February are best for Zanzibar beaches. April to May (green season) offers the lowest prices and lush landscapes. Visit our <a href="/plan-your-trip/best-time-to-visit-tanzania" style="color: var(--gold); font-weight: 600;">Best Time to Visit page</a> for a detailed month-by-month breakdown.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="cost">
            <div class="faq-full-question">
                <span class="faq-full-question-text">How much does a Tanzania safari cost?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Safari costs vary by style and duration. Budget safaris start from $150-200 per day per person (group camping safaris). Mid-range safaris with comfortable tented camps and lodges cost $250-400 per day. Luxury safaris with premium lodges and private guides range from $500-1000+ per day. Total trip cost depends on duration, accommodation level, number of parks visited and activities included. Contact us for a detailed quote based on your preferences.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="duration">
            <div class="faq-full-question">
                <span class="faq-full-question-text">How many days should I spend on safari?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    We recommend a minimum of 3-4 days for a basic safari experience. Ideally, 5-7 days allows you to cover multiple parks like the Serengeti, Ngorongoro Crater and Tarangire for a comprehensive wildlife experience. Longer safaris of 10+ days can include more remote parks, cultural visits and a Zanzibar beach extension. The more days you have, the more diverse your experience will be.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="kilimanjaro">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Which Kilimanjaro route is best?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    <strong>Machame (Whiskey Route)</strong> is best for most trekkers, offering the best balance of scenery, acclimatization and success rate over 6-7 days. <strong>Lemosho</strong> has the highest success rate and outstanding scenery, ideal for those with more time. <strong>Marangu (Coca-Cola Route)</strong> is the most affordable option with hut accommodation, suitable for budget travelers. <strong>Rongai</strong> is the quietest route approaching from the north, good for those wanting to avoid crowds. Your choice depends on your budget, fitness level and preference for scenery versus crowds.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="visa">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Do I need a visa for Tanzania?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Most nationalities can get a visa on arrival at any international airport or land border crossing. The tourist visa costs USD $50 for most nationalities (USD $100 for US citizens) and allows a single entry stay of up to 90 days. You can also apply for an e-visa online before travel at visas.immigration.go.tz to save time at the airport. Your passport must be valid for at least 6 months with at least 2 blank pages. Visit our <a href="/plan-your-trip/tanzania-visa" style="color: var(--gold); font-weight: 600;">Visa & Requirements page</a> for full details.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="safari-zanzibar">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Can I combine safari and Zanzibar?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Absolutely! Combining a safari with Zanzibar is one of the most popular Tanzania travel combinations. We recommend 4-7 days on safari in the northern circuit followed by 4-6 days relaxing on the beaches of Zanzibar. This gives you the perfect balance of wildlife adventure and tropical relaxation. Flights connect Arusha (near the safari parks) directly to Zanzibar. We can arrange the entire combination for you seamlessly.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="packing">
            <div class="faq-full-question">
                <span class="faq-full-question-text">What should I pack for safari?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Pack neutral-colored clothing (khaki, olive, tan) — avoid bright colors and white. Bring layers for changing temperatures, a wide-brimmed hat, sunglasses, comfortable closed-toe shoes, binoculars, camera with telephoto lens, sunscreen, insect repellent and a daypack. Most safari lodges offer laundry services so you can pack light. See our detailed <a href="/plan-your-trip/what-to-pack" style="color: var(--gold); font-weight: 600;">packing list page</a> for a complete checklist.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="private-safari">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Do you offer private safaris?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Yes! All our safaris can be arranged as private tours with your own dedicated 4x4 vehicle, expert guide and completely flexible schedule. Private safaris allow you to set your own pace, linger at sightings that interest you, and focus on the wildlife and experiences that matter most to you. This is the most popular option and the best way to experience Tanzania.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="custom">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Can I customize my itinerary?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Absolutely! We specialize in personalized itineraries designed entirely around your interests, budget and travel dates. Whether you want to add a hot air balloon safari, visit a Maasai village, combine Kilimanjaro with a beach holiday, or create a family-friendly adventure, we will craft a custom plan just for you. Contact us with your dream trip details and we will design it within 24 hours.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="transfers">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Do you offer airport transfers?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Yes, we arrange airport pickup and drop-off at Kilimanjaro International Airport (JRO) as part of our safari and trekking packages. Our driver will meet you at the arrivals hall with a LAU Paradise Adventure sign. Transfers at other airports, including Dar es Salaam (DAR) and Zanzibar (ZNZ), can also be arranged on request. Just let us know your flight details when booking.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="honeymoon">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Can I book a honeymoon package?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Yes! We have romantic safari and Zanzibar honeymoon packages featuring luxury lodges, private bush dinners, champagne sundowners and special touches to make your celebration unforgettable. Our honeymoon packages combine the thrill of wildlife viewing with the romance of Zanzibar's pristine beaches. Visit our <a href="/honeymoon" style="color: var(--gold); font-weight: 600;">Honeymoon page</a> or contact us to plan your dream romantic getaway.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="payment">
            <div class="faq-full-question">
                <span class="faq-full-question-text">What payment methods do you accept?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    We accept bank transfer (most common for international bookings), credit card (Visa and Mastercard) and PayPal. A deposit of 20-30% is required to confirm your booking, with the remaining balance due 30 days before your travel date. We will send you a detailed invoice with payment instructions once you confirm your trip.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="kili-difficulty">
            <div class="faq-full-question">
                <span class="faq-full-question-text">Is Kilimanjaro difficult?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    No technical climbing skills are required — you will not need ropes, harnesses or climbing experience. However, Kilimanjaro is a serious physical challenge. The main difficulty is altitude, not technical terrain. With a well-planned route (7+ days for proper acclimatization), reasonable fitness and an experienced guide, most fit people can successfully reach the summit. Training with regular cardiovascular exercise and hill walking in the months before your trek is recommended.
                </div>
            </div>
        </div>

        <div class="faq-full-item" id="included">
            <div class="faq-full-question">
                <span class="faq-full-question-text">What is included in safari prices?</span>
                <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
            </div>
            <div class="faq-full-answer">
                <div class="faq-full-answer-content">
                    Our safari prices typically include: accommodation (lodge or tented camp), all meals, professional English-speaking guide, private 4x4 safari vehicle with pop-up roof, all game drives and park entrance fees, airport transfers, and bottled water during game drives. Not included: international flights, Tanzania visa fees ($50), travel insurance, tips for guides and staff, alcoholic and bottled beverages (at lodges), and personal expenses. Each tour listing has a detailed includes/excludes section.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-contact">
    <h3>Still Have Questions?</h3>
    <p>Our team is here to help. Reach out and we will get back to you within 24 hours with a personalized answer.</p>
    <div class="faq-contact-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Contact Us</a>
        <a href="https://wa.me/255683163219" class="btn-outline" target="_blank" style="color: var(--text); border-color: #ddd;"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection

@section('extra-js')
<script>
document.querySelectorAll('.faq-full-question').forEach(q => {
    q.addEventListener('click', () => {
        const item = q.parentElement;
        const wasActive = item.classList.contains('active');
        document.querySelectorAll('.faq-full-item').forEach(i => i.classList.remove('active'));
        if (!wasActive) item.classList.add('active');
    });
});
</script>
@endsection
