<article class="single-post single-article">

  <div class="article-inner">
    <a href="/articles" class="view-all-articles block mb-6">View All Articles</a>
    <div class="article-title-container">
      <h2 class="article-title">@php echo the_title(); @endphp</h2>
      <div class="article-meta">
        <span class="article-date">@php echo the_date(); @endphp</span>
        @php
          $categories = wp_get_post_categories( $post->ID );
          $categories_html = '';

        foreach ($categories as $c) :
          $cat = get_category( $c );
          $cat_id = get_cat_ID( $cat->name );
          $cat_html = '<a href="'.get_category_link($cat_id).'" class="article-category">'.$cat->name.'</a> ';

          $categories_html .= $cat_html;
        endforeach; @endphp

        {!! $categories_html !!}
      </div>
    </div>

    <div class="article-content">
      @php echo the_content(); @endphp
    </div>

  </div>
  <?php
    $related = new WP_Query(
      array(
          'category__in'   => wp_get_post_categories( $post->ID ),
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'post__not_in'   => array( $post->ID )
      )
   );

    if( $related->have_posts() ): ?>

  <div class="related-articles-container">
    <span class="related-container-title">related articles</span>
    <div class="related-articles-inner">
      <?php
        while( $related->have_posts() ):
          $related->the_post(); ?>
            <div class="single-article__related">
              <h3 class="related-title text-2xl">{{ the_title() }}</h3>
              <div class="related-excerpt">{{ the_excerpt() }}</div>
              <a href="{{ the_permalink() }}" class="button--pill button--aqua">Read More</a>
            </div>
      <?php endwhile; ?>
    </div>
  </div>

  {{-- Mailchimp subscribe form for all single articles --}}
  <section class="mailchimp-subscribe-block container-horizontal">

    <div class="mailchimp__title-container">
      <h2 class="title">Subscribe to our financial insights</h2>
    </div>

    <div class="mailchimp__subscribe-form">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
      <div id="mc_embed_signup">
        <form action="https://arborfirm.us15.list-manage.com/subscribe/post?u=ae754ee5d8a26301c3da52e0a&amp;id=c28e66f0e5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
          <div id="mc_embed_signup_scroll" class="form-inner">

            <div class="input-and-response-container">
              <div class="mc-field-group email-field">
                <input type="email" placeholder="Enter your email address" value="" name="EMAIL" class="required email mailchimp-email-field" id="mce-EMAIL">
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_ae754ee5d8a26301c3da52e0a_c28e66f0e5" tabindex="-1" value="">
            </div>
            <div class="clear submit-button">
              <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn-hover--aqua">
            </div>
          </div>
        </form>
      </div>
      <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='PHONEYUI_';ftypes[4]='phone';fnames[7]='TEXTYUI_3';ftypes[7]='text';fnames[3]='MMERGE3';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      <!--End mc_embed_signup-->
    </div>

  </section>

  <?php
      wp_reset_postdata();
    endif;
?>


</article>
