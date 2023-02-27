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


            <!-- START BLOG-GRID -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-7">
                            <div class="blog-post">
                                <div class="row">
                                    <div class="col">
                                        <div class="py-3">
                                            <form action="" method="get">
                                                <div
                                                    class="input-group bg-white px-2 rounded border border-1 border-secondary">
                                                    <input type="text" name="domain"
                                                        class="form-control form-control-md border border-0"
                                                        placeholder="Search" aria-label="Recipient's username"
                                                        aria-describedby="button-addon2" style="outline: none">
                                                    <button class="btn btn-white" type="submir" id="button-addon2">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Category</th>
                                                <th scope="col">Tropic</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <th scope="row">
                                                        <a href="#">Android</a>
                                                    </th>
                                                    <td>
                                                        <a href="#">
                                                            <h4>{{ $post->title }}</h4>
                                                        </a>
                                                        {{-- <p>{{$post->description}}</p> --}}
                                                        <p>{{ Str::words($post->title, 20, '...') }}</p>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!--end row-->
                                {{ $posts->links() }}


                            </div>
                            <!--end blog-post-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!-- END BLOG-GRID -->

        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
@endsection
