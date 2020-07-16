{{--
  Title: Hero Text/Image - Large
  Description: Hero with text and a large image.
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
  $link = get_field('hero_link');
  $hero_boxes = get_field('show_hero_content_boxes');
@endphp

<section class="hero relative bg-arbor-{{ get_field('hero_background_color') }}">
  <div class="hero-inner">
    <div class="hero-content-container text-white w-4/5 lg:w-3/5">
      <h1 class="hero-title text-4xl md:text-6xl leading-snug">{{ get_field('hero_title') }}</h1>
      <p class="hero-copy text-base lg:text-lg mt-5 mb-6">{{ get_field('hero_text') }}</p>
      <a href="{{ $link['url'] }}" class="button--pill button-flex button--aqua btn-hover--white">{{ $link['title'] }}</a>
    </div>
    <img src="{{ get_field('hero_image') }}" class="hero-image" alt="resources hero image">
  </div>
</section>

@if ($hero_boxes == true)
  <section class="hero--boxes relative xs:mb-30 md:mb-0">

    <div class="hero-boxes-inner flex flex-col md:flex-row text-arbor-navy xs:w-full md:w-4/5">

      <?php
        while ( have_rows('hero_content_boxes') ) : the_row();

        $box_title = get_sub_field('content_box_title');
        $box_copy = get_sub_field('content_box_copy');
        $box_link = get_sub_field('content_box_link');
        $box_color = get_sub_field('hero_box_background_color');
      ?>

      <div class="hero-box-single hero-box--aqua bg-arbor-<?= $box_color; ?> mb-3 md:mb-0 md:mr-3">
        <div class="box-inner">
          <h3 class="hero-box-title dinn-med"><?= $box_title; ?></h3>
          <p class="hero-box-copy"><?= $box_copy; ?></p>
          <a href="<?= $box_link['url']; ?>" class="hero-box-link dinn-med"><?= $box_link['title']; ?></a>
        </div>
      </div>

      <?php endwhile; ?>

    </div>
  </section>
  @endif