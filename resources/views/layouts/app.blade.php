<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('page-title', 'Tanzania Safari Tours, Kilimanjaro & Zanzibar | LAU Paradise Adventure')</title>

    {{-- Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-09B92CP2SN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-09B92CP2SN');
    </script>

    <meta name="description" content="@yield('meta-description', 'Explore Tanzania with LAU Paradise Adventure. Discover Serengeti safaris, Kilimanjaro trekking, Zanzibar holidays, Great Migration experiences and customized Tanzania tours.')">
    <meta name="keywords" content="@yield('meta-keywords', 'Tanzania safari, Tanzania safari tours, Kilimanjaro trekking, Zanzibar holidays, Great Migration, Tanzania tour operator')">

    @hasSection('canonical')
        <link rel="canonical" href="@yield('canonical')">
    @endif

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('page-title', 'Tanzania Safari Tours, Kilimanjaro & Zanzibar | LAU Paradise Adventure')">
    <meta property="og:description" content="@yield('meta-description', 'Explore Tanzania with LAU Paradise Adventure. Discover Serengeti safaris, Kilimanjaro trekking, Zanzibar holidays, Great Migration experiences and customized Tanzania tours.')">
    @hasSection('og-image')
        <meta property="og:image" content="@yield('og-image')">
    @else
        <meta property="og:image" content="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg">
    @endif
    @hasSection('canonical')
        <meta property="og:url" content="@yield('canonical')">
    @endif
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="LAU Paradise Adventure">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('page-title', 'Tanzania Safari Tours, Kilimanjaro & Zanzibar | LAU Paradise Adventure')">
    <meta name="twitter:description" content="@yield('meta-description', 'Explore Tanzania with LAU Paradise Adventure. Discover Serengeti safaris, Kilimanjaro trekking, Zanzibar holidays, Great Migration experiences and customized Tanzania tours.')">
    @hasSection('og-image')
        <meta name="twitter:image" content="@yield('og-image')">
    @else
        <meta name="twitter:image" content="https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg">
    @endif

    {{-- Preconnect --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

    {{-- Main Stylesheet --}}
    <link rel="stylesheet" href="/css/lau-styles.css">

    @hasSection('extra-css')
        @yield('extra-css')
    @endif

    {{-- Default Structured Data (Organization Schema) --}}
    @hasSection('structured-data')
        @yield('structured-data')
    @else
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TravelAgency",
        "name": "LAU Paradise Adventure",
        "alternateName": "LAU Paradise",
        "url": "https://www.lauparadiseadventure.com",
        "logo": "https://www.lauparadiseadventure.com/lau-adventuress-logo.png",
        "description": "LAU Paradise Adventure is a Tanzania-based travel company dedicated to creating memorable safari, mountain and beach experiences.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Moshi",
            "addressCountry": "TZ"
        },
        "telephone": "+255683163219",
        "email": "info@lauparadiseadventure.com"
    }
    </script>
    @endverbatim
    @endif

    {{-- Auto BreadcrumbList Schema --}}
    @php
        $siteBase = 'https://www.lauparadiseadventure.com';
        $path = '/' . request()->path();
        $segments = array_filter(explode('/', $path));
        $breadcrumbItems = [];
        $position = 1;
        $builtPath = '';
        $nameMap = [
            '' => 'Home',
            'safaris' => 'Safaris',
            'luxury-safari' => 'Luxury Safari',
            'private-safari' => 'Private Safari',
            'family-safari' => 'Family Safari',
            'group-safari' => 'Group Safari',
            'photographic-safari' => 'Photographic Safari',
            'great-migration-safari' => 'Great Migration Safari',
            'kilimanjaro' => 'Kilimanjaro',
            'machame-route' => 'Machame Route',
            'lemosho-route' => 'Lemosho Route',
            'marangu-route' => 'Marangu Route',
            'rongai-route' => 'Rongai Route',
            'northern-circuit' => 'Northern Circuit',
            'destinations' => 'Destinations',
            'serengeti' => 'Serengeti',
            'ngorongoro' => 'Ngorongoro',
            'tarangire' => 'Tarangire',
            'lake-manyara' => 'Lake Manyara',
            'zanzibar' => 'Zanzibar',
            'beach-holidays' => 'Beach Holidays',
            'stone-town' => 'Stone Town',
            'honeymoon' => 'Honeymoon',
            'safari-and-zanzibar' => 'Safari & Zanzibar',
            'experiences' => 'Experiences',
            'wildlife-safari' => 'Wildlife Safari',
            'great-migration' => 'Great Migration',
            'cultural-tours' => 'Cultural Tours',
            'bird-watching' => 'Bird Watching',
            'plan-your-trip' => 'Plan Your Trip',
            'best-time-to-visit-tanzania' => 'Best Time to Visit',
            'tanzania-travel-guide' => 'Travel Guide',
            'what-to-pack' => 'What to Pack',
            'tanzania-visa' => 'Tanzania Visa',
            'travel-tips' => 'Travel Tips',
            'faq' => 'FAQ',
            'about' => 'About',
            'contact' => 'Contact',
        ];
        foreach ($segments as $seg) {
            $builtPath .= '/' . $seg;
            $name = $nameMap[$seg] ?? ucwords(str_replace('-', ' ', $seg));
            $breadcrumbItems[] = [
                '@type' => 'ListItem',
                'position' => $position,
                'name' => $name,
                'item' => $position === 1 ? $siteBase : $siteBase . $builtPath,
            ];
            $position++;
        }
        if (empty($breadcrumbItems)) {
            $breadcrumbItems[] = ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteBase];
        }
    @endphp
    <script type="application/ld+json">
    @verbatim
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement":
    @endverbatim
    {!! json_encode($breadcrumbItems) !!}
    @verbatim
    }
    @endverbatim
    </script>
</head>
<body>

    {{-- Navigation --}}
    @include('components.navbar')

    {{-- Mobile Menu --}}
    @include('components.mobile-menu')

    {{-- Main Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('components.footer')

    {{-- Scripts --}}
    <script src="/js/lau-app.js"></script>

    @hasSection('extra-js')
        @yield('extra-js')
    @endif

</body>
</html>
