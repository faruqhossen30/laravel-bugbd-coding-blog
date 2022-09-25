@extends('frontend.layouts.app')

@section('title', 'Home')
@section('main-contant')
@include('frontend.homepage-content.banner')
@include('frontend.homepage-content.category')
@include('frontend.homepage-content.new-randomjob')
@include('frontend.homepage-content.process')
@include('frontend.homepage-content.cta')
@include('frontend.homepage-content.testimonal')
@include('frontend.homepage-content.blog')
{{-- @include('frontend.homepage-content.clint') --}}
@include('frontend.homepage-content.modal')
@endsection
