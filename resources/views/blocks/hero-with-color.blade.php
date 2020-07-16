{{--
  Title: Hero - Color Block
  Description: Hero block with image and content. Also has a colored block behind image.
  Category: common
  Icon: admin-comments
  Keywords: callout
  Mode: edit
  Align: full
  PostTypes: page
  SupportsAlign: left
  SupportsMode: false
  SupportsMultiple: true
--}}

<section class="hero-with-color-block">

  <div class="hero-image-container block-color--{{get_field('hero_block_color')}} flex">
    <img src="{{ get_field('hero_image') }}" alt="hero image" class="hero-image animation__slide-in-from-right">
  </div>
  <div class="hero-content-container">
    <div class="hero-content-inner">
      <h1 class="hero-title animation__slide-up--scroll">{{ get_field('hero_title') }}</h1>
      <p class="hero-copy animation__slide-up--scroll">{{ get_field('hero_text') }}</p>
    </div>
  </div>

</section>