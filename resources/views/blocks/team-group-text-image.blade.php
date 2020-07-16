{{--
  Title: Team Group Text/Image Callout
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
  $link = get_field('section_link')
@endphp

<section class="team__text-graphic text-graphic bg-arbor-navy" data-{{ $block['id'] }}>

  <div class="team__text-graphic-inner text-graphic-inner">

    <div class="copy-container">
      <h2 class="content-title animation__slide-up--scroll">{{ get_field('section_title') }}</h2>
      <div class="animation-grouping animation__slide-up--scroll">
        <p class="content-copy text-base text-arbor-navy mb-8">{{ get_field('section_copy') }}</p>
        @if ($link)
          <a href="{{ $link['url'] }}" class="button--pill button--aqua btn-hover--white">{{ $link['title'] }}</a>
        @endif
      </div>
    </div>
    <div class="image-container animate__fade-in--delayed">
      <img src="{{ get_field('section_image') }}" alt="callout section image" class="section-image">
    </div>

  </div>

</section>