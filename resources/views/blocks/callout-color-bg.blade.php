{{--
  Title: Callout - Colored Background - Small
  Description: Callout with text and an image. The image is full width, the background has a color set, and the container is NOT full width of browser.

  Category: common
  Icon: admin-comments
  Keywords: callout color small
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
  $link = get_field('small_callout_link')
@endphp


<div class="colored-content-block mb-60 md:mb-120" data-{{ $block['id'] }}>
  <div class="content-inner bg-arbor-{{ get_field('small_callout_background_color') }} md:w-4/5 my-0 mx-auto align-{{ get_field('image_placement') }} animate__fade-in">
    <div class="image-container relative md:w-1/2">
      <img src="{{ get_field('small_callout_image') }}" alt="callout image" class="animate__fade-in--delayed">
    </div>
    <div class="copy-container mb-8 md:mb-0 px-6 md:pr-4 md:w-1/2">
      <h2 class="content-title text-3xl mb-3 swift-book animation__slide-up--scroll">{{ get_field('small_callout_title') }}</h2>
      <div class="animation-grouping animation__slide-up--scroll">
        <p class="content-copy text-base mb-8">{{ get_field('small_callout_text') }}</p>
        <a href="{{ $link['url'] }}" class="button--pill section-button">{{ $link['title'] }}</a>
      </div>
    </div>
  </div>
</div>
