@extends('layouts.app')

@section('content')
  
    @include('partials.page-header')
    <div class="responsive-spacer"></div>
    <section class="faq-container">
      <div class="faq-title-container flex items-center">
        <h2 class="faq-title swift-book text-4xl md:text-6xl text-arbor-navy">FAQs</h2>
      </div>
    
      <div class="faq-question-container-main">
      <?php
      $args = array(
          'taxonomy' => 'category',
          'hide_empty' => true,
      );
    
      $categories = get_terms( $args );
    
      foreach ( $categories as $category ):
        $args = array(
            'post_type'      => 'faq',
            'posts_per_page' => -1,
            'cat' => $category->term_id,
        );
    
        $faqs = new WP_Query( $args );
    
        if ( $faqs->have_posts() ) : ?>
          <div class="faq-questions--wealth faq-questions">
            <div class="question-title-container">
              <h2 class="question-title" id="{{ strtolower(str_replace(' ', '',$category->name)) }}">{{ $category->name }}</h2>
            </div>
            
            <div class="questions-container">
              <?php while ( $faqs->have_posts() ) : $faqs->the_post(); ?>
              <div class="single-question-container">
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

@endsection
