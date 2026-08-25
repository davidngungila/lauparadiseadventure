@extends('layouts.app')

@section('page-title', 'Best Time to Visit Tanzania | Safari & Weather Guide')
@section('meta-description', 'Discover the best time to visit Tanzania for safaris, Kilimanjaro trekking and Zanzibar holidays. Month-by-month weather and wildlife guide.')
@section('meta-keywords', 'best time visit Tanzania, Tanzania weather, Tanzania safari season, when to go Tanzania, Serengeti weather, Kilimanjaro best months')
@section('canonical', 'https://www.lauparadiseadventure.com/plan-your-trip/best-time-to-visit-tanzania')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "Best Time to Visit Tanzania | Safari & Weather Guide",
    "description": "Discover the best time to visit Tanzania for safaris, Kilimanjaro trekking and Zanzibar holidays. Month-by-month weather and wildlife guide.",
    "url": "https://www.lauparadiseadventure.com/plan-your-trip/best-time-to-visit-tanzania",
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
.best-time-hero { background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg'); }
.intro-section { background: var(--cream); padding: 70px 8%; }
.intro-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: start; }
.intro-text h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; font-weight: 700; color: var(--earth); margin-bottom: 16px; }
.intro-text p { color: var(--text-muted); font-size: 0.92rem; line-height: 1.8; margin-bottom: 20px; }
.intro-highlights { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.intro-highlight {
    display: flex; align-items: center; gap: 12px;
    padding: 14px 18px; background: var(--white);
    border-radius: var(--radius-md); border-left: 3px solid var(--gold);
}
.intro-highlight i { color: var(--gold); font-size: 1rem; flex-shrink: 0; }
.intro-highlight span { font-size: 0.85rem; font-weight: 500; color: var(--text); }

.months-section { background: var(--smoke); padding: 80px 8%; }
.months-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-top: 40px; }
.month-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 30px; box-shadow: var(--shadow-sm);
    border-left: 4px solid var(--gold); transition: 0.3s;
}
.month-card:hover { box-shadow: var(--shadow-md); transform: translateY(-2px); }
.month-card-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; }
.month-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 700; color: var(--earth); }
.month-badge {
    padding: 4px 12px; border-radius: 20px; font-size: 0.7rem;
    font-weight: 600; text-transform: uppercase; letter-spacing: 1px;
}
.month-badge.great { background: rgba(39,174,96,0.1); color: var(--success); }
.month-badge.good { background: rgba(200,150,62,0.12); color: var(--gold); }
.month-badge.low { background: rgba(78,205,196,0.12); color: var(--info); }
.month-card p { color: var(--text-muted); font-size: 0.88rem; line-height: 1.7; margin-bottom: 14px; }
.month-tags { display: flex; gap: 8px; flex-wrap: wrap; }
.month-tag {
    padding: 4px 12px; background: var(--cream); border-radius: 16px;
    font-size: 0.72rem; color: var(--text-muted); font-weight: 500;
}
.month-tag i { margin-right: 4px; color: var(--gold); }

.weather-table-section { background: var(--cream); padding: 80px 8%; }
.table-wrap {
    overflow-x: auto; margin-top: 40px;
    border-radius: var(--radius-lg); box-shadow: var(--shadow-md);
}
.weather-table {
    width: 100%; border-collapse: collapse;
    background: var(--white); min-width: 900px;
}
.weather-table thead th {
    background: var(--earth); color: var(--white);
    padding: 14px 16px; font-size: 0.78rem; font-weight: 600;
    text-transform: uppercase; letter-spacing: 0.5px;
    text-align: center; white-space: nowrap;
}
.weather-table thead th:first-child { text-align: left; border-radius: var(--radius-lg) 0 0 0; }
.weather-table thead th:last-child { border-radius: 0 var(--radius-lg) 0 0; }
.weather-table tbody td {
    padding: 14px 16px; font-size: 0.85rem;
    border-bottom: 1px solid #f0ebe1; color: var(--text);
    text-align: center;
}
.weather-table tbody td:first-child {
    text-align: left; font-weight: 600; color: var(--earth);
    white-space: nowrap;
}
.weather-table tbody tr:hover { background: rgba(200,150,62,0.04); }
.weather-table .icon-great { color: var(--success); }
.weather-table .icon-good { color: var(--gold); }
.weather-table .icon-low { color: var(--text-muted); }
.weather-table .rating-dot {
    display: inline-block; width: 10px; height: 10px;
    border-radius: 50%; margin-right: 4px;
}
.weather-table .rating-dot.green { background: var(--success); }
.weather-table .rating-dot.gold { background: var(--gold); }
.weather-table .rating-dot.gray { background: #ccc; }

.best-for-section { background: var(--smoke); padding: 80px 8%; }
.best-for-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 40px; }
.best-for-card {
    background: var(--white); border-radius: var(--radius-lg);
    padding: 28px; box-shadow: var(--shadow-sm); text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}
.best-for-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.best-for-icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: rgba(200,150,62,0.1); display: flex;
    align-items: center; justify-content: center;
    margin: 0 auto 18px; font-size: 1.4rem; color: var(--gold);
}
.best-for-card h3 { font-family: 'Cormorant Garamond', serif; font-size: 1.2rem; font-weight: 700; color: var(--earth); margin-bottom: 10px; }
.best-for-card .best-months {
    font-weight: 600; color: var(--gold); font-size: 0.88rem; margin-bottom: 10px;
}
.best-for-card p { font-size: 0.83rem; color: var(--text-muted); line-height: 1.6; }

.plan-cta {
    background: linear-gradient(135deg, var(--earth) 0%, var(--dark) 100%);
    padding: 70px 8%; text-align: center;
}
.plan-cta h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); font-weight: 700; color: var(--white); margin-bottom: 12px; }
.plan-cta p { color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 28px; max-width: 550px; margin-left: auto; margin-right: auto; }
.plan-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }

@media (max-width: 1024px) {
    .intro-layout { grid-template-columns: 1fr; gap: 40px; }
    .best-for-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .months-grid { grid-template-columns: 1fr; }
    .best-for-grid { grid-template-columns: 1fr; }
}
</style>
@endsection

@section('content')
<div class="page-hero page-hero-best-time">
    <div class="page-hero-bg" style="background-image: url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg');"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/plan-your-trip">Plan Your Trip</a>
            <span>/</span>
            <span class="current">Best Time to Visit</span>
        </div>
        <h1 class="page-hero-title">Best Time to Visit <em>Tanzania</em></h1>
        <p class="page-hero-sub">Month-by-month guide to weather, wildlife, crowds and prices for the perfect Tanzania trip.</p>
    </div>
</div>

<section class="intro-section">
    <div class="intro-layout">
        <div class="intro-text">
            <h3>When Should You Visit Tanzania?</h3>
            <p>Tanzania is a year-round destination, but the best time to visit depends on what you want to experience. The dry season from June to October offers the best wildlife viewing, while the green season from April to May brings lush landscapes and fewer crowds.</p>
            <p>Whether you're dreaming of witnessing the Great Migration in the Serengeti, summiting Kilimanjaro, or relaxing on the beaches of Zanzibar, there's a perfect time for every experience.</p>
        </div>
        <div class="intro-highlights">
            <div class="intro-highlight">
                <i class="fas fa-binoculars"></i>
                <span><strong>Best for Safari:</strong> Jun — Oct</span>
            </div>
            <div class="intro-highlight">
                <i class="fas fa-mountain"></i>
                <span><strong>Best for Kili:</strong> Jan — Mar, Jun — Oct</span>
            </div>
            <div class="intro-highlight">
                <i class="fas fa-umbrella-beach"></i>
                <span><strong>Best for Zanzibar:</strong> Jun — Oct, Dec — Feb</span>
            </div>
            <div class="intro-highlight">
                <i class="fas fa-wallet"></i>
                <span><strong>Best for Budget:</strong> Apr — May</span>
            </div>
        </div>
    </div>
</section>

<section class="months-section">
    <div class="sec-header">
        <div>
            <span class="sec-label">Month-by-Month Guide</span>
            <h2 class="sec-title">When to Visit <em>Tanzania</em></h2>
            <p class="sec-sub">Each season offers unique experiences. Here's what to expect throughout the year.</p>
        </div>
    </div>

    <div class="months-grid">
        <div class="month-card">
            <div class="month-card-header">
                <h3>January — March</h3>
                <span class="month-badge great">Great</span>
            </div>
            <p>Calving season in the Serengeti — witness thousands of newborn wildebeest. The landscape is green and lush with fewer tourists around. Excellent for photography with dramatic skies and baby animals. Good road conditions and lower prices compared to peak season.</p>
            <div class="month-tags">
                <span class="month-tag"><i class="fas fa-paw"></i> Calving Season</span>
                <span class="month-tag"><i class="fas fa-cloud-sun-rain"></i> Green Lush</span>
                <span class="month-tag"><i class="fas fa-users"></i> Fewer Tourists</span>
                <span class="month-tag"><i class="fas fa-dollar-sign"></i> Lower Prices</span>
            </div>
        </div>

        <div class="month-card">
            <div class="month-card-header">
                <h3>April — May</h3>
                <span class="month-badge low">Green Season</span>
            </div>
            <p>The long rains bring the lowest prices and the most lush, vibrant landscapes. Some remote roads may become difficult, but the parks are beautifully green with excellent birding. Ideal for budget travelers and those who prefer uncrowded parks.</p>
            <div class="month-tags">
                <span class="month-tag"><i class="fas fa-leaf"></i> Lush Scenery</span>
                <span class="month-tag"><i class="fas fa-tag"></i> Lowest Prices</span>
                <span class="month-tag"><i class="fas fa-cloud-rain"></i> Long Rains</span>
                <span class="month-tag"><i class="fas fa-binoculars"></i> Great Birding</span>
            </div>
        </div>

        <div class="month-card">
            <div class="month-card-header">
                <h3>June — October</h3>
                <span class="month-badge great">Peak Season</span>
            </div>
            <p>The dry season offers the best wildlife viewing. Animals congregate around water sources, vegetation thins out for easier spotting, and the famous river crossings of the Great Migration take place. Expect warm, sunny days and cool evenings. This is the busiest and most expensive period.</p>
            <div class="month-tags">
                <span class="month-tag"><i class="fas fa-binoculars"></i> Best Wildlife</span>
                <span class="month-tag"><i class="fas fa-water"></i> River Crossings</span>
                <span class="month-tag"><i class="fas fa-sun"></i> Dry & Sunny</span>
                <span class="month-tag"><i class="fas fa-fire"></i> Peak Prices</span>
            </div>
        </div>

        <div class="month-card">
            <div class="month-card-header">
                <h3>November — December</h3>
                <span class="month-badge good">Good</span>
            </div>
            <p>Short rains bring a second green season. The rains are usually brief afternoon showers, so safari activities are rarely disrupted. Excellent for birding as migratory birds arrive. Zanzibar is warming up for its best months. Good balance of reasonable prices and enjoyable conditions.</p>
            <div class="month-tags">
                <span class="month-tag"><i class="fas fa-feather-alt"></i> Birding Season</span>
                <span class="month-tag"><i class="fas fa-cloud-sun"></i> Short Rains</span>
                <span class="month-tag"><i class="fas fa-users"></i> Fewer Tourists</span>
                <span class="month-tag"><i class="fas fa-umbrella-beach"></i> Zanzibar Good</span>
            </div>
        </div>
    </div>
</section>

<section class="best-for-section">
    <div class="sec-header">
        <div>
            <span class="sec-label">Best Time For</span>
            <h2 class="sec-title">Plan Around Your <em>Experience</em></h2>
            <p class="sec-sub">Different activities have different optimal windows. Here's when to go for each experience.</p>
        </div>
    </div>

    <div class="best-for-grid">
        <div class="best-for-card">
            <div class="best-for-icon"><i class="fas fa-binoculars"></i></div>
            <h3>Safari</h3>
            <div class="best-months">June — October</div>
            <p>Dry season offers the best wildlife viewing with animals gathered at water sources. Vegetation thins out making it easier to spot animals in the open savannah.</p>
        </div>

        <div class="best-for-card">
            <div class="best-for-icon"><i class="fas fa-mountain"></i></div>
            <h3>Kilimanjaro Trek</h3>
            <div class="best-months">Jan — Mar, Jun — Oct</div>
            <p>Best climbing conditions with dry weather and clear summit views. January-March offers fewer crowds, while June-October has the most stable conditions.</p>
        </div>

        <div class="best-for-card">
            <div class="best-for-icon"><i class="fas fa-umbrella-beach"></i></div>
            <h3>Zanzibar Beach</h3>
            <div class="best-months">Jun — Oct, Dec — Feb</div>
            <p>Dry, warm months with perfect beach weather. June to October is drier, while December to February offers the warmest temperatures for swimming and diving.</p>
        </div>

        <div class="best-for-card">
            <div class="best-for-icon"><i class="fas fa-theater-masks"></i></div>
            <h3>Great Migration</h3>
            <div class="best-months">Jun — Oct (Crossings), Jan — Mar (Calving)</div>
            <p>Witness dramatic river crossings from June to October, or see thousands of newborn wildebeest during calving season from January to March.</p>
        </div>

        <div class="best-for-card">
            <div class="best-for-icon"><i class="fas fa-wallet"></i></div>
            <h3>Budget Travel</h3>
            <div class="best-months">April — May</div>
            <p>The green season offers the lowest prices on accommodation, flights and safari packages. Parks are lush and green with very few other visitors.</p>
        </div>

        <div class="best-for-card">
            <div class="best-for-icon"><i class="fas fa-camera"></i></div>
            <h3>Photography</h3>
            <div class="best-months">Jan — Mar, Jun — Oct</div>
            <p>January to March offers dramatic skies and baby animals. June to October provides golden light and concentrated wildlife at water sources.</p>
        </div>
    </div>
</section>

<section class="weather-table-section">
    <div class="sec-header">
        <div>
            <span class="sec-label">Weather Overview</span>
            <h2 class="sec-title">Month-by-Month <em>Comparison</em></h2>
            <p class="sec-sub">A quick reference grid for weather, wildlife, crowds and prices throughout the year.</p>
        </div>
    </div>

    <div class="table-wrap">
        <table class="weather-table">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Weather</th>
                    <th>Wildlife</th>
                    <th>Crowds</th>
                    <th>Prices</th>
                    <th>Safari</th>
                    <th>Kili</th>
                    <th>Zanzibar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>January</td>
                    <td><span class="rating-dot green"></span> Warm, some rain</td>
                    <td><span class="rating-dot green"></span> Calving</td>
                    <td><span class="rating-dot gold"></span> Moderate</td>
                    <td><span class="rating-dot gold"></span> Mid-range</td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                </tr>
                <tr>
                    <td>February</td>
                    <td><span class="rating-dot green"></span> Warm, some rain</td>
                    <td><span class="rating-dot green"></span> Calving peak</td>
                    <td><span class="rating-dot gold"></span> Moderate</td>
                    <td><span class="rating-dot gold"></span> Mid-range</td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                </tr>
                <tr>
                    <td>March</td>
                    <td><span class="rating-dot gold"></span> Warm, rains start</td>
                    <td><span class="rating-dot green"></span> Calving ends</td>
                    <td><span class="rating-dot gray"></span> Low</td>
                    <td><span class="rating-dot gray"></span> Lower</td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                </tr>
                <tr>
                    <td>April</td>
                    <td><span class="rating-dot gray"></span> Heavy rain</td>
                    <td><span class="rating-dot gold"></span> Dispersed</td>
                    <td><span class="rating-dot gray"></span> Very low</td>
                    <td><span class="rating-dot gray"></span> Lowest</td>
                    <td><i class="fas fa-check-circle icon-low"></i></td>
                    <td><i class="fas fa-check-circle icon-low"></i></td>
                    <td><i class="fas fa-check-circle icon-low"></i></td>
                </tr>
                <tr>
                    <td>May</td>
                    <td><span class="rating-dot gray"></span> Heavy rain</td>
                    <td><span class="rating-dot gold"></span> Dispersed</td>
                    <td><span class="rating-dot gray"></span> Very low</td>
                    <td><span class="rating-dot gray"></span> Lowest</td>
                    <td><i class="fas fa-check-circle icon-low"></i></td>
                    <td><i class="fas fa-check-circle icon-low"></i></td>
                    <td><i class="fas fa-check-circle icon-low"></i></td>
                </tr>
                <tr>
                    <td>June</td>
                    <td><span class="rating-dot green"></span> Dry, cool</td>
                    <td><span class="rating-dot green"></span> Excellent</td>
                    <td><span class="rating-dot gold"></span> Building</td>
                    <td><span class="rating-dot gold"></span> High</td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                </tr>
                <tr>
                    <td>July</td>
                    <td><span class="rating-dot green"></span> Dry, cool</td>
                    <td><span class="rating-dot green"></span> Excellent</td>
                    <td><span class="rating-dot gray"></span> Peak</td>
                    <td><span class="rating-dot gray"></span> Highest</td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                </tr>
                <tr>
                    <td>August</td>
                    <td><span class="rating-dot green"></span> Dry, cool</td>
                    <td><span class="rating-dot green"></span> River crossings</td>
                    <td><span class="rating-dot gray"></span> Peak</td>
                    <td><span class="rating-dot gray"></span> Highest</td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                </tr>
                <tr>
                    <td>September</td>
                    <td><span class="rating-dot green"></span> Dry, warm</td>
                    <td><span class="rating-dot green"></span> River crossings</td>
                    <td><span class="rating-dot gold"></span> Moderate</td>
                    <td><span class="rating-dot gold"></span> High</td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                </tr>
                <tr>
                    <td>October</td>
                    <td><span class="rating-dot green"></span> Dry, warm</td>
                    <td><span class="rating-dot green"></span> Excellent</td>
                    <td><span class="rating-dot gold"></span> Moderate</td>
                    <td><span class="rating-dot gold"></span> High</td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                </tr>
                <tr>
                    <td>November</td>
                    <td><span class="rating-dot gold"></span> Short rains</td>
                    <td><span class="rating-dot gold"></span> Good</td>
                    <td><span class="rating-dot gray"></span> Low</td>
                    <td><span class="rating-dot gray"></span> Lower</td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                </tr>
                <tr>
                    <td>December</td>
                    <td><span class="rating-dot gold"></span> Short rains</td>
                    <td><span class="rating-dot gold"></span> Good</td>
                    <td><span class="rating-dot gold"></span> Moderate</td>
                    <td><span class="rating-dot gold"></span> Mid-range</td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                    <td><i class="fas fa-check-circle icon-good"></i></td>
                    <td><i class="fas fa-check-circle icon-great"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="plan-cta">
    <h2>Ready to Plan Your Trip?</h2>
    <p>Let us help you find the perfect time for your Tanzania adventure. Our experts know the best seasons for every experience.</p>
    <div class="plan-cta-btns">
        <a href="/contact" class="btn-primary"><i class="fas fa-envelope"></i> Get In Touch</a>
        <a href="https://wa.me/255683163219" class="btn-outline" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
    </div>
</section>
@endsection
