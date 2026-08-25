@extends('layouts.app')

@section('page-title', 'Privacy Policy | LAU Paradise Adventure')
@section('meta-description', 'Read the LAU Paradise Adventure privacy policy. Learn how we collect, use, and protect your personal information.')
@section('canonical', 'https://www.lauparadiseadventure.com/privacy-policy')
@section('og-image', 'https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/8-Days-Tanzania-holiday-Wildebeest-migration-1536x1018_gyndkw.jpg')

@section('extra-css')
<style>
    .legal-hero{background:var(--earth);color:white;text-align:center;padding:80px 20px 60px;}
    .legal-hero h1{font-family:'Cormorant Garamond',serif;font-size:2.8rem;margin:0 0 12px;}
    .legal-hero p{color:rgba(255,255,255,0.6);margin:0;}
    .legal-content{max-width:820px;margin:0 auto;padding:50px 24px 80px;}
    .legal-content h2{font-family:'Cormorant Garamond',serif;color:var(--earth);font-size:1.6rem;margin:40px 0 16px;}
    .legal-content p,.legal-content li{line-height:1.8;font-size:0.95rem;}
    .legal-content ul{padding-left:20px;}
    .legal-content li{margin-bottom:8px;}
    .legal-content a{color:var(--gold);}
    .legal-updated{text-align:center;color:#999;font-size:0.85rem;margin-top:40px;}
    @media(max-width:768px){.legal-hero h1{font-size:2rem;}.legal-content{padding:30px 16px 60px;}}
</style>
@endsection

@section('content')
<div class="legal-hero">
    <h1>Privacy Policy</h1>
    <p>How we collect, use, and protect your information</p>
</div>
<div class="legal-content">
    <h2>1. Information We Collect</h2>
    <p>When you use our website or book a tour, we may collect the following personal information:</p>
    <ul>
        <li>Full name, email address, and phone number</li>
        <li>Travel preferences, dates, and group size</li>
        <li>Passport details (only when required for bookings)</li>
        <li>Payment information (processed securely via third-party providers)</li>
        <li>Browser data, IP address, and cookies for website analytics</li>
    </ul>

    <h2>2. How We Use Your Information</h2>
    <p>Your information is used to:</p>
    <ul>
        <li>Respond to your inquiries and provide quotes</li>
        <li>Process and manage your safari, climb, or beach booking</li>
        <li>Communicate trip updates, itineraries, and travel advice</li>
        <li>Improve our website and services through analytics</li>
        <li>Send occasional marketing emails (only with your consent)</li>
    </ul>

    <h2>3. Data Sharing</h2>
    <p>We do not sell your personal information. We may share data with:</p>
    <ul>
        <li>Tour operators, lodges, and airlines directly involved in your booking</li>
        <li>Payment processors for secure transaction handling</li>
        <li>Government authorities when required for permits or visas</li>
        <li>Analytics providers (e.g., Google Analytics) in anonymized form</li>
    </ul>

    <h2>4. Cookies</h2>
    <p>Our website uses cookies to enhance your browsing experience and analyze site traffic. You can control cookie settings through your browser preferences. Essential cookies required for site functionality cannot be disabled.</p>

    <h2>5. Data Security</h2>
    <p>We implement industry-standard security measures to protect your personal data. All payment transactions are encrypted and processed through secure third-party gateways. However, no method of transmission over the Internet is 100% secure.</p>

    <h2>6. Your Rights</h2>
    <p>You have the right to:</p>
    <ul>
        <li>Access the personal data we hold about you</li>
        <li>Request correction of inaccurate information</li>
        <li>Request deletion of your personal data</li>
        <li>Opt out of marketing communications at any time</li>
    </ul>

    <h2>7. Data Retention</h2>
    <p>We retain your booking information for up to 5 years for legal and accounting purposes. Analytics data is retained in anonymized form indefinitely.</p>

    <h2>8. Third-Party Links</h2>
    <p>Our website may contain links to third-party sites. We are not responsible for the privacy practices of those websites. We encourage you to read their privacy policies.</p>

    <h2>9. Children's Privacy</h2>
    <p>Our services are not directed at children under 16. We do not knowingly collect personal information from children.</p>

    <h2>10. Changes to This Policy</h2>
    <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated revision date.</p>

    <h2>11. Contact Us</h2>
    <p>If you have questions about this Privacy Policy, please contact us at <a href="mailto:info@lauparadiseadventure.com">info@lauparadiseadventure.com</a> or via WhatsApp at <a href="https://wa.me/255683163219">+255 683 163 219</a>.</p>

    <p class="legal-updated">Last updated: August 2026</p>
</div>
@endsection
