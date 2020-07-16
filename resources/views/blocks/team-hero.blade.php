{{--
  Title: Hero - Team
  Description: Hero for the team page.

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

<section class="team-hero bg-arbor-light_gray pt-60 px-5 md:px-0">
  <h1 class="team-hero-title text-arbor-navy text-4xl md:text-6xl text-center swift-book animation__slide-up">The Arbor Team</h1>
  <img src="{{ get_field('hero_image') }}" alt="The Arbor Team" class="hero__team-members relative animation__slide-up--delayed">
</section>

<div class="strategy-block relative w-11/12 md:w-3/4 bg-arbor-navy my-0 mx-auto py-8 md:py-75 text-center animation__slide-up--strategy-block">
  <h3 class="block-title uppercase text-lg text-arbor-aqua dinn-med tracking-wider">{{ get_field('hero_title') }}</h3>
  <div class="colored-line bg-arbor-orange my-8"></div>
  <p class="block-copy w-4/5 md:w-1/2 my-0 mx-auto text-white text-base dinn-light">{{ get_field('hero_text') }}</p>
</div>