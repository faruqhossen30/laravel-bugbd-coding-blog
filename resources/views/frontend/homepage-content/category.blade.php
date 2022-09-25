        <!-- START CATEGORY -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <h3 class="title">Browser Jobs Industry </h3>
                            <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the
                                right freelancers.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    @foreach ($jobindustries as $jobindustry )
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="uim uim-layers-alt"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">{{$jobindustry->name}}</h5>
                                </a>
                                <p class="text-muted mb-0">2024 Jobs</p>
                            </div>
                        </div><!--end popu-jobindustry-box-->
                    </div>
                    @endforeach


                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-5 text-center">
                            <a href="{{route('jobindustry')}}" class="btn btn-primary btn-hover">Browse All Job Industry <i class="uil uil-arrow-right ms-1"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END Jobindustry -->
