<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LAU Paradise Adventure — Routes
|--------------------------------------------------------------------------
*/

// ─── HOME ───
Route::get('/', fn () => view('home.index'))->name('home');

// ─── SAFARIS ───
Route::get('/safaris', fn () => view('safaris.index'))->name('safaris.index');
Route::get('/safaris/luxury-safari', fn () => view('safaris.luxury-safari'))->name('safaris.luxury');
Route::get('/safaris/private-safari', fn () => view('safaris.private-safari'))->name('safaris.private');
Route::get('/safaris/family-safari', fn () => view('safaris.family-safari'))->name('safaris.family');
Route::get('/safaris/group-safari', fn () => view('safaris.group-safari'))->name('safaris.group');
Route::get('/safaris/photographic-safari', fn () => view('safaris.photographic-safari'))->name('safaris.photographic');
Route::get('/safaris/great-migration-safari', fn () => view('safaris.great-migration-safari'))->name('safaris.great-migration');
Route::get('/safaris/tarangire-elephant-safari', fn () => view('safaris.tarangire-elephant-safari'))->name('safaris.tarangire-elephant');
Route::get('/safaris/serengeti-budget-camping', fn () => view('safaris.serengeti-budget-camping'))->name('safaris.serengeti-budget');
Route::get('/safaris/ngorongoro-manyara-safari', fn () => view('safaris.ngorongoro-manyara-safari'))->name('safaris.ngorongoro-manyara');
Route::get('/safaris/luxury-serengeti-fly-in', fn () => view('safaris.luxury-serengeti-fly-in'))->name('safaris.luxury-serengeti');
Route::get('/safaris/photography-safari', fn () => view('safaris.photography-safari'))->name('safaris.photography');
Route::get('/safaris/cultural-wildlife-safari', fn () => view('safaris.cultural-wildlife-safari'))->name('safaris.cultural-wildlife');
Route::get('/safaris/honeymoon-safari-beach', fn () => view('safaris.honeymoon-safari-beach'))->name('safaris.honeymoon-beach');
Route::get('/safaris/kilimanjaro-safari-combo', fn () => view('safaris.kilimanjaro-safari-combo'))->name('safaris.kili-combo');
Route::get('/safaris/budget-tanzania-safari', fn () => view('safaris.budget-tanzania-safari'))->name('safaris.budget');
Route::get('/safaris/birdwatching-safari', fn () => view('safaris.birdwatching-safari'))->name('safaris.birdwatching');
Route::get('/safaris/zanzibar-beach-safari', fn () => view('safaris.zanzibar-beach-safari'))->name('safaris.zanzibar-beach');
Route::get('/safaris/tarangire-serengeti-safari', fn () => view('safaris.tarangire-serengeti-safari'))->name('safaris.tarangire-serengeti');
Route::get('/safaris/great-migration-river-crossing', fn () => view('safaris.great-migration-river-crossing'))->name('safaris.migration-crossing');
Route::get('/safaris/luxury-tanzania-zanzibar', fn () => view('safaris.luxury-tanzania-zanzibar'))->name('safaris.luxury-tz-zanzibar');
Route::get('/safaris/ngorongoro-private-safari', fn () => view('safaris.ngorongoro-private-safari'))->name('safaris.ngorongoro-private');
Route::get('/safaris/serengeti-private-safari', fn () => view('safaris.serengeti-private-safari'))->name('safaris.serengeti-private');

// ─── KILIMANJARO ───
Route::get('/kilimanjaro', fn () => view('kilimanjaro.index'))->name('kilimanjaro.index');
Route::get('/kilimanjaro/machame-route', fn () => view('kilimanjaro.machame-route'))->name('kilimanjaro.machame');
Route::get('/kilimanjaro/lemosho-route', fn () => view('kilimanjaro.lemosho-route'))->name('kilimanjaro.lemosho');
Route::get('/kilimanjaro/marangu-route', fn () => view('kilimanjaro.marangu-route'))->name('kilimanjaro.marangu');
Route::get('/kilimanjaro/rongai-route', fn () => view('kilimanjaro.rongai-route'))->name('kilimanjaro.rongai');
Route::get('/kilimanjaro/northern-circuit', fn () => view('kilimanjaro.northern-circuit'))->name('kilimanjaro.northern-circuit');

// ─── DESTINATIONS ───
Route::get('/destinations', fn () => view('destinations.index'))->name('destinations.index');
Route::get('/destinations/serengeti', fn () => view('destinations.serengeti'))->name('destinations.serengeti');
Route::get('/destinations/ngorongoro', fn () => view('destinations.ngorongoro'))->name('destinations.ngorongoro');
Route::get('/destinations/tarangire', fn () => view('destinations.tarangire'))->name('destinations.tarangire');
Route::get('/destinations/lake-manyara', fn () => view('destinations.lake-manyara'))->name('destinations.lake-manyara');
Route::get('/destinations/kilimanjaro', fn () => view('destinations.kilimanjaro'))->name('destinations.kilimanjaro');
Route::get('/destinations/zanzibar', fn () => view('destinations.zanzibar'))->name('destinations.zanzibar');

// ─── ZANZIBAR ───
Route::get('/zanzibar', fn () => view('zanzibar.index'))->name('zanzibar.index');
Route::get('/zanzibar/beach-holidays', fn () => view('zanzibar.beach-holidays'))->name('zanzibar.beach');
Route::get('/zanzibar/stone-town', fn () => view('zanzibar.stone-town'))->name('zanzibar.stone-town');
Route::get('/zanzibar/honeymoon', fn () => view('zanzibar.honeymoon'))->name('zanzibar.honeymoon');
Route::get('/zanzibar/safari-and-zanzibar', fn () => view('zanzibar.safari-and-zanzibar'))->name('zanzibar.safari-zanzibar');

// ─── EXPERIENCES ───
Route::get('/experiences', fn () => view('experiences.index'))->name('experiences.index');
Route::get('/experiences/wildlife-safari', fn () => view('experiences.wildlife-safari'))->name('experiences.wildlife');
Route::get('/experiences/great-migration', fn () => view('experiences.great-migration'))->name('experiences.great-migration');
Route::get('/experiences/cultural-tours', fn () => view('experiences.cultural-tours'))->name('experiences.culture');
Route::get('/experiences/bird-watching', fn () => view('experiences.bird-watching'))->name('experiences.birds');
Route::get('/experiences/photographic-safari', fn () => view('experiences.photographic-safari'))->name('experiences.photography');
Route::get('/experiences/honeymoon', fn () => view('experiences.honeymoon'))->name('experiences.honeymoon');

// ─── PLAN YOUR TRIP ───
Route::get('/plan-your-trip', fn () => view('plan-your-trip.index'))->name('plan.index');
Route::get('/plan-your-trip/best-time-to-visit-tanzania', fn () => view('plan-your-trip.best-time-to-visit-tanzania'))->name('plan.best-time');
Route::get('/plan-your-trip/tanzania-travel-guide', fn () => view('plan-your-trip.tanzania-travel-guide'))->name('plan.guide');
Route::get('/plan-your-trip/what-to-pack', fn () => view('plan-your-trip.what-to-pack'))->name('plan.packing');
Route::get('/plan-your-trip/tanzania-visa', fn () => view('plan-your-trip.tanzania-visa'))->name('plan.visa');
Route::get('/plan-your-trip/travel-tips', fn () => view('plan-your-trip.travel-tips'))->name('plan.tips');

// ─── FAQ ───
Route::get('/faq', fn () => view('faq'))->name('faq');

// ─── ABOUT ───
Route::get('/about', fn () => view('about.index'))->name('about');

// ─── CONTACT ───
Route::get('/contact', fn () => view('contact.index'))->name('contact');

// ─── LEGAL PAGES ───
Route::get('/privacy-policy', fn () => view('legal.privacy'))->name('legal.privacy');
Route::get('/terms', fn () => view('legal.terms'))->name('legal.terms');
Route::get('/booking-terms', fn () => view('legal.booking'))->name('legal.booking');
Route::get('/cancellation-policy', fn () => view('legal.cancellation'))->name('legal.cancellation');

// ─── SEO ROUTES ───
Route::get('/sitemap.xml', function () {
    $base = 'https://www.lauparadiseadventure.com';
    $today = date('Y-m-d');

    // Route metadata: name => [priority, changefreq]
    $meta = [
        'home' => ['1.0', 'weekly'],
        'safaris.index' => ['0.9', 'weekly'],
        'safaris.luxury' => ['0.8', 'weekly'],
        'safaris.private' => ['0.8', 'weekly'],
        'safaris.family' => ['0.8', 'weekly'],
        'safaris.group' => ['0.7', 'weekly'],
        'safaris.photographic' => ['0.7', 'weekly'],
        'safaris.great-migration' => ['0.9', 'weekly'],
        'safaris.tarangire-elephant' => ['0.7', 'weekly'],
        'safaris.serengeti-budget' => ['0.7', 'weekly'],
        'safaris.ngorongoro-manyara' => ['0.7', 'weekly'],
        'safaris.luxury-serengeti' => ['0.8', 'weekly'],
        'safaris.photography' => ['0.7', 'weekly'],
        'safaris.ngorongoro-private' => ['0.7', 'weekly'],
        'safaris.serengeti-private' => ['0.7', 'weekly'],
        'safaris.cultural-wildlife' => ['0.7', 'weekly'],
        'safaris.honeymoon-beach' => ['0.7', 'weekly'],
        'safaris.kili-combo' => ['0.7', 'weekly'],
        'safaris.budget' => ['0.7', 'weekly'],
        'safaris.birdwatching' => ['0.6', 'weekly'],
        'safaris.zanzibar-beach' => ['0.7', 'weekly'],
        'safaris.tarangire-serengeti' => ['0.7', 'weekly'],
        'safaris.migration-crossing' => ['0.8', 'weekly'],
        'safaris.luxury-tz-zanzibar' => ['0.8', 'weekly'],
        'kilimanjaro.index' => ['0.9', 'weekly'],
        'kilimanjaro.machame' => ['0.8', 'weekly'],
        'kilimanjaro.lemosho' => ['0.8', 'weekly'],
        'kilimanjaro.marangu' => ['0.8', 'weekly'],
        'kilimanjaro.rongai' => ['0.7', 'weekly'],
        'kilimanjaro.northern-circuit' => ['0.7', 'weekly'],
        'destinations.index' => ['0.9', 'weekly'],
        'destinations.serengeti' => ['0.8', 'weekly'],
        'destinations.ngorongoro' => ['0.8', 'weekly'],
        'destinations.tarangire' => ['0.7', 'weekly'],
        'destinations.lake-manyara' => ['0.7', 'weekly'],
        'destinations.kilimanjaro' => ['0.7', 'weekly'],
        'destinations.zanzibar' => ['0.8', 'weekly'],
        'zanzibar.index' => ['0.9', 'weekly'],
        'zanzibar.beach' => ['0.8', 'weekly'],
        'zanzibar.stone-town' => ['0.7', 'weekly'],
        'zanzibar.honeymoon' => ['0.8', 'weekly'],
        'zanzibar.safari-zanzibar' => ['0.8', 'weekly'],
        'experiences.index' => ['0.8', 'weekly'],
        'experiences.wildlife' => ['0.7', 'weekly'],
        'experiences.great-migration' => ['0.8', 'weekly'],
        'experiences.culture' => ['0.7', 'weekly'],
        'experiences.birds' => ['0.6', 'weekly'],
        'experiences.photography' => ['0.7', 'weekly'],
        'experiences.honeymoon' => ['0.7', 'weekly'],
        'plan.index' => ['0.8', 'monthly'],
        'plan.best-time' => ['0.7', 'monthly'],
        'plan.guide' => ['0.7', 'monthly'],
        'plan.packing' => ['0.6', 'monthly'],
        'plan.visa' => ['0.7', 'monthly'],
        'plan.tips' => ['0.6', 'monthly'],
        'faq' => ['0.7', 'monthly'],
        'about' => ['0.6', 'monthly'],
        'contact' => ['0.7', 'monthly'],
        'legal.privacy' => ['0.5', 'yearly'],
        'legal.terms' => ['0.5', 'yearly'],
        'legal.booking' => ['0.5', 'yearly'],
        'legal.cancellation' => ['0.5', 'yearly'],
    ];

    $entries = [];

    foreach (Route::getRoutes()->getRoutes() as $route) {
        $name = $route->getName();
        if (! $name || ! str_starts_with($name, 'sitemap') && ! str_starts_with($name, 'robots') && ! in_array($name, ['debug_email'])) {
            // skip non-public routes (sitemap, robots, debug)
        }
        if (! $name || in_array($name, ['sitemap', 'robots', 'debug_email', 'up'])) {
            continue;
        }

        $uri = $route->uri();
        // Skip parameterized routes (they won't have fixed pages)
        if (str_contains($uri, '{')) {
            continue;
        }

        [$priority, $changefreq] = $meta[$name] ?? ['0.5', 'monthly'];

        $entries[] = [
            'loc' => $base.'/'.$uri,
            'lastmod' => $today,
            'changefreq' => $changefreq,
            'priority' => $priority,
        ];
    }

    // Sort by priority descending
    usort($entries, fn ($a, $b) => $b['priority'] <=> $a['priority']);

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"'."\n";
    $xml .= '        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">'."\n\n";

    foreach ($entries as $entry) {
        $xml .= '    <url>'."\n";
        $xml .= '        <loc>'.e($entry['loc']).'</loc>'."\n";
        $xml .= '        <lastmod>'.$entry['lastmod'].'</lastmod>'."\n";
        $xml .= '        <changefreq>'.$entry['changefreq'].'</changefreq>'."\n";
        $xml .= '        <priority>'.$entry['priority'].'</priority>'."\n";
        $xml .= '    </url>'."\n\n";
    }

    $xml .= '</urlset>';

    return response($xml, 200)
        ->header('Content-Type', 'application/xml')
        ->header('Cache-Control', 'public, max-age=86400');
})->name('sitemap');

Route::get('/robots.txt', function () {
    $txt = view('seo.robots')->render();

    return response($txt, 200)
        ->header('Content-Type', 'text/plain')
        ->header('Cache-Control', 'public, max-age=86400');
})->name('robots');
