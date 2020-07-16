{{--
  Title: Callout - Round Images
  Description: Callout with text and rounded images.

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

<section class="round-images bg-arbor-navy relative md:flex md:items-center mb-60 md:mb-120" data-{{ $block['id'] }}>
  <div class="image-section xs:absolute md:relative h-full w-full md:w-1/2">
    <?php
      while ( have_rows('callout_images') ) : the_row();
        $image = get_sub_field('image');
      ?>
      <div class="round-image-single animate__fade-in">
        <img src="<?= $image; ?>" alt="man round" class="guy-round guy-round-1">
      </div>
    <?php endwhile; ?>
  </div>
  <div class="copy-section mx-6 py-250 md:py-150 md:w-1/2">
    <div class="copy-inner md:w-3/4">
      <h2 class="content-title text-arbor-aqua text-3xl mb-5 md:mb-6 swift-book leading-tight animation__slide-up--scroll">{{ get_field('callout_title') }}</h2>
      <div class="animation-grouping animation__slide-up--scroll">
        <p class="content-copy text-base text-white mb-8">{{ get_field('callout_text') }}</p>
        <a href="{{ $link['url'] }}" class="button--pill btn-hover--white button--aqua content-link">{{ $link['title'] }}</a>
      </div>
    </div>
  </div>
</section>