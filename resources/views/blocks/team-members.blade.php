{{--
  Title: Team Members
  Description: Display of team members.

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

<section class="team-member-info-container">
  <?php while ( have_rows('team_members') ) : the_row(); ?>
  <div class="member-single">
    <div class="member-info-container md:w-2/3">
      <h2 class="member-name mb-2 text-3xl text-arbor-aqua swift-book animation__slide-up--scroll">{{ the_sub_field('name')}}</h2>
      <p class="member-title mb-2 uppercase text-lg text-arbor-navy dinn-med animation__slide-up--scroll">{{ the_sub_field('title')}}</p>
      <div class="animation-grouping animation__slide-up--scroll">
        <a href="{{ the_sub_field('linkedin')}}" class="linkedin-icon mb-3 inline-block">
          @svg('linkedin-sq', 'social-icon--member')
        </a>
        <p class="member-copy text-base dinn-light">{{ the_sub_field('bio')}}</p>
      </div>
    </div>
    <div class="member-image-container md:w-1/3 animate__fade-in--delayed">
      <img src="{{ the_sub_field('image')}}" alt="{{ the_sub_field('name')}}" class="guy-round guy-round-1">
    </div>
  </div>
  <?php endwhile; ?>
</section>