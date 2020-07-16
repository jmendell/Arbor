{{--
  Title: Callout - Text with Logo
  Description: Callout with text and logo.

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

<section class="logo-info-container flex callout--{{ get_field('logo_placement') }}">
  <div class="image-container">
    @svg('pattern-tall', 'background-pattern animate__fade-in')
    @svg('logo-no-text', 'logo-condensed animate__fade-in--delayed')
  </div>
  <div class="content-container mx-6 md:w-2/5">
    <h2 class="content-title text-3xl text-arbor-aqua mb-6 swift-book md:w-3/4 leading-snug animation__slide-up--scroll">{{ get_field('callout_title') }}</h2>
    <p class="content-copy text-base text-arbor-navy dinn-light animation__slide-up--scroll">{{ get_field('callout_text') }}</p>
  </div>
</section>
