{{--
  Title: Key Numbers
  Description: Callout for key numbers.

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

<section class="resources-text-graphic-container">
  <div class="inner-container">
    <div class="content-container">
      <h2 class="content-title animation__slide-up--scroll">{{ get_field('kn_title') }}</h2>
      <div class="animation-grouping animation__slide-up--scroll">
        <p class="content-copy">{{ get_field('kn_text') }}</p>
        <a href="{{ get_field('kn_download') }}" class="button--pill button--aqua self-start btn-hover--white">Download</a>
      </div>
    </div>
    <div class="image-container animate__fade-in--delayed">
      <img src="@asset('images/pen-paper.png')" alt="pen and paper" class="section-image xs:hidden md:block">
      <img src="@asset('images/pen-paper-mobile.png')" alt="pen and paper" class="section-image-mobile md:hidden">
    </div>
  </div>
</section>