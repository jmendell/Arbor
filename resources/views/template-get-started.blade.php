{{--
  Template Name: Get Started
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
    @include('partials.get-started-header')
    @include('partials.content-page')
    @include('partials.mobile-menu')
    @include('partials.get-started-articles')

  @endwhile
@endsection
