{{--
  Title: Colored Content Box
  Description: Content block with background image and colored overlay.
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

@php
  $link = get_field('callout_link')
@endphp

<div class="single-colored-box {{get_field('overlay_color')}}-box" style="background-image:url({{ get_field('background_image') }});">
  <div class="box-inner">
    <h2 class="box-title animation__slide-up--scroll">{{ get_field('callout_title') }}</h2>
    <div class="animation-grouping animation__slide-up--scroll">
      <p class="box-copy">{{ get_field('callout_text') }}</p>
      <a href="{{ $link['url'] }}" class="button--pill button">{{ $link['title'] }}</a>
    </div>
  </div>
</div>
