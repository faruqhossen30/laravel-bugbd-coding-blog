                <!-- START JOBINDUSTRY -->
                <section class="section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <p class="badge bg-warning fs-14 mb-2">Jobs Live Today</p>
                                    <h4>Browse Job By Categories</h4>
                                    <p class="text-muted">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        <div class="row">
                            @foreach ($jobindustries as $industry)

                            <div class="col-lg-4">
                                <div class="card job-Categories-box bg-light border-0">
                                    <div class="card-body py-2">
                                        <ul class="list-unstyled job-Categories-list mb-0">
                                            <li>
                                                <a href="job-list.html" class="primary-link">{{$industry->name}} <span class="badge bg-soft-info float-end">25</span></a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div><!--end col-->
                            @endforeach
                            {{-- <div class="col-lg-4">
                                <div class="card job-Categories-box bg-light border-0">
                                    <div class="card-body p-4">
                                        <ul class="list-unstyled job-Categories-list mb-0">
                                            <li>
                                                <a href="job-list.html" class="primary-link">Government Jobs <span class="badge bg-soft-info float-end">120</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Defence Jobs <span class="badge bg-soft-info float-end">73</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Teaching Jobs <span class="badge bg-soft-info float-end">88</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Retail & Customer Services <span class="badge bg-soft-info float-end">10</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Diploma Jobs <span class="badge bg-soft-info float-end">55</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Health Care Jobs <span class="badge bg-soft-info float-end">99</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Manufacturing & production <span class="badge bg-soft-info float-end">27</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Performing arts & media <span class="badge bg-soft-info float-end">11</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <div class="card job-Categories-box bg-light border-0">
                                    <div class="card-body p-4">
                                        <ul class="list-unstyled job-Categories-list mb-0">
                                            <li>
                                                <a href="job-list.html" class="primary-link">It / Software Jobs <span class="badge bg-soft-info float-end">175</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Logistics / Transportation <span class="badge bg-soft-info float-end">60</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Sports Jobs <span class="badge bg-soft-info float-end">42</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Forest Worker <span class="badge bg-soft-info float-end">30</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Animal Care Worker <span class="badge bg-soft-info float-end">120</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Digital Marketing  <span class="badge bg-soft-info float-end">88</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Administrative Officer <span class="badge bg-soft-info float-end">04</span></a>
                                            </li>
                                            <li>
                                                <a href="job-list.html" class="primary-link">Garage services <span class="badge bg-soft-info float-end">75</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--end col--> --}}
                        </div><!--end row-->
                    </div><!--end container-->
                </section>
                <!-- END JOBINDUSTRY -->
