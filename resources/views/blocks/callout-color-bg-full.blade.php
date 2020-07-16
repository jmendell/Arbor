{{--
  Title: Callout - Colored Background - Full Width
  Description: Callout with text and an image. The image is full width and the background has a color set.
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
  $link = get_field('callout_link')
@endphp

<section class="text-graphic callout--bg-color bg-arbor-{{ get_field('callout_background_color') }}" data-{{ $block['id'] }}>

  <div class="text-graphic-inner">

    <div class="copy-container">
      <h2 class="content-title animation__slide-up--scroll">{{ get_field('callout_title') }}</h2>
      <div class="animation-grouping animation__slide-up--scroll">
        <p class="content-copy text-base text-arbor-navy mb-8">{{ get_field('callout_text') }}</p>
        <a href="{{ $link['url'] }}" class="button--pill btn-hover--navy button--navy">{{ $link['title'] }}</a>
      </div>
    </div>
    <div class="image-container">
      <img src="{{ get_field('callout_image') }}" alt="callout section image" class="section-image animation__slide-in-from-left">
    </div>

  </div>

</section>
