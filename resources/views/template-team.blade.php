{{--
  Template Name: Team
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('blocks.resource-hero')
    @include('blocks.team-text-graphic')
    @include('blocks.team-experience')
    @include('blocks.testimonials')
    @include('blocks.team-members')
    @include('blocks.callout-logo')
    @include('static.content-get-started-block')
  @endwhile
@endsection
