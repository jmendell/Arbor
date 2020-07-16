{{--
  Template Name: Blank
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    {{ the_content() }}
  @endwhile
@endsection
