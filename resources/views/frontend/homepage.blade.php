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
                        d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                </svg>
            </div>
        </div>
        <!-- END SHAPE -->


        <!-- START BLOG-GRID -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-7">
                        <div class="blog-post">
                            <div class="row">
                                @foreach ($posts as $post)
                                <div class="col-lg-4 mb-4">
                                    <div class="card blog-grid-box p-2">
                                        <img src="{{asset('frontend/')}}/assets/images/blog/img-04.jpg" alt="" class="img-fluid">
                                        <div class="card-body">
                                            <ul class="list-inline d-flex justify-content-between mb-3">
                                                <li class="list-inline-item">
                                                    <p class="text-muted mb-0"><a href="{{ route('singlepost',$post->id) }}" class="text-muted fw-medium">Alice Mellor</a> - Aug 08, 2021</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <p class="text-muted mb-0"><i class="mdi mdi-eye"></i> 432</p>
                                                </li>
                                            </ul>
                                            <a href="{{ route('singlepost',$post->id) }}" class="primary-link"><h6 class="fs-17">{{$post->title}}</h6></a>
                                            <p class="text-muted">{{ Str::limit($post->description, 160) }}</p>
                                            <div>
                                                <a href="{{ route('singlepost',$post->id) }}" class="form-text text-primary">Read More <i class="uil uil-angle-right-b"></i></a>
                                            </div>
                                        </div>
                                    </div><!--end blog-grid-box-->
                                </div><!--end col-->
                                @endforeach
                            </div><!--end row-->

                            {{ $posts->links() }}

                        </div><!--end blog-post-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- END BLOG-GRID -->

    </div>
    <!-- End Page-content -->
</div>
<!-- end main content-->
@endsection
