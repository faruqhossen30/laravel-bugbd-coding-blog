@extends('frontend.layouts.app')

@section('title', 'Circular')
@section('main-contant')
{{-- @include('frontend.circularpage-content.banner') --}}
<form action="" method="get">
    @include('frontend.circularpage-content.joblist')
    @include('frontend.circularpage-content.applaymodel')
</form>
@endsection
