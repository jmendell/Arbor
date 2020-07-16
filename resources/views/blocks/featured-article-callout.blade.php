{{--
  Title: Featured Article Callout
  Description: Callout displaying featured article

  Category: common
  Icon: admin-comments
  Keywords: callout
  Mode: edit
  Align: full
  PostTypes: page
  SupportsAlign: left
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
  $resource = get_field('article');
  setup_postdata($GLOBALS['post'] =& $resource);
  $image = get_the_post_thumbnail_url($resource->ID);
@endphp

<section class="featured-content flex flex-col md:flex-row relative bg-arbor-orange md:mb-60">
  <div class="image-container relative md:hidden">
  </div>
  <img src="{{ $image }}" alt="{{ the_title() }}" class="featured-article-image animation__slide-in-from-right">
  <div class="color-large content-container bg-arbor-light_gray md:w-3/4">
    <div class="content-inner py-16 px-6 md:px-0 md:pl-175 md:py-50 lg:py-150 text-arbor-navy md:w-2/3">
      <span class="featured-resource uppercase text-base dinn-med animation__slide-up--scroll">featured resource</span>
      <h2 class="featured-title text-3xl my-4 animation__slide-up--scroll">{{ the_title() }}</h2>
      <div class="animation-grouping animation__slide-up--scroll">
        <div class="featured-copy text-base mb-8">{{ the_excerpt() }}</div>
        <a href="{{ the_permalink() }}" class="button--pill btn-hover--navy button--aqua">read more</a>
      </div>
    </div>
  </div>
</section>