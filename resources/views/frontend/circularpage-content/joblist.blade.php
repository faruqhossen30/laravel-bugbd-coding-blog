@php
$keyword = null;
if (isset($_GET['keyword'])) {
$keyword = trim($_GET['keyword']);
}

$querycarierlabes = null;
if (isset($_GET['careerlabel'])) {
$querycarierlabes = $_GET['careerlabel'];
}

$queryjobtypes = null;
        if (isset($_GET['queryjobtypes'])) {
            $queryjobtypes = $_GET['queryjobtypes'];
        }
@endphp
{{-- <button class="btn btn-primary  position-fixed mt-5  " style="z-index: 5;"> Filter</button> --}}
@include('frontend.inc.filter-offcanvas')
<!-- START JOB-LIST -->
<section class="section mt-5">
    <div class="container">

        <div class="row">

            <div class="col-lg-9">
                <div class="me-lg-5">
                    <div class="job-list-header">
                        <form action="#">
                            <div class="row g-2">
                                <div class="col-lg-9 col-md-6">
                                    <div class="filler-job-form">
                                        <i class="uil uil-briefcase-alt"></i>
                                        <input type="search" @if($keyword) value="{{$keyword}}" @endif name="keyword" class="form-control filter-job-input-box" id="exampleFormControlInput1" placeholder="Job title ... ">
                                    </div>
                                </div>
                                <!--end col-->


                                <div class="col-lg-3 col-md-6">
                                    <button type="submit" class="btn btn-primary w-100"><i class="uil uil-search"></i> Search</button>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <!--end job-list-header-->
                    @include('frontend.inc.circular.popular')

                    <!-- Job-list -->
                    @foreach ($circulars as $circular)
                    <div class="job-box bookmark-post card mt-5">
                        <div class="p-4">
                            <div class="row">
                                <div class="col-lg-1">
                                    <a href="company-details.html"><img src="{{asset('uploads/category/'.$circular->category->thumbnail)}}" alt="" class="img-fluid rounded-3" style="max-width: 50px"></a>
                                </div>
                                <!--end col-->
                                <div class="col-lg-10">
                                    <div class="mt-3 mt-lg-0">
                                        <h5 class="fs-17 mb-1"><a href="{{ route('singlejob',$circular->id) }}" class="text-dark">{{$circular->title}}</a></h5>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                @if($circular->organization_name)
                                                <p class="text-muted fs-14 mb-0">{{$circular->organization_name}}</p>
                                                @elseif($circular->company_id)
                                                <p class="text-muted fs-14 mb-0">{{$circular->company->name}}</p>
                                                @endif
                                            </li>
                                            {{-- <li class="list-inline-item">
                                                        <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i> California</p>
                                                    </li> --}}
                                            <li class="list-inline-item">
                                                <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> ৳{{$circular->min_salary}} - ৳{{$circular->max_salary}} / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-2">
                                            @foreach ($circular->skills as $skill)
                                            <span class="badge bg-soft-success mt-1">{{$skill->skill->name}}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="favorite-icon">
                                <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>
                            </div>
                        </div>
                        <div class="p-3 bg-light">
                            <div class="row justify-content-between">
                                <div class="col-md-8">
                                    <div>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><i class="uil uil-tag"></i> Job Industry :</li>
                                            @foreach ($circular->jobindustries as $jobindustry)
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="primary-link text-muted">{{$jobindustry->jobindustry->name}}</a>,</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-3">
                                    <div class="text-md-end">
                                        <a href="#applyNow" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end job-box-->

                    @endforeach

                    <!-- End Job-list -->
                    <div class="py-2">
                        {{$circulars->onEachSide(0)->appends($_GET)->links()}}
                    </div>

                </div>

            </div>
            <!-- START SIDE-BAR -->


            <!--end accordion-->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="side-bar mt-5 mt-lg-0">
                    @include('frontend.inc.circular.sidebar')

                </div><!-- end accordion-item -->

            </div>


        </div>
        <!--end side-bar-->
    </div>
    <!-- END SIDE-BAR -->
    </div>
    </div>
</section>
<!-- END JOB-LIST -->
