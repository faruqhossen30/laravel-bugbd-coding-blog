@extends('frontend.layouts.app')

@section('title', 'Job Industry')
@section('main-contant')
{{-- @include('frontend.jobindustry-content.banner') --}}
@include('frontend.jobindustry-content.industrylist')
@include('frontend.jobindustry-content.cta')


@endsection



