{{--
  Title: Helpful Topics
  Description: Get all sub pages.

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

<section class="helpful-topics">
<h1 class="helpful-topics-title">{{ get_field('helpful_topics_section_title') }}</h1>

  <div class="topics-container">

    <?php
      while ( have_rows('helpful_topics_list') ) : the_row();

      $title = get_sub_field('topic_title');
      $excerpt = get_sub_field('topic_excerpt');
      $linkOrDownload = get_sub_field('link_or_download');
      $download = get_sub_field('topic_download');
      $link = get_sub_field('topic_link');

    ?>

    <div class="single-topic-container">
      <h2 class="topic-title"><?= $title; ?></h2>
      <div class="topic-copy"><?= $excerpt; ?></div>
      @if ($linkOrDownload == 'download')
        <a download href="<?= $download; ?>" class="topic-link">Download</a>
      @endif
      @if ($linkOrDownload == 'link')
        <a href="<?= $link['url'] ?>" class="topic-link"><?= $link['title'] ?></a>
      @endif

    </div>

    <?php endwhile; ?>

  </div>
</section>