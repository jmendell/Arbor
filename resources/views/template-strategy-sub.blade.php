{{--
  Template Name: Strategy Sub Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('static.content-strategy-sub')
  @endwhile
@endsection
