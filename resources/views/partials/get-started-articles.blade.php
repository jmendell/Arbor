<?php 
$categories = get_field('related_content', 'option');

if($categories): ?>
<input type="hidden" id="get-started-category">
<section class="gs resources__featured-articles">
  <div class="related-articles-container animate__fade-in--delayed">
    <header class="related-articles-title-container">
      <h2 class="related-container-title"><?= get_field('related_content_text', 'option'); ?></h2>
    </header>

    <div class="related-articles-inner">
  
    <?php foreach($categories as $c): 
      $slug = strtolower(str_replace([' ','&'],['-','and'],$c['category']));
    ?>


      <div id="<?= $slug ?>" class="related-articles">
        <?php foreach($c['content'] as $article): ?>
          <div class="single-article__related">
            <h3 class="related-title text-1xl"><a href="<?= the_permalink($article->ID); ?>" title="<?= $article->post_title ?>"><?= $article->post_title ?></a></h3>
          </div> 

        <?php endforeach; ?>
      </div>  <!-- .related-articles -->

    <?php endforeach; ?>
    </div> <!-- .related-articles-inner -->
  </div> <!-- .related-articles-container -->
</section> <!-- .gs -->

<?php endif; ?>