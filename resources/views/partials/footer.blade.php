<footer class="arbor-footer w-11/12 my-0 mx-auto">

  <div class="footer-top py-60 flex md:items-center flex-col md:flex-row">

    <div class="logo-menu__container flex flex-col items-center md:flex-row md:mr-125 mb-8 md:mb-0">
      <a href="/" class="home-link">
        @svg('logo-no-text', 'footer-logo md:mr-6 mb-8 md:mb-0')
      </a>
      <nav class="footer-nav w-full">
				@if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'footer-nav flex flex-row md:flex-col w-full dinn-light',
            'add_li_class' => 'footer-nav__item']) !!}
	      @endif
			</nav>
    </div>

    <div class="footer-location__container text-center md:text-left">
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>

  </div>

  <div class="footer-bottom mb-4">

    <ul class="social-container flex items-center justify-center md:justify-start mb-4">
      @php while ( have_rows('social_accounts', 'option') ) : the_row(); @endphp
      @php $account_icon = get_sub_field('account_icon')["url"]; @endphp

        <li class="social-icon__container">
          <a href="{{ the_sub_field('account_link')}}" target="_blank" class="social-link block h-full w-full">
            <img src="{{ $account_icon }}" alt="Follow Us" class="social-icon--footer" />
          </a>
        </li>

      @php endwhile; @endphp
    </ul>

    <div class="copyright-container w-3/4 md:w-full">
      <p class="copyright text-arbor-med_gray text-sm dinn-light">{!! get_field('copyright_text', 'option') !!}</p>
    </div>

  </div>

</footer>
<?= get_field('footer_scripts', 'option'); ?>