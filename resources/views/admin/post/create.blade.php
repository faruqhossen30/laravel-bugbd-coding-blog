@extends('user.layout.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">post</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">post Form</h6>
                        {{-- title  --}}
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off"
                                placeholder=post tile" name="title">
                        </div>
                        {{-- Description start --}}
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card-body p-0">
                                    <h6 class="card-title">Description</h6>
                                    <textarea class="form-control" name="description" id="tinymceExample" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- Thumbnail --}}
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Image</h6>
                                <p class="text-muted mb-3">Drag and Drop your image. </p>
                                <input type="file" id="myDropify" name="post_image">
                            </div>
                        </div>
                        {{-- Category --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Category</div>
                                @foreach ($categories as $category)
                                    <div class="form-check mb-2">
                                        <input name="category_id[]" value="{{ $category->id }}" type="checkbox"
                                            class="form-check-input" id="category{{ $category->id }}">
                                        <label class="form-check-label" for="category{{ $category->id }}">
                                            {{ $category->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-primary me-2">Publish</button>
        <button class="btn btn-secondary">Cancel</button>
    </form>
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
