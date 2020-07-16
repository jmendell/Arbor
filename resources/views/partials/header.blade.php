<header class="arbor-header relative">

    <div class="arbor-nav flex items-center">
      <div class="logo-container">
        <a href="/" class="logo-link">
          <img src="@asset('images/icons/logo-full.svg')" alt="arbor logo full" class="logo-full">
        </a>
      </div>

      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'container' => 'ul',
          'menu_class' => 'main-nav-items text-base uppercase hidden lg:flex dinn-med',
          'add_li_class' => '']) !!}
      @endif



      <nav class="secondary-nav nav-action-buttons hidden lg:flex items-center dinn-med">
        @if (has_nav_menu('secondary_navigation'))
          {!! strip_tags(wp_nav_menu([
            'theme_location' => 'secondary_navigation',
            'container'       => false,
            'echo'            => false,
            'items_wrap'      => '%3$s']), '<a>') !!}
        @endif

        <div class="login-link-container">
          @if (has_nav_menu('login_links'))
            {!! wp_nav_menu([
              'theme_location' => 'login_links',
              'menu_class' => 'login-links',
              'add_li_class' => 'single-link']) !!}
          @endif
        </div>
      </nav>

      <div class="mobile-menu-icon-container">
        <a href="#" id="mobile_menu_click" class="mobile-menu-icon">
          @svg('mobile-menu-icon', 'mobile-menu-icon block lg:hidden')
        </a>
      </div>

    </div>

  </header>
