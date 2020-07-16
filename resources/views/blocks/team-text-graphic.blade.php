{{--
  Title: Callout - Team Graphic
  Description: Callout with text and image.

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

<section class="team-text-graphic xs:mb-120 md:ml-120 md:mb-120 mt-60">
  <div class="text-graphic-inner flex flex-col-reverse md:flex-row mx-6 md:mx-0 md:items-center">
    <div class="copy-container md:w-1/2">
      <h2 class="content-title text-3xl text-arbor-aqua mb-5 text-arbor-navy">{{ get_field('callout_title') }}</h2>
      <p class="content-copy text-base text-arbor-navy mb-8 dinn-light">{{ get_field('callout_text') }}</p>
      <a href="{{ $link['url'] }}" class="button--pill button--navy">{{ $link['title'] }}</a>
    </div>
    <div class="image-container md:w-1/2 flex justify-center xs:mb-30 md:mb-0">
      <img src="{{ get_field('callout_image') }}" alt="instruments" class="home-instruments">
    </div>
  </div>
</section>