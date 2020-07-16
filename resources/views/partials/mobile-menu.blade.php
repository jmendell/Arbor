<div class="mobile-menu hidden">

  <div class="mobile-menu-header">
    <div class="logo-container">
      <a href="/" class="logo-link">
        <img src="@asset('images/icons/logo-full.svg')" alt="arbor logo full" class="logo-full">
      </a>
    </div>
    <a href="#" class="close" id="close_button" aria-label="Close Mobile Menu">&times</a>
  </div>

  <div class="mobile-inner">

    <nav class="menu-items flex flex-col items-center">
      <a href="/" class="menu-item-single">home</a>
      @if (has_nav_menu('secondary_navigation'))
        {!! strip_tags(wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'container'       => false,
          'echo'            => false,
          'items_wrap'      => '%3$s']), '<a>') !!}
      @endif
    </nav>

    {{-- <div class="nav-action-buttons flex flex-col items-center">
      @if (has_nav_menu('secondary_navigation'))
        {!! strip_tags(wp_nav_menu([
          'theme_location' => 'secondary_navigation',
          'container'       => false,
          'echo'            => false,
          'items_wrap'      => '%3$s']), '<a>') !!}
      @endif
    </div> --}}

    <div class="nav-action-buttons flex flex-col items-center">
      <a href="/get-started" class="button--pill button--aqua header-button">get started</a>
      <a href="#" class="login-button login-button--mobile text-arbor-aqua uppercase dinn-med tracking-wider">login</a>
    </div>

    <div class="login-links--mobile">
        @if (has_nav_menu('login_links'))
          {!! wp_nav_menu([
            'theme_location' => 'login_links',
            'menu_class' => 'login-links',
            'add_li_class' => 'single-link']) !!}
        @endif
      </div>

    <ul class="social-container flex items-center justify-center lg:justify-start mb-4">
      @php while ( have_rows('social_accounts', 'option') ) : the_row(); @endphp
      @php $account_icon = get_sub_field('account_icon')["url"]; @endphp

        <li class="social-icon__container">
          <a href="{{ the_sub_field('account_link')}}" target="_blank" class="social-link block h-full w-full">
            <img src="{{ $account_icon }}" alt="Follow Us" class="social-icon--footer" />
          </a>
        </li>

      @php endwhile; @endphp
    </ul>

  </div>

</div>