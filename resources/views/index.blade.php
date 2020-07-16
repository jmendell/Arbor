@extends('layouts.app')

@section('content')
  @include('partials.page-header')
    <div class="p-10 md:flex content-between">
      <section class="flex-1 md:pr-16">
        <h1 class="text-2xl md:text-5xl mb-10">Articles</h1>

        @if (!have_posts())
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif
        <div class="related-articles--full-width bg-whte">
          @while (have_posts()) @php the_post() @endphp
            @include('partials.content-'.get_post_type())
          @endwhile
        </div>

        {!! get_the_posts_navigation() !!}
      </section>
      <aside class="md:w-1/4 md:mt-12">
        <div id="sidebar">
          @php dynamic_sidebar('sidebar-primary') @endphp
        </div>
      </aside>
    </div>

@endsection
