<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <div class="body-container max-w-max my-0 mx-auto overflow-hidden">
      @php do_action('get_header') @endphp
      @include('partials.header')
      <div class="wrap arbor-container" role="document">
        <div class="content">
          <main class="main">
            @yield('content')
          </main>
          @if (App\display_sidebar())
            <aside class="sidebar">
              @include('partials.sidebar')
            </aside>
          @endif
        </div>
      </div>
      @php do_action('get_footer') @endphp
      @include('partials.footer')
      @include('partials.mobile-menu')
      @php wp_footer() @endphp
    </div>
  </body>
</html>
