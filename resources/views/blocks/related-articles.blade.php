{{--
  Title: Recent articles
  Description: A recent article block.

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

<section class="resources__featured-articles">
  <div class="related-articles-container animate__fade-in--delayed">

    <div class="related-articles-title-container">
      <span class="related-container-title">latest articles</span>
      <a href="/articles" class="more-articles-link text-hover--aqua">View More Articles</a>
    </div>

    <div class="related-articles-inner">
      <?php
      $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 3
      );

      $posts = new WP_Query( $args );

      if ( $posts->have_posts() ) :
        while ( $posts->have_posts() ) : $posts->the_post(); ?>
          <div class="single-article__related">
            <h3 class="related-title text-1xl"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <div class="related-excerpt"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="button--pill btn-hover--navy button--aqua">Read More</a>
          </div>
        <?php endwhile;
      endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>