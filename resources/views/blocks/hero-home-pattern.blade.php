{{--
  Title: Hero Home
  Description: Hero for home page with dotted pattern.
  Category: common
  Icon: admin-comments
  Keywords: callout
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
  $link = get_field('home_hero_link');
@endphp

<section class="home-hero hero relative bg-arbor-navy">
  <div class="hero-inner">
    <div class="hero-content-container text-white">
      <h1 class="hero-title text-4xl md:text-6xl leading-snug animation__slide-up">{{ get_field('home_hero_title') }}</h1>
      <p class="hero-copy text-base lg:text-lg mt-5 mb-6 animation__slide-up">{{ get_field('home_hero_copy') }}</p>
      <a href="{{ $link['url'] }}" class="button--pill button-flex button--aqua btn-hover--white button-slide-up hero-button">{{ $link['title'] }}</a>
    </div>

    <img src="@asset('images/arbor_maestro_hands_01.png')" class="home-hands hand-1 pointer-events-none" alt="hand 1">
    <img src="@asset('images/arbor_maestro_hands_02.png')" class="home-hands hand-2 pointer-events-none" alt="hand 2">

  </div>
  @svg('pattern-full', 'background-pattern--full')
</section>