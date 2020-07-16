{{--
  Title: Testimonials
  Description: Testimonials slider.

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
<section class="testimonial-container" style="background-image:url('{{ get_field('testimonial_background_image') }}');" data-{{ $block['id'] }}>

  <div class="testimonial-title-section">
    <h2 class="testimonial-title mb-2 animation__slide-up--scroll">{{ get_field('testimonial_title') }}</h2>
    <p class="testimonial-subtitle dinn-light animation__slide-up--scroll">{{ get_field('section_sub_title')}}</p>
  </div>

  <div class="testimonial-slider">
    <?php while ( have_rows('testimonials') ) : the_row(); ?>
    <div class="testimonial-single">
      <div class="slide-inner">
        <p class="testimonial-copy mb-4 dinn-light animation__slide-up--scroll">{{ the_sub_field('testimonial_quote')}}</p>
        <span class="testimonial-author uppercase animation__slide-up--scroll">{{ the_sub_field('testimonial_author')}}</span>
      </div>
    </div>
    <?php endwhile; ?>
  </div>

</section>