<div class="strategy-sub-inner">
  <div class="main-content-container">
    <h1 class="sub-title text-3xl swift-book">@php echo the_title(); @endphp</h1>
    <div class="sub-content">@php echo the_content(); @endphp</div>
    
    <?php
          $related_content = get_field("related_content");
          if (!empty($related_content)): ?>
    <div class="related-articles--full-width">
      <span class="related-container-title">related articles</span>
      <div class="related-articles-inner">
        
          <?php foreach ($related_content as $post): ?>
          
            <div class="single-article__related">
              <h3 class="related-title text-2xl">{!! $post->post_title !!}</h3>
              <div class="related-excerpt">{!! $post->post_excerpt !!}</div>
              <a href="{{ the_permalink($post->ID) }}" class="button--pill button--aqua">Read More</a>
            </div>
          <?php
          endforeach;
        ?>
      </div>
    </div>

  <?php endif; ?>


  </div>


</div>

<div class="more-strategy-container bg-arbor-navy py-60">
  <h2 class="more-title text-3xl text-white text-center mb-30 md:mb-60">More Arbor Strategy</h2>
  <ul class="more-items text-white flex justify-center my-0 mx-auto dinn-med">
      <?php
      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => 11,
          'order'          => 'ASC',
          'orderby'        => 'menu_order',
          'post__not_in'   => [$post->ID, 0]
      );
  
      $parent = new WP_Query( $args );
      if ( $parent->have_posts() ) :
        while ( $parent->have_posts() ) : $parent->the_post(); ?>
      <li class="more-item-single">
        <a href="{{ the_permalink() }}" class="more-item-link">{{ the_title() }}</a>
      </li>
      <?php endwhile; endif; wp_reset_postdata(); ?>
  </ul>
</div>