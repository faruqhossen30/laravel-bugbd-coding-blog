
    @section('OG')
    <!-- Facebook & Linkedit Open Graph -->
    <meta property="og:url" content="{{ route('singlejob', $circular->id) }}" />
    <meta property="og:type" content="news" />
    <meta property="og:title" content="{{ $circular->title }}" />
    <meta property="og:description" content="{{ strip_tags($circular->content) }}" />
    {{-- <meta property="og:image" content="{{ asset('storage/images/' . $circular->thumbnail) }}" /> --}}
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@dailyrunnernews" />
    <meta property="og:title" content="{{ $circular->title }}" />
    <meta property="og:description" content="{{ strip_tags($circular->content) }} " />
    {{-- <meta property="og:image" content="{{ asset('storage/images/' . $circular->thumbnail) }}" /> --}}
@endsection

     <!-- START JOB-DEATILS -->
      <section class="section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8">
                      <div class="card job-detail overflow-hidden">
                          <div>
                              <img src="{{ $circular->thumbnail }}" alt="" class="img-fluid w-100">
                              <div class="job-details-compnay-profile">
                                  <img src="{{ asset('frontend') }}/assets/images/featured-job/img-10.png" alt=""
                                      class="img-fluid rounded-3 rounded-3">
                              </div>
                          </div>
                          <div class="card-body p-4">
                              <div>
                                  <div class="row">
                                      <div class="col-md-8">
                                          <h5 class="mb-1">{{ $circular->title }}</h5>
                                          <ul class="list-inline text-muted mb-0">
                                              <li class="list-inline-item">
                                                  <i class="mdi mdi-account"></i>{{ $circular->vacancy }} Vacancy
                                              </li>
                                              <li class="list-inline-item text-warning review-rating">
                                                  <span class="badge bg-warning">4.8</span> <i
                                                      class="mdi mdi-star align-middle"></i><i
                                                      class="mdi mdi-star align-middle"></i><i
                                                      class="mdi mdi-star align-middle"></i><i
                                                      class="mdi mdi-star align-middle"></i><i
                                                      class="mdi mdi-star-half-full align-middle"></i>
                                              </li>
                                          </ul>
                                      </div>
                                      <!--end col-->
                                      <div class="col-lg-4">
                                          <ul class="list-inline mb-0 text-lg-end mt-3 mt-lg-0">
                                              <li class="list-inline-item">
                                                  <div class="favorite-icon">
                                                      <a href="javascript:void(0)"><i class="uil uil-heart-alt"></i></a>
                                                  </div>
                                              </li>
                                              <li class="list-inline-item">
                                                  <div class="favorite-icon">
                                                      <a href="javascript:void(0)"><i class="uil uil-setting"></i></a>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
                                      <!--end col-->
                                  </div>
                                  <!--end row-->
                              </div>

                              <div class="mt-4">
                                  <div class="row g-2">
                                      <div class="col-lg-3">
                                          <div class="border rounded-start p-3">
                                              <p class="text-muted mb-0 fs-13">Experience</p>
                                              {{-- <p class="fw-medium fs-15 mb-0">{{$circular->career_label}}</p> --}}

                                              @foreach ($careerlavels as $careerlavel)
                                                  <p class="fw-medium fs-15 mb-0">{{ $careerlavel->name }}</p>
                                              @endforeach
                                          </div>
                                      </div>
                                      <div class="col-lg-3">
                                          <div class="border p-3">
                                              <p class="text-muted fs-13 mb-0">Employee type</p>
                                              {{-- <p class="fw-medium mb-0">{{$circular->job_type}}</p> --}}
                                              @foreach ($jobtypes as $jobtype)
                                                  <p class="fw-medium mb-0">{{ $jobtype->name }}</p>
                                                  {{-- <p class="fw-medium fs-15 mb-0">{{$careerlavel->name}}</p> --}}
                                              @endforeach
                                          </div>
                                      </div>
                                      <div class="col-lg-3">
                                          <div class="border p-3">
                                              <p class="text-muted fs-13 mb-0">Position</p>
                                              <p class="fw-medium mb-0">Senior</p>
                                          </div>
                                      </div>
                                      <div class="col-lg-3">
                                          <div class="border rounded-end p-3">
                                              <p class="text-muted fs-13 mb-0">Offer Salary</p>
                                              <p class="fw-medium mb-0">$2150/ Month</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!--end Experience-->

                              <div class="mt-4">
                                  <h5 class="mb-3">Job Description</h5>
                                  <div class="job-detail-desc">
                                      <p class="text-muted mb-0">{!! $circular->description !!}</p>
                                  </div>
                              </div>

                              <div class="mt-4">
                                  <h5 class="mb-3">Responsibilities</h5>
                                  <div class="job-detail-desc mt-2">
                                      <p class="text-muted">As a Product Designer, you will work within a Product
                                          Delivery Team fused with UX, engineering, product and data talent.</p>
                                      <ul class="job-detail-list list-unstyled mb-0 text-muted">
                                          <li><i class="uil uil-circle"></i> Have sound knowledge of commercial
                                              activities.</li>
                                          <li><i class="uil uil-circle"></i> Build next-generation web applications with
                                              a focus on the client side</li>
                                          <li><i class="uil uil-circle"></i> Work on multiple projects at once, and
                                              consistently meet draft deadlines</li>
                                          <li><i class="uil uil-circle"></i> have already graduated or are currently in
                                              any year of study</li>
                                          <li><i class="uil uil-circle"></i> Revise the work of previous designers to
                                              create a unified aesthetic for our brand materials</li>
                                      </ul>
                                  </div>
                              </div>


                              <div class="mt-4">
                                  <div class="job-details-desc">
                                      <div class="mt-4">
                                          @foreach ($skills as $skill)
                                              <span class="badge bg-primary">{{ $skill->name }}</span>
                                          @endforeach
                                      </div>
                                  </div>
                              </div>

                              <div class="mt-4 pt-3">
                                  <ul class="list-inline mb-0">
                                      <li class="list-inline-item mt-1">
                                          Share this job:
                                      </li>
                                      <li class="list-inline-item mt-1">
                                          <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('singlejob', $circular->id) }}" target="_blank" class="btn btn-primary btn-sm btn-hover"><i
                                                  class="uil uil-facebook-f"></i> Facebook</a>
                                      </li>
                                      <li class="list-inline-item mt-1">
                                          <a href="//pinterest.com/pin/create/link/?url={{ route('singlejob', $circular->id) }}" target="_blank" class="btn btn-danger btn-sm btn-hover"><i
                                                  class="uil uil-google"></i>Pinterest</a>
                                      </li>
                                      <li class="list-inline-item mt-1">
                                          <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('singlejob', $circular->id) }}" target="_blank" class="btn btn-success btn-sm btn-hover"><i
                                                  class="uil uil-linkedin-alt"></i> linkedin</a>
                                      </li>
                                      <li class="list-inline-item mt-1">
                                          <a href="https://twitter.com/intent/tweet?url={{ route('singlejob', $circular->id) }}" target="_blank" class="btn btn-danger btn-sm btn-hover"><i
                                                  class="uil uil-linkedin-alt"></i> Twitter</a>
                                      </li>
                                      <li class="list-inline-item mt-1">
                                          <a href="whatsapp://send?text={{ route('singlejob', $circular->id) }}" target="_blank" class="btn btn-primary btn-sm btn-hover"><i
                                                  class="uil uil-linkedin-alt"></i> What,s app</a>
                                      </li>

                                      {{-- <div class="share-button">
                                        <samp style="font-size: 25px"><i class="fa-solid fa-share-nodes"></i> Share!</samp>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('singlejob', $circular->id) }}"
                                            target="_blank"><i
                                            class="uil uil-facebook-f"></i></a>
                                        <a href="https://twitter.com/intent/tweet?url={{ route('singlejob', $circular->id) }}"
                                            target="_blank"><i class="fab fa-twitter">twitter</i></a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('singlejob', $circular->id) }}"
                                            target="_blank"><i class="fab fa-linkedin-in">linkedin</i></a>
                                            <a href="whatsapp://send?text={{ route('singlejob', $circular->id) }}" target="_blank"><i
                                                class="fa-brands fa-whatsapp">whatsapp</i></a>
                                        <a href="//pinterest.com/pin/create/link/?url={{ route('singlejob', $circular->id) }}"
                                            target="_blank"><i class="fa-brands fa-pinterest">pinterest</i></a>
                                    </div> --}}

                                  </ul>
                              </div>
                          </div>
                          <!--end card-body-->
                      </div>
                      <!--end job-detail-->

                      <div class="mt-4">
                          <h5>Related Jobs</h5>
                          <div class="job-box card mt-4">
                              <div class="p-4">
                                  <div class="row">
                                      <div class="col-lg-1">
                                          <img src="{{ asset('frontend') }}/assets/images/featured-job/img-01.png"
                                              alt="" class="img-fluid rounded-3">
                                      </div>
                                      <!--end col-->
                                      <div class="col-lg-10">
                                          <div class="mt-3 mt-lg-0">
                                              <h5 class="fs-17 mb-1"><a href="job-details.html" class="text-dark">HTML
                                                      Developer</a> <small class="text-muted fw-normal">(0-2 Yrs
                                                      Exp.)</small></h5>
                                              <ul class="list-inline mb-0">
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0">Jobcy Technology Pvt.Ltd</p>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0"><i
                                                              class="mdi mdi-map-marker"></i> California</p>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>
                                                          $250 - $800 / month</p>
                                                  </li>
                                              </ul>
                                              <div class="mt-2">
                                                  <span class="badge bg-soft-success mt-1">Full Time</span>
                                                  <span class="badge bg-soft-warning mt-1">Urgent</span>
                                                  <span class="badge bg-soft-info mt-1">Private</span>
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
                                                  <li class="list-inline-item"><i class="uil uil-tag"></i> Keywords :
                                                  </li>
                                                  <li class="list-inline-item"><a href="javascript:void(0)"
                                                          class="primary-link text-muted">Ui designer</a>,</li>
                                                  <li class="list-inline-item"><a href="javascript:void(0)"
                                                          class="primary-link text-muted">developer</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <!--end col-->
                                      <div class="col-md-3">
                                          <div class="text-md-end">
                                              <a href="javascript:void(0)" class="primary-link">Apply Now <i
                                                      class="mdi mdi-chevron-double-right"></i></a>
                                          </div>
                                      </div>
                                      <!--end col-->
                                  </div>
                                  <!--end row-->
                              </div>
                          </div>
                          <!--end job-box-->

                          <div class="job-box bookmark-post card mt-4">
                              <div class="p-4">
                                  <div class="row">
                                      <div class="col-lg-1">
                                          <img src="{{ asset('frontend') }}/assets/images/featured-job/img-02.png"
                                              alt="" class="img-fluid rounded-3">
                                      </div>
                                      <!--end col-->
                                      <div class="col-lg-10">
                                          <div class="mt-3 mt-lg-0">
                                              <h5 class="fs-17 mb-1"><a href="job-details.html"
                                                      class="text-dark">Marketing Director</a> <small
                                                      class="text-muted fw-normal">(2-4 Yrs Exp.)</small></h5>
                                              <ul class="list-inline mb-0">
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0">Creative Agency</p>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0"><i
                                                              class="mdi mdi-map-marker"></i> New York</p>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>
                                                          $250 - $800 / month</p>
                                                  </li>
                                              </ul>
                                              <div class="mt-2">
                                                  <span class="badge bg-soft-danger mt-1">Part Time</span>
                                                  <span class="badge bg-soft-info mt-1">Private</span>
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
                                                  <li class="list-inline-item"><i class="uil uil-tag"></i> Keywords :
                                                  </li>
                                                  <li class="list-inline-item"><a href="javascript:void(0)"
                                                          class="primary-link text-muted">Marketing</a>,</li>
                                                  <li class="list-inline-item"><a href="javascript:void(0)"
                                                          class="primary-link text-muted">business</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <!--end col-->
                                      <div class="col-md-3">
                                          <div class="text-md-end">
                                              <a href="javascript:void(0)" class="primary-link">Apply Now <i
                                                      class="mdi mdi-chevron-double-right"></i></a>
                                          </div>
                                      </div>
                                      <!--end col-->
                                  </div>
                                  <!--end row-->
                              </div>
                          </div>
                          <!--end job-box-->

                          <div class="job-box card mt-4">
                              <div class="p-4">
                                  <div class="row">
                                      <div class="col-lg-1">
                                          <img src="{{ asset('frontend') }}/assets/images/featured-job/img-03.png"
                                              alt="" class="img-fluid rounded-3">
                                      </div>
                                      <!--end col-->
                                      <div class="col-lg-10">
                                          <div class="mt-3 mt-lg-0">
                                              <h5 class="fs-17 mb-1"><a href="job-details.html"
                                                      class="text-dark">HTML Developer</a> <small
                                                      class="text-muted fw-normal">(2-4 Yrs Exp.)</small></h5>
                                              <ul class="list-inline mb-0">
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0">Jobcy Technology Pvt.Ltd</p>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0"><i
                                                              class="mdi mdi-map-marker"></i> California</p>
                                                  </li>
                                                  <li class="list-inline-item">
                                                      <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i>
                                                          $250 - $800 / month</p>
                                                  </li>
                                              </ul>
                                              <div class="mt-2">
                                                  <span class="badge bg-soft-purple mt-1">Freelance</span>
                                                  <span class="badge bg-soft-blue mt-1">Internship</span>
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
                                                  <li class="list-inline-item"><i class="uil uil-tag"></i> Keywords :
                                                  </li>
                                                  <li class="list-inline-item"><a href="javascript:void(0)"
                                                          class="primary-link text-muted">Ui designer</a>,</li>
                                                  <li class="list-inline-item"><a href="javascript:void(0)"
                                                          class="primary-link text-muted">developer</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <!--end col-->
                                      <div class="col-md-3">
                                          <div class="text-md-end">
                                              <a href="javascript:void(0)" class="primary-link">Apply Now <i
                                                      class="mdi mdi-chevron-double-right"></i></a>
                                          </div>
                                      </div>
                                      <!--end col-->
                                  </div>
                                  <!--end row-->
                              </div>
                          </div>
                          <!--end job-box-->

                      </div>

                      <div class="text-center mt-4">
                          <a href="job-list.html" class="primary-link form-text">View More <i
                                  class="mdi mdi-arrow-right"></i></a>
                      </div>

                  </div>
                  <!--end col-->

                  <div class="col-lg-4 mt-4 mt-lg-0">
                      <!--start side-bar-->
                      <div class="side-bar ms-lg-4">
                          <div class="card job-overview">
                              <div class="card-body p-4">
                                  <h6 class="fs-17">Job Overview</h6>
                                  <ul class="list-unstyled mt-4 mb-0">
                                      <li>
                                          <div class="d-flex mt-4">
                                              <i class="uil uil-user icon bg-soft-primary"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Job Title</h6>
                                                  <p class="text-muted mb-0">{{ $circular->title }}</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex mt-4">
                                              <i class="uil uil-star-half-alt icon bg-soft-primary"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Experience</h6>

                                                  @foreach ($careerlavels as $careerlavel)
                                                      <p class="text-muted mb-0">{{ $careerlavel->name }}</p>
                                                  @endforeach
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex mt-4">
                                              <i class="uil uil-location-point icon bg-soft-primary"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Location</h6>
                                                  <p class="text-muted mb-0"> New york</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex mt-4">
                                              <i class="uil uil-usd-circle icon bg-soft-primary"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Offered Salary</h6>
                                                  <p class="text-muted mb-0">$35k - $45k</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex mt-4">
                                              <i class="uil uil-graduation-cap icon bg-soft-primary"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Qualification</h6>

                                                  @foreach ($educations as $education)
                                                      <p class="text-muted mb-0">
                                                          {{$education->name}}

                                                  @endforeach
                                                  </p>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex mt-4">
                                              <i class="uil uil-building icon bg-soft-primary"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Industry</h6>
                                                  <p class="text-muted mb-0">Private</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="d-flex mt-4">
                                              <i class="uil uil-history icon bg-soft-primary"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Date Posted</h6>
                                                  <p class="text-muted mb-0">{{ $circular->created_at }}</p>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                  <div class="mt-3">
                                      <a href="#applyNow" data-bs-toggle="modal"
                                          class="btn btn-primary btn-hover w-100 mt-2">Apply Now <i
                                              class="uil uil-arrow-right"></i></a>
                                      <a href="bookmark-jobs.html"
                                          class="btn btn-soft-warning btn-hover w-100 mt-2"><i
                                              class="uil uil-bookmark"></i> Add Bookmark</a>
                                  </div>
                              </div>
                              <!--end card-body-->
                          </div>
                          <!--end job-overview-->

                          <div class="card company-profile mt-4">
                              <div class="card-body p-4">
                                  <div class="text-center">
                                      <img src="{{ asset('frontend') }}/assets/images/featured-job/img-02.png"
                                          alt="" class="img-fluid rounded-3">

                                      <div class="mt-4">
                                          <h6 class="fs-17 mb-1">{{ $circular->organization_name }}</h6>
                                          <p class="text-muted">Since July 2017</p>
                                      </div>
                                  </div>
                                  <ul class="list-unstyled mt-4">
                                      <li>
                                          <div class="d-flex">
                                              <i class="uil uil-phone-volume text-primary fs-4"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Phone</h6>
                                                  <p class="text-muted fs-14 mb-0">+589 560 56555</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="mt-3">
                                          <div class="d-flex">
                                              <i class="uil uil-envelope text-primary fs-4"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Email</h6>
                                                  <p class="text-muted fs-14 mb-0">pixltechnology@info.com</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="mt-3">
                                          <div class="d-flex">
                                              <i class="uil uil-globe text-primary fs-4"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Website</h6>
                                                  <p class="text-muted fs-14 text-break mb-0">
                                                      {{ $circular->organization_website }}</p>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="mt-3">
                                          <div class="d-flex">
                                              <i class="uil uil-map-marker text-primary fs-4"></i>
                                              <div class="ms-3">
                                                  <h6 class="fs-14 mb-2">Location</h6>
                                                  <p class="text-muted fs-14 mb-0">Oakridge Lane Richardson.</p>
                                              </div>
                                          </div>
                                      </li>
                                  </ul>
                                  <div class="mt-4">
                                      <a href="company-details.html"
                                          class="btn btn-primary btn-hover w-100 rounded"><i class="mdi mdi-eye"></i>
                                          View Profile</a>
                                  </div>
                              </div>
                          </div>

                          <div class="mt-4">
                              <h6 class="fs-16 mb-3">Job location</h6>
                              <iframe
                                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin"
                                  style="width:100%" height="250" allowfullscreen="" loading="lazy"></iframe>
                          </div>
                      </div>
                      <!--end side-bar-->
                  </div>
                  <!--end col-->
              </div>
              <!--end row-->
          </div>
          <!--end container-->
      </section>
      <!-- End JOB-DEATILS -->
