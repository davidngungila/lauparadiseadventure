@extends('layouts.app')

@section('page-title', 'What to Pack for Tanzania Safari & Kilimanjaro | Packing List')
@section('meta-description', 'Complete packing list for Tanzania safaris and Kilimanjaro treks. Essential clothing, gear and accessories for your Tanzania adventure.')
@section('meta-keywords', 'Tanzania packing list, what to pack safari, Kilimanjaro packing, Tanzania travel essentials, safari clothing')
@section('canonical', 'https://www.lauparadiseadventure.com/plan-your-trip/what-to-pack')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "What to Pack for Tanzania Safari & Kilimanjaro | Packing List",
    "description": "Complete packing list for Tanzania safaris and Kilimanjaro treks. Essential clothing, gear and accessories for your Tanzania adventure.",
    "url": "https://www.lauparadiseadventure.com/plan-your-trip/what-to-pack",
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
.pack-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg'); }
.pack-tabs { background: var(--white); border-bottom: 2px solid #eee; padding: 0 8%; display: flex; gap: 0; position: sticky; top: var(--nav-h); z-index: 50; }
.pack-tab {
    padding: 18px 30px; border: none; background: transparent;
    cursor: pointer; font-size: 0.9rem; font-weight: 500;
    color: var(--text-muted); transition: 0.2s; white-space: nowrap;
    border-bottom: 2px solid transparent; margin-bottom: -2px;
    font-family: 'DM Sans', sans-serif;
}
.pack-tab.active, .pack-tab:hover { color: var(--gold); border-bottom-color: var(--gold); }
.pack-tab i { margin-right: 8px; }
.pack-content { background: var(--cream); padding: 70px 8%; }
.pack-panel { display: none; }
.pack-panel.active { display: block; }
.pack-intro { margin-bottom: 40px; }
.pack-intro h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 12px; }
.pack-intro p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.8; max-width: 700px; }

.pack-categories { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; }
.pack-category {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 28px; box-shadow: var(--shadow-sm);
    border-top: 3px solid var(--gold);
}
.pack-category-icon {
    width: 50px; height: 50px; border-radius: 50%;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    margin-bottom: 16px; font-size: 1.2rem; color: var(--gold);
}
.pack-category h4 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.2rem;
    font-weight: 700; color: var(--earth); margin-bottom: 16px;
}
.pack-list { display: flex; flex-direction: column; gap: 10px; }
.pack-item { display: flex; align-items: flex-start; gap: 10px; }
.pack-check {
    width: 20px; height: 20px; border-radius: 4px;
    border: 2px solid #ddd; flex-shrink: 0; margin-top: 2px;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer; transition: 0.2s;
}
.pack-check:hover { border-color: var(--gold); }
.pack-item-text { font-size: 0.88rem; color: var(--text); }
.pack-item-text small { display: block; font-size: 0.78rem; color: var(--text-muted); margin-top: 2px; }

.pack-tips { background: var(--smoke); padding: 60px 8%; }
.pack-tips-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 36px; }
.pack-tip {
    background: var(--white); border-radius: var(--radius-md);
    padding: 24px; text-align: center;
}
.pack-tip-icon {
    width: 56px; height: 56px; border-radius: 50%;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    margin: 0 auto 14px; font-size: 1.2rem; color: var(--gold);
}
.pack-tip h4 { font-family: 'Cormorant Garamond', serif; font-size: 1.1rem; font-weight: 700; color: var(--earth); margin-bottom: 8px; }
.pack-tip p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; }

.plan-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.plan-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--white); margin-bottom: 12px; }
.plan-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.plan-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 1024px) { .pack-categories { grid-template-columns: 1fr; } .pack-tips-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 768px) { .pack-tips-grid { grid-template-columns: 1fr; } .pack-tab { padding: 14px 18px; font-size: 0.82rem; } }
</style>
@endsection

@section('content')
<div class="page-hero page-hero-pack">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766046350/kilimanjaro-climbing_bvcs7p.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/plan-your-trip">Plan Your Trip</a>
            <span>/</span>
            <span class="current">What to Pack</span>
        </div>
        <h1 class="page-hero-title">What to <em>Pack</em></h1>
        <p class="page-hero-sub">Essential packing lists for Tanzania safaris and Kilimanjaro treks. Be prepared for every adventure.</p>
    </div>
</div>

<div class="pack-tabs">
    <button class="pack-tab active" data-tab="safari"><i class="fas fa-binoculars"></i> Safari Packing List</button>
    <button class="pack-tab" data-tab="kili"><i class="fas fa-mountain"></i> Kilimanjaro Packing List</button>
</div>

<section class="pack-content">
    <!-- Safari Panel -->
    <div class="pack-panel active" id="safari">
        <div class="pack-intro">
            <h3>Safari Packing Essentials</h3>
            <p>Packing for a Tanzania safari requires lightweight, neutral-colored clothing and a few key accessories. Most safari lodges offer laundry services, so you can pack light and rewear items. Here is everything you need.</p>
        </div>

        <div class="pack-categories">
            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-tshirt"></i></div>
                <h4>Clothing</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Neutral-colored shirts</strong><small>Khaki, olive, tan — avoid bright colors and white</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Lightweight trousers and shorts</strong><small>Quick-dry fabric, zip-off trousers are ideal</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Warm fleece or jacket</strong><small>Morning game drives can be surprisingly cold</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Wide-brimmed hat</strong><small>Essential for sun protection during game drives</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Sunglasses</strong><small>Polarized lenses recommended for glare reduction</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Comfortable walking shoes</strong><small>Closed-toe shoes with good grip</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Swimwear</strong><small>Many lodges have pools</small></div>
                    </div>
                </div>
            </div>

            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-camera"></i></div>
                <h4>Equipment</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Binoculars</strong><small>Essential for wildlife viewing — 8x42 or 10x42 recommended</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Camera with telephoto lens</strong><small>200-400mm ideal for wildlife photography</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Power bank</strong><small>Keep devices charged during long game drives</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Daypack</strong><small>Small backpack for daily essentials on game drives</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Extra memory cards</strong><small>You will take more photos than you expect</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Dust-proof bag</strong><small>Protect electronics from red dust on dusty roads</small></div>
                    </div>
                </div>
            </div>

            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-medkit"></i></div>
                <h4>Health & Protection</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Sunscreen SPF 50+</strong><small>Equatorial sun is intense — reapply frequently</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Insect repellent (DEET 30%+)</strong><small>Apply at dawn and dusk when mosquitoes are active</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Personal medications</strong><small>Bring enough for the full trip plus extras</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Anti-malaria tablets</strong><small>Prescription required — consult your doctor before travel</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Basic first aid kit</strong><small>Plasters, antiseptic, pain relief, rehydration salts</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Lip balm with SPF</strong><small>Sun and wind can quickly dry your lips</small></div>
                    </div>
                </div>
            </div>

            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-file-alt"></i></div>
                <h4>Documents & Essentials</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Passport</strong><small>Valid for at least 6 months with blank pages for visa stamps</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Tanzania visa</strong><small>Visa on arrival ($50 USD) or e-visa — apply online before travel</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Travel insurance documents</strong><small>Must cover medical evacuation and adventure activities</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Copies of all documents</strong><small>Keep digital and paper copies of passports, visas and bookings</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Cash (USD and TZS)</strong><small>Small bills for tips, souvenirs and extras</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Yellow fever certificate</strong><small>Required if arriving from a country with risk of yellow fever</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kilimanjaro Panel -->
    <div class="pack-panel" id="kili">
        <div class="pack-intro">
            <h3>Kilimanjaro Packing Essentials</h3>
            <p>Kilimanjaro takes you through five distinct climate zones, from tropical rainforest to arctic summit conditions. Packing the right layers and gear is critical for comfort and safety at high altitude. You will carry a daypack daily; porters carry your main duffel (max 15kg).</p>
        </div>

        <div class="pack-categories">
            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-tshirt"></i></div>
                <h4>Clothing</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Thermal base layers (top and bottom)</strong><small>Moisture-wicking merino wool or synthetic</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Mid-layer fleece or softshell jacket</strong><small>Insulating layer for cooler temperatures</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Waterproof outer shell (jacket and trousers)</strong><small>Must be windproof and waterproof for summit night</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Down jacket (-10C rated)</strong><small>Essential for summit night — temperatures can drop well below freezing</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Warm hat and gloves</strong><small>Bring liner gloves and heavy insulated gloves for summit</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Gaiters</strong><small>Keep scree and rain out of your boots on upper sections</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Hiking trousers and shorts</strong><small>Zip-off trousers work well for changing conditions</small></div>
                    </div>
                </div>
            </div>

            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-hiking"></i></div>
                <h4>Equipment</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Sleeping bag (-10C comfort rated)</strong><small>Mountain huts are basic — a warm bag is essential</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Trekking poles</strong><small>Reduce knee strain on descents — collapsible for easy storage</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Headlamp with spare batteries</strong><small>Required for summit night — start at midnight</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Water bottles or hydration bladder (3L)</strong><small>Stay hydrated at altitude — purification tablets are useful</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Daypack (25-35L)</strong><small>Your daily carry for water, snacks, camera and layers</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Sleeping bag liner</strong><small>Adds extra warmth and keeps your sleeping bag clean</small></div>
                    </div>
                </div>
            </div>

            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-shoe-prints"></i></div>
                <h4>Footwear</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Waterproof hiking boots</strong><small>Broken in before the trek — ankle support is essential</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Camp shoes or sandals</strong><small>Comfortable shoes for evenings at camp</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Hiking socks (3-4 pairs)</strong><small>Merino wool — moisture-wicking and anti-blister</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Liner socks</strong><small>Thin inner socks to reduce friction and prevent blisters</small></div>
                    </div>
                </div>
            </div>

            <div class="pack-category">
                <div class="pack-category-icon"><i class="fas fa-medkit"></i></div>
                <h4>Health & Protection</h4>
                <div class="pack-list">
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Altitude sickness medication (Diamox)</strong><small>Consult your doctor before trekking — helps prevent AMS</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Blister prevention kit</strong><small>Moleskin, tape, antiseptic — prevention is better than cure</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Electrolyte sachets</strong><small>Replace salts lost through sweating at altitude</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Sunscreen SPF 50+ and lip balm</strong><small>UV radiation is much stronger at high altitude</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Pain relief (Ibuprofen/Paracetamol)</strong><small>For headaches and muscle soreness at altitude</small></div>
                    </div>
                    <div class="pack-item">
                        <div class="pack-check"></div>
                        <div class="pack-item-text"><strong>Hand sanitizer and wet wipes</strong><small>Showers are limited on the mountain</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pack-tips">
    <div style="text-align: center;">
        <span class="sec-label" style="justify-content: center;">Packing Tips</span>
        <h2 class="sec-title" style="text-align: center;">Smart Packing <em>Advice</em></h2>
    </div>
    <div class="pack-tips-grid">
        <div class="pack-tip">
            <div class="pack-tip-icon"><i class="fas fa-suitcase-rolling"></i></div>
            <h4>Pack Light</h4>
            <p>Most safari lodges offer laundry services. You only need 3-4 days of clothing that you can rewear and wash throughout your trip.</p>
        </div>
        <div class="pack-tip">
            <div class="pack-tip-icon"><i class="fas fa-layer-group"></i></div>
            <h4>Layer Up</h4>
            <p>Tanzania weather changes quickly. Layering allows you to adapt from cold mornings to warm afternoons and cool evenings.</p>
        </div>
        <div class="pack-tip">
            <div class="pack-tip-icon"><i class="fas fa-suitcase"></i></div>
            <h4>Soft Bags Only</h4>
            <p>For safaris and Kilimanjaro, use soft duffel bags rather than hard suitcases. They fit easily in safari vehicles and are carried by porters on treks.</p>
        </div>
    </div>
</section>

<section class="plan-cta">
    <h2>Need More Packing Advice?</h2>
    <p>Our team is happy to help you prepare. We provide detailed gear lists and personalized recommendations for your specific trip.</p>
    <div class="plan-cta-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Get In Touch</a>
        <a href="https://wa.me/255683163219" class="btn-outline" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>

@endsection

@section('extra-js')
<script>
document.querySelectorAll('.pack-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        document.querySelectorAll('.pack-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.pack-panel').forEach(p => p.classList.remove('active'));
        tab.classList.add('active');
        document.getElementById(tab.dataset.tab).classList.add('active');
    });
});
document.querySelectorAll('.pack-check').forEach(check => {
    check.addEventListener('click', () => {
        check.classList.toggle('checked');
        check.style.background = check.classList.contains('checked') ? 'var(--gold)' : 'transparent';
        check.style.borderColor = check.classList.contains('checked') ? 'var(--gold)' : '#ddd';
        check.innerHTML = check.classList.contains('checked') ? '<i class="fas fa-check" style="font-size:0.65rem;color:var(--dark)"></i>' : '';
        const text = check.nextElementSibling.querySelector('strong');
        if (text) text.style.textDecoration = check.classList.contains('checked') ? 'line-through' : 'none';
    });
});
</script>
@endsection
