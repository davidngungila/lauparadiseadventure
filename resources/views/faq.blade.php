@extends('layouts.app')

@section('page-title', 'Frequently Asked Questions | Tanzania Safari & Travel FAQ')
@section('meta-description', 'Answers to every common question about Tanzania safaris, Kilimanjaro trekking, Zanzibar holidays — costs, best time, visas, packing, health, bookings and more.')
@section('meta-keywords', 'Tanzania safari FAQ, Kilimanjaro questions, Tanzania travel questions, safari cost, visa Tanzania, Kilimanjaro difficulty, best time Tanzania')
@section('canonical', 'https://www.lauparadiseadventure.com/faq')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046389/tanzania-travel-guide-cover.webp_cvuww3.webp')

@php
$faqLinkStyle = 'color: var(--gold); font-weight: 600;';
$faqGroups = [
    [
        'id' => 'planning', 'title' => 'Trip Planning & Best Time', 'icon' => 'fa-calendar-days',
        'items' => [
            [
                'q' => 'What is the best time to visit Tanzania?',
                'a' => 'Tanzania is a year-round destination. June to October (dry season) offers the best wildlife viewing as animals gather around water sources. January to March is calving season in the southern Serengeti — superb for predators. July to September is prime time for Mara River crossings. April-May (green season) brings lower prices and lush landscapes.',
                'link' => ['/plan-your-trip/best-time-to-visit-tanzania', 'Best Time to Visit page'],
            ],
            [
                'q' => 'Is the rainy season a bad time to go on safari?',
                'a' => 'Not at all. The "long rains" (April-May) bring afternoon showers rather than constant rain, dramatic skies photographers love, newborn animals, and significantly lower prices. Some camps close in remote areas, but the northern circuit operates normally. If saving money matters most, the green season is excellent value.',
            ],
            [
                'q' => 'When is the Great Migration river crossing?',
                'a' => 'The herds typically reach the Mara River in the northern Serengeti between July and October, with crossing peaks in August and September. Exact timing shifts with rainfall — herds follow the grass. Our Great Migration safaris position you near the main crossing points throughout this window.',
                'link' => ['/safaris/great-migration-river-crossing', 'River Crossing Safari'],
            ],
            [
                'q' => 'How far in advance should I book?',
                'a' => 'For high-season travel (June-October and December holidays), book 6-12 months ahead — especially for Kilimanjaro climbs and migration-positioned camps which sell out first. Shoulder seasons need 3-6 months notice. Last-minute trips are possible in low season; message us and we will check real availability.',
            ],
            [
                'q' => 'How much does a Tanzania safari cost?',
                'a' => 'Budget group camping safaris run roughly $150-250 per person per day. Mid-range lodge and tented-camp safaris average $250-450 per day. Luxury fly-in experiences range from $500 to $1,500+ per day. Your final quote depends on season, duration, accommodation style and group size — contact us for an exact, no-obligation quote.',
            ],
            [
                'q' => 'How many days do I need for a good safari?',
                'a' => 'Three days gives you a taste; five to seven days lets you combine two or three parks properly (for example Tarangire, Serengeti and Ngorongoro). Ten-plus days allows remote parks, cultural experiences and a Zanzibar beach finale. Most of our guests choose six-day itineraries as the sweet spot.',
            ],
        ],
    ],
    [
        'id' => 'visa-health', 'title' => 'Visas, Health & Money', 'icon' => 'fa-passport',
        'items' => [
            [
                'q' => 'Do I need a visa for Tanzania?',
                'a' => 'Most nationalities require a tourist visa, available on arrival or online in advance. It costs USD 50 for most passports (USD 100 for US citizens) and permits stays up to 90 days. Apply for the official e-visa at visas.immigration.go.tz to skip airport queues. Passports must be valid six months beyond arrival with two blank pages.',
                'link' => ['/plan-your-trip/tanzania-visa', 'Visa Information page'],
            ],
            [
                'q' => 'What vaccinations do I need?',
                'a' => 'A yellow fever certificate is required only if arriving from a yellow-fever endemic country. Recommended routine travel vaccinations include hepatitis A, typhoid, tetanus and rabies (for extended stays). Malaria prophylaxis is strongly advised for safari regions — consult your doctor four to six weeks before departure.',
            ],
            [
                'q' => 'Is the water safe to drink?',
                'a' => 'Tap water is not recommended for visitors. We provide unlimited bottled water in every vehicle and at every camp on all our trips. Lodges serve filtered water with meals, and ice at reputable camps is made from purified water. For brushing teeth, use bottled water as a precaution.',
            ],
            [
                'q' => 'Which currency should I bring?',
                'a' => 'US dollars are widely accepted for tips, souvenirs and park extras — bring notes printed after 2009, as older series are rejected by banks. Tanzanian shillings are useful for small purchases; ATMs in Arusha and Moshi dispense them. Credit cards work at most lodges but often carry 3-5% surcharges, so carry some cash.',
            ],
            [
                'q' => 'Is English spoken?',
                'a' => 'Yes — Swahili and English are Tanzania\'s official languages. All our guides are fluent English speakers, and several speak additional languages including German, French, Spanish and Italian. In hotels, parks and tourist areas you will never struggle to communicate.',
            ],
        ],
    ],
    [
        'id' => 'packing', 'title' => 'Packing & Preparation', 'icon' => 'fa-suitcase-rolling',
        'items' => [
            [
                'q' => 'What should I pack for safari?',
                'a' => 'Neutral-colored clothing (khaki, olive, tan — avoid dark blue which attracts tsetse flies), warm layers for cold mornings, a wide-brimmed hat, sunglasses, closed walking shoes, sunscreen and insect repellent. Bring binoculars, a camera with a zoom lens and spare batteries. Laundry service at lodges means you can pack light.',
                'link' => ['/plan-your-trip/what-to-pack', 'full packing list'],
            ],
            [
                'q' => 'What luggage limits apply on safari flights?',
                'a' => 'Bush flight operators (Coastal, Auric, Air Excel) limit checked baggage to 15 kg per person in soft-sided bags — hard suitcases cannot fit in small aircraft holds. Carry camera gear and essentials as hand luggage. Road-based itineraries have no practical limit beyond your vehicle space.',
            ],
            [
                'q' => 'Will I have electricity and internet?',
                'a' => 'Tanzania uses Type D/G plugs (UK-style), 230V. Every camp we use has charging facilities — many offer in-tent sockets. Mobile coverage is surprisingly good near parks; most lodges provide wifi in common areas, sometimes satellite-based and slow. Buy a local SIM (Vodacom/Airtel) in Arusha for reliable data under $10.',
            ],
            [
                'q' => 'Do I need travel insurance?',
                'a' => 'Yes — comprehensive travel insurance is mandatory on all our trips. Your policy must cover medical expenses, emergency evacuation (essential for Kilimanjaro), trip cancellation and your specific activities. We recommend coverage equal to your full trip cost. We ask for policy details before departure.',
            ],
        ],
    ],
    [
        'id' => 'safaris', 'title' => 'Safari Questions', 'icon' => 'fa-binoculars',
        'items' => [
            [
                'q' => 'Private or group safari — which is better?',
                'a' => 'Private safaris give you exclusive vehicle, flexible schedule and personalized pacing — ideal for couples, families and photographers. Group safaris cut per-person costs by sharing the vehicle and suit sociable travelers. Both visit the same parks with the same guides; the difference is pace and price.',
                'link' => ['/safaris/private-safari', 'Private Safari options'],
            ],
            [
                'q' => 'What are my chances of seeing the Big Five?',
                'a' => 'On a five-plus day northern circuit safari, very high. Elephant, buffalo and lion sightings are nearly guaranteed; leopard require luck and patience (Seronera valley is prime habitat); black rhino appear regularly on Ngorongoro\'s crater floor. Four out of five is typical, all five happens frequently.',
            ],
            [
                'q' => 'Can children go on safari?',
                'a' => 'Absolutely — Tanzania is wonderful for families. Children under 5 stay free, ages 5-11 pay about half rate, and our family itineraries use short drive times, pools and kid-friendly guides. Some camps set minimum ages (usually 6+); we know exactly which properties welcome young explorers.',
                'link' => ['/safaris/family-safari', 'Family Safari packages'],
            ],
            [
                'q' => 'Can I fly in a hot air balloon over the Serengeti?',
                'a' => 'Yes — balloon safaris launch at dawn from central and northern Serengeti, floating silently over herds followed by a champagne bush breakfast. Cost is around $550-600 per person. It must be booked well ahead as capacity is limited to about 16 passengers daily per site.',
            ],
            [
                'q' => 'I\'m traveling alone — is that okay?',
                'a' => 'Very welcome. Solo travelers join our scheduled group departures to share vehicle costs, or book private at a solo supplement. Tanzania is one of Africa\'s easiest solo destinations, and single rooms can be arranged throughout — some camps even waive single supplements in low season.',
            ],
        ],
    ],
    [
        'id' => 'kilimanjaro', 'title' => 'Kilimanjaro Trekking', 'icon' => 'fa-mountain',
        'items' => [
            [
                'q' => 'Which Kilimanjaro route should I choose?',
                'a' => 'Machame (7 days) suits most trekkers — great scenery and strong acclimatization profile. Lemosho (8 days) has our highest success rate and quietest trails. Marangu (5-6 days) is cheapest with hut beds. Rongai approaches from dry, remote north. Northern Circuit (9 days) is the longest and gentlest.',
                'link' => ['/kilimanjaro', 'compare all routes'],
            ],
            [
                'q' => 'How fit do I need to be?',
                'a' => 'No technical climbing is involved — it is a strenuous walk. You should comfortably hike 6-8 hours on consecutive days. Altitude, not fitness, defeats most trekkers, which is why our routes run seven days or longer with a proper climb-high-sleep-low profile. Train with hill walking and cardio for three months prior.',
            ],
            [
                'q' => 'What is your summit success rate?',
                'a' => 'Across all routes our overall summit success rate exceeds 90 percent — well above the park average of roughly 65 percent. On eight-day Lemosho and nine-day Northern Circuit departures, success runs above 95 percent. Longer routes mean better acclimatization means stronger summits.',
            ],
            [
                'q' => 'What do porters carry, and what do I carry?',
                'a' => 'Porters carry your duffel (limited to 15 kg), tents, food, water and cooking equipment. On the trail you carry only a daypack with rain layer, water, camera and snacks. Our crew follows strict porter-welfare standards: fair wages, weight caps, meals and accommodation on the mountain.',
            ],
            [
                'q' => 'What is the minimum age to climb?',
                'a' => 'TANAPA regulations set the minimum age at 10 years old for reaching the crater rim. Families regularly climb with teenagers; younger adventurers enjoy the lower slopes on day hikes instead. Every minor must be accompanied by a parent or guardian throughout the trek.',
            ],
        ],
    ],
    [
        'id' => 'zanzibar', 'title' => 'Zanzibar & Beach Extensions', 'icon' => 'fa-umbrella-beach',
        'items' => [
            [
                'q' => 'Can I combine safari and Zanzibar?',
                'a' => 'It is our most popular combination. Fly directly from the Serengeti\'s airstrips or Arusha to Zanzibar in one to two hours. We recommend four to seven safari days plus four to six beach days — the classic adventure-then-relaxation formula, arranged seamlessly door to door.',
                'link' => ['/zanzibar/safari-and-zanzibar', 'Safari + Zanzibar combos'],
            ],
            [
                'q' => 'Which part of Zanzibar should I stay in?',
                'a' => 'Nungwi and Kendwa in the north have the calmest swimming beaches and liveliest sunsets. The southeast coast (Paje, Jambiani) suits kite-surfers and quiet seekers. Stone Town rewards culture lovers for a night or two. Matemwe offers seclusion near Mnemba Atoll\'s snorkeling reef.',
            ],
            [
                'q' => 'Is Zanzibar good for honeymoons?',
                'a' => 'World-class. Private villa resorts, candlelit dinners on the sand, dhow sunset cruises and spa traditions dating back centuries. Our honeymoon packages pair romantic safari camps — think bubble baths overlooking waterholes — with barefoot-luxury Zanzibar beach stays and thoughtful surprises throughout.',
                'link' => ['/experiences/honeymoon', 'Honeymoon experiences'],
            ],
            [
                'q' => 'When is the best time for Zanzibar beaches?',
                'a' => 'June to October and December to February deliver reliably dry, sunny beach weather. March to mid-June brings the long rains when some hotels discount heavily. Water visibility for diving peaks June to October and December to February around Mnemba Atoll.',
            ],
        ],
    ],
];

$faqSchemaItems = [];
foreach ($faqGroups as $group) {
    foreach ($group['items'] as $item) {
        $faqSchemaItems[] = [
            '@type' => 'Question',
            'name' => $item['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['a']],
        ];
    }
}
@endphp

@section('structured-data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => $faqSchemaItems,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection

@section('extra-css')
<style>
.faq-full { background: var(--cream); padding: 70px 8%; }
.faq-topic-nav { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; margin-bottom: 44px; }
.faq-topic-chip {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 9px 18px; border-radius: 30px;
    background: var(--white); border: 1px solid #eee;
    font-size: 0.82rem; font-weight: 600; color: var(--text);
    text-decoration: none; transition: 0.2s;
}
.faq-topic-chip:hover { border-color: var(--gold); color: var(--gold); }
.faq-topic-chip i { color: var(--gold); }
.faq-group { max-width: 850px; margin: 0 auto 46px; }
.faq-group-title {
    display: flex; align-items: center; gap: 12px;
    margin-bottom: 16px; padding-bottom: 12px;
    border-bottom: 2px solid rgba(200,150,62,0.25);
}
.faq-group-title i { color: var(--gold); font-size: 1.1rem; }
.faq-group-title h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin: 0; }
.faq-full-list { display: flex; flex-direction: column; gap: 12px; }
.faq-full-item { border: 1px solid #eee; border-radius: var(--radius-md); overflow: hidden; transition: border-color 0.2s, box-shadow 0.2s; background: var(--white); }
.faq-full-item.active { border-color: var(--gold); box-shadow: 0 4px 16px rgba(200,150,62,0.1); }
.faq-full-question {
    display: flex; align-items: center; justify-content: space-between;
    padding: 20px 24px; cursor: pointer; gap: 14px; transition: background 0.2s;
}
.faq-full-question:hover { background: var(--cream); }
.faq-full-question-text { font-weight: 600; font-size: 0.95rem; color: var(--text); }
.faq-full-question-icon {
    width: 30px; height: 30px; border-radius: 50%;
    background: var(--cream); display: flex; align-items: center; justify-content: center;
    color: var(--gold); font-size: 1rem; flex-shrink: 0; transition: 0.3s;
}
.faq-full-item.active .faq-full-question-icon { background: var(--gold); color: var(--dark); transform: rotate(45deg); }
.faq-full-answer { max-height: 0; overflow: hidden; transition: max-height 0.45s ease; }
.faq-full-item.active .faq-full-answer { max-height: 700px; }
.faq-full-answer-content { padding: 0 24px 22px; color: var(--text-muted); font-size: 0.9rem; line-height: 1.8; }

.faq-contact { background: var(--smoke); padding: 60px 8%; text-align: center; }
.faq-contact h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; font-weight: 700; color: var(--earth); margin-bottom: 10px; }
.faq-contact p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 24px; max-width: 550px; margin: 0 auto; }
.faq-contact-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 768px) { .faq-full-question { padding: 16px 18px; } .faq-full-question-text { font-size: 0.88rem; } .faq-full { padding: 50px 5%; } }
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
            <h2 class="sec-title" style="text-align: center;">Tanzania Travel <em>FAQ</em></h2>
            <p class="sec-sub" style="text-align: center; margin: 12px auto 0;">{{ count($faqSchemaItems) }} honest answers from our team — grouped by topic.</p>
        </div>
    </div>

    <nav class="faq-topic-nav">
        @foreach ($faqGroups as $group)
            <a href="#faq-{{ $group['id'] }}" class="faq-topic-chip"><i class="fas {{ $group['icon'] }}"></i> {{ $topicCount = count($group['items']) }} {{ Str::plural('question', $topicCount) }} · {{ $group['title'] }}</a>
        @endforeach
    </nav>

    @foreach ($faqGroups as $groupIndex => $group)
        <div class="faq-group" id="faq-{{ $group['id'] }}">
            <div class="faq-group-title">
                <i class="fas {{ $group['icon'] }}"></i>
                <h3>{{ $group['title'] }}</h3>
            </div>
            <div class="faq-full-list">
                @foreach ($group['items'] as $itemIndex => $item)
                    <div class="faq-full-item {{ $groupIndex === 0 && $itemIndex === 0 ? 'active' : '' }}">
                        <div class="faq-full-question">
                            <span class="faq-full-question-text">{{ $item['q'] }}</span>
                            <span class="faq-full-question-icon"><i class="fas fa-plus"></i></span>
                        </div>
                        <div class="faq-full-answer">
                            <div class="faq-full-answer-content">
                                {{ $item['a'] }}
                                @if (!empty($item['link']))
                                    <br><a href="{{ $item['link'][0] }}" style="{{ $faqLinkStyle }}">See our {{ $item['link'][1] }} <i class="fas fa-arrow-right"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</section>

<section class="faq-contact">
    <h3>Still Have Questions?</h3>
    <p>Our team replies within 24 hours with a personalized answer.</p>
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
