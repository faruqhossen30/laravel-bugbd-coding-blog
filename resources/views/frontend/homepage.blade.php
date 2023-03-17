@php
    $keyword = null;
    if (isset($_GET['keyword'])) {
        $keyword = trim($_GET['keyword']);
    }

    $cat = null;
    if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
    }

@endphp

@extends('frontend.layouts.app')

@section('title', 'Blog Page')
@section('main-contant')
    <div class="main-content">
        <div class="page-content">
            <!-- START SHAPE -->
            <div class="position-relative" style="z-index: 1">
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                        <path fill="#FFFFFF" fill-opacity="1"
                            d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                        </path>
                    </svg>
                </div>
            </div>
            <!-- END SHAPE -->
            <!-- START JOB-LIST -->
            <section class="section">
                <div class="container">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="me-lg-5">
                                    <div class="job-list-header">

                                        <div class="row g-2">
                                            <div class="col-lg-9 col-md-6">
                                                <div class="filler-job-form">
                                                    <i class="uil uil-search"></i>
                                                    <input type="search" name="keyword"
                                                    @if($keyword) value="{{$keyword}}" @endif
                                                        class="form-control filter-job-input-box"
                                                        id="exampleFormControlInput1" placeholder="Search your keyword">
                                                </div>
                                            </div>
                                            <!--end col-->


                                            <div class="col-lg-3 col-md-6">
                                                <button type="submit" class="btn btn-primary w-100"><i
                                                        class="uil uil-search"></i> Search</button>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->

                                    </div>
                                    <!--end job-list-header-->
                                    <div>
                                        @foreach ($posts as $post)
                                            <div class="job-box bookmark-post card mt-5">
                                                <div class="p-4">
                                                    <div class="row">
                                                        <div class="col-lg-1">
                                                            <a href="company-details.html"><img
                                                                    src="{{ asset('frontend/assets/images/profile.jpg') }}"
                                                                    alt="" class="img-fluid rounded-3"
                                                                    style="max-width: 50px"></a>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-10">
                                                            <div class="mt-3 mt-lg-0">
                                                                <h5 class="fs-17 mb-1"><a href="#"
                                                                        class="text-dark">{{ $post->title }}</a></h5>
                                                                <p class="text-muted fs-14 mb-0">
                                                                    {{ Str::limit($post->description, 150) }}</p>
                                                                <div class="mt-2">
                                                                    <span class="badge bg-soft-success mt-1">Ms Word</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                    <div class="favorite-icon">
                                                        <a href="javascript:void(0)"><i
                                                                class="uil uil-heart-alt fs-18"></i></a>
                                                    </div>
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-8">
                                                            <div>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item"><i class="uil uil-tag"></i>
                                                                        Category :Android</li>
                                                                    {{-- @foreach ($circular->jobindustries as $jobindustry)
                                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                                        class="primary-link text-muted">{{ $jobindustry->jobindustry->name }}</a>,
                                                                </li>
                                                            @endforeach --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="text-md-end">
                                                                <a href="#applyNow" data-bs-toggle="modal"
                                                                    class="primary-link">Read More<i
                                                                        class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                    <!-- End Job-list -->
                                    <div class="row">
                                        <div class="col-lg-12 mt-4 pt-2">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination job-pagination mb-0 justify-content-center">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                                            <i class="mdi mdi-chevron-double-left fs-15"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="javascript:void(0)">1</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0)">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0)">3</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript:void(0)">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript:void(0)">
                                                            <i class="mdi mdi-chevron-double-right fs-15"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!--end col-->
                                    </div><!-- end row -->
                                </div>
                            </div>
                            <!--end col-->
                            <!-- START SIDE-BAR -->
                            <div class="col-lg-3">
                                <div class="side-bar mt-5 mt-lg-0">
                                    <div class="accordion" id="accordionExample">


                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="experienceOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#experience" aria-expanded="true"
                                                    aria-controls="experience">
                                                    Category
                                                </button>
                                            </h2>
                                            <div id="experience" class="accordion-collapse collapse show"
                                                aria-labelledby="experienceOne">
                                                <div class="accordion-body">
                                                    <div class="side-title">
                                                        @foreach ($categories as $category)
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="cat[]" value="{{ $category->id }}"
                                                                    id="{{ $category->id }}" onchange="this.form.submit()"
                                                                    @if ($cat && in_array($category->id, $cat)) checked @endif />
                                                                <label class="form-check-label ms-2 text-muted"
                                                                    for="{{ $category->id }}">{{ $category->name }}</label>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end accordion-item -->
                                    </div>
                                    <!--end accordion-->

                                </div>
                                <!--end side-bar-->
                            </div>
                            <!--end col-->
                            <!-- END SIDE-BAR -->
                        </div>
                    </form>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!-- END JOB-LIST -->
        </div>
        <!-- End Page-content -->
    </div>
@endsection
