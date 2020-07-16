<article class="single-post single-article">
  <div class="article-inner">
    <div class="article-title-container">
      <h2 class="article-title">{{ the_title() }}</h2>
    </div>

    <div class="article-content">
      @php the_content() @endphp
    </div>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </div>
</article>