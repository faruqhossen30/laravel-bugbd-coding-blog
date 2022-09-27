@extends('userend.layout.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Company</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    {{-- <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data"
        class="forms-sample">
        @csrf
        @method('put') --}}

            {{-- start --}}
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab"
                aria-controls="home" aria-selected="true">Basic</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab"
                aria-controls="profile" aria-selected="false">Additional </a>
        </li>

    </ul>
      <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data"
        class="forms-sample">
        @csrf
        @method('put')
        <div class="tab-content border border-top-0 p-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    {{-- basic part --}}
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-md-3">
                                        {{-- <img src="{{ asset('storage/companylogo/' . $company->logo) }}" alt=""> --}}
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title">Company Logo</h6>
                                                <p class="text-muted mb-3">Drag and Drop your logo.</p>
                                                <input type="file" id="myDropify" name="logo"   data-default-file="{{ asset('uploads/company/'. $company->logo) }}"
                                                 >

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="forName" class="form-label fw-bold">Company Name</label>
                                            <input type="text" name="name" class="form-control" id="forName"
                                                autocomplete="off" placeholder=" Name" value="{{$company->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="forName" class="form-label fw-bold">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                autocomplete="off" value="{{$company->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="forName" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" id="address"
                                                autocomplete="off" value="{{$company->address}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="forName" class="form-label">Mobile</label>
                                            <input type="text" name="mobile" class="form-control" id="mobile"
                                                autocomplete="off" value="{{$company->mobile}}">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 grid-margin stretch-card">
                                            <div class="card-body p-0">
                                                <h6 class="card-title">Description</h6>

                                                <textarea class="form-control" name="description" id="tinymceExample" rows="10">{{$company->description}}</textarea>

                                            </div>
                                        </div>
                                    </div>


                                </div>







                            </div>
                        </div>
                    </div>
                    {{-- basic part end --}}
                </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                {{-- additional part start --}}
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="my-4">Acount Information</h3>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Facebook</span>
                                        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="facebook" aria-label="facebook" aria-describedby="basic-addon1" value="{{$company->facebook}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Twitter</span>
                                        <input type="text" class="form-control" name="twitter" id="twitter" placeholder="twitter" aria-label="twitter" aria-describedby="basic-addon1"value="{{$company->twitter}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Youtube</span>
                                        <input type="text" class="form-control" name="youtube" id="youtube" placeholder="youtube" aria-label="youtube" aria-describedby="basic-addon1"value="{{$company->youtube}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Instagram</span>
                                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="instagram" aria-label="instagram" aria-describedby="basic-addon1"value="{{$company->instagram}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Linkedin</span>
                                        <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="linkedin" aria-label="linkedin" aria-describedby="basic-addon1"value="{{$company->linkedin}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Ceo Name</span>
                                        <input type="text" class="form-control" name="ceo_name" id="ceo_name" placeholder="ceo_name" aria-label="ceo_name" aria-describedby="basic-addon1"value="{{$company->ceo_name}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Ownership Type</span>
                                        <input type="number" class="form-control" name="ownership_type" id="ownership_type" placeholder="ownership_type" aria-label="ownership_type" aria-describedby="basic-addon1"value="{{$company->ownership_type}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Division Id</span>
                                        <input type="number" class="form-control" name="division_id" id="division_id" placeholder="division_id" aria-label="division_id" aria-describedby="basic-addon1"value="{{$company->division_id}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">District Id</span>
                                        <input type="number" class="form-control" name="district_id" id="district_id" placeholder="district_id" aria-label="district_id" aria-describedby="basic-addon1"value="{{$company->district_id}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Establish</span>
                                        <input type="date" class="form-control" name="establish" id="establish" placeholder="establish" aria-label="establish" aria-describedby="basic-addon1"value="{{$company->establish}}">
                                      </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Total Office</span>
                                        <input type="number" class="form-control" name="total_office" id="total_office" placeholder="total_office" aria-label="total_office" aria-describedby="basic-addon1"value="{{$company->total_office}}">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Employ Range</span>
                                        <input type="number" class="form-control" name="employ_range" id="employ_range" placeholder="employ_range" aria-label="employ_range" aria-describedby="basic-addon1"value="{{$company->employ_range}}">
                                      </div>
                                </div>
                                {{-- {{$company->industry}} --}}

                                <div class="col-md-6">
                                    <label for="google_map">Job industry</label>
                                    <select name="job_industry[]"
                                    class="js-example-basic-multiple form-select" multiple="multiple"
                                    data-width="100%">

                                    @foreach ($jobindustries as $jobindustry)
                                        <option value="{{ $jobindustry->id }}"
                                            @if (!empty($company->industry) && in_array($jobindustry->id, json_decode($company->industry)) ) selected @endif>
                                            {{ $jobindustry->name }}</option>
                                    @endforeach

                                </select>
                                </div>



                                <div class="col-md-12">
                                    <label for="google_map">Google Map</label>
                                        <textarea class="form-control" name="google_map" id="google_map" rows="10">
                                            {{$company->google_map}}
                                        </textarea>
                                    </div>
                               </div>

                        </div>
                    </div>
                </div>
                {{-- additional part end --}}

            </div>
            <button type="submit" class="btn btn-primary me-2">Update</button>
        <button class="btn btn-secondary">Cancel</button>
        </div>

    </form>
    {{-- end --}}


@endsection

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />
@endpush

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplemde/simplemde.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/ace-builds/ace.js') }}"></script>
    <script src="{{ asset('assets/plugins/ace-builds/theme-chaos.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/typeahead-js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/tinymce.js') }}"></script>
    <script src="{{ asset('assets/js/simplemde.js') }}"></script>
    <script src="{{ asset('assets/js/ace.js') }}"></script>
    <script src="{{ asset('assets/js/form-validation.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
    <script src="{{ asset('assets/js/inputmask.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/tags-input.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/timepicker.js') }}"></script>
@endpush
