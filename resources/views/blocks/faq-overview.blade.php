{{--
  Title: FAQs Overview
  Description: Overview for FAQs section

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

<section class="faq-container">
  <div class="faq-title-container flex items-center animation__slide-up--scroll">
    <h2 class="faq-title uppercase swift-book text-4xl md:text-6xl text-arbor-navy">faq</h2>
    <a href="/faqs" class="all-faq-link text-arbor-aqua">View All FAQs</a>
  </div>

  <div class="faq-question-container-main">
  <?php

  $categories = get_field('faq_category');

  usort($categories, function($a, $b)
  {
    return strcmp($a->term_order, $b->term_order);
  });

  foreach ( $categories as $category ):
    $args = array(
        'post_type'      => 'faq',
        'posts_per_page' => 4,
        'cat' => $category->term_id,
    );

    $faqs = new WP_Query( $args );

    if ( $faqs->have_posts() ) : ?>
      <div class="faq-questions--wealth faq-questions">
        <div class="question-title-container animation__slide-up--scroll">
          <h2 class="question-title">{{ $category->name }}</h2>
          <a href="/faqs#{{ strtolower(str_replace(' ', '',$category->name)) }}" class="view-more-link">View More</a>
        </div>

        <div class="questions-container">
          <?php while ( $faqs->have_posts() ) : $faqs->the_post(); ?>
          <div class="single-question-container animate__fade-in">
            <div class="single-faq-question-container">
              <p class="faq-question"><?php the_title(); ?></p>
              <div class="arrow-container">
                <div class="faq-arrow"></div>
              </div>
            </div>

            <div class="faq-answer">
              <div class="answer-copy"><?php the_content(); ?></div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; wp_reset_postdata();
  endforeach; ?>
  </div>
</section>