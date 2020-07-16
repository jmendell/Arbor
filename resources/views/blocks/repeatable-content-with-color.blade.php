{{--
  Title: Content Repeater w/ Colored Line
  Description: Repeatable content with orange line to the left of content.
  Category: common
  Icon: admin-comments
  Keywords: callout
  Mode: edit
  Align: center
  PostTypes: page
  SupportsAlign: center
  SupportsMode: false
  SupportsMultiple: true
--}}


<div class="repeatable-content-blocks">
  <h3 class="content-title text-1xl text-arbor-navy dinn-med">{{ get_field('block_section_title') }}</h3>

  <ul class="content-list dinn-light">
      <?php
        while ( have_rows('content_blocks') ) : the_row();

        $content_copy = get_sub_field('block_copy');

      ?>

      <li class="list-item">
        <p class="content"><?= $content_copy; ?></p>
      </li>

      <?php endwhile; ?>
  </ul>

</div>


