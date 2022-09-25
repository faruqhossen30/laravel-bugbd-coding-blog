        <!-- START HOME -->
        <section class="bg-home2" id="home" style="padding-top: 50px">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="mb-4 pb-3 me-lg-5">
                            <h6 class="sub-title">We have 150,000+ live jobs</h6>
                            <h1 class="display-5 fw-semibold mb-3">Find your dream jobs with <span class="text-primary fw-bold">Jobcy</span></h1>
                            <p class="lead text-muted mb-0 d-none d-lg-block">Find jobs, create trackable resumes and enrich your applications.Carefully crafted after analyzing the needs of different industries.</p>
                        </div>
                        <form action="{{route('search')}}" method="GET">
                            <div class="registration-form">
                                <div class="row g-0">
                                    <div class="col-md-9">
                                        <div class="filter-search-form filter-border mt-3 mt-md-0">
                                            <i class="uil uil-briefcase-alt"></i>
                                            <input type="search" name="keyword" id="job-title" class="form-control filter-input-box" placeholder="Job Title">
                                        </div>
                                    </div><!--end col-->
                                    {{-- <div class="col-md-4">
                                        <div class="filter-search-form mt-3 mt-md-0">
                                            <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                                <option value="">Select</option>
                                                @foreach ($jobindustries as $jobindustry)
                                                <option value="{{$jobindustry->name}}">{{$jobindustry->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!--end col--> --}}
                                    <div class="col-md-3">
                                        <div class="mt-3 mt-md-0 h-100">
                                            <button class="btn btn-primary submit-btn w-100 h-100" type="submit"><i class="uil uil-search me-1"></i> Find Job</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </form>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="mt-5 mt-md-0">
                            <img src="{{asset('frontend/assets/images/process-02.png')}}" alt="" class="home-img" />
                        </div>
                    </div><!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- End Home -->

            <!-- START SHAPE -->
            <div class="position-relative">
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
                        <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                            <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                        </g>
                        <defs>
                            <mask id="SvgjsMask1004">
                                <rect width="1440" height="250" fill="#ffffff"></rect>
                            </mask>
                        </defs>
                    </svg>
                </div>
            </div>
            <!-- END SHAPE -->
