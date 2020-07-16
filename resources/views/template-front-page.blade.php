{{--
  Template Name: Front Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')
  @include('static.content-front-page')
  @include('partials.mobile-menu')
  @endwhile
@endsection
