@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())

  <div class="content-container text-arbor-navy bg-arbor-aqua flex flex-col items-center text-center pt-12 md:pt-100 px-4">
    <h1 class="page-title text-6xl swift-book mb-6">Page Not Found</h1>
    <p class="page-copy dinn-light text-base md:w-2/5 my-0 mx-auto mb-12">Looks like we missed a note. Let's take it from the <a href="/" class="home-link">top.</a></p>
    <img src="@asset('images/404-image.png')" alt="404 page image" class="page-image w-3/4 md:w-1/5">
  </div>

  @endif
@endsection
