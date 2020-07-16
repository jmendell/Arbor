{{--
  Title: Hero - Resources
  Description: Hero for resources page

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

<section class="resources-hero bg-arbor-aqua">
  <div class="hero-inner relative md:w-5/6 my-0 mx-auto">
    <div class="hero-content-container">
      <h1 class="hero-title text-arbor-navy text-4xl md:text-6xl swift-book swift-book leading-snug animation__slide-up">{{ get_field('hero_title') }}</h1>
      <p class="hero-copy text-base animation__slide-up">{{ get_field('hero_text') }}</p>
    </div>
    <div class="hero-image-container relative md:w-1/3">
      <img src="{{ get_field('hero_image') }}" class="hero-image animate__fade-in--delayed" alt="resources hero image">
    </div>
  </div>
</section>