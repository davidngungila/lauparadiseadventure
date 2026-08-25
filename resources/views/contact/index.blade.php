@extends('layouts.app')

@section('page-title', 'Contact LAU Paradise Adventure | Plan Your Tanzania Adventure')
@section('meta-description', 'Get in touch with LAU Paradise Adventure. Request a quote, plan your Tanzania safari, Kilimanjaro trek or Zanzibar holiday. Phone, WhatsApp and email available.')
@section('meta-keywords', 'contact LAU Paradise Adventure, Tanzania safari quote, plan Tanzania trip, contact Tanzania tour operator')
@section('canonical', 'https://www.lauparadiseadventure.com/contact')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp')

@section('structured-data')
@verbatim
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "LAU Paradise Adventure",
    "alternateName": "LAU Paradise",
    "url": "https://www.lauparadiseadventure.com",
    "logo": "https://www.lauparadiseadventure.com/lau-adventuress-logo.png",
    "description": "LAU Paradise Adventure is a locally owned Tanzania tour operator creating authentic safari, mountain and beach experiences.",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Moshi",
        "addressLocality": "Moshi",
        "addressRegion": "Kilimanjaro",
        "addressCountry": "TZ"
    },
    "telephone": "+255683163219",
    "email": "info@lauparadiseadventure.com",
    "sameAs": [
        "https://www.facebook.com/",
        "https://www.instagram.com/",
        "https://www.tiktok.com/",
        "https://www.youtube.com/"
    ],
    "openingHours": "Mo-Su 08:00-20:00",
    "priceRange": "$$"
}
</script>
    @endverbatim
@endsection

@section('extra-css')
<style>
.contact-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp'); }
.contact-section { background: var(--smoke); padding: 80px 8%; }
.contact-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; align-items: start; }

.contact-info { display: flex; flex-direction: column; gap: 24px; }
.contact-info-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 28px; box-shadow: var(--shadow-sm);
}
.contact-info-card h3 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.4rem;
    font-weight: 700; color: var(--earth); margin-bottom: 20px;
}
.contact-item { display: flex; gap: 18px; margin-bottom: 20px; }
.contact-item:last-child { margin-bottom: 0; }
.contact-icon {
    width: 50px; height: 50px; border-radius: 12px;
    background: rgba(200,150,62,0.1); color: var(--gold);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem; flex-shrink: 0;
}
.contact-label { font-size: 0.72rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-muted); margin-bottom: 4px; }
.contact-value { font-weight: 600; color: var(--text); font-size: 0.95rem; }
.contact-value a { color: inherit; text-decoration: none; transition: color 0.2s; }
.contact-value a:hover { color: var(--gold); }

.contact-socials { display: flex; gap: 10px; margin-top: 20px; }
.contact-social {
    width: 42px; height: 42px; border-radius: 50%;
    background: var(--cream); display: flex;
    align-items: center; justify-content: center;
    color: var(--text-muted); font-size: 1rem;
    transition: 0.2s; text-decoration: none;
}
.contact-social:hover { background: var(--gold); color: var(--dark); }

.wa-contact-btn {
    display: inline-flex; align-items: center; gap: 10px;
    background: #25D366; color: var(--white);
    padding: 16px 32px; border-radius: 40px;
    font-weight: 600; text-decoration: none; font-size: 0.95rem;
    transition: 0.2s; margin-top: 10px; width: 100%;
    justify-content: center;
}
.wa-contact-btn:hover { background: #1ebe5a; transform: translateY(-2px); }

.contact-form-card {
    background: var(--white); border-radius: var(--radius-xl);
    padding: 36px; box-shadow: var(--shadow-lg);
}
.contact-form-card h3 {
    font-family: 'Cormorant Garamond', serif; font-size: 1.6rem;
    font-weight: 700; color: var(--earth); margin-bottom: 6px;
}
.contact-form-card .form-subtitle { font-size: 0.88rem; color: var(--text-muted); margin-bottom: 24px; }
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px; }
.form-group { display: flex; flex-direction: column; gap: 6px; }
.form-group.full { grid-column: 1/-1; }
.form-group label { font-size: 0.75rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; color: var(--text-muted); }
.form-group label .required { color: var(--danger); }
.form-group input, .form-group select, .form-group textarea {
    border: 1.5px solid #e8e0d5; border-radius: 10px; padding: 12px 16px;
    font-family: 'DM Sans', sans-serif; font-size: 0.9rem;
    color: var(--text); background: var(--cream);
    transition: border-color 0.2s; outline: none; width: 100%;
}
.form-group input:focus, .form-group select:focus, .form-group textarea:focus { border-color: var(--gold); }
.form-group textarea { resize: vertical; min-height: 110px; }
.form-submit {
    width: 100%; padding: 16px; background: var(--gold);
    color: var(--dark); border: none; border-radius: 40px;
    font-size: 0.95rem; font-weight: 700; cursor: pointer; transition: 0.25s;
    margin-top: 8px; display: flex; align-items: center; justify-content: center;
    gap: 8px; font-family: 'DM Sans', sans-serif;
}
.form-submit:hover { background: var(--gold-light); transform: translateY(-2px); }
.form-note { text-align: center; font-size: 0.82rem; color: var(--text-muted); margin-top: 14px; }
.form-note i { color: var(--gold); margin-right: 4px; }

.plan-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.plan-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--white); margin-bottom: 12px; }
.plan-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.plan-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 1024px) {
    .contact-grid { grid-template-columns: 1fr; gap: 40px; }
}
@media (max-width: 768px) {
    .form-grid { grid-template-columns: 1fr; }
    .contact-form-card { padding: 24px; }
}
</style>
@endsection

@section('content')
<div class="page-hero page-hero-contact">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span class="current">Contact</span>
        </div>
        <h1 class="page-hero-title">Let's Plan Your <em>Adventure</em></h1>
        <p class="page-hero-sub">Send us your dream trip details and we will craft a custom itinerary within 24 hours.</p>
    </div>
</div>

<section class="contact-section">
    <div class="contact-grid">
        <div class="contact-info">
            <div class="contact-info-card">
                <h3>Get In Touch</h3>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <div class="contact-label">Office</div>
                        <div class="contact-value">Moshi, Kilimanjaro Region, Tanzania</div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                    <div>
                        <div class="contact-label">Phone</div>
                        <div class="contact-value"><a href="tel:+255683163219">+255 683 163 219</a></div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <div class="contact-label">Email</div>
                        <div class="contact-value"><a href="mailto:info@lauparadiseadventure.com">info@lauparadiseadventure.com</a></div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                    <div>
                        <div class="contact-label">WhatsApp</div>
                        <div class="contact-value"><a href="https://wa.me/255683163219" target="_blank">+255 683 163 219</a></div>
                    </div>
                </div>

                <div class="contact-socials">
                    <a href="https://www.facebook.com/" class="contact-social" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/" class="contact-social" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/" class="contact-social" target="_blank" rel="noopener" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/" class="contact-social" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <a href="https://wa.me/255683163219?text=Hello%20LAU%20Paradise%20Adventure!%20I'm%20interested%20in%20planning%20a%20trip%20to%20Tanzania." class="wa-contact-btn" target="_blank" rel="noopener">
                <i class="fab fa-whatsapp" style="font-size: 1.2rem;"></i> Chat With Us on WhatsApp
            </a>
        </div>

        <div class="contact-form-card">
            <h3>Send Us Your Dream Trip</h3>
            <p class="form-subtitle">Fill out the form below and our team will get back to you within 24 hours with a personalized proposal.</p>

            <form id="contactForm" onsubmit="return false;">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label>Full Name <span class="required">*</span></label>
                        <input type="text" name="name" required placeholder="Your full name">
                    </div>
                    <div class="form-group">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" name="email" required placeholder="your@email.com">
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Phone / WhatsApp</label>
                        <input type="tel" name="phone" placeholder="+1 234 567 8900">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country" placeholder="Your country">
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Trip Type <span class="required">*</span></label>
                        <select name="trip_type" required>
                            <option value="" disabled selected>Select trip type</option>
                            <option value="Safari">Safari</option>
                            <option value="Kilimanjaro Trek">Kilimanjaro Trek</option>
                            <option value="Zanzibar Beach Holiday">Zanzibar Beach Holiday</option>
                            <option value="Honeymoon">Honeymoon</option>
                            <option value="Safari + Zanzibar">Safari + Zanzibar</option>
                            <option value="Custom / Other">Custom / Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Preferred Travel Date</label>
                        <input type="date" name="travel_date">
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Number of Travelers</label>
                        <select name="travelers">
                            <option value="" disabled selected>Select number</option>
                            <option value="1 person">1 person</option>
                            <option value="2 people">2 people</option>
                            <option value="3-4 people">3-4 people</option>
                            <option value="5-6 people">5-6 people</option>
                            <option value="7+ people">7+ people</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Duration</label>
                        <select name="duration">
                            <option value="" disabled selected>Select duration</option>
                            <option value="1-3 days">1-3 days</option>
                            <option value="4-6 days">4-6 days</option>
                            <option value="7-10 days">7-10 days</option>
                            <option value="10+ days">10+ days</option>
                        </select>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group full">
                        <label>Budget Range (per person)</label>
                        <select name="budget">
                            <option value="" disabled selected>Select budget range</option>
                            <option value="Budget ($500 - $1,000)">Budget ($500 - $1,000)</option>
                            <option value="Mid-range ($1,000 - $2,500)">Mid-range ($1,000 - $2,500)</option>
                            <option value="Premium ($2,500 - $5,000)">Premium ($2,500 - $5,000)</option>
                            <option value="Luxury ($5,000+)">Luxury ($5,000+)</option>
                        </select>
                    </div>
                </div>
                <div class="form-grid">
                    <div class="form-group full">
                        <label>Message / Special Requests</label>
                        <textarea name="message" placeholder="Tell us about your dream trip — interests, special occasions, dietary requirements, or any questions you have..."></textarea>
                    </div>
                </div>
                <button type="submit" class="form-submit"><i class="fab fa-whatsapp"></i> Send My Inquiry via WhatsApp</button>
            </form>
            <p class="form-note"><i class="fas fa-clock"></i> We typically respond within 24 hours</p>
        </div>
    </div>
</section>

<section class="plan-cta">
    <h2>Prefer to Chat Directly?</h2>
    <p>Our team is available on WhatsApp, phone and email. Reach out however works best for you.</p>
    <div class="plan-cta-btns">
        <a href="https://wa.me/255683163219" class="btn-primary" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
        <a href="tel:+255683163219" class="btn-outline"><i class="fas fa-phone-alt"></i> Call Us</a>
    </div>
</section>
@endsection

@section('extra-js')
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var f = this;
    var get = function(n) {
        var el = f.querySelector('[name="' + n + '"]');
        return el ? el.value.trim() : '';
    };

    var name    = get('name');
    var email   = get('email');
    var phone   = get('phone');
    var country = get('country');
    var trip    = get('trip_type');
    var date    = get('travel_date');
    var people  = get('travelers');
    var dur     = get('duration');
    var budget  = get('budget');
    var msg     = get('message');

    if (!name || !email || !trip) {
        alert('Please fill in your name, email and trip type.');
        return;
    }

    var formattedDate = '';
    if (date) {
        var d = new Date(date);
        var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        formattedDate = d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
    }

    var lines = [];
    lines.push('*New Inquiry from Website*');
    lines.push('');
    lines.push('*Name:* ' + name);
    lines.push('*Email:* ' + email);
    if (phone)   lines.push('*Phone:* ' + phone);
    if (country) lines.push('*Country:* ' + country);
    lines.push('');
    lines.push('*Trip Type:* ' + trip);
    if (formattedDate) lines.push('*Travel Date:* ' + formattedDate);
    if (people)  lines.push('*Travelers:* ' + people);
    if (dur)     lines.push('*Duration:* ' + dur);
    if (budget)  lines.push('*Budget:* ' + budget);
    if (msg) {
        lines.push('');
        lines.push('*Message:*');
        lines.push(msg);
    }
    lines.push('');
    lines.push('Sent via lauparadiseadventure.com');

    var text = lines.join('\n');
    var waUrl = 'https://wa.me/255683163219?text=' + encodeURIComponent(text);

    window.open(waUrl, '_blank');
});
</script>
@endsection
