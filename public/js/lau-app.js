/**
 * ═══════════════════════════════════════════════════════════════
 *  LAU Paradise Adventure — Main Application JavaScript
 *  Tourism website: Tanzania safaris, Kilimanjaro, Zanzibar
 *  WhatsApp: +255 683 163 219
 *  Email:    info@lauparadiseadventure.com
 * ═══════════════════════════════════════════════════════════════
 */

(function () {
  'use strict';

  /* ─────────────────────────────────────────────────────────────
     CONFIGURATION
     ───────────────────────────────────────────────────────────── */
  const CONFIG = {
    WHATSAPP_NUMBER: '255683163219',
    EMAIL: 'info@lauparadiseadventure.com',
    WHATSAPP_URL: 'https://wa.me/255683163219',
    NAV_HEIGHT: 92,
    SCROLL_THRESHOLD: 60,
    REVEAL_THRESHOLD: 0.1,
    REVEAL_STAGGER_MS: 80,
    COUNTER_DURATION: 2000,
    TOAST_DURATION: 4000,
  };

  /* ─────────────────────────────────────────────────────────────
     UTILITIES
     ───────────────────────────────────────────────────────────── */
  function qs(sel, ctx = document) { return ctx.querySelector(sel); }
  function qsa(sel, ctx = document) { return [...ctx.querySelectorAll(sel)]; }

  function showToast(message, type = 'success') {
    let toast = qs('.lau-toast');
    if (!toast) {
      toast = document.createElement('div');
      toast.className = 'lau-toast';
      toast.setAttribute('role', 'alert');
      toast.setAttribute('aria-live', 'polite');
      document.body.appendChild(toast);
    }
    toast.textContent = message;
    toast.style.cssText = `
      position:fixed;bottom:30px;left:50%;transform:translateX(-50%) translateY(20px);
      background:${type === 'success' ? '#27AE60' : type === 'error' ? '#e74c3c' : '#C8963E'};
      color:#fff;padding:14px 28px;border-radius:40px;font-size:0.88rem;font-weight:600;
      font-family:'DM Sans',sans-serif;z-index:10000;opacity:0;
      transition:opacity 0.35s,transform 0.35s;box-shadow:0 8px 30px rgba(0,0,0,0.25);
      pointer-events:none;
    `;
    requestAnimationFrame(() => {
      toast.style.opacity = '1';
      toast.style.transform = 'translateX(-50%) translateY(0)';
    });
    clearTimeout(toast._timer);
    toast._timer = setTimeout(() => {
      toast.style.opacity = '0';
      toast.style.transform = 'translateX(-50%) translateY(20px)';
    }, CONFIG.TOAST_DURATION);
  }

  /* ═════════════════════════════════════════════════════════════
     1. NAVBAR SCROLL EFFECT
     Adds/removes .scrolled class based on scroll position.
     ═════════════════════════════════════════════════════════════ */
  const navbar = qs('#navbar');
  if (navbar) {
    const handleNavScroll = () => {
      navbar.classList.toggle('scrolled', window.scrollY > CONFIG.SCROLL_THRESHOLD);
    };
    window.addEventListener('scroll', handleNavScroll, { passive: true });
    handleNavScroll();
  }

  /* ═════════════════════════════════════════════════════════════
     2. MOBILE MENU TOGGLE
     Open/close on hamburger click, close on outside click.
     ═════════════════════════════════════════════════════════════ */
  const hamburger = qs('.hamburger');
  const mobileMenu = qs('#mobileMenu');

  function openMobileMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.add('open');
    hamburger.classList.add('active');
    document.body.style.overflow = 'hidden';
    if (hamburger) hamburger.setAttribute('aria-expanded', 'true');
  }

  function closeMobileMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.remove('open');
    hamburger.classList.remove('active');
    document.body.style.overflow = '';
    if (hamburger) hamburger.setAttribute('aria-expanded', 'false');
  }

  function toggleMobileMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.contains('open') ? closeMobileMenu() : openMobileMenu();
  }

  if (hamburger) {
    hamburger.addEventListener('click', toggleMobileMenu);
  }

  if (mobileMenu) {
    mobileMenu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', closeMobileMenu);
    });
  }

  document.addEventListener('click', (e) => {
    if (mobileMenu && mobileMenu.classList.contains('open') &&
        !mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
      closeMobileMenu();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMobileMenu();
  });

  /* ═════════════════════════════════════════════════════════════
     3. SCROLL REVEAL ANIMATION
     IntersectionObserver for .reveal elements.
     ═════════════════════════════════════════════════════════════ */
  function initScrollReveal() {
    const reveals = qsa('.reveal');
    if (!reveals.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => entry.target.classList.add('visible'), index * CONFIG.REVEAL_STAGGER_MS);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: CONFIG.REVEAL_THRESHOLD, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(el => observer.observe(el));
  }

  initScrollReveal();

  /* ═════════════════════════════════════════════════════════════
     4. TOUR / ACTIVITY FILTER
     Filter cards by data-type attribute.
     ═════════════════════════════════════════════════════════════ */
  window.filterTours = function (btn, type) {
    if (!btn) return;

    qsa('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const cards = qsa('.tour-card');
    cards.forEach(card => {
      const match = type === 'all' || card.dataset.type === type;
      card.style.display = match ? '' : 'none';
      if (match) {
        card.style.opacity = '0';
        card.style.transform = 'translateY(16px)';
        requestAnimationFrame(() => {
          card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        });
      }
    });

    showToast(type === 'all' ? 'Showing all tours' : `Filtered: ${type.charAt(0).toUpperCase() + type.slice(1)} tours`);
  };

  /* ═════════════════════════════════════════════════════════════
     5. WISHLIST TOGGLE
     Heart icon toggle with animation and localStorage.
     ═════════════════════════════════════════════════════════════ */
  function initWishlist() {
    const wishes = JSON.parse(localStorage.getItem('lau_wishlist') || '[]');

    qsa('.tour-wish').forEach((btn, index) => {
      if (wishes.includes(index)) {
        const icon = btn.querySelector('i');
        if (icon) { icon.classList.remove('far'); icon.classList.add('fas'); }
        btn.style.color = '#e74c3c';
      }

      btn.addEventListener('click', function () {
        const icon = this.querySelector('i');
        if (!icon) return;
        const isFilled = icon.classList.contains('fas');

        icon.classList.toggle('far', isFilled);
        icon.classList.toggle('fas', !isFilled);
        this.style.color = isFilled ? '' : '#e74c3c';

        if (!isFilled) {
          this.style.transform = 'scale(1.3)';
          setTimeout(() => { this.style.transform = ''; }, 200);
          if (!wishes.includes(index)) wishes.push(index);
        } else {
          const i = wishes.indexOf(index);
          if (i > -1) wishes.splice(i, 1);
        }

        localStorage.setItem('lau_wishlist', JSON.stringify(wishes));
        showToast(isFilled ? 'Removed from wishlist' : 'Added to wishlist');
      });
    });
  }

  initWishlist();

  /* ═════════════════════════════════════════════════════════════
     6. FORM SUBMIT HANDLER
     Inquiry form with validation, submission feedback.
     ═════════════════════════════════════════════════════════════ */
  window.submitForm = function () {
    const form = qs('.booking-form');
    if (!form) return;

    const inputs = form.querySelectorAll('input[required], textarea[required]');
    let valid = true;
    inputs.forEach(input => {
      if (!input.value.trim()) {
        input.style.borderColor = '#e74c3c';
        valid = false;
      } else {
        input.style.borderColor = '';
      }
    });

    if (!valid) {
      showToast('Please fill in all required fields.', 'error');
      return;
    }

    const btn = form.querySelector('.form-submit');
    if (!btn) return;

    const originalHTML = btn.innerHTML;
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.style.opacity = '0.7';

    setTimeout(() => {
      btn.innerHTML = '<i class="fas fa-check"></i> Inquiry Sent! We\'ll reply within 24hrs.';
      btn.style.background = '#27AE60';
      btn.style.opacity = '1';
      showToast('Inquiry sent successfully! We\'ll be in touch soon.');

      setTimeout(() => {
        btn.innerHTML = originalHTML;
        btn.style.background = '';
        btn.disabled = false;
        form.querySelectorAll('input, textarea').forEach(f => { f.value = ''; });
      }, CONFIG.TOAST_DURATION);
    }, 1500);
  };

  /* ═════════════════════════════════════════════════════════════
     7. ACTIVE NAV LINK HIGHLIGHTING ON SCROLL
     Highlights the current section's nav link.
     ═════════════════════════════════════════════════════════════ */
  function initActiveNavHighlight() {
    const sections = qsa('section[id]');
    const navLinks = qsa('.nav-links a');
    if (!sections.length || !navLinks.length) return;

    const highlight = () => {
      let current = '';
      sections.forEach(sec => {
        const top = sec.offsetTop - CONFIG.NAV_HEIGHT - 80;
        if (window.scrollY >= top) current = sec.id;
      });

      navLinks.forEach(a => {
        const href = a.getAttribute('href');
        if (href && href.startsWith('#')) {
          a.classList.toggle('active', href === `#${current}`);
        }
      });
    };

    window.addEventListener('scroll', highlight, { passive: true });
    highlight();
  }

  initActiveNavHighlight();

  /* ═════════════════════════════════════════════════════════════
     8. FAQ ACCORDION
     Click question to toggle answer; only one open at a time.
     ═════════════════════════════════════════════════════════════ */
  function initFAQAccordion() {
    qsa('.faq-item').forEach(item => {
      const question = item.querySelector('.faq-question') || item.querySelector('[class*="question"]');
      const answer = item.querySelector('.faq-answer') || item.querySelector('[class*="answer"]');
      if (!question || !answer) return;

      question.addEventListener('click', () => {
        const isOpen = item.classList.contains('active');

        qsa('.faq-item.active').forEach(openItem => {
          openItem.classList.remove('active');
          const openAnswer = openItem.querySelector('.faq-answer') || openItem.querySelector('[class*="answer"]');
          if (openAnswer) openAnswer.style.maxHeight = '0';
          const openIcon = openItem.querySelector('.faq-question i, [class*="question"] i');
          if (openIcon) openIcon.style.transform = 'rotate(0deg)';
        });

        if (!isOpen) {
          item.classList.add('active');
          answer.style.maxHeight = answer.scrollHeight + 'px';
          const icon = question.querySelector('i');
          if (icon) icon.style.transform = 'rotate(180deg)';
        }
      });
    });
  }

  initFAQAccordion();

  /* ═════════════════════════════════════════════════════════════
     9. ITINERARY ACCORDION
     For safari detail pages with day-by-day breakdowns.
     ═════════════════════════════════════════════════════════════ */
  function initItineraryAccordion() {
    qsa('.itinerary-item, .day-item, .accordion-item').forEach(item => {
      const header = item.querySelector('.itinerary-header, .day-header, .accordion-header');
      const body = item.querySelector('.itinerary-body, .day-body, .accordion-body');
      if (!header || !body) return;

      header.style.cursor = 'pointer';
      header.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');

        qsa('.itinerary-item.open, .day-item.open, .accordion-item.open').forEach(openItem => {
          openItem.classList.remove('open');
          const openBody = openItem.querySelector('.itinerary-body, .day-body, .accordion-body');
          if (openBody) openBody.style.maxHeight = '0';
        });

        if (!isOpen) {
          item.classList.add('open');
          body.style.maxHeight = body.scrollHeight + 'px';
        }
      });
    });
  }

  initItineraryAccordion();

  /* ═════════════════════════════════════════════════════════════
     10. GALLERY LIGHTBOX
     Click image to view full size in overlay.
     ═════════════════════════════════════════════════════════════ */
  function initGalleryLightbox() {
    const overlay = document.createElement('div');
    overlay.className = 'lau-lightbox';
    overlay.setAttribute('role', 'dialog');
    overlay.setAttribute('aria-label', 'Image viewer');
    overlay.setAttribute('aria-hidden', 'true');
    overlay.innerHTML = `
      <button class="lau-lightbox-close" aria-label="Close">&times;</button>
      <img class="lau-lightbox-img" src="" alt="">
      <button class="lau-lightbox-prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
      <button class="lau-lightbox-next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
      <div class="lau-lightbox-caption"></div>
    `;
    overlay.style.cssText = `
      position:fixed;inset:0;z-index:10001;background:rgba(0,0,0,0.92);
      display:none;align-items:center;justify-content:center;opacity:0;
      transition:opacity 0.3s;
    `;
    document.body.appendChild(overlay);

    const lightboxImg = overlay.querySelector('.lau-lightbox-img');
    const caption = overlay.querySelector('.lau-lightbox-caption');
    const closeBtn = overlay.querySelector('.lau-lightbox-close');
    const prevBtn = overlay.querySelector('.lau-lightbox-prev');
    const nextBtn = overlay.querySelector('.lau-lightbox-next');

    const navBtnStyle = `
      position:absolute;top:50%;transform:translateY(-50%);background:rgba(255,255,255,0.15);
      border:1px solid rgba(255,255,255,0.3);color:#fff;width:50px;height:50px;
      border-radius:50%;cursor:pointer;font-size:1.2rem;display:flex;align-items:center;
      justify-content:center;transition:background 0.2s;
    `;
    prevBtn.style.cssText = navBtnStyle + 'left:20px;';
    nextBtn.style.cssText = navBtnStyle + 'right:20px;';

    closeBtn.style.cssText = `
      position:absolute;top:20px;right:24px;background:none;border:none;color:#fff;
      font-size:2.5rem;cursor:pointer;z-index:2;line-height:1;
    `;

    caption.style.cssText = `
      position:absolute;bottom:30px;left:50%;transform:translateX(-50%);
      color:rgba(255,255,255,0.8);font-size:0.9rem;text-align:center;max-width:80%;
    `;

    lightboxImg.style.cssText = `
      max-width:90vw;max-height:85vh;object-fit:contain;border-radius:8px;
    `;

    let currentIndex = 0;
    let galleryImages = [];

    function openLightbox(index) {
      currentIndex = index;
      const img = galleryImages[index];
      lightboxImg.src = img.dataset.fullSrc || img.src;
      lightboxImg.alt = img.alt || '';
      caption.textContent = img.alt || '';
      overlay.style.display = 'flex';
      overlay.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      requestAnimationFrame(() => { overlay.style.opacity = '1'; });
    }

    function closeLightbox() {
      overlay.style.opacity = '0';
      setTimeout(() => {
        overlay.style.display = 'none';
        overlay.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }, 300);
    }

    function navigate(dir) {
      currentIndex = (currentIndex + dir + galleryImages.length) % galleryImages.length;
      const img = galleryImages[currentIndex];
      lightboxImg.style.opacity = '0';
      setTimeout(() => {
        lightboxImg.src = img.dataset.fullSrc || img.src;
        lightboxImg.alt = img.alt || '';
        caption.textContent = img.alt || '';
        lightboxImg.style.opacity = '1';
      }, 150);
    }

    document.addEventListener('click', (e) => {
      const target = e.target.closest('.gallery-img, .dest-card img, .tour-img img, .activity-card img, .blog-img img, [data-lightbox]');
      if (target) {
        e.preventDefault();
        galleryImages = qsa('.gallery-img, .dest-card img, .tour-img img, .activity-card img, .blog-img img, [data-lightbox]');
        const idx = galleryImages.indexOf(target);
        if (idx > -1) openLightbox(idx);
      }
    });

    closeBtn.addEventListener('click', closeLightbox);
    prevBtn.addEventListener('click', () => navigate(-1));
    nextBtn.addEventListener('click', () => navigate(1));

    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
      if (overlay.style.display !== 'flex') return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowLeft') navigate(-1);
      if (e.key === 'ArrowRight') navigate(1);
    });

    lightboxImg.style.transition = 'opacity 0.15s';
  }

  initGalleryLightbox();

  /* ═════════════════════════════════════════════════════════════
     11. TRIP PLANNER MULTI-STEP
     Step navigation with validation between steps.
     ═════════════════════════════════════════════════════════════ */
  function initTripPlanner() {
    const planner = qs('.trip-planner, .multi-step, .form-wizard');
    if (!planner) return;

    const steps = qsa('.step, .form-step', planner);
    const stepIndicators = qsa('.step-indicator, .step-dot', planner);
    const nextBtns = qsa('.step-next, .btn-next', planner);
    const prevBtns = qsa('.step-prev, .btn-prev', planner);
    let currentStep = 0;

    function showStep(index) {
      steps.forEach((step, i) => {
        step.style.display = i === index ? 'block' : 'none';
        step.classList.toggle('active', i === index);
      });

      stepIndicators.forEach((dot, i) => {
        dot.classList.toggle('active', i <= index);
        dot.classList.toggle('completed', i < index);
      });

      currentStep = index;
      planner.dispatchEvent(new CustomEvent('stepChange', { detail: { step: index } }));
    }

    function validateStep(index) {
      const step = steps[index];
      if (!step) return true;
      const required = step.querySelectorAll('[required]');
      let valid = true;
      required.forEach(field => {
        if (!field.value.trim()) {
          field.style.borderColor = '#e74c3c';
          valid = false;
        } else {
          field.style.borderColor = '';
        }
      });
      return valid;
    }

    nextBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        if (validateStep(currentStep)) {
          if (currentStep < steps.length - 1) {
            showStep(currentStep + 1);
          }
        } else {
          showToast('Please fill in all required fields.', 'error');
        }
      });
    });

    prevBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        if (currentStep > 0) showStep(currentStep - 1);
      });
    });

    showStep(0);
  }

  initTripPlanner();

  /* ═════════════════════════════════════════════════════════════
     12. FILTER SIDEBAR TOGGLE (Mobile)
     Slide in/out sidebar for mobile filter panels.
     ═════════════════════════════════════════════════════════════ */
  function initFilterSidebar() {
    const sidebar = qs('.filter-sidebar, .sidebar-filter, .mobile-filter');
    const toggleBtns = qsa('.filter-toggle, .open-filter, .mobile-filter-btn');
    let overlay = qs('.lau-sidebar-overlay');

    if (!overlay) {
      overlay = document.createElement('div');
      overlay.className = 'lau-sidebar-overlay';
      overlay.style.cssText = `
        position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:10002;
        opacity:0;pointer-events:none;transition:opacity 0.3s;
      `;
      document.body.appendChild(overlay);
    }

    function openSidebar() {
      if (!sidebar) return;
      sidebar.classList.add('open');
      sidebar.style.transform = 'translateX(0)';
      sidebar.style.transition = 'transform 0.35s ease';
      overlay.style.opacity = '1';
      overlay.style.pointerEvents = 'auto';
      document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
      if (!sidebar) return;
      sidebar.classList.remove('open');
      sidebar.style.transform = 'translateX(-100%)';
      overlay.style.opacity = '0';
      overlay.style.pointerEvents = 'none';
      document.body.style.overflow = '';
    }

    toggleBtns.forEach(btn => btn.addEventListener('click', openSidebar));
    overlay.addEventListener('click', closeSidebar);

    if (sidebar) {
      const closeBtn = sidebar.querySelector('.close-filter, .sidebar-close');
      if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeSidebar();
    });
  }

  initFilterSidebar();

  /* ═════════════════════════════════════════════════════════════
     13. PRICE RANGE SLIDER
     Dual-handle or single range slider for filter sidebar.
     ═════════════════════════════════════════════════════════════ */
  function initPriceRangeSlider() {
    const slider = qs('.price-range-slider, input[type="range"][data-range]');
    const minInput = qs('.range-min, #priceMin');
    const maxInput = qs('.range-max, #priceMax');
    const display = qs('.price-range-display, .range-value');

    if (slider) {
      const updateDisplay = () => {
        const val = parseInt(slider.value, 10);
        if (display) display.textContent = `$${val.toLocaleString()}`;
        slider.style.setProperty('--val', `${((val - slider.min) / (slider.max - slider.min)) * 100}%`);
      };
      slider.addEventListener('input', updateDisplay);
      updateDisplay();
    }

    if (minInput && maxInput) {
      const sync = () => {
        const min = parseInt(minInput.value, 10) || 0;
        const max = parseInt(maxInput.value, 10) || 10000;
        if (display) display.textContent = `$${min.toLocaleString()} – $${max.toLocaleString()}`;
      };
      minInput.addEventListener('input', sync);
      maxInput.addEventListener('input', sync);
      sync();
    }
  }

  initPriceRangeSlider();

  /* ═════════════════════════════════════════════════════════════
     14. WHATSAPP FLOAT BUTTON
     Show after scrolling down, link to WhatsApp chat.
     ═════════════════════════════════════════════════════════════ */
  function initWhatsAppFloat() {
    const existing = qs('.lau-whatsapp-float');
    if (existing) return;

    const fab = document.createElement('a');
    fab.href = CONFIG.WHATSAPP_URL;
    fab.target = '_blank';
    fab.rel = 'noopener noreferrer';
    fab.className = 'lau-whatsapp-float';
    fab.setAttribute('aria-label', 'Chat on WhatsApp');
    fab.innerHTML = '<i class="fab fa-whatsapp"></i>';
    fab.style.cssText = `
      position:fixed;bottom:24px;right:24px;z-index:999;
      width:58px;height:58px;border-radius:50%;
      background:#25D366;color:#fff;
      display:flex;align-items:center;justify-content:center;
      font-size:1.7rem;text-decoration:none;
      box-shadow:0 4px 20px rgba(37,211,102,0.45);
      opacity:0;transform:scale(0.5) translateY(20px);
      transition:opacity 0.4s,transform 0.4s,box-shadow 0.2s;
      pointer-events:none;
    `;
    document.body.appendChild(fab);

    let visible = false;
    const toggle = () => {
      const shouldShow = window.scrollY > 400;
      if (shouldShow === visible) return;
      visible = shouldShow;
      fab.style.opacity = shouldShow ? '1' : '0';
      fab.style.transform = shouldShow ? 'scale(1) translateY(0)' : 'scale(0.5) translateY(20px)';
      fab.style.pointerEvents = shouldShow ? 'auto' : 'none';
    };

    window.addEventListener('scroll', toggle, { passive: true });

    fab.addEventListener('mouseenter', () => {
      fab.style.boxShadow = '0 6px 30px rgba(37,211,102,0.65)';
      fab.style.transform = 'scale(1.1)';
    });
    fab.addEventListener('mouseleave', () => {
      fab.style.boxShadow = '0 4px 20px rgba(37,211,102,0.45)';
      fab.style.transform = 'scale(1)';
    });
  }

  initWhatsAppFloat();

  /* ═════════════════════════════════════════════════════════════
     15. BACK TO TOP BUTTON
     Show after scrolling, smooth scroll to top.
     ═════════════════════════════════════════════════════════════ */
  function initBackToTop() {
    const existing = qs('.lau-back-to-top');
    if (existing) return;

    const btn = document.createElement('button');
    btn.className = 'lau-back-to-top';
    btn.setAttribute('aria-label', 'Back to top');
    btn.innerHTML = '<i class="fas fa-chevron-up"></i>';
    btn.style.cssText = `
      position:fixed;bottom:30px;right:24px;z-index:998;
      width:46px;height:46px;border-radius:50%;
      background:#C8963E;color:#1A1209;border:none;cursor:pointer;
      display:flex;align-items:center;justify-content:center;
      font-size:1rem;font-weight:700;
      box-shadow:0 4px 16px rgba(200,150,62,0.4);
      opacity:0;transform:translateY(20px);
      transition:opacity 0.35s,transform 0.35s,background 0.2s;
      pointer-events:none;
    `;
    document.body.appendChild(btn);

    let visible = false;
    const toggle = () => {
      const shouldShow = window.scrollY > 500;
      if (shouldShow === visible) return;
      visible = shouldShow;
      btn.style.opacity = shouldShow ? '1' : '0';
      btn.style.transform = shouldShow ? 'translateY(0)' : 'translateY(20px)';
      btn.style.pointerEvents = shouldShow ? 'auto' : 'none';
    };

    window.addEventListener('scroll', toggle, { passive: true });

    btn.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    btn.addEventListener('mouseenter', () => { btn.style.background = '#E8B86D'; });
    btn.addEventListener('mouseleave', () => { btn.style.background = '#C8963E'; });
  }

  initBackToTop();

  /* ═════════════════════════════════════════════════════════════
     16. SMOOTH SCROLL FOR ANCHOR LINKS
     All internal anchor links scroll smoothly.
     ═════════════════════════════════════════════════════════════ */
  function initSmoothScroll() {
    document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;
      const targetId = link.getAttribute('href');
      if (!targetId || targetId === '#') return;
      const target = qs(targetId);
      if (!target) return;

      e.preventDefault();
      const offset = qs('nav') ? CONFIG.NAV_HEIGHT + 10 : 0;
      const top = target.getBoundingClientRect().top + window.scrollY - offset;

      window.scrollTo({ top, behavior: 'smooth' });

      history.pushState(null, '', targetId);
    });
  }

  initSmoothScroll();

  /* ═════════════════════════════════════════════════════════════
     17. COUNTER ANIMATION
     Animate numbers when they come into view (stats sections).
     ═════════════════════════════════════════════════════════════ */
  function initCounters() {
    const counters = qsa('[data-count], .stat-num, .counter-num, .about-badge strong');
    if (!counters.length) return;

    function animateCounter(el) {
      const text = el.textContent.trim();
      const match = text.match(/^([\d,.]+)(.*)/);
      if (!match) return;

      const rawNum = parseFloat(match[1].replace(/,/g, ''));
      const suffix = match[2] || '';
      const hasDecimal = match[1].includes('.');
      const duration = CONFIG.COUNTER_DURATION;
      const start = performance.now();

      function update(now) {
        const elapsed = now - start;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = rawNum * eased;

        if (hasDecimal) {
          el.textContent = current.toFixed(1) + suffix;
        } else {
          el.textContent = Math.floor(current).toLocaleString() + suffix;
        }

        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          el.textContent = text;
        }
      }

      el.textContent = hasDecimal ? '0.0' + suffix : '0' + suffix;
      requestAnimationFrame(update);
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(el => {
      const text = el.textContent.trim();
      if (/^[\d,.]+/.test(text)) observer.observe(el);
    });
  }

  initCounters();

  /* ═════════════════════════════════════════════════════════════
     18. SEARCH FORM HANDLING
     Homepage search bar — validate and redirect or filter.
     ═════════════════════════════════════════════════════════════ */
  function initSearchForm() {
    const searchBar = qs('.search-bar, .search-form');
    if (!searchBar) return;

    const searchBtn = searchBar.querySelector('.search-btn, button[type="submit"]');
    if (!searchBtn) return;

    searchBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const selects = searchBar.querySelectorAll('select, input');
      const params = {};

      selects.forEach(sel => {
        const label = sel.closest('.search-field')?.querySelector('label');
        const key = label ? label.textContent.trim().toLowerCase().replace(/\s+/g, '_') : 'query';
        params[key] = sel.value;
      });

      const hasSelection = Object.values(params).some(v => v && !v.startsWith('All') && !v.startsWith('Any'));
      if (hasSelection) {
        showToast('Searching for tours...');
        const toursSection = qs('#tours');
        if (toursSection) {
          const offset = CONFIG.NAV_HEIGHT + 10;
          const top = toursSection.getBoundingClientRect().top + window.scrollY - offset;
          window.scrollTo({ top, behavior: 'smooth' });
        }
      } else {
        showToast('Please select a destination or tour type.', 'error');
      }
    });
  }

  initSearchForm();

  /* ═════════════════════════════════════════════════════════════
     19. ROUTE COMPARISON TABLE
     Highlight row on hover, sortable columns.
     ═════════════════════════════════════════════════════════════ */
  function initRouteComparison() {
    const table = qs('.route-table, .comparison-table, table[data-sortable]');
    if (!table) return;

    const rows = qsa('tbody tr', table);
    rows.forEach(row => {
      row.addEventListener('mouseenter', () => {
        row.style.background = 'rgba(200,150,62,0.1)';
        row.style.transition = 'background 0.2s';
      });
      row.addEventListener('mouseleave', () => {
        row.style.background = '';
      });
    });

    const headers = qsa('thead th[data-sort]', table);
    headers.forEach((th, colIndex) => {
      th.style.cursor = 'pointer';
      th.addEventListener('click', () => {
        const sortDir = th.dataset.sort === 'asc' ? 'desc' : 'asc';
        th.dataset.sort = sortDir;

        const tbody = qs('tbody', table);
        const sortedRows = [...rows].sort((a, b) => {
          const aVal = a.children[colIndex]?.textContent.trim() || '';
          const bVal = b.children[colIndex]?.textContent.trim() || '';
          const aNum = parseFloat(aVal.replace(/[^0-9.-]/g, ''));
          const bNum = parseFloat(bVal.replace(/[^0-9.-]/g, ''));
          if (!isNaN(aNum) && !isNaN(bNum)) {
            return sortDir === 'asc' ? aNum - bNum : bNum - aNum;
          }
          return sortDir === 'asc' ? aVal.localeCompare(bVal) : bVal.localeCompare(aVal);
        });

        sortedRows.forEach(row => tbody.appendChild(row));

        headers.forEach(h => {
          const icon = h.querySelector('i');
          if (icon) icon.remove();
        });
        th.insertAdjacentHTML('beforeend', ` <i class="fas fa-sort-${sortDir === 'asc' ? 'up' : 'down'}" style="font-size:0.6rem"></i>`);
      });
    });
  }

  initRouteComparison();

  /* ═════════════════════════════════════════════════════════════
     20. IMAGE LAZY LOADING
     IntersectionObserver for images with data-src.
     ═════════════════════════════════════════════════════════════ */
  function initLazyLoading() {
    const lazyImages = qsa('img[data-src]');
    if (!lazyImages.length) return;

    if ('loading' in HTMLImageElement.prototype) {
      lazyImages.forEach(img => {
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
      });
      return;
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
          img.classList.add('loaded');
          observer.unobserve(img);
        }
      });
    }, { rootMargin: '200px 0px' });

    lazyImages.forEach(img => observer.observe(img));
  }

  initLazyLoading();

  /* ═════════════════════════════════════════════════════════════
     21. DROPDOWN MENU KEYBOARD ACCESSIBILITY
     Arrow keys to navigate, escape to close.
     ═════════════════════════════════════════════════════════════ */
  function initDropdownA11y() {
    const dropdownParents = qsa('.nav-links > li:has(.dropdown-menu), .nav-links > li');

    dropdownParents.forEach(li => {
      const toggle = li.querySelector(':scope > a');
      const menu = li.querySelector('.dropdown-menu');
      if (!toggle || !menu) return;

      toggle.setAttribute('aria-haspopup', 'true');
      toggle.setAttribute('aria-expanded', 'false');

      let focusTrapEnabled = false;

      function trapFocus(e) {
        const items = qsa('a', menu);
        const first = items[0];
        const last = items[items.length - 1];

        if (e.key === 'ArrowDown') {
          e.preventDefault();
          const next = document.activeElement.parentElement.nextElementSibling;
          if (next) next.querySelector('a')?.focus();
          else first?.focus();
        }
        if (e.key === 'ArrowUp') {
          e.preventDefault();
          const prev = document.activeElement.parentElement.previousElementSibling;
          if (prev) prev.querySelector('a')?.focus();
          else last?.focus();
        }
        if (e.key === 'Escape') {
          closeDropdown();
          toggle.focus();
        }
        if (e.key === 'Tab' && !e.shiftKey && document.activeElement === last) {
          closeDropdown();
        }
      }

      function openDropdown() {
        menu.style.display = 'block';
        toggle.setAttribute('aria-expanded', 'true');
        li.classList.add('keyboard-open');
        if (!focusTrapEnabled) {
          menu.addEventListener('keydown', trapFocus);
          focusTrapEnabled = true;
        }
      }

      function closeDropdown() {
        menu.style.display = '';
        toggle.setAttribute('aria-expanded', 'false');
        li.classList.remove('keyboard-open');
      }

      toggle.addEventListener('focus', openDropdown);
      toggle.addEventListener('blur', (e) => {
        if (!li.contains(e.relatedTarget)) closeDropdown();
      });

      toggle.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === 'ArrowDown') {
          e.preventDefault();
          openDropdown();
          const firstItem = menu.querySelector('a');
          if (firstItem) firstItem.focus();
        }
      });
    });
  }

  initDropdownA11y();

  /* ═════════════════════════════════════════════════════════════
     22. COPY TO CLIPBOARD
     For phone numbers, email addresses — click to copy.
     ═════════════════════════════════════════════════════════════ */
  function initCopyToClipboard() {
    const copyableElements = qsa('[data-copy], .copy-text, .contact-value a');

    copyableElements.forEach(el => {
      el.style.cursor = 'pointer';
      el.title = 'Click to copy';

      const tooltip = document.createElement('span');
      tooltip.className = 'lau-copy-tooltip';
      tooltip.textContent = 'Copied!';
      tooltip.style.cssText = `
        position:absolute;background:#1A1209;color:#fff;padding:6px 14px;
        border-radius:6px;font-size:0.72rem;font-weight:600;white-space:nowrap;
        pointer-events:none;opacity:0;transform:translateY(-8px);
        transition:opacity 0.2s,transform 0.2s;z-index:100;
      `;

      el.style.position = 'relative';
      el.appendChild(tooltip);

      el.addEventListener('click', async (e) => {
        e.preventDefault();
        e.stopPropagation();
        const text = el.dataset.copy || el.textContent.trim();

        try {
          await navigator.clipboard.writeText(text);
          tooltip.style.opacity = '1';
          tooltip.style.transform = 'translateY(0)';
          showToast('Copied to clipboard!');
          setTimeout(() => {
            tooltip.style.opacity = '0';
            tooltip.style.transform = 'translateY(-8px)';
          }, 1500);
        } catch {
          const textarea = document.createElement('textarea');
          textarea.value = text;
          textarea.style.cssText = 'position:fixed;left:-9999px;';
          document.body.appendChild(textarea);
          textarea.select();
          try {
            document.execCommand('copy');
            showToast('Copied to clipboard!');
          } catch {
            showToast('Failed to copy.', 'error');
          }
          document.body.removeChild(textarea);
        }
      });
    });
  }

  initCopyToClipboard();

  /* ═════════════════════════════════════════════════════════════
     BONUS: DYNAMIC WHATSAPP LINKS
     Auto-patch all WhatsApp links with correct number.
     ═════════════════════════════════════════════════════════════ */
  function patchWhatsAppLinks() {
    qsa('a[href*="wa.me"]').forEach(link => {
      const current = new URL(link.href);
      const pathParts = current.pathname.split('/').filter(Boolean);
      if (pathParts.length > 0) {
        pathParts[0] = CONFIG.WHATSAPP_NUMBER;
      } else {
        pathParts.push(CONFIG.WHATSAPP_NUMBER);
      }
      current.pathname = '/' + pathParts.join('/');
      link.href = current.toString();
      link.setAttribute('target', '_blank');
      link.setAttribute('rel', 'noopener noreferrer');
    });
  }

  patchWhatsAppLinks();

  /* ═════════════════════════════════════════════════════════════
     BONUS: DYNAMIC EMAIL LINKS
     Auto-patch email links with correct address.
     ═════════════════════════════════════════════════════════════ */
  function patchEmailLinks() {
    qsa('a[href^="mailto:"]').forEach(link => {
      const href = link.getAttribute('href');
      if (!href.includes(CONFIG.EMAIL)) {
        link.href = `mailto:${CONFIG.EMAIL}`;
      }
    });
  }

  patchEmailLinks();

  /* ═════════════════════════════════════════════════════════════
     BONUS: LOADING STATE
     Add loaded class to body when everything is ready.
     ═════════════════════════════════════════════════════════════ */
  window.addEventListener('load', () => {
    document.body.classList.add('loaded');
  });

})();
