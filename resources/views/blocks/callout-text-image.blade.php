{{--
  Title: Text/Image Callout
  Description: Callout with text and an image.
  Category: common
  Icon: admin-comments
  Keywords: callout
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false 
  SupportsMultiple: true
--}}

@php
  $link = get_field('callout_link')
@endphp

<section class="text-graphic callout--{{ get_field('callout_style') }}" data-{{ $block['id'] }}>

  <div class="text-graphic-inner {{ get_field('callout_mobile_layout') }} md:flex-row">

    <div class="copy-container">
      <h2 class="content-title animation__slide-up--scroll">{{ get_field('callout_title') }}</h2>
      <div class="animation-grouping animation__slide-up--scroll">
        <p class="content-copy text-base text-arbor-navy mb-8">{{ get_field('callout_text') }}</p>
      @if ($link)
        <a href="{{ $link['url'] }}" class="button--pill btn-hover--navy button--{{ get_field('button_color') }}">{{ $link['title'] }}</a>
      @endif
      </div>
    </div>
    <div class="image-container">
        @svg('pattern-bg', 'background-pattern animate__fade-in--delayed')
      <img src="{{ get_field('callout_image') }}" alt="callout section image" class="section-image animate__fade-in">
    </div>

  </div>

</section>