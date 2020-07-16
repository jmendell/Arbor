{{--
  Title: Text Callout
  Description: Callout with text and a link.
  Category: common
  Icon: admin-comments
  Keywords: callout
  Mode: edit
  Align: center
  PostTypes: page
  SupportsAlign: center
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
  $link = get_field('callout_link');
  $bgColor = get_field('text_callout_backround_color');
@endphp

<section class="callout-link-block get-started-block xs:py-120 md:py-150 relative bg-{{ get_field('text_callout_backround_color') }}">
  @svg('pattern-bg', 'background-pattern animate__fade-in')
  <div class="section-inner mx-3 text-center md:w-1/2 md:my-0 md:mx-auto relative z-10">
    <h2 class="section-title text-3xl mb-4 swift-book animation__slide-up--scroll">{{ get_field('callout_title') }}</h2>
    <div class="animation-grouping animation__slide-up--scroll">
      <p class="section-copy text-base mb-10 dinn-light">{{ get_field('callout_text') }}</p>
      <a href="{{ $link['url'] }}" class="button--pill btn-hover--navy button--navy">{{ $link['title'] }}</a>
    </div>
  </div>
</section>