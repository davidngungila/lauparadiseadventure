<style>
  .footer-contact-bar { display: flex; justify-content: center; gap: 40px; padding: 20px 0; border-top: 1px solid rgba(255,255,255,0.07); border-bottom: 1px solid rgba(255,255,255,0.07); margin-bottom: 30px; flex-wrap: wrap; }
  .footer-contact-item { display: flex; align-items: center; gap: 8px; color: rgba(255,255,255,0.5); font-size: 0.83rem; }
  .footer-contact-item i { color: var(--gold); font-size: 0.9rem; }
  .footer-contact-item a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color 0.2s; }
  .footer-contact-item a:hover { color: var(--gold); }
</style>

<footer>
  <div class="footer-top">
    <div class="footer-brand">
      <div class="nav-logo" style="margin-bottom:14px;">
        <img src="/lau-adventuress-logo.png" alt="LAU Paradise Adventure" class="nav-logo-img">
        <div class="nav-logo-text">LAU Paradise<span>Adventure</span></div>
      </div>
      <p class="footer-desc">Explore Tanzania. Experience the Extraordinary. LAU Paradise Adventure is a Tanzania-based travel company dedicated to creating memorable safari, mountain and beach experiences.</p>
      <div class="footer-socials">
        <a href="#" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-btn" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        <a href="#" class="social-btn" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Safaris</h4>
      <ul>
        <li><a href="/safaris">All Safaris</a></li>
        <li><a href="/safaris/luxury-safari">Luxury Safaris</a></li>
        <li><a href="/safaris/private-safari">Private Safaris</a></li>
        <li><a href="/safaris/family-safari">Family Safaris</a></li>
        <li><a href="/safaris/group-safari">Group Safaris</a></li>
        <li><a href="/safaris/great-migration-safari">Great Migration</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Explore</h4>
      <ul>
        <li><a href="/kilimanjaro">Kilimanjaro</a></li>
        <li><a href="/destinations">Destinations</a></li>
        <li><a href="/zanzibar">Zanzibar</a></li>
        <li><a href="/experiences">Experiences</a></li>
        <li><a href="/about">About Us</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Plan Your Trip</h4>
      <ul>
        <li><a href="/plan-your-trip/best-time-to-visit-tanzania">Best Time to Visit</a></li>
        <li><a href="/plan-your-trip/tanzania-travel-guide">Travel Guide</a></li>
        <li><a href="/plan-your-trip/what-to-pack">What to Pack</a></li>
        <li><a href="/plan-your-trip/tanzania-visa">Visa Information</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-contact-bar">
    <div class="footer-contact-item">
      <i class="fas fa-phone"></i>
      <a href="tel:+255683163219">+255 683 163 219</a>
    </div>
    <div class="footer-contact-item">
      <i class="fab fa-whatsapp"></i>
      <a href="https://wa.me/255683163219" target="_blank" rel="noopener">WhatsApp Us</a>
    </div>
    <div class="footer-contact-item">
      <i class="fas fa-envelope"></i>
      <a href="mailto:info@lauparadiseadventure.com">info@lauparadiseadventure.com</a>
    </div>
    <div class="footer-contact-item">
      <i class="fas fa-map-marker-alt"></i>
      <span>Moshi, Tanzania</span>
    </div>
  </div>

  <div class="footer-bottom">
    <span>&copy; {{ date('Y') }} LAU Paradise Adventure. All rights reserved.</span>
    <span>
      <a href="/privacy-policy">Privacy Policy</a> &middot;
      <a href="/terms">Terms & Conditions</a> &middot;
      <a href="/booking-terms">Booking Terms</a> &middot;
      <a href="/cancellation-policy">Cancellation Policy</a>
    </span>
  </div>
</footer>
