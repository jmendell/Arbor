{{--
  Title: Team Experience
  Description: Callout for team experience.

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

<section class="experience-list-container bg-arbor-aqua flex flex-col md:flex-row">
  <div class="section-copy-container md:w-1/2 mx-6 md:mx-0 py-60 pb-100 md:pt-75 md:p-60 md:pl-120">
    <h2 class="section-title text-3xl text-white mb-6 swift-book animation__slide-up--scroll">{{ get_field('experience_title') }}</h2>
    <p class="section-copy text-arbor-navy dinn-light animation__slide-up--scroll">{{ get_field('experience_text') }}</p>
  </div>
  <div class="section-list md:w-1/2 relative bg-white md:bg-arbor-aqua animate__fade-in--delayed">
    <ul class="list-inner bg-arbor-navy p-10 pb-60 w-11/12 md:w-full my-0 mx-auto relative md:absolute dinn-light">
      @php while ( have_rows('skills') ) : the_row(); @endphp
        <li class="experience-list-item animation__slide-up--delayed">
          <p class="list-item-copy">{{ the_sub_field('skill') }}</p>
          <div class="colored-line--sm bg-arbor-orange"></div>
        </li>
      @php endwhile; @endphp
    </ul>
  </div>
</section>