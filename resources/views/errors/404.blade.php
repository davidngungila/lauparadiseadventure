@extends('layouts.app')

@section('page-title', 'Page Not Found | LAU Paradise Adventure')
@section('meta-description', 'The page you are looking for could not be found. Explore our Tanzania safari tours, Kilimanjaro trekking and Zanzibar holidays.')

@section('content')
<section id="home" style="min-height:60vh;display:flex;align-items:center;justify-content:center;background:var(--dark);position:relative;overflow:hidden;">
  <div style="position:absolute;inset:0;background:url('https://res.cloudinary.com/dmqdm8gfk/image/upload/v1766042771/7-DAYS-SAFARI-TANZANIA--1536x1024_d9kzfh.webp') center/cover no-repeat;opacity:0.2;"></div>
  <div style="position:relative;z-index:2;text-align:center;padding:0 8%;max-width:700px;">
    <div style="font-family:'Bebas Neue',sans-serif;font-size:clamp(6rem,15vw,12rem);color:var(--gold);line-height:1;margin-bottom:10px;">404</div>
    <h1 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,4vw,3rem);color:var(--white);margin-bottom:16px;">Page Not Found</h1>
    <p style="color:rgba(255,255,255,0.7);font-size:1.05rem;line-height:1.7;margin-bottom:36px;">The page you're looking for doesn't exist or has been moved. Let us help you find your perfect Tanzania adventure.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="/" class="btn-primary"><i class="fas fa-home"></i> Back to Home</a>
      <a href="/safaris" class="btn-outline"><i class="fas fa-compass"></i> Explore Safaris</a>
      <a href="/contact" class="btn-outline"><i class="fas fa-envelope"></i> Contact Us</a>
    </div>

    <div style="margin-top:60px;padding-top:40px;border-top:1px solid rgba(255,255,255,0.1);">
      <p style="color:rgba(255,255,255,0.5);font-size:0.9rem;margin-bottom:20px;">Or explore our most popular pages:</p>
      <div style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap;">
        <a href="/safaris" style="color:var(--gold);text-decoration:none;font-size:0.88rem;font-weight:500;"><i class="fas fa-binoculars"></i> Safaris</a>
        <a href="/kilimanjaro" style="color:var(--gold);text-decoration:none;font-size:0.88rem;font-weight:500;"><i class="fas fa-mountain"></i> Kilimanjaro</a>
        <a href="/zanzibar" style="color:var(--gold);text-decoration:none;font-size:0.88rem;font-weight:500;"><i class="fas fa-umbrella-beach"></i> Zanzibar</a>
        <a href="/destinations" style="color:var(--gold);text-decoration:none;font-size:0.88rem;font-weight:500;"><i class="fas fa-map-marker-alt"></i> Destinations</a>
        <a href="/faq" style="color:var(--gold);text-decoration:none;font-size:0.88rem;font-weight:500;"><i class="fas fa-question-circle"></i> FAQ</a>
      </div>
    </div>
  </div>
</section>
@endsection
